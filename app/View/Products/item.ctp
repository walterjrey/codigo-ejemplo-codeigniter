<h1 class="title"><?php echo $Product['Product']['title'];?></h1>
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

<div class="post_box" align="justify">
<div class="post_title"><a href="<?php echo Router::url('/', true);?>articulos/<?php echo $Product['Product']['slug'];?>/<?php echo $Product['Product']['id'];?>"><?php echo $Product['Product']['title'];?></a></div>
<div class="post_text_area">
<a href="#"><img src="<?php echo $Product['Product']['thumbnail'];?>" alt="<?php echo $Product['Product']['title'];?>" class="templatemo_pic" title="<?php echo $Product['Product']['title'];?>" /></a>
<h3><?php echo $Product['Product']['subtitle'];?></h3>

<?php if(!empty($Product['Product']['price'])):?>
<div style="width: 250px;">Precio: <strong><?php echo $Product['Product']['currency_id'];?> $<?php echo sprintf('%.2f', $Product['Product']['price']);?></strong></div>
<?php endif;?>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7629770128532589";
/* anuncio bajo titulo */
google_ad_slot = "9190789315";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<br />

<a class="buy_ml" rel="nofollow" href="<?php echo $Product['Product']['permalink'];?>" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="<?php echo Router::url('/', true);?>categorias/<?php echo $Category['Category']['slug'];?>"><?php echo $Category['Category']['nombre'];?></a></div>
</div>

