<h1 class="title">Todos los anuncios <?php if(!empty($nombre_pais)):?> en <?php echo $nombre_pais;?> <?php endif;?></h1>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7629770128532589";
/* coy 468x15 ( articulos ) */
google_ad_slot = "5686419821";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<div class="pagination_items">
<?php echo $this->Paginator->prev('< Anterior', null, null, array('class' => 'disabled')); ?>
<?php echo $this->Paginator->numbers(); ?>
<?php echo $this->Paginator->next('Siguiente >', null, null, array('class' => 'disabled')); ?> 
</div>
<!-- prints X of Y, where X is current page and Y is number of pages -->
<br /><br />
<?php foreach($data as $key => $value):?>
		<div class="post_box" align="justify">
        <div class="post_title"><a href="<?php echo Router::url('/', true);?>articulos/<?php echo $value['Product']['slug'];?>/<?php echo $value['Product']['id'];?>"><?php echo $value['Product']['title'];?></a></div>
        <div class="post_text_area">
        <a href="#"><img src="<?php echo $value['Product']['thumbnail'];?>" alt="<?php echo $value['Product']['title'];?>" class="templatemo_pic" title="<?php echo $value['Product']['title'];?>" /></a>
        <h2><?php echo $value['Product']['title'];?></h2>
        <h3><?php echo $value['Product']['subtitle'];?></h3>
        <?php if(!empty($value['Product']['price'])):?>
        Precio: <strong><?php echo $value['Product']['currency_id'];?> $<?php echo sprintf('%.2f', $value['Product']['price']);?></strong>
        <?php endif;?>
        </div>
        <div class="publish_date right_content"> <a href="<?php echo Router::url('/', true);?>articulos/<?php echo $value['Product']['slug'];?>/<?php echo $value['Product']['id'];?>">Ver Producto</a></div>
      	</div>
<?php endforeach;?>

<div class="pagination_items">
<?php echo $this->Paginator->numbers(); ?>
<!-- Shows the next and previous links -->
<?php echo $this->Paginator->prev('< Anterior', null, null, array('class' => 'disabled')); ?>
<?php echo $this->Paginator->next('Siguiente >', null, null, array('class' => 'disabled')); ?> 
</div>
<style>
ul.footer_links_paises {
clear: both;
    margin: 0;
    padding: 0;
    text-align: center;
}
ul.footer_links_paises li {
    display: inline;
    list-style: none outside none;
    margin-left: 5px;
    padding: 3px;
}
</style>
    <br />
    <ul class="footer_links_paises">
        <li><a href="http://argentina.comprar-online-ya.com" title="Comprar articulos en argentina">Art&iacute;culos en Argentina</a></li>
        
        <li><a href="http://mexico.comprar-online-ya.com" title="Comprar articulos en mexico">Art&iacute;culos en M&eacute;xico</a></li>
        
        <li><a href="http://chile.comprar-online-ya.com" title="Comprar articulos en chile">Art&iacute;culos en Chile</a></li>
        
        <li><a href="http://uruguay.comprar-online-ya.com" title="Comprar articulos en uruguay">Art&iacute;culos en Uruguay</a></li>
        
        <li><a href="http://colombia.comprar-online-ya.com" title="Comprar articulos en colombia">Art&iacute;culos en Colombia</a></li>
        
        <li><a href="http://brasil.comprar-online-ya.com" title="Comprar articulos en brasil">Art&iacute;culos en Brasil</a></li>
        
        <li><a href="http://portugal.comprar-online-ya.com" title="Comprar articulos en portugal">Art&iacute;culos en Portugal</a></li>
        
        <li><a href="http://peru.comprar-online-ya.com" title="Comprar articulos en peru">Art&iacute;culos en Per&uacute;</a></li>
        
        <li><a href="http://venezuela.comprar-online-ya.com" title="Comprar articulos en venezuela">Art&iacute;culos en Venezuela</a></li>
        
        <li><a href="http://ecuador.comprar-online-ya.com" title="Comprar articulos en ecuado">Art&iacute;culos en Ecuador</a></li>
        
        <li><a href="http://costarica.comprar-online-ya.com" title="Comprar articulos en costa rica">Art&iacute;culos en Costa Rica</a></li>
        
        <li><a href="http://dominicana.comprar-online-ya.com" title="Comprar articulos en republica dominicana">Art&iacute;culos en Rep&uacute;blica Dominicana</a></li>  
    </ul>
    <br />