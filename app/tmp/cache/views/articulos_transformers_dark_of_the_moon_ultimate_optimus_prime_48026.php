<!--cachetime:1345015876--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:52:"transformers-dark-of-the-moon-ultimate-optimus-prime";i:1;s:5:"48026";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:68:"articulos/transformers-dark-of-the-moon-ultimate-optimus-prime/48026";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:69:"/articulos/transformers-dark-of-the-moon-ultimate-optimus-prime/48026";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMTEiO3M6Njoibm9tYnJlIjtzOjE3OiJKdWVnb3MgeSBKdWd1ZXRlcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzExMzIiO3M6NDoic2x1ZyI7czoxNzoianVlZ29zLXktanVndWV0ZXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fXM6NzoiUHJvZHVjdCI7YToxOntzOjc6IlByb2R1Y3QiO2E6MTU6e3M6MjoiaWQiO3M6NToiNDgwMjYiO3M6NDoiaWRtbCI7czoxMjoiTUVDNDAwNTY4ODE4IjtzOjU6InRpdGxlIjtzOjUyOiJUcmFuc2Zvcm1lcnMgRGFyayBPZiBUaGUgTW9vbiBVbHRpbWF0ZSBPcHRpbXVzIFByaW1lIjtzOjg6InN1YnRpdGxlIjtzOjA6IiI7czo1OiJwcmljZSI7czozOiIxNTAiO3M6OToicGVybWFsaW5rIjtzOjEwNjoiaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20uZWMvTUVDLTQwMDU2ODgxOC10cmFuc2Zvcm1lcnMtZGFyay1vZi10aGUtbW9vbi11bHRpbWF0ZS1vcHRpbXVzLXByaW1lLV9KTSI7czo5OiJ0aHVtYm5haWwiO3M6NTg6Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01FQ192X0lfZl8yODgyMjAzMzIyXzA3MjAxMi5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IlVTRCI7czoxMDoic3RhdGVfbmFtZSI7czo2OiJHdWF5YXMiO3M6OToiY2l0eV9uYW1lIjtzOjk6Ikd1YXlhcXVpbCI7czoxMToiY2F0ZWdvcnlfaWQiO3M6MzoiMTExIjtzOjU6ImFkZGVkIjtzOjE5OiIyMDEyLTA4LTA3IDA4OjQxOjE3IjtzOjQ6InNsdWciO3M6NTI6InRyYW5zZm9ybWVycy1kYXJrLW9mLXRoZS1tb29uLXVsdGltYXRlLW9wdGltdXMtcHJpbWUiO3M6NToic2l0aW8iO3M6NzoiZWN1YWRvciI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6MjY3OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBUcmFuc2Zvcm1lcnMgRGFyayBPZiBUaGUgTW9vbiBVbHRpbWF0ZSBPcHRpbXVzIFByaW1lIGVuIGVjdWFkb3IuIGNvbXByYXIgVHJhbnNmb3JtZXJzIERhcmsgT2YgVGhlIE1vb24gVWx0aW1hdGUgT3B0aW11cyBQcmltZSBvbmxpbmUgZW4gZWN1YWRvci4gY29tcHJhciBvbmxpbmUgZW4gZWN1YWRvci4gY29tcHJhciBUcmFuc2Zvcm1lcnMgRGFyayBPZiBUaGUgTW9vbiBVbHRpbWF0ZSBPcHRpbXVzIFByaW1lIGVuIGVjdWFkb3IiO3M6MTI6Im1ldGFrZXl3b3JkcyI7czo5MzoibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLFRyYW5zZm9ybWVycyxEYXJrLE1vb24sVWx0aW1hdGUsT3B0aW11cyxQcmltZSxlY3VhZG9yIjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjg3OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBUcmFuc2Zvcm1lcnMgRGFyayBPZiBUaGUgTW9vbiBVbHRpbWF0ZSBPcHRpbXVzIFByaW1lIGVuIGVjdWFkb3IiO3M6MTA6ImNhdGVnb3JpYXMiO2E6MTk6e2k6MDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI5NyI7czo2OiJub21icmUiO3M6MjY6IkFjY2Vzb3Jpb3MgcGFyYSBWZWjDrWN1bG9zIjtzOjQ6ImlkbWwiO3M6NzoiTUVDNTcyNSI7czo0OiJzbHVnIjtzOjI2OiJhY2Nlc29yaW9zLXBhcmEtdmVow61jdWxvcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aToxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6Ijk4IjtzOjY6Im5vbWJyZSI7czoxOToiQW5pbWFsZXMgeSBNYXNjb3RhcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzEwNzEiO3M6NDoic2x1ZyI7czoxOToiYW5pbWFsZXMteS1tYXNjb3RhcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aToyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6Ijk5IjtzOjY6Im5vbWJyZSI7czoyMDoiQXJ0ZSB5IEFudGlnw7xlZGFkZXMiO3M6NDoiaWRtbCI7czo3OiJNRUMxMzY3IjtzOjQ6InNsdWciO3M6MjA6ImFydGUteS1hbnRpZ8O8ZWRhZGVzIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTAwIjtzOjY6Im5vbWJyZSI7czoyMDoiQXV0b3MsIE1vdG9zIHkgT3Ryb3MiO3M6NDoiaWRtbCI7czo3OiJNRUMxNzQzIjtzOjQ6InNsdWciO3M6MTk6ImF1dG9zLW1vdG9zLXktb3Ryb3MiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6NDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMDEiO3M6Njoibm9tYnJlIjtzOjIyOiJDZWx1bGFyZXMgeSBUZWxlZm9uw61hIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTA1MSI7czo0OiJzbHVnIjtzOjIyOiJjZWx1bGFyZXMteS10ZWxlZm9uw61hIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTAyIjtzOjY6Im5vbWJyZSI7czoxNDoiQ29sZWNjaW9uYWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNRUMxNzk4IjtzOjQ6InNsdWciO3M6MTQ6ImNvbGVjY2lvbmFibGVzIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTAzIjtzOjY6Im5vbWJyZSI7czoxMjoiQ29tcHV0YWNpw7NuIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJjb21wdXRhY2nDs24iO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6NzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMDQiO3M6Njoibm9tYnJlIjtzOjIyOiJDb25zb2xhcyB5IFZpZGVvanVlZ29zIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTE0NCI7czo0OiJzbHVnIjtzOjIyOiJjb25zb2xhcy15LXZpZGVvanVlZ29zIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTA1IjtzOjY6Im5vbWJyZSI7czoyMToiQ8OhbWFyYXMgeSBBY2Nlc29yaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTAzOSI7czo0OiJzbHVnIjtzOjIxOiJjw6FtYXJhcy15LWFjY2Vzb3Jpb3MiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6OTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMDYiO3M6Njoibm9tYnJlIjtzOjE4OiJEZXBvcnRlcyB5IEZpdG5lc3MiO3M6NDoiaWRtbCI7czo3OiJNRUMxMjc2IjtzOjQ6InNsdWciO3M6MTg6ImRlcG9ydGVzLXktZml0bmVzcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aToxMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMDciO3M6Njoibm9tYnJlIjtzOjI3OiJFbGVjdHLDs25pY2EsIEF1ZGlvIHkgVmlkZW8iO3M6NDoiaWRtbCI7czo3OiJNRUMxMDAwIjtzOjQ6InNsdWciO3M6MjY6ImVsZWN0csOzbmljYS1hdWRpby15LXZpZGVvIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjExO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEwOCI7czo2OiJub21icmUiO3M6MTU6IkhvZ2FyIHkgTXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzE1NzQiO3M6NDoic2x1ZyI7czoxNToiaG9nYXIteS1tdWVibGVzIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjEyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEwOSI7czo2OiJub21icmUiO3M6OToiSW5tdWVibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTQ1OSI7czo0OiJzbHVnIjtzOjk6ImlubXVlYmxlcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aToxMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMTAiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjE0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjExMSI7czo2OiJub21icmUiO3M6MTc6Ikp1ZWdvcyB5IEp1Z3VldGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTEzMiI7czo0OiJzbHVnIjtzOjE3OiJqdWVnb3MteS1qdWd1ZXRlcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aToxNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMTIiO3M6Njoibm9tYnJlIjtzOjI4OiJNw7pzaWNhLCBMaWJyb3MgeSBQZWzDrWN1bGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTE2OCI7czo0OiJzbHVnIjtzOjI3OiJtw7pzaWNhLWxpYnJvcy15LXBlbMOtY3VsYXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MTY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTEzIjtzOjY6Im5vbWJyZSI7czoxNzoiT3RyYXMgY2F0ZWdvcsOtYXMiO3M6NDoiaWRtbCI7czo3OiJNRUMxOTUzIjtzOjQ6InNsdWciO3M6MTc6Im90cmFzLWNhdGVnb3LDrWFzIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjE3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjExNCI7czo2OiJub21icmUiO3M6MjE6IlJvcGEsIEpveWFzIHkgUmVsb2plcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzE0MzAiO3M6NDoic2x1ZyI7czoyMDoicm9wYS1qb3lhcy15LXJlbG9qZXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MTg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTE1IjtzOjY6Im5vbWJyZSI7czo5OiJTZXJ2aWNpb3MiO3M6NDoiaWRtbCI7czo3OiJNRUMxNTQwIjtzOjQ6InNsdWciO3M6OToic2VydmljaW9zIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE2NjU6IjxoMSBjbGFzcz0idGl0bGUiPlRyYW5zZm9ybWVycyBEYXJrIE9mIFRoZSBNb29uIFVsdGltYXRlIE9wdGltdXMgUHJpbWU8L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL2VjdWFkb3IuY29tcHJhci1vbmxpbmUteWEuY29tL2FydGljdWxvcy90cmFuc2Zvcm1lcnMtZGFyay1vZi10aGUtbW9vbi11bHRpbWF0ZS1vcHRpbXVzLXByaW1lLzQ4MDI2Ij5UcmFuc2Zvcm1lcnMgRGFyayBPZiBUaGUgTW9vbiBVbHRpbWF0ZSBPcHRpbXVzIFByaW1lPC9hPjwvZGl2Pg0KPGRpdiBjbGFzcz0icG9zdF90ZXh0X2FyZWEiPg0KPGEgaHJlZj0iIyI+PGltZyBzcmM9Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01FQ192X0lfZl8yODgyMjAzMzIyXzA3MjAxMi5qcGciIGFsdD0iVHJhbnNmb3JtZXJzIERhcmsgT2YgVGhlIE1vb24gVWx0aW1hdGUgT3B0aW11cyBQcmltZSIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iVHJhbnNmb3JtZXJzIERhcmsgT2YgVGhlIE1vb24gVWx0aW1hdGUgT3B0aW11cyBQcmltZSIgLz48L2E+DQo8aDM+PC9oMz4NCg0KPGRpdiBzdHlsZT0id2lkdGg6IDI1MHB4OyI+UHJlY2lvOiA8c3Ryb25nPlVTRCAkMTUwLjAwPC9zdHJvbmc+PC9kaXY+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+PCEtLQ0KZ29vZ2xlX2FkX2NsaWVudCA9ICJjYS1wdWItNzYyOTc3MDEyODUzMjU4OSI7DQovKiBhbnVuY2lvIGJham8gdGl0dWxvICovDQpnb29nbGVfYWRfc2xvdCA9ICI5MTkwNzg5MzE1IjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KPGJyIC8+DQoNCjxhIGNsYXNzPSJidXlfbWwiIHJlbD0ibm9mb2xsb3ciIGhyZWY9Imh0dHA6Ly9hcnRpY3Vsby5tZXJjYWRvbGlicmUuY29tLmVjL01FQy00MDA1Njg4MTgtdHJhbnNmb3JtZXJzLWRhcmstb2YtdGhlLW1vb24tdWx0aW1hdGUtb3B0aW11cy1wcmltZS1fSk0iIHRhcmdldD0iX2JsYW5rIj5WZXIvQ29tcHJhcjwvYT4NCjwvZGl2Pg0KPGRpdiBjbGFzcz0icHVibGlzaF9kYXRlIj4gQ2F0ZWdvciZpYWN1dGU7YTogPGEgaHJlZj0iaHR0cDovL2VjdWFkb3IuY29tcHJhci1vbmxpbmUteWEuY29tL2NhdGVnb3JpYXMvanVlZ29zLXktanVndWV0ZXMiPkp1ZWdvcyB5IEp1Z3VldGVzPC9hPjwvZGl2Pg0KPC9kaXY+DQoNCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo4OiJQcm9kdWN0cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Transformers Dark Of The Moon Ultimate Optimus Prime en ecuador - ecuador.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Transformers,Dark,Moon,Ultimate,Optimus,Prime,ecuador" />
<meta name="description" content="Comprar en mercadolibre Transformers Dark Of The Moon Ultimate Optimus Prime en ecuador. comprar Transformers Dark Of The Moon Ultimate Optimus Prime online en ecuador. comprar online en ecuador. comprar Transformers Dark Of The Moon Ultimate Optimus Prime en ecuador" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://ecuador.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://ecuador.comprar-online-ya.com/" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32529085-1']);
  _gaq.push(['_setDomainName', 'comprar-online-ya.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<!--
This is a free CSS template provided by templatemo.com
-->
<div class="templatemo_spacer"></div>
<div style="margin: 0 auto;width: 728px;">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7629770128532589";
/* coy skycraper horizontal */
google_ad_slot = "0108846956";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<div id="templatemo_container">

<div id="templatemo_top">
    <div style="float: left;margin-top:-20px;margin-left: 40px;">
    <a href="http://ecuador.comprar-online-ya.com/" title="Inicio"><img src="http://ecuador.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://ecuador.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://ecuador.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/animales-y-mascotas" target="_parent">Animales y Mascotas</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/arte-y-antigüedades" target="_parent">Arte y Antigüedades</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/autos-motos-y-otros" target="_parent">Autos, Motos y Otros</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/celulares-y-telefonía" target="_parent">Celulares y Telefonía</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/coleccionables" target="_parent">Coleccionables</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/consolas-y-videojuegos" target="_parent">Consolas y Videojuegos</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/cámaras-y-accesorios" target="_parent">Cámaras y Accesorios</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/electrónica-audio-y-video" target="_parent">Electrónica, Audio y Video</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/hogar-y-muebles" target="_parent">Hogar y Muebles</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/música-libros-y-películas" target="_parent">Música, Libros y Películas</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras categorías</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/ropa-joyas-y-relojes" target="_parent">Ropa, Joyas y Relojes</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                                    
      		</ul>
    <div style="margin: 10px;">
    <script type="text/javascript"><!--
    google_ad_client = "ca-pub-7629770128532589";
    /* coy left */
    google_ad_slot = "3110721523";
    google_ad_width = 200;
    google_ad_height = 200;
    //-->
    </script>
    <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>  
    
    <script type="text/javascript"><!--
    google_ad_client = "ca-pub-7629770128532589";
    /* coy left 2 */
    google_ad_slot = "8901294102";
    google_ad_width = 200;
    google_ad_height = 200;
    //-->
    </script>
    <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>     
    </div>
    </div>

      <div id="templatemo_right_column">
        <h1 class="title">Transformers Dark Of The Moon Ultimate Optimus Prime</h1>
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
<div class="post_title"><a href="http://ecuador.comprar-online-ya.com/articulos/transformers-dark-of-the-moon-ultimate-optimus-prime/48026">Transformers Dark Of The Moon Ultimate Optimus Prime</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MEC_v_I_f_2882203322_072012.jpg" alt="Transformers Dark Of The Moon Ultimate Optimus Prime" class="templatemo_pic" title="Transformers Dark Of The Moon Ultimate Optimus Prime" /></a>
<h3></h3>

<div style="width: 250px;">Precio: <strong>USD $150.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.ec/MEC-400568818-transformers-dark-of-the-moon-ultimate-optimus-prime-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://ecuador.comprar-online-ya.com/categorias/juegos-y-juguetes">Juegos y Juguetes</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 ecuador.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>