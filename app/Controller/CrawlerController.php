<?php
//set_time_limit(0);

class CrawlerController extends AppController {
    var $helpers = array('Cache');   
    function beforeFilter() {
		parent::beforeFilter();
    }
    
    function normalize($string) {
        $ext = array(192, 193, 194, 195, 196, 197, 224, 225, 226, 227, 228, 229, 199, 231, 200, 201, 202, 203, 232, 233, 234, 235, 204, 205, 206, 207, 236, 237, 238, 239, 210, 211, 212, 213, 214, 216, 242, 243, 244, 245, 246, 248, 209, 241, 217, 218, 219, 220, 249, 250, 251, 252, 221, 255, 253);
    
        $norm = array(65, 65, 65, 65, 65, 65, 97, 97, 97, 97, 97, 97, 67, 99, 69, 69, 69, 69, 101, 101, 101, 101, 73, 73, 73, 73, 105, 105, 105, 105, 79, 79, 79, 79, 79, 79, 111, 111, 111, 111, 111, 111, 78, 110, 85, 85, 85, 85, 117, 117, 117, 117, 89, 121, 121);
    
        $string = db_UTF8::utf8tounicode($string);
        // Using array insersect is slower
        foreach ($ext as $k => $e) {
            if ($pos = array_search($e, $string)) {
                $string[$pos] = $norm[$k];
            }
        }
        $string = db_UTF8::unicodetoutf8($string);
        return $string;
    }       
    
    function stringToSlug($str) {
    	// trim the string
    	$str = strtolower(trim($str));
    	// replace all non valid characters and spaces with an underscore
    	$str = preg_replace('/[^a-z0-9áéíóúñàâãäåòôõöøèêëçìîïùûüñÑ-]/', '-', $str);
    	$str = preg_replace('/-+/', "-", $str);
    return $str;
    }    
    
    function open_https_url($url,$refer = "") { 
        $ch = curl_init();    
        curl_setopt($ch, CURLOPT_URL, $url); 
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); 
        
        curl_setopt($ch, CURLOPT_HEADER, FALSE); 
        
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)"); 
        
        if ($refer != "") { 
        
            curl_setopt($ch, CURLOPT_REFERER, $refer ); 
            
        }     
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
        
       $result =curl_exec ($ch); 
        
       curl_close ($ch); 
        
       return $result; 
    }
    
    
    function update_items($site = 'MLA') {
        App::import('Model', 'Category');
        App::import('Model', 'Product');
        $categorias = $this->open_https_url("https://api.mercadolibre.com/sites/$site/categories");
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
        $categorias_list = json_decode($categorias);
        $new = 0;
        foreach($categorias_list as $key => $item) {
            $Category = new Category(); 
            $is_cat = $Category->findByIdml($item->id);                
            if($is_cat['Category']['id'] > 0) {
                $id_cat = $is_cat['Category']['id'];
            } else {
                $Category = new Category();
                $Category->create();
                $Category->save(array('idml' => $item->id, 'nombre' => $item->name, 'slug' => $this->stringToSlug($item->name), 'site' => $array_equiv[$site]));
                $id_cat = $Category->id;
                $new++;
            }
            $items = $this->open_https_url("https://api.mercadolibre.com/sites/$site/search?category={$item->id}");
            //echo $items;
            $items_lista = json_decode($items);
            foreach($items_lista->results as $k => $v) {
                $Product = new Product();
                $is_prod = $Product->findByIdml($v->id); 
                if(!$is_prod) {
                    $Product->save(array(
                        'idml' => $v->id,
                        'title' => "{$v->title}",
                        'subtitle' => "{$v->subtitle}",
                        'price' => (double)$v->price,
                        'permalink' => "{$v->permalink}",
                        'thumbnail' => "{$v->thumbnail}",
                        'currency_id' => "{$v->currency_id}",
                        'state_name' => "{$v->address->state_name}",
                        'city_name' => "{$v->address->city_name}",
                        'category_id' => $id_cat,
                        'sitio' => $array_equiv[$site],
                        'slug' => $this->stringToSlug($v->title)
                    ));
                    $new++;
                }
            }
        }
        if($new > 0) {
            clearCache();    
        }                
    }
    
    function changeTextProductos() {
        $array_sinomimos = array();
        $array_sinomimos[] = array('amplificar','ampliar');
        $array_sinomimos[] = array('afán','anhelo','ansia','deseo');
        $array_sinomimos[] = array('advertir','prevenir','avisar');
        $array_sinomimos[] = array('aerolito','meteorito');
        $array_sinomimos[] = array('boda','matrimonio');
        $array_sinomimos[] = array('bonito','hermoso');
        $array_sinomimos[] = array('bondadoso','benévolo');
        $array_sinomimos[] = array('boleto','billete');
        $array_sinomimos[] = array('cabello','pelo');
        $array_sinomimos[] = array('cálido','caliente','caluroso');
        $array_sinomimos[] = array('cama','lecho');
        $array_sinomimos[] = array('camino','vía','sendero');
        $array_sinomimos[] = array('causa','motivo');
        $array_sinomimos[] = array('comité','junta','delegación');
        $array_sinomimos[] = array('danza','baile');
        $array_sinomimos[] = array('ebrio','borracho');
        $array_sinomimos[] = array('economizar','ahorrar');
        $array_sinomimos[] = array('edén','paraíso');
        $array_sinomimos[] = array('educar','enseñar');
        $array_sinomimos[] = array('elegir','escoger');
        $array_sinomimos[] = array('embuste','mentira');
        $array_sinomimos[] = array('enfurecer','enojar');
        $array_sinomimos[] = array('escaso','poco');
        $array_sinomimos[] = array('escuchar','oir','atender');
        $array_sinomimos[] = array('estudiante','alumno');
        $array_sinomimos[] = array('expirar','morir','fallecer');
        $array_sinomimos[] = array('fácil','sencillo');
        $array_sinomimos[] = array('famoso','célebre');
        $array_sinomimos[] = array('felicidad','dicha');
        $array_sinomimos[] = array('fiel','leal');
        $array_sinomimos[] = array('flecha','saeta');
        $array_sinomimos[] = array('fotografía','retrato');
        $array_sinomimos[] = array('fragmento','pedazo');
        $array_sinomimos[] = array('fugarse','escaparse');
        $array_sinomimos[] = array('fugitivo','prófugo');
        $array_sinomimos[] = array('fulgor','resplandor');
        $array_sinomimos[] = array('galeno','médico');
        $array_sinomimos[] = array('gafas','anteojos');
        $array_sinomimos[] = array('generoso','dadivoso');
        $array_sinomimos[] = array('gélido','helado');
        $array_sinomimos[] = array('gozo','alegría');
        $array_sinomimos[] = array('gula','glotonería');
        $array_sinomimos[] = array('habitante','morador');
        $array_sinomimos[] = array('hechizar','embrujar');
        $array_sinomimos[] = array('heleno','griego');
        $array_sinomimos[] = array('helar','congelar');
        $array_sinomimos[] = array('hurtar','robar');
        $array_sinomimos[] = array('iluminar','alumbrar');
        $array_sinomimos[] = array('ilustre','instruído');
        $array_sinomimos[] = array('insulto','agravio');
        $array_sinomimos[] = array('jovial','alegre');
        $array_sinomimos[] = array('joya','alhaja');
        $array_sinomimos[] = array('laborar','trabajar');
        $array_sinomimos[] = array('levantar','alzar','elevar');
        $array_sinomimos[] = array('lustrar','brillar');
        $array_sinomimos[] = array('mácula','mancha');
        $array_sinomimos[] = array('marrón','castaño');
        $array_sinomimos[] = array('monarca','rey');
        $array_sinomimos[] = array('mutismo','silencio');
        $array_sinomimos[] = array('naipe','baraja');
        $array_sinomimos[] = array('nómada','errante');
        $array_sinomimos[] = array('norma','regla');
        $array_sinomimos[] = array('nupcias','matrimonio');
        $array_sinomimos[] = array('ocultar','esconder');
        $array_sinomimos[] = array('óleo','aceite');
        $array_sinomimos[] = array('olor','aroma','perfume');
        $array_sinomimos[] = array('orar','rezar');
        $array_sinomimos[] = array('ornato','adorno');
        $array_sinomimos[] = array('paciente','tolerante');
        $array_sinomimos[] = array('parar','detener');
        $array_sinomimos[] = array('partir','dividir');
        $array_sinomimos[] = array('pedazo','trozo');
        $array_sinomimos[] = array('pomposo','ostentoso');
        $array_sinomimos[] = array('premura','apuro');
        $array_sinomimos[] = array('previo','anterior');
        $array_sinomimos[] = array('principio','comienzo','origen');
        $array_sinomimos[] = array('quebradizo','frágil');
        $array_sinomimos[] = array('rápido','veloz');
        $array_sinomimos[] = array('raro','extraño');
        $array_sinomimos[] = array('regalo','obsequio');
        $array_sinomimos[] = array('reñir','pelear');
        $array_sinomimos[] = array('reto','desafío');
        $array_sinomimos[] = array('rifa','sorteo');
        $array_sinomimos[] = array('rostro','cara');
        $array_sinomimos[] = array('sacerdote','cura');
        $array_sinomimos[] = array('sacudir','agitar');
        $array_sinomimos[] = array('saltar','brincar');
        $array_sinomimos[] = array('sanar','curar');
        $array_sinomimos[] = array('sello','estampilla');
        $array_sinomimos[] = array('silbar','pitar');
        $array_sinomimos[] = array('tapar','cubrir');
        $array_sinomimos[] = array('tedio','aburrimiento','desgano');
        $array_sinomimos[] = array('tonto','necio','bobo');
        $array_sinomimos[] = array('ultraje','agravio');
        $array_sinomimos[] = array('vagar','errar');
        $array_sinomimos[] = array('valioso','preciado');
        $array_sinomimos[] = array('vereda','senda');
        $array_sinomimos[] = array('vergel','jardín');
        $array_sinomimos[] = array('victoria','triunfo');
        $array_sinomimos[] = array('volver','regresar');
        $array_sinomimos[] = array('yerro','error');
        $array_sinomimos[] = array('zarcillo','pendiente');
        $array_sinomimos[] = array('además','asimismo');
        $array_sinomimos[] = array('alegre','gozoso');
        $array_sinomimos[] = array('amanecer','alba');
        $array_sinomimos[] = array('aparecer','surgir');
        $array_sinomimos[] = array('aparición','fantasma');
        $array_sinomimos[] = array('aplomo','serenidad');
        $array_sinomimos[] = array('avión','aeroplano');
        $array_sinomimos[] = array('baile','danza');
        $array_sinomimos[] = array('bar','cantina');
        $array_sinomimos[] = array('barbacoa','parrilla');
        $array_sinomimos[] = array('bolígrafo','pluma');
        $array_sinomimos[] = array('calendario','almanaque');
        $array_sinomimos[] = array('cansado','fatigado');
        $array_sinomimos[] = array('desear','querer');
        $array_sinomimos[] = array('diáfano','claro');
        $array_sinomimos[] = array('ebrio','borracho');
        $array_sinomimos[] = array('edificar','construir');
        $array_sinomimos[] = array('efecto','resultado');
        $array_sinomimos[] = array('enojo','coraje');
        $array_sinomimos[] = array('famoso','célebre');
        $array_sinomimos[] = array('fértil','fecundo');
        $array_sinomimos[] = array('foto','retrato');
        $array_sinomimos[] = array('gafas','lentes');
        $array_sinomimos[] = array('garaje','cochera');
        $array_sinomimos[] = array('hábil','apto');
        $array_sinomimos[] = array('haragán','vago');
        $array_sinomimos[] = array('idéntico','igual');
        $array_sinomimos[] = array('idioma','lengua');
        $array_sinomimos[] = array('jamás','nunca');
        $array_sinomimos[] = array('jarra','vasija');
        $array_sinomimos[] = array('jira','excursión');
        $array_sinomimos[] = array('labor','trabajo');
        $array_sinomimos[] = array('ladearse','inclinarse');
        $array_sinomimos[] = array('lanzar','arrojar');
        $array_sinomimos[] = array('loco','demente');
        $array_sinomimos[] = array('macerar','machacar');
        $array_sinomimos[] = array('maceta','tiesto');
        $array_sinomimos[] = array('marido','esposo');
        $array_sinomimos[] = array('misericordia','piedad');
        $array_sinomimos[] = array('naipes','barajas');
        $array_sinomimos[] = array('nativo','oriundo');
        $array_sinomimos[] = array('obeso','gordo');
        $array_sinomimos[] = array('objetar','oponer');
        $array_sinomimos[] = array('pacífico','tranquilo');
        $array_sinomimos[] = array('pedir','solicitar');
        $array_sinomimos[] = array('pequeño','chico');
        $array_sinomimos[] = array('quebradizo','frágil');
        $array_sinomimos[] = array('queja','lamento');
        $array_sinomimos[] = array('rabia','cólera');
        $array_sinomimos[] = array('rabo','cola');
        $array_sinomimos[] = array('sabio','erudito');
        $array_sinomimos[] = array('sano','saludable');
        $array_sinomimos[] = array('tacaño','ávaro');
        $array_sinomimos[] = array('taciturno','silencioso');
        $array_sinomimos[] = array('tomar','beber');
        $array_sinomimos[] = array('ubicar','colocar');
        $array_sinomimos[] = array('ufano','alegre');
        $array_sinomimos[] = array('vacunar','inocular');
        $array_sinomimos[] = array('vivir','habitar');
        $array_sinomimos[] = array('yacer','reposar');
        $array_sinomimos[] = array('zambullirse','sumergirse');
        $array_sinomimos[] = array('además','asimismo');
        $array_sinomimos[] = array('alegre','gozoso');
        $array_sinomimos[] = array('amanecer','alba');
        $array_sinomimos[] = array('bolígrafo','pluma');
        $array_sinomimos[] = array('desear','querer');
        $array_sinomimos[] = array('diáfano','claro');
        $array_sinomimos[] = array('enojo','enfado','coraje');
        $array_sinomimos[] = array('fértil','fecundo');
        $array_sinomimos[] = array('foto','retrato');
        $array_sinomimos[] = array('lanzar','arrojar');
        $array_sinomimos[] = array('misericordia','piedad');
        $array_sinomimos[] = array('pedir','requerir','solicitar');
        $array_sinomimos[] = array('pequeño','chico');
        $array_sinomimos[] = array('tomar','beber');
        $array_sinomimos[] = array('sano','saludable');
        $array_sinomimos[] = array('vivir','habitar');
        $array_sinomimos[] = array('amplificar','ampliar');
        $array_sinomimos[] = array('afán','anhelo','ansia','deseo');
        $array_sinomimos[] = array('advertir','prevenir','avisar');
        $array_sinomimos[] = array('aerolito','meteorito');
        $array_sinomimos[] = array('boda','matrimonio');
        $array_sinomimos[] = array('bonito','hermoso');
        $array_sinomimos[] = array('bondadoso','benévolo');
        $array_sinomimos[] = array('boleto','billete');
        $array_sinomimos[] = array('cabello','pelo');
        $array_sinomimos[] = array('cálido','caliente','caluroso');
        $array_sinomimos[] = array('cama','lecho');
        $array_sinomimos[] = array('camino','vía','sendero');
        $array_sinomimos[] = array('causa','motivo');
        $array_sinomimos[] = array('comité','junta','delegación');
        $array_sinomimos[] = array('danza','baile');
        $array_sinomimos[] = array('ebrio','borracho');
        $array_sinomimos[] = array('economizar','ahorrar');
        $array_sinomimos[] = array('edén','paraíso');
        $array_sinomimos[] = array('educar','enseñar');
        $array_sinomimos[] = array('elegir','escoger');
        $array_sinomimos[] = array('embuste','mentira');
        $array_sinomimos[] = array('enfurecer','enojar');
        $array_sinomimos[] = array('escaso','poco');
        $array_sinomimos[] = array('escuchar','oir','atender');
        $array_sinomimos[] = array('estudiante','alumno');
        $array_sinomimos[] = array('expirar','morir','fallecer');
        $array_sinomimos[] = array('fácil','sencillo');
        $array_sinomimos[] = array('famoso','célebre');
        $array_sinomimos[] = array('felicidad','dicha');
        $array_sinomimos[] = array('fiel','leal');
        $array_sinomimos[] = array('flecha','saeta');
        $array_sinomimos[] = array('fotografía','retrato');
        $array_sinomimos[] = array('fragmento','pedazo');
        $array_sinomimos[] = array('fugarse','escaparse');
        $array_sinomimos[] = array('fugitivo','prófugo');
        $array_sinomimos[] = array('fulgor','resplandor');
        $array_sinomimos[] = array('galeno','médico');
        $array_sinomimos[] = array('gafas','anteojos');
        $array_sinomimos[] = array('generoso','dadivoso');
        $array_sinomimos[] = array('gélido','helado');
        $array_sinomimos[] = array('gozo','alegría');
        $array_sinomimos[] = array('gula','glotonería');
        $array_sinomimos[] = array('habitante','morador');
        $array_sinomimos[] = array('hechizar','embrujar');
        $array_sinomimos[] = array('heleno','griego');
        $array_sinomimos[] = array('helar','congelar');
        $array_sinomimos[] = array('hurtar','robar');
        $array_sinomimos[] = array('iluminar','alumbrar');
        $array_sinomimos[] = array('ilustre','instruído');
        $array_sinomimos[] = array('insulto','agravio');
        $array_sinomimos[] = array('jovial','alegre');
        $array_sinomimos[] = array('joya','alhaja');
        $array_sinomimos[] = array('laborar','trabajar');
        $array_sinomimos[] = array('levantar','alzar','elevar');
        $array_sinomimos[] = array('lustrar','brillar');
        $array_sinomimos[] = array('mácula','mancha');
        $array_sinomimos[] = array('marrón','castaño');
        $array_sinomimos[] = array('monarca','rey');
        $array_sinomimos[] = array('mutismo','silencio');
        $array_sinomimos[] = array('naipe','baraja');
        $array_sinomimos[] = array('nómada','errante');
        $array_sinomimos[] = array('norma','regla');
        $array_sinomimos[] = array('nupcias','matrimonio');
        $array_sinomimos[] = array('ocultar','esconder');
        $array_sinomimos[] = array('óleo','aceite');
        $array_sinomimos[] = array('olor','aroma','perfume');
        $array_sinomimos[] = array('orar','rezar');
        $array_sinomimos[] = array('ornato','adorno');
        $array_sinomimos[] = array('paciente','tolerante');
        $array_sinomimos[] = array('parar','detener');
        $array_sinomimos[] = array('partir','dividir');
        $array_sinomimos[] = array('pedazo','trozo');
        $array_sinomimos[] = array('pomposo','ostentoso');
        $array_sinomimos[] = array('premura','apuro');
        $array_sinomimos[] = array('previo','anterior');
        $array_sinomimos[] = array('principio','comienzo','origen');
        $array_sinomimos[] = array('quebradizo','frágil');
        $array_sinomimos[] = array('rápido','veloz');
        $array_sinomimos[] = array('raro','extraño');
        $array_sinomimos[] = array('regalo','obsequio');
        $array_sinomimos[] = array('reñir','pelear');
        $array_sinomimos[] = array('reto','desafío');
        $array_sinomimos[] = array('rifa','sorteo');
        $array_sinomimos[] = array('rostro','cara');
        $array_sinomimos[] = array('sacerdote','cura');
        $array_sinomimos[] = array('sacudir','agitar');
        $array_sinomimos[] = array('saltar','brincar');
        $array_sinomimos[] = array('sanar','curar');
        $array_sinomimos[] = array('sello','estampilla');
        $array_sinomimos[] = array('silbar','pitar');
        $array_sinomimos[] = array('tapar','cubrir');
        $array_sinomimos[] = array('tedio','aburrimiento','desgano');
        $array_sinomimos[] = array('tonto','necio','bobo');
        $array_sinomimos[] = array('ultraje','agravio');
        $array_sinomimos[] = array('vagar','errar');
        $array_sinomimos[] = array('valioso','preciado');
        $array_sinomimos[] = array('vereda','senda');
        $array_sinomimos[] = array('vergel','jardín');
        $array_sinomimos[] = array('victoria','triunfo');
        $array_sinomimos[] = array('volver','regresar');
        $array_sinomimos[] = array('yerro','error');
        $array_sinomimos[] = array('zarcillo','pendiente');
        App::import('Model', 'Product');
        $Product = new Product;
        $productos = $Product->find('all', array('sinonimos' => 0));
        foreach($productos as $key => $item) {
            foreach($array_sinomimos as $k => $v) {
                shuffle($v);
                $title = str_replace("{$v[0]}", "{$v[1]}", $item['Product']['title']);
                $subtitulo = str_replace("{$v[0]}", "{$v[1]}", $item['Product']['subtitle']);
                $slug = $this->stringToSlug($title);
                if($title != $item['Product']['title'] || $subtitulo != $item['Product']['subtitle']) {
                    echo 'CAMBIASO:'.$item['Product']['id']."\n";
                }
                $Prod = new Product;
                $Prod->read(null, $item['Product']['id']);
                $Prod->save(array('title' => $title, 'subtitulo' => $subtitulo, 'slug' => $slug, 'sinonimos' => 1));
                //$descripcion = str_replace("{$v[0]}", "{$v[1]}", $item['Producto']['descripcion']);
            }
        }
               
    }         
    
}