<?php
//set_time_limit(900);
//ini_set('max_execution_time',900);
ini_set('memory_limit', '512M');

class SitemapController extends AppController {
    var $sitio;
    //var $helpers = array('Cache');
    /*var $cacheAction = array(
        'categorias' => '7 days', 
        'productos' => '24 hours',      
        'index' => '7 days',
        'paginas' => '7 days',
    );*/
        
    function beforeFilter() {
		parent::beforeFilter();
        if(empty($_GET['password']) || $_GET['password'] != 'galarzawalter365') {
            //die;
        }
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
        } 
        $this->set('sitio', $this->sitio);       
    }
    
    function paginas() {
        $this->layout = 'sitemap_default';
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

        $xml = '';        
        $url = 'http://www.comprar-online-ahora.com/';
		$xml.='<url>'."\r\n";
		$xml.='<loc>'.$url.'</loc>'."\r\n";
        $freq = rand(600,800)/1000;
        $xml.='<changefreq>monthly</changefreq>'."\r\n".'<priority>'.$freq.'</priority>'."\r\n";
		$xml.='<lastmod>'.date("c").'</lastmod>'."\r\n";
		$xml.='</url>'."\r\n";           
        foreach($array_equiv as $k => $v) { 
            $urlBase= 'http://'.$v.'.comprar-online-ahora.com/';
            $url = $urlBase;
    		$xml.='<url>'."\r\n";
    		$xml.='<loc>'.$url.'</loc>'."\r\n";
            $freq = rand(600,800)/1000;
            $xml.='<changefreq>monthly</changefreq>'."\r\n".'<priority>'.$freq.'</priority>'."\r\n";
    		$xml.='<lastmod>'.date("c").'</lastmod>'."\r\n";
    		$xml.='</url>'."\r\n";               
        }
        $this->set('contenido', $xml);
        $this->render('index');       
    }
    
    function productos($num = 1) {
        $this->layout = 'sitemap_default';
        $max_records_por_archivo=500;
        $start = ($num - 1) * $max_records_por_archivo + $max_records_por_archivo;
        $limit = $max_records_por_archivo;
        App::import('Model', 'Product');
        $Product = new Product();    	
        if(!empty($this->sitio)) {
            $lists = $Product->find('all', array('limit' => "$start,$limit", 'conditions' => array('sitio' => $this->sitio)));
        } else {
            $lists = $Product->find('all', array('limit' => "$start,$limit"));
        }
    	
        $xml = '';
        foreach($lists as $key => $item) {
            $urlBase= 'http://'.$item['Product']['sitio'].'.comprar-online-ahora.com/';
            $url = $urlBase.'articulos/'.$item['Product']['slug'].'/'.$item['Product']['id'];
			$xml.='<url>'."\r\n";
			$xml.='<loc>'.$url.'</loc>'."\r\n";
            $freq = rand(500,600)/1000;
            $xml.='<changefreq>monthly</changefreq>'."\r\n".'<priority>'.$freq.'</priority>'."\r\n";
			$xml.='<lastmod>'.date("c").'</lastmod>'."\r\n";
			$xml.='</url>'."\r\n";            
        }
        $this->set('contenido', $xml);
        $this->render('index');               
    }
    
    function categorias($num = 1) {
        $this->layout = 'sitemap_default';
        $max_records_por_archivo=500;
        $start = ($num - 1) * $max_records_por_archivo;
        $limit = $max_records_por_archivo;
        App::import('Model', 'Category');
        $Category = new Category();
        if(!empty($this->sitio)) {
            $lists = $Category->find('all', array('limit' => "$start,$limit", 'conditions' => array('site' => $this->sitio)));
        } else {
            $lists = $Category->find('all', array('limit' => "$start,$limit"));
        }            	
        $xml = '';
        foreach($lists as $key => $item) {
            $urlBase= 'http://'.$item['Category']['site'].'.comprar-online-ahora.com/';
            $url = $urlBase.'categorias/'.$item['Category']['slug'];
			$xml.='<url>'."\r\n";
			$xml.='<loc>'.$url.'</loc>'."\r\n";
            $freq = rand(700,900)/1000;
            $xml.='<changefreq>monthly</changefreq>'."\r\n".'<priority>'.$freq.'</priority>'."\r\n";
			$xml.='<lastmod>'.date("c").'</lastmod>'."\r\n";
			$xml.='</url>'."\r\n";            
        }
        $this->set('contenido', $xml);
        $this->render('index');       
    }
    
    function index() {
        $this->layout = 'sitemap_index';
        $stopOn=10000;
        
        $listings_folder="sitemap";
        $categories_folder="sitemap";        
        $urlBase= Router::url('/', true);
        
        $max_records_por_archivo=500;
        
        App::import('Model', 'Category');
        App::import('Model', 'Product');
        $Product = new Product();
        $Category = new Category();
        if(!empty($this->sitio)) {
            $list_count = $Product->find('count', array('conditions' => array('Product.sitio' => $this->sitio)));
            $cat_count = $Category->find('count', array('conditions' => array('Category.site' => $this->sitio)));
        } else {
            $list_count = $Product->find('count');
            $cat_count = $Category->find('count');
        }         
    	$xml='';        
        $pages_categorias = ceil($cat_count/$max_records_por_archivo);  
    	for($i=1;$i<$pages_categorias+1;$i++){
    		
    			$xml.='<sitemap>'."\r\n";
    			$xml.='<loc>'.$urlBase.$categories_folder.'_categorias/'.(int)$i.'.xml</loc>'."\r\n";
    			$xml.='<lastmod>'.date("c").'</lastmod>'."\r\n";
    			$xml.='</sitemap>'."\r\n";	
    	}
        $pages_articulos = ceil($list_count/$max_records_por_archivo);        
    	for($i=1;$i<$pages_articulos+1;$i++){
    		
    			$xml.='<sitemap>'."\r\n";
    			$xml.='<loc>'.$urlBase.$listings_folder.'_articulos/'.(int)$i.'.xml</loc>'."\r\n";
    			$xml.='<lastmod>'.date("c").'</lastmod>'."\r\n";
    			$xml.='</sitemap>'."\r\n";	
    	} 
        
        $this->set('contenido', $xml);                                            
    }
    
    function pingGoogleSitemaps( $url_xml ) {
       $status = 0;
       $google = 'www.google.com';
       if( $fp=@fsockopen($google, 80) )
       {
          $req =  'GET /webmasters/sitemaps/ping?sitemap=' .
                  urlencode( $url_xml ) . " HTTP/1.1\r\n" .
                  "Host: $google\r\n" .
                  "User-Agent: Mozilla/5.0 (compatible; " .
                  PHP_OS . ") PHP/" . PHP_VERSION . "\r\n" .
                  "Connection: Close\r\n\r\n";
          fwrite( $fp, $req );
          while( !feof($fp) )
          {
             if( @preg_match('~^HTTP/\d\.\d (\d+)~i', fgets($fp, 128), $m) )
             {
                $status = intval( $m[1] );
                break;
             }
          }
          fclose( $fp );
       }
       return( $status );
    }   
}