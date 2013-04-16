<?php

class ProductsController extends AppController {
    var $paginate = array(        
            'Product' => array(
                'limit' => 25,        
                'order' => array(            
                        'Product.added' => 'desc'       
                        )              
            )  
        );
    var $components = array('Email');    
    //var $helpers = array('Cache');
    /*var $cacheAction = array(
        'categorias' => '24 hour', 
        'item' => '7 days',      
        'index' => '24 hours',
    );  */  
    var $sitio;
    
    function beforeFilter() {
		parent::beforeFilter();
       /* App::import('Model', 'Logs');
        $Logs = new Logs();
        $Logs->create();        
        $Logs->save(array('user_agent' => $_SERVER['HTTP_USER_AGENT'], 'ip' => $_SERVER['REMOTE_ADDR'], 'fecha' => date("Y-m-d H:i:s")));*/
        $this->log("USER_AGENT: {$_SERVER['HTTP_USER_AGENT']} - IP: {$_SERVER['REMOTE_ADDR']}\n\n");
        list($subdomain) = explode('.', $_SERVER['SERVER_NAME'], 2);
        $array_equiv = array(
            'MLA' => 'argentina',
            'MLB' => 'brasil',
            'MCO' => 'colombia',
            'MCR' => 'costarica',
            'MEC' => 'ecuador',
            'MLC' => 'chile',
            'MLM' => 'mexico',
            'MLU' => 'uruguay',
            'MLV' => 'venezuela',
            'MPA' => 'panama',
            'MPE' => 'peru',
            'MPT' => 'portugal',
            'MRD' => 'dominicana'
        );
        $this->sitio = "";
        if(in_array($subdomain, array_values($array_equiv))) {
            $this->sitio = $subdomain;
            $this->set('sitio', $this->sitio);
        }        
        App::import('Model', 'Category');
        $Category = new Category(); 
        $this->set('categorias', $Category->findAllBySite($this->sitio));
    }
    
    function resultados_busqueda() {
        $this->set('title_page', 'Resultados de búsqueda');
        $this->set('metakeywords', 'Resultados de búsqueda');
        $this->set('metadescription', 'Resultados de búsqueda');            
    }
    
    function subir_archivo() {
        $targetFolder = '/app/webroot/imagenes_subidas';

        if (!empty($_FILES)) {
        	$tempFile = $_FILES['Filedata']['tmp_name'];
        	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
            $target_filename = uniqid(time()). $_FILES['Filedata']['name'];
        	$targetFile = rtrim($targetPath,'/') . '/' .$target_filename;
    
        	$fileTypes = array('jpg','jpeg');
        	$fileParts = pathinfo($_FILES['Filedata']['name']);
        	
        	if (in_array($fileParts['extension'],$fileTypes)) {
        		move_uploaded_file($tempFile,$targetFile);
        		echo $target_filename;
        	} else {
        		echo 'Invalid file type.';
        	}
        }
        die;   
    }  
    
    function redimImagen($source, $destino, $lw, $lh, $calidad) {
        $datos = getimagesize($source); 
    
        if($datos[2]==1){$img = imagecreatefromgif($source);} 
        if($datos[2]==2){$img = imagecreatefromjpeg($source);} 
        if($datos[2]==3){$img = imagecreatefrompng($source);} 
        $w = $datos[0];
        $h = $datos[1];
    	if($w > $lw) {
    		$percent = ($lw * 100) / $w;
    		$w = $lw;
    		$h = $h * ($percent / 100);
    	}
    	if($h > $lh) {
    		$percent = ($lh * 100) / $h;
    		$h = $lh;
    		$w = $w * ($percent / 100);
    	}
    
        $thumb = imagecreatetruecolor($w,$h); 
        
        imagecopyresampled($thumb, $img, 0, 0, 0, 0, $w, $h, $datos[0], $datos[1]); 
        
        if($datos[2]==1){imagegif($thumb, $destino, $calidad);} 
        if($datos[2]==2){imagejpeg($thumb, $destino, $calidad);} 
        if($datos[2]==3){imagepng($thumb, $destino, $calidad); } 
        //@unlink($source);   
    }      

    function ajax_validar_formulario($return = false) {
        $array_errores = array();
        foreach($_POST as $key => $value) {
            switch($key) {
                case 'titulo':
                    if(strlen($value) < 5 || strlen($value) > 150) {
                        $array_errores[] = array('field' => 'titulo', 'message' => 'El titulo debe contener entre 5 y 150 caracteres');
                    }
                break;
                case 'email':
                    if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $array_errores[] = array('field' => 'email', 'message' => 'Email no valido');
                    }
                break;
                case 'descripcion':
                    if(strlen($value) < 15 || strlen($value) > 1000) {
                        $array_errores[] = array('field' => 'descripcion', 'message' => 'La descripcion debe contener entre 15 y 1000 caracteres', 'value' => $value);
                    }            
                break;
                case 'responseField':
                    App::import('Vendor', 'SomeName', array('file' => 'recaptchalib.php'));
                    $privatekey = "6LdIHNUSAAAAAJAVoOa6qJNtZIHUMky39ZKGSNAT";
                    $resp = recaptcha_check_answer ($privatekey,
                                                $_SERVER["REMOTE_ADDR"],
                                                $_POST["challengeField"],
                                                $_POST["responseField"]); 
                    if (!$resp->is_valid) {
                       $array_errores[] = array('field' => 'recaptcha', 'message' => 'El código ingresado no es válido'); 
                    }
                break;
                case 'provincia':
                case 'ciudad':
                    if(empty($value)) {
                        $array_errores[] = array('field' => $key, 'message' => 'Este dato es requerido');  
                    }
                break;
                case 'categoria':
                    if(intval($value) == 0) {
                        $array_errores[] = array('field' => $key, 'message' => 'El valor elegido no es valido');                    
                    }
                break;
                case 'moneda':
                    if(!in_array($value, array('$', 'EURO', 'USD'))) {
                        $array_errores[] = array('field' => $key, 'message' => 'La moneda elegida no es valida');
                    }
                break;   
            }
        }
        if(count($array_errores) > 0) {
            echo json_encode(array('errores' => $array_errores));               
        } else {

            $datos = array();
            $datos['title'] = $this->cleanQuery($this->data['titulo']);
            $datos['descripcion'] = $this->cleanQuery($this->data['descripcion']);
            $datos['state_name'] = $this->cleanQuery($this->data['provincia']);
            $datos['city_name'] = $this->cleanQuery($this->data['ciudad']);
            $datos['price'] = $this->data['precio'];
            $datos['currency_id'] = (in_array($this->data['moneda'], array('$','USD','EURO'))?$this->data['moneda']:'USD');
            $datos['category_id'] = intval($this->data['categoria']);
            $datos['email'] = $this->data['email'];
            $datos['slug'] = $this->stringToSlug($datos['title']);
            $datos['added'] = date("Y-m-d H:i:s");
            $datos['sitio'] = $this->sitio;
            $datos['codigo_borrar'] = md5($datos['email'].$datos['title'].'walter'.time());
            $datos['creado_por_usuario'] = 1;
            App::import('Model', 'Product');
            $Product = new Product();
            $Product->create();
            $Product->set($datos);
            if($Product->save()) {
                $id_anuncio = $Product->id;
                if(!empty($this->data['imagenes'])) {
                    $imagenes = explode(',', $this->data['imagenes']);
                    if(!empty($imagenes) && is_array($imagenes)) {
                        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/app/webroot/imagenes_subidas/'.$id_anuncio.'/';
                        $carpeta_origen = $_SERVER['DOCUMENT_ROOT'].'/app/webroot/imagenes_subidas/';
                        mkdir($carpeta_destino);
                        $cimg = 0;                      
                        foreach($imagenes as $key => $value) {
                            if($cimg < 5) {
                                $cimg++;
                                $extension = end(explode('.', $value));
                                $this->redimImagen($carpeta_origen.$value, $carpeta_destino.$id_anuncio.'_90x90_'.($key+1).'.'.$extension, 90, 90, 90);
                                $this->redimImagen($carpeta_origen.$value, $carpeta_destino.$id_anuncio.'_300x300_'.($key+1).'.'.$extension, 300, 300, 90);
                                @unlink($carpeta_origen.$value);
                            }
                        }                        
                        $Product->save(array('tiene_imagenes' => $cimg));
                    }                     
                }
                
                $this->Email->to = $datos['email'];
                $this->Email->bcc = array('walterreymundo@gmail.com');  
                $this->Email->subject = 'Tu anuncio ha sido publicado - comprar-online-ahora.com';
                $this->Email->replyTo = 'support@comprar-online-ahora.com';
                $this->Email->from = 'Comprar Online Ahora <info@comprar-online-ahora.com>';
                $this->Email->template = 'simple_message'; // note no '.ctp'
                $this->Email->delivery = 'mail';
                //Send as 'html', 'text' or 'both' (default is 'text')
                $this->Email->sendAs = 'html'; // because we like to send pretty mail
                
                $this->set('datos', $datos);
                $this->set('id_anuncio', $id_anuncio);
                $this->set('site', $this->sitio);
                $this->Email->send();                                       
            }     
            echo json_encode(array('errores' => '', 'msg' => '<h3 style="color:green;font-weight:bold">El anuncio ha sido publicado!</h3>'));               
        }

        die;    
    }
    
    function cleanQuery($string) {
      if(get_magic_quotes_gpc())  // prevents duplicate backslashes
      {
        $string = stripslashes($string);
      }
      $string = preg_replace('/((\on(\w+).*?)\=)/si', '', $string);
      $string = strip_tags($string, '<b>|<i>|<strong>|<italic>|<u>|<underline>|<s>|<stroke>|<li>|<ul>|<ol>|<p>|<span>|<em>');
      $string = addslashes($string);
      
      $string = htmlspecialchars($string);
      
      return $string;
    }    
    
    function publicar() {
        $this->set('title_page', 'Publicar un anuncio en '.$this->sitio);
        $this->set('metakeywords', '');
        $this->set('metadescription', 'Publicar un anuncio en '.$this->sitio);                    
    }
    
    function stringToSlug($str) {
    	// trim the string

    	$str = strtolower(trim($str));
    	// replace all non valid characters and spaces with an underscore
    	$str = preg_replace('/[^a-z0-9áéíóúñàâãäåòôõöøèêëçìîïùûüñÑ-]/', '-', $str);
    	$str = preg_replace('/-+/', "-", $str);
    return $str;
    }  
    
    function eliminar_producto($string = '') {
        App::import('Model', 'Product');
        $Product = new Product();
        $producto = $Product->findByCodigoBorrar($string);  
        if(!empty($producto['Product']['id'])) {
            $Product->delete($producto['Product']['id']);
        }
        $this->set('title_page', '');
        $this->set('metakeywords', '');
        $this->set('metadescription', '');        
    }  

    function categorias($slug) {
        if(!empty($slug)){
            $slug = $this->stringToSlug($slug);
            App::import('Model', 'Category');
            App::import('Model', 'Product');
            $Category = new Category();
            $is_cat = $Category->findBySlugAndSite($slug, $this->sitio);
            $page_txt = '';
            if(preg_match('/page/', $_SERVER['REQUEST_URI'])) {
                $page_txt = 'Página '.$this->request->params['named']['page'];
            }         
            if($is_cat) {
                $this->set('title_page', 'Comprar online en mercadolibre '.$is_cat['Category']['nombre'].' en '.$this->sitio.' - '.$page_txt);
                $this->set('metakeywords', 'mercadolibre,comprar,online,mercadopago,'.$this->getWordsFromText($is_cat['Category']['nombre'], true).$this->sitio);
                $this->set('metadescription', 'Comprar online en mercadolibre productos y articulos en '.$is_cat['Category']['nombre'].'. comprar con mercadopago en '.$this->sitio.'. comprar online en '.$this->sitio.'. comprar '.$is_cat['Category']['nombre'].' en '.$this->sitio.'. comprar '.$is_cat['Category']['nombre'].' online en '.$this->sitio.' - '.$page_txt);            
                $this->set('Category', $is_cat);            
    
                $data = $this->paginate('Product', array('Product.category_id' => $is_cat['Category']['id'], 'Product.sitio' => $this->sitio));           
                $this->set(compact('data'));            
            }             
        } else {
            $page_txt = '';
            $this->set('title_page', 'Comprar online en mercadolibre en '.$this->sitio.' - '.$page_txt);
            $this->set('metakeywords', 'mercadolibre,comprar,online,mercadopago,'.$this->sitio);
            $this->set('metadescription', 'Comprar online en mercadolibre productos y articulos en '.$this->sitio.'. comprar online en '.$this->sitio);                        
            $this->set('noslug', '1');   
        }
     
    }
  
    
    function getWordsFromText($txt, $return_implode = false) {
        
        $txt = preg_replace(array('/\b.{1,3}\b/', '/^[a-zA-Z0-9]$/'), array(' ', ' '), $txt);

        if($return_implode) {
            return implode(',', array_filter(array_unique(explode(' ', $txt))));
        } else {
            return array_filter(array_unique(explode(' ', $txt)));
        }
    }
    
    function item($slug, $id) {
        $slug = $this->stringToSlug($slug);
        App::import('Model', 'Category');
        App::import('Model', 'Product');
        $Product = new Product();
        $is_prod = $Product->findBySlugAndId($slug, intval($id));
        if($is_prod) {
            if(!empty($this->data['contactar'])) {
                
                App::import('Vendor', 'SomeName', array('file' => 'recaptchalib.php'));
                $privatekey = "6LdIHNUSAAAAAJAVoOa6qJNtZIHUMky39ZKGSNAT";
                $resp = recaptcha_check_answer ($privatekey,
                                            $_SERVER["REMOTE_ADDR"],
                                            $_POST["recaptcha_challenge_field"],
                                            $_POST["recaptcha_response_field"]); 
                if (!$resp->is_valid) {
                   $this->set('error', 'El código ingresado no es válido.');
                   $this->set('post', $this->data); 
                } else {
                    if(!filter_var($this->data['email'], FILTER_VALIDATE_EMAIL)) {
                       $this->set('error', 'El email ingresado no es válido.');
                       $this->set('post', $this->data);                         
                    } else {
                        if(empty($this->data['nombre'])) {
                           $this->set('error', 'El nombre ingresado no es válido.');
                           $this->set('post', $this->data);                                   
                        } else {
                            $this->Email->to = $is_prod['Product']['email'];
                            $this->Email->bcc = array('walterreymundo@gmail.com');  
                            $this->Email->subject = 'Te han contactado por un anuncio - comprar-online-ahora.com';
                            $this->Email->replyTo = $this->data['email'];
                            $this->Email->from = ' <info@comprar-online-ahora.com>';
                            $this->Email->template = 'contacto'; // note no '.ctp'
                            $this->Email->delivery = 'mail';
                            //Send as 'html', 'text' or 'both' (default is 'text')
                            $this->Email->sendAs = 'html'; // because we like to send pretty mail
                            
                            $this->set('title', $is_prod['Product']['title']);                    
                            $this->set('post', $this->data);
                            $this->Email->send();   
                            $this->set('hide_form', '1');                          
                        }                       
                    }
                }               
            }
            $this->set('title_page', 'Comprar en mercadolibre '.$is_prod['Product']['title'].' en '.$this->sitio);
            $this->set('metakeywords', 'mercadolibre,comprar,online,mercadopago,'.$this->getWordsFromText($is_prod['Product']['subtitle'].' '.$is_prod['Product']['title'], true).','.$this->sitio);            
            $this->set('metadescription', 'Comprar en mercadolibre '.$is_prod['Product']['title'].' en '.$this->sitio.'. comprar '.$is_prod['Product']['title'].' online en '.$this->sitio.'. comprar online en '.$this->sitio.'. comprar '.$is_prod['Product']['title'].' en '.$this->sitio);
            $this->set('Product', $is_prod);
            $Category = new Category();  
            $cat = $Category->findById($is_prod['Product']['category_id']);
            $this->set('Category', $cat); 
        }     
             
    }
    
    function index() {
        $titulos_paises = array(
            'argentina' => 'Argentina',
            'brasil' => 'Brasil',
            'colombia' => 'Colombia',
            'costarica' => 'Costa Rica',
            'ecuador' => 'Ecuador',
            'chile' => 'Chile',
            'mexico' => 'México',
            'uruguay' => 'Uruguay',
            'venezuela' => 'Venezuela',
            'panama' => 'Panamá',
            'peru' => 'Perú',
            'portugal' => 'Portugal',
            'dominicana' => 'República Dominicana'
        );
        $page_txt = '';
        if(preg_match('/page/', $_SERVER['REQUEST_URI'])) {
            $page_txt = 'Página '.$this->request->params['named']['page'];
        }
        if(!empty($this->sitio)) {
            $this->set('title_page', 'Todos los anuncios agregados'.' en '.$this->sitio.' - '.$page_txt);
            $this->set('metakeywords', 'comprar,online,mercadolibre,'.$this->sitio);
            $this->set('metadescription', 'comprar online en mercadolibre, mercadopago, comprar online en '.$this->sitio.' - '.$page_txt);
            App::import('Model', 'Product');
            $data = $this->paginate('Product', array('Product.sitio' => $this->sitio));
            $this->set('nombre_pais', $titulos_paises[$this->sitio]);           
            $this->set(compact('data'));             
        } else {
            $this->set('title_page', 'Todos los anuncios agregados');
            $this->set('metakeywords', 'comprar,online,mercadolibre');
            $this->set('metadescription', 'comprar online en mercadolibre, mercadopago');            
            $this->render("select_pais");
            $this->set('hide_sidebar', '1');
        }
                
    }
    
}