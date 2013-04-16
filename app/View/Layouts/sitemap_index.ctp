<?php header('Content-type: text/xml');?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'."\n";?>
<sitemapindex
xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="
http://www.sitemaps.org/schemas/sitemap/0.9
http://www.sitemaps.org/schemas/sitemap/09/siteindex.xsd">
<?php if($sitio == ''):?>
<sitemap>
<loc>http://comprar-online-ya.com/sitemap_paginas.xml</loc>
<lastmod><?php echo date("c");?></lastmod>
</sitemap>
<?php endif;?>
<?php echo $content_for_layout;?>
</sitemapindex>
