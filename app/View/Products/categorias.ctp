<h1 class="title"><?php echo $Category['Category']['nombre'];?></h1>
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