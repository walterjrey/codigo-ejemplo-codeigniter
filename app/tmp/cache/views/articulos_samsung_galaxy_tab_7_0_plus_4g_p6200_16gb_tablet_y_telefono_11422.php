<!--cachetime:1345017599--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:59:"samsung-galaxy-tab-7-0-plus-4g-p6200-16gb-tablet-y-telefono";i:1;s:5:"11422";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:75:"articulos/samsung-galaxy-tab-7-0-plus-4g-p6200-16gb-tablet-y-telefono/11422";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:76:"/articulos/samsung-galaxy-tab-7-0-plus-4g-p6200-16gb-tablet-y-telefono/11422";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzIiO3M6Njoibm9tYnJlIjtzOjIyOiJDZWx1bGFyZXMgeSBUZWzDqWZvbm9zIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTA1MSI7czo0OiJzbHVnIjtzOjIyOiJjZWx1bGFyZXMteS10ZWzDqWZvbm9zIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjExNDIyIjtzOjQ6ImlkbWwiO3M6MTE6Ik1QRTE5NjA5ODgyIjtzOjU6InRpdGxlIjtzOjYwOiJTYW1zdW5nIEdhbGF4eSBUYWIgNy4wICBQbHVzIDRnIFA2MjAwIDE2Z2IgVGFibGV0IFkgVGVsZWZvbm8iO3M6ODoic3VidGl0bGUiO3M6Njk6IiBMaWJyZXMgNGcgQ2xhcm8gWSBNb3Zpc3RhcixjYWphIFNlbGxhZGFzICxnYXJhbnRpYSAsc2FuIEJvcmphLCBWaXNhICI7czo1OiJwcmljZSI7czo3OiIxNjk5Ljk5IjtzOjk6InBlcm1hbGluayI7czoxMTE6Imh0dHA6Ly9hcnRpY3Vsby5tZXJjYWRvbGlicmUuY29tLnBlL01QRS0xOTYwOTg4Mi1zYW1zdW5nLWdhbGF4eS10YWItNzAtcGx1cy00Zy1wNjIwMC0xNmdiLXRhYmxldC15LXRlbGVmb25vLV9KTSI7czo5OiJ0aHVtYm5haWwiO3M6NTg6Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01QRV92X0lfZl8yNTQyNTM1OTUyXzAzMjAxMi5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IlBFTiI7czoxMDoic3RhdGVfbmFtZSI7czo0OiJMaW1hIjtzOjk6ImNpdHlfbmFtZSI7czoxNDoiU2FuIEJvcmphIExpbWEiO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjM6IjIzMiI7czo1OiJhZGRlZCI7czoxOToiMjAxMi0wNi0wOSAyMjo0NDoxOCI7czo0OiJzbHVnIjtzOjU5OiJzYW1zdW5nLWdhbGF4eS10YWItNy0wLXBsdXMtNGctcDYyMDAtMTZnYi10YWJsZXQteS10ZWxlZm9ubyI7czo1OiJzaXRpbyI7czo0OiJwZXJ1IjtzOjY6ImN1c3RvbSI7czoxOiIwIjt9fXM6MTU6Im1ldGFkZXNjcmlwdGlvbiI7czoyNzk6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIFNhbXN1bmcgR2FsYXh5IFRhYiA3LjAgIFBsdXMgNGcgUDYyMDAgMTZnYiBUYWJsZXQgWSBUZWxlZm9ubyBlbiBwZXJ1LiBjb21wcmFyIFNhbXN1bmcgR2FsYXh5IFRhYiA3LjAgIFBsdXMgNGcgUDYyMDAgMTZnYiBUYWJsZXQgWSBUZWxlZm9ubyBvbmxpbmUgZW4gcGVydS4gY29tcHJhciBvbmxpbmUgZW4gcGVydS4gY29tcHJhciBTYW1zdW5nIEdhbGF4eSBUYWIgNy4wICBQbHVzIDRnIFA2MjAwIDE2Z2IgVGFibGV0IFkgVGVsZWZvbm8gZW4gcGVydSI7czoxMjoibWV0YWtleXdvcmRzIjtzOjE0NzoibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLExpYnJlcyxDbGFybyxNb3Zpc3RhcixjYWphLFNlbGxhZGFzLGdhcmFudGlhLEJvcmphLFZpc2EsU2Ftc3VuZyxHYWxheHksUGx1cyxQNjIwMCwxNmdiLFRhYmxldCxUZWxlZm9ubyxwZXJ1IjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjkyOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBTYW1zdW5nIEdhbGF4eSBUYWIgNy4wICBQbHVzIDRnIFA2MjAwIDE2Z2IgVGFibGV0IFkgVGVsZWZvbm8gZW4gcGVydSI7czoxMDoiY2F0ZWdvcmlhcyI7YToxOTp7aTowO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIyOSI7czo2OiJub21icmUiO3M6MjY6IkFjY2Vzb3Jpb3MgcGFyYSBWZWjDrWN1bG9zIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTc0NyI7czo0OiJzbHVnIjtzOjI2OiJhY2Nlc29yaW9zLXBhcmEtdmVow61jdWxvcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aToxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIzMCI7czo2OiJub21icmUiO3M6MjA6IkFydGUgeSBBbnRpZ8O8ZWRhZGVzIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTM2NyI7czo0OiJzbHVnIjtzOjIwOiJhcnRlLXktYW50aWfDvGVkYWRlcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aToyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIzMSI7czo2OiJub21icmUiO3M6MjA6IkF1dG9zLCBNb3RvcyB5IE90cm9zIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTc0MyI7czo0OiJzbHVnIjtzOjE5OiJhdXRvcy1tb3Rvcy15LW90cm9zIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjMyIjtzOjY6Im5vbWJyZSI7czoyMjoiQ2VsdWxhcmVzIHkgVGVsw6lmb25vcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTEwNTEiO3M6NDoic2x1ZyI7czoyMjoiY2VsdWxhcmVzLXktdGVsw6lmb25vcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aTo0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIzMyI7czo2OiJub21icmUiO3M6MjQ6IkNvbGVjY2lvbmFibGVzIHkgSG9iYmllcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTE3OTgiO3M6NDoic2x1ZyI7czoyNDoiY29sZWNjaW9uYWJsZXMteS1ob2JiaWVzIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjM0IjtzOjY6Im5vbWJyZSI7czoxMjoiQ29tcHV0YWNpw7NuIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJjb21wdXRhY2nDs24iO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6NjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzUiO3M6Njoibm9tYnJlIjtzOjIzOiJDb25zb2xhcyB5IFZpZGVvanVlZ29zICI7czo0OiJpZG1sIjtzOjc6Ik1QRTExNDQiO3M6NDoic2x1ZyI7czoyMjoiY29uc29sYXMteS12aWRlb2p1ZWdvcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aTo3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIzNiI7czo2OiJub21icmUiO3M6MjE6IkPDoW1hcmFzIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTEwMzkiO3M6NDoic2x1ZyI7czoyMToiY8OhbWFyYXMteS1hY2Nlc29yaW9zIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjM3IjtzOjY6Im5vbWJyZSI7czoxODoiRGVwb3J0ZXMgeSBGaXRuZXNzIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTI3NiI7czo0OiJzbHVnIjtzOjE4OiJkZXBvcnRlcy15LWZpdG5lc3MiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6OTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzgiO3M6Njoibm9tYnJlIjtzOjI3OiJFbGVjdHLDs25pY2EsIEF1ZGlvIHkgVmlkZW8iO3M6NDoiaWRtbCI7czo3OiJNUEUxMDAwIjtzOjQ6InNsdWciO3M6MjY6ImVsZWN0csOzbmljYS1hdWRpby15LXZpZGVvIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjEwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIzOSI7czo2OiJub21icmUiO3M6MjY6IkhvZ2FyIHkgRWxlY3Ryb2RvbcOpc3RpY29zIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTU3NCI7czo0OiJzbHVnIjtzOjI2OiJob2dhci15LWVsZWN0cm9kb23DqXN0aWNvcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aToxMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNDAiO3M6Njoibm9tYnJlIjtzOjk6IklubXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTE0NTkiO3M6NDoic2x1ZyI7czo5OiJpbm11ZWJsZXMiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MTI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjQxIjtzOjY6Im5vbWJyZSI7czoyMjoiSW5zdHJ1bWVudG9zIE11c2ljYWxlcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTExODIiO3M6NDoic2x1ZyI7czoyMjoiaW5zdHJ1bWVudG9zLW11c2ljYWxlcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aToxMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNDIiO3M6Njoibm9tYnJlIjtzOjE3OiJKdWVnb3MgeSBKdWd1ZXRlcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTExMzIiO3M6NDoic2x1ZyI7czoxNzoianVlZ29zLXktanVndWV0ZXMiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MTQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjQzIjtzOjY6Im5vbWJyZSI7czoyNToiTGlicm9zLCBSZXZpc3RhcyB5IENvbWljcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTMwMjUiO3M6NDoic2x1ZyI7czoyNDoibGlicm9zLXJldmlzdGFzLXktY29taWNzIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjE1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI0NCI7czo2OiJub21icmUiO3M6MjA6Ik3DunNpY2EgeSBQZWzDrWN1bGFzIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTE2OCI7czo0OiJzbHVnIjtzOjIwOiJtw7pzaWNhLXktcGVsw61jdWxhcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aToxNjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNDUiO3M6Njoibm9tYnJlIjtzOjE3OiJPdHJhcyBjYXRlZ29yw61hcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTE5NTMiO3M6NDoic2x1ZyI7czoxNzoib3RyYXMtY2F0ZWdvcsOtYXMiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MTc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjQ2IjtzOjY6Im5vbWJyZSI7czoyMjoiUm9wYSwgUmVsb2plcyB5IExlbnRlcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTE0MzAiO3M6NDoic2x1ZyI7czoyMToicm9wYS1yZWxvamVzLXktbGVudGVzIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjE4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI0NyI7czo2OiJub21icmUiO3M6OToiU2VydmljaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTU0MCI7czo0OiJzbHVnIjtzOjk6InNlcnZpY2lvcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNzgzOiI8aDEgY2xhc3M9InRpdGxlIj5TYW1zdW5nIEdhbGF4eSBUYWIgNy4wICBQbHVzIDRnIFA2MjAwIDE2Z2IgVGFibGV0IFkgVGVsZWZvbm88L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL3BlcnUuY29tcHJhci1vbmxpbmUteWEuY29tL2FydGljdWxvcy9zYW1zdW5nLWdhbGF4eS10YWItNy0wLXBsdXMtNGctcDYyMDAtMTZnYi10YWJsZXQteS10ZWxlZm9uby8xMTQyMiI+U2Ftc3VuZyBHYWxheHkgVGFiIDcuMCAgUGx1cyA0ZyBQNjIwMCAxNmdiIFRhYmxldCBZIFRlbGVmb25vPC9hPjwvZGl2Pg0KPGRpdiBjbGFzcz0icG9zdF90ZXh0X2FyZWEiPg0KPGEgaHJlZj0iIyI+PGltZyBzcmM9Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01QRV92X0lfZl8yNTQyNTM1OTUyXzAzMjAxMi5qcGciIGFsdD0iU2Ftc3VuZyBHYWxheHkgVGFiIDcuMCAgUGx1cyA0ZyBQNjIwMCAxNmdiIFRhYmxldCBZIFRlbGVmb25vIiBjbGFzcz0idGVtcGxhdGVtb19waWMiIHRpdGxlPSJTYW1zdW5nIEdhbGF4eSBUYWIgNy4wICBQbHVzIDRnIFA2MjAwIDE2Z2IgVGFibGV0IFkgVGVsZWZvbm8iIC8+PC9hPg0KPGgzPiBMaWJyZXMgNGcgQ2xhcm8gWSBNb3Zpc3RhcixjYWphIFNlbGxhZGFzICxnYXJhbnRpYSAsc2FuIEJvcmphLCBWaXNhIDwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5QRU4gJDE2OTkuOTk8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20ucGUvTVBFLTE5NjA5ODgyLXNhbXN1bmctZ2FsYXh5LXRhYi03MC1wbHVzLTRnLXA2MjAwLTE2Z2ItdGFibGV0LXktdGVsZWZvbm8tX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly9wZXJ1LmNvbXByYXItb25saW5lLXlhLmNvbS9jYXRlZ29yaWFzL2NlbHVsYXJlcy15LXRlbMOpZm9ub3MiPkNlbHVsYXJlcyB5IFRlbMOpZm9ub3M8L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Samsung Galaxy Tab 7.0  Plus 4g P6200 16gb Tablet Y Telefono en peru - peru.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Libres,Claro,Movistar,caja,Selladas,garantia,Borja,Visa,Samsung,Galaxy,Plus,P6200,16gb,Tablet,Telefono,peru" />
<meta name="description" content="Comprar en mercadolibre Samsung Galaxy Tab 7.0  Plus 4g P6200 16gb Tablet Y Telefono en peru. comprar Samsung Galaxy Tab 7.0  Plus 4g P6200 16gb Tablet Y Telefono online en peru. comprar online en peru. comprar Samsung Galaxy Tab 7.0  Plus 4g P6200 16gb Tablet Y Telefono en peru" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://peru.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://peru.comprar-online-ya.com/" />
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
    <a href="http://peru.comprar-online-ya.com/" title="Inicio"><img src="http://peru.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://peru.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://peru.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/arte-y-antigüedades" target="_parent">Arte y Antigüedades</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/autos-motos-y-otros" target="_parent">Autos, Motos y Otros</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/celulares-y-teléfonos" target="_parent">Celulares y Teléfonos</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/coleccionables-y-hobbies" target="_parent">Coleccionables y Hobbies</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/consolas-y-videojuegos" target="_parent">Consolas y Videojuegos </a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/cámaras-y-accesorios" target="_parent">Cámaras y Accesorios</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/electrónica-audio-y-video" target="_parent">Electrónica, Audio y Video</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/hogar-y-electrodomésticos" target="_parent">Hogar y Electrodomésticos</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/libros-revistas-y-comics" target="_parent">Libros, Revistas y Comics</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/música-y-películas" target="_parent">Música y Películas</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras categorías</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/ropa-relojes-y-lentes" target="_parent">Ropa, Relojes y Lentes</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                                    
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
        <h1 class="title">Samsung Galaxy Tab 7.0  Plus 4g P6200 16gb Tablet Y Telefono</h1>
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
<div class="post_title"><a href="http://peru.comprar-online-ya.com/articulos/samsung-galaxy-tab-7-0-plus-4g-p6200-16gb-tablet-y-telefono/11422">Samsung Galaxy Tab 7.0  Plus 4g P6200 16gb Tablet Y Telefono</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MPE_v_I_f_2542535952_032012.jpg" alt="Samsung Galaxy Tab 7.0  Plus 4g P6200 16gb Tablet Y Telefono" class="templatemo_pic" title="Samsung Galaxy Tab 7.0  Plus 4g P6200 16gb Tablet Y Telefono" /></a>
<h3> Libres 4g Claro Y Movistar,caja Selladas ,garantia ,san Borja, Visa </h3>

<div style="width: 250px;">Precio: <strong>PEN $1699.99</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.pe/MPE-19609882-samsung-galaxy-tab-70-plus-4g-p6200-16gb-tablet-y-telefono-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://peru.comprar-online-ya.com/categorias/celulares-y-teléfonos">Celulares y Teléfonos</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 peru.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>