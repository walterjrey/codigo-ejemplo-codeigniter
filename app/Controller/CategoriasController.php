<?php

class CategoriasController extends AppController {
    var $paginate = array(        
            'Product' => array(
                'limit' => 25,        
                'order' => array(            
                        'Product.added' => 'desc'       
                        )              
            )  
        );
    function beforeFilter() {
		parent::beforeFilter();
        App::import('Model', 'Category');
        $Category = new Category(); 
        $this->set('categorias', $Category->find('all'));
    }
    
    function stringToSlug($str) {
    	// trim the string
    	$str = strtolower(trim($str));
    	// replace all non valid characters and spaces with an underscore
    	$str = preg_replace('/[^a-z0-9-]/', '-', $str);
    	$str = preg_replace('/-+/', "-", $str);
    return $str;
    }    

    function categorias($slug) {
        $slug = $this->stringToSlug($slug);
        App::import('Model', 'Category');
        App::import('Model', 'Product');
        $Category = new Category();
        $is_cat = $Category->findBySlug($slug);  
        if($is_cat) { 
            $data = $this->paginate('Product', array('Product.category_id' => $is_cat['Category']['id']));            
            $this->set(compact('data'));            
        }      
    }
    
}