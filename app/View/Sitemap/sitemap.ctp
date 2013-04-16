<?php foreach($sitemap as $key => $value):?>
<sitemap>
<loc><?php echo $value['loc'];?></loc>
<lastmod><?php echo date("c", strtotime($value['fecha']));?></lastmod>
</sitemap>
<?php endforeach;?>