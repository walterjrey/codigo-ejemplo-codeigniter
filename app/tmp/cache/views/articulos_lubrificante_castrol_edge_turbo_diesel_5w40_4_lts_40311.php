<!--cachetime:1345016361--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:50:"lubrificante-castrol-edge-turbo-diesel-5w40-4-lts-";i:1;s:5:"40311";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:66:"articulos/lubrificante-castrol-edge-turbo-diesel-5w40-4-lts-/40311";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:67:"/articulos/lubrificante-castrol-edge-turbo-diesel-5w40-4-lts-/40311";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNDgiO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Vzc8OzcmlvcyBwYXJhIFZlw61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDE3NDciO3M6NDoic2x1ZyI7czoyNjoiYWNlc3PDs3Jpb3MtcGFyYS12ZcOtY3Vsb3MiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjQwMzExIjtzOjQ6ImlkbWwiO3M6MTA6Ik1QVDEwNjI2NzUiO3M6NToidGl0bGUiO3M6NTM6Ikx1YnJpZmljYW50ZSBDYXN0cm9sIEVkZ2UgVHVyYm8gRGllc2VsIDV3NDAgKCA0IEx0cy4pIjtzOjg6InN1YnRpdGxlIjtzOjA6IiI7czo1OiJwcmljZSI7czoyOiIzMiI7czo5OiJwZXJtYWxpbmsiO3M6OTY6Imh0dHA6Ly9hbnVuY2lvLm1lcmNhZG9saXZyZS5wdC9NUFQtMTA2MjY3NS1sdWJyaWZpY2FudGUtY2FzdHJvbC1lZGdlLXR1cmJvLWRpZXNlbC01dzQwLTQtbHRzLV9KTSI7czo5OiJ0aHVtYm5haWwiO3M6NTg6Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01QVF92X0lfZl8yODYyMzc1NjEyXzA3MjAxMi5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IkVVUiI7czoxMDoic3RhdGVfbmFtZSI7czo2OiJMaXNib2EiO3M6OToiY2l0eV9uYW1lIjtzOjEzOiJUb3JyZXMgVmVkcmFzIjtzOjExOiJjYXRlZ29yeV9pZCI7czozOiIyNDgiO3M6NToiYWRkZWQiO3M6MTk6IjIwMTItMDctMjcgMDc6MTA6NTciO3M6NDoic2x1ZyI7czo1MDoibHVicmlmaWNhbnRlLWNhc3Ryb2wtZWRnZS10dXJiby1kaWVzZWwtNXc0MC00LWx0cy0iO3M6NToic2l0aW8iO3M6ODoicG9ydHVnYWwiO3M6NjoiY3VzdG9tIjtzOjE6IjAiO319czoxNToibWV0YWRlc2NyaXB0aW9uIjtzOjI3NDoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgTHVicmlmaWNhbnRlIENhc3Ryb2wgRWRnZSBUdXJibyBEaWVzZWwgNXc0MCAoIDQgTHRzLikgZW4gcG9ydHVnYWwuIGNvbXByYXIgTHVicmlmaWNhbnRlIENhc3Ryb2wgRWRnZSBUdXJibyBEaWVzZWwgNXc0MCAoIDQgTHRzLikgb25saW5lIGVuIHBvcnR1Z2FsLiBjb21wcmFyIG9ubGluZSBlbiBwb3J0dWdhbC4gY29tcHJhciBMdWJyaWZpY2FudGUgQ2FzdHJvbCBFZGdlIFR1cmJvIERpZXNlbCA1dzQwICggNCBMdHMuKSBlbiBwb3J0dWdhbCI7czoxMjoibWV0YWtleXdvcmRzIjtzOjk1OiJtZXJjYWRvbGlicmUsY29tcHJhcixvbmxpbmUsbWVyY2Fkb3BhZ28sTHVicmlmaWNhbnRlLENhc3Ryb2wsRWRnZSxUdXJibyxEaWVzZWwsNXc0MCwuKSxwb3J0dWdhbCI7czoxMDoidGl0bGVfcGFnZSI7czo4OToiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgTHVicmlmaWNhbnRlIENhc3Ryb2wgRWRnZSBUdXJibyBEaWVzZWwgNXc0MCAoIDQgTHRzLikgZW4gcG9ydHVnYWwiO3M6MTA6ImNhdGVnb3JpYXMiO2E6MjA6e2k6MDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNDgiO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Vzc8OzcmlvcyBwYXJhIFZlw61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDE3NDciO3M6NDoic2x1ZyI7czoyNjoiYWNlc3PDs3Jpb3MtcGFyYS12ZcOtY3Vsb3MiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjQ5IjtzOjY6Im5vbWJyZSI7czoxOToiQXJ0ZSBlIEFudGlndWlkYWRlcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDEzNjciO3M6NDoic2x1ZyI7czoxOToiYXJ0ZS1lLWFudGlndWlkYWRlcyI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6MjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNTAiO3M6Njoibm9tYnJlIjtzOjIyOiJDYXJyb3MsIE1vdG9zIGUgT3V0cm9zIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTc0MyI7czo0OiJzbHVnIjtzOjIxOiJjYXJyb3MtbW90b3MtZS1vdXRyb3MiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjUxIjtzOjY6Im5vbWJyZSI7czoxMDoiQ29sZcOnw7VlcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDE3OTgiO3M6NDoic2x1ZyI7czoxMDoiY29sZcOnw7VlcyI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6NDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNTIiO3M6Njoibm9tYnJlIjtzOjI0OiJDw6JtYXJhcyBEaWdpdGFpcyBlIEZvdG8iO3M6NDoiaWRtbCI7czo3OiJNUFQxMDM5IjtzOjQ6InNsdWciO3M6MjQ6ImPDom1hcmFzLWRpZ2l0YWlzLWUtZm90byI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6NTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNTMiO3M6Njoibm9tYnJlIjtzOjE4OiJEZXNwb3J0byBlIEZpdG5lc3MiO3M6NDoiaWRtbCI7czo3OiJNUFQxMjc2IjtzOjQ6InNsdWciO3M6MTg6ImRlc3BvcnRvLWUtZml0bmVzcyI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6NjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNTQiO3M6Njoibm9tYnJlIjtzOjE4OiJFbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoiaWRtbCI7czo3OiJNUFQxNTc0IjtzOjQ6InNsdWciO3M6MTg6ImVsZWN0cm9kb23DqXN0aWNvcyI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6NzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNTUiO3M6Njoibm9tYnJlIjtzOjEyOiJFbGVjdHLDs25pY2EiO3M6NDoiaWRtbCI7czo3OiJNUFQxMDAwIjtzOjQ6InNsdWciO3M6MTI6ImVsZWN0csOzbmljYSI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6ODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNTYiO3M6Njoibm9tYnJlIjtzOjg6Ikltw7N2ZWlzIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTQ1OSI7czo0OiJzbHVnIjtzOjg6Imltw7N2ZWlzIjtzOjQ6InNpdGUiO3M6ODoicG9ydHVnYWwiO319aTo5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI1NyI7czo2OiJub21icmUiO3M6MTI6IkluZm9ybcOhdGljYSI7czo0OiJpZG1sIjtzOjc6Ik1QVDE2NDgiO3M6NDoic2x1ZyI7czoxMjoiaW5mb3Jtw6F0aWNhIjtzOjQ6InNpdGUiO3M6ODoicG9ydHVnYWwiO319aToxMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNTgiO3M6Njoibm9tYnJlIjtzOjIxOiJJbnN0cnVtZW50b3MgTXVzaWNhaXMiO3M6NDoiaWRtbCI7czo3OiJNUFQxMTgyIjtzOjQ6InNsdWciO3M6MjE6Imluc3RydW1lbnRvcy1tdXNpY2FpcyI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6MTE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjU5IjtzOjY6Im5vbWJyZSI7czoxODoiSm9nb3MgZSBCcmlucXVlZG9zIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTEzMiI7czo0OiJzbHVnIjtzOjE4OiJqb2dvcy1lLWJyaW5xdWVkb3MiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjEyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI2MCI7czo2OiJub21icmUiO3M6MTg6IkrDs2lhcyBlIFJlbMOzZ2lvcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDM5MzciO3M6NDoic2x1ZyI7czoxODoiasOzaWFzLWUtcmVsw7NnaW9zIjtzOjQ6InNpdGUiO3M6ODoicG9ydHVnYWwiO319aToxMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNjEiO3M6Njoibm9tYnJlIjtzOjI1OiJMaXZyb3MsIFJldmlzdGFzIGUgQ29taWNzIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMzAyNSI7czo0OiJzbHVnIjtzOjI0OiJsaXZyb3MtcmV2aXN0YXMtZS1jb21pY3MiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjE0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI2MiI7czo2OiJub21icmUiO3M6MTY6Ik3DunNpY2EgZSBGaWxtZXMiO3M6NDoiaWRtbCI7czo3OiJNUFQxMTY4IjtzOjQ6InNsdWciO3M6MTY6Im3DunNpY2EtZS1maWxtZXMiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjE1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI2MyI7czo2OiJub21icmUiO3M6MTc6Ik91dHJhcyBjYXRlZ29yaWFzIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTk1MyI7czo0OiJzbHVnIjtzOjE3OiJvdXRyYXMtY2F0ZWdvcmlhcyI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6MTY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjY0IjtzOjY6Im5vbWJyZSI7czoyMDoiUm91cGFzIGUgQWNlc3PDs3Jpb3MiO3M6NDoiaWRtbCI7czo3OiJNUFQxNDMwIjtzOjQ6InNsdWciO3M6MjA6InJvdXBhcy1lLWFjZXNzw7NyaW9zIjtzOjQ6InNpdGUiO3M6ODoicG9ydHVnYWwiO319aToxNzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNjUiO3M6Njoibm9tYnJlIjtzOjk6IlNlcnZpw6dvcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDE1NDAiO3M6NDoic2x1ZyI7czo5OiJzZXJ2acOnb3MiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjE4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI2NiI7czo2OiJub21icmUiO3M6MjM6IlRlbGVtw7N2ZWlzIGUgVGVsZWZvbmVzIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTA1MSI7czo0OiJzbHVnIjtzOjIzOiJ0ZWxlbcOzdmVpcy1lLXRlbGVmb25lcyI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6MTk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjY3IjtzOjY6Im5vbWJyZSI7czoxMDoiVmlkZW9qb2dvcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDExNDQiO3M6NDoic2x1ZyI7czoxMDoidmlkZW9qb2dvcyI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fX1zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTY3NjoiPGgxIGNsYXNzPSJ0aXRsZSI+THVicmlmaWNhbnRlIENhc3Ryb2wgRWRnZSBUdXJibyBEaWVzZWwgNXc0MCAoIDQgTHRzLik8L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL3BvcnR1Z2FsLmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvbHVicmlmaWNhbnRlLWNhc3Ryb2wtZWRnZS10dXJiby1kaWVzZWwtNXc0MC00LWx0cy0vNDAzMTEiPkx1YnJpZmljYW50ZSBDYXN0cm9sIEVkZ2UgVHVyYm8gRGllc2VsIDV3NDAgKCA0IEx0cy4pPC9hPjwvZGl2Pg0KPGRpdiBjbGFzcz0icG9zdF90ZXh0X2FyZWEiPg0KPGEgaHJlZj0iIyI+PGltZyBzcmM9Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01QVF92X0lfZl8yODYyMzc1NjEyXzA3MjAxMi5qcGciIGFsdD0iTHVicmlmaWNhbnRlIENhc3Ryb2wgRWRnZSBUdXJibyBEaWVzZWwgNXc0MCAoIDQgTHRzLikiIGNsYXNzPSJ0ZW1wbGF0ZW1vX3BpYyIgdGl0bGU9Ikx1YnJpZmljYW50ZSBDYXN0cm9sIEVkZ2UgVHVyYm8gRGllc2VsIDV3NDAgKCA0IEx0cy4pIiAvPjwvYT4NCjxoMz48L2gzPg0KDQo8ZGl2IHN0eWxlPSJ3aWR0aDogMjUwcHg7Ij5QcmVjaW86IDxzdHJvbmc+RVVSICQzMi4wMDwvc3Ryb25nPjwvZGl2Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogYW51bmNpbyBiYWpvIHRpdHVsbyAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiOTE5MDc4OTMxNSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCjxiciAvPg0KDQo8YSBjbGFzcz0iYnV5X21sIiByZWw9Im5vZm9sbG93IiBocmVmPSJodHRwOi8vYW51bmNpby5tZXJjYWRvbGl2cmUucHQvTVBULTEwNjI2NzUtbHVicmlmaWNhbnRlLWNhc3Ryb2wtZWRnZS10dXJiby1kaWVzZWwtNXc0MC00LWx0cy1fSk0iIHRhcmdldD0iX2JsYW5rIj5WZXIvQ29tcHJhcjwvYT4NCjwvZGl2Pg0KPGRpdiBjbGFzcz0icHVibGlzaF9kYXRlIj4gQ2F0ZWdvciZpYWN1dGU7YTogPGEgaHJlZj0iaHR0cDovL3BvcnR1Z2FsLmNvbXByYXItb25saW5lLXlhLmNvbS9jYXRlZ29yaWFzL2FjZXNzw7NyaW9zLXBhcmEtdmXDrWN1bG9zIj5BY2Vzc8OzcmlvcyBwYXJhIFZlw61jdWxvczwvYT48L2Rpdj4NCjwvZGl2Pg0KDQoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6ODoiUHJvZHVjdHMiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Lubrificante Castrol Edge Turbo Diesel 5w40 ( 4 Lts.) en portugal - portugal.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Lubrificante,Castrol,Edge,Turbo,Diesel,5w40,.),portugal" />
<meta name="description" content="Comprar en mercadolibre Lubrificante Castrol Edge Turbo Diesel 5w40 ( 4 Lts.) en portugal. comprar Lubrificante Castrol Edge Turbo Diesel 5w40 ( 4 Lts.) online en portugal. comprar online en portugal. comprar Lubrificante Castrol Edge Turbo Diesel 5w40 ( 4 Lts.) en portugal" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://portugal.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://portugal.comprar-online-ya.com/" />
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
    <a href="http://portugal.comprar-online-ya.com/" title="Inicio"><img src="http://portugal.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://portugal.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://portugal.comprar-online-ya.com/categorias/acessórios-para-veículos" target="_parent">Acessórios para Veículos</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/arte-e-antiguidades" target="_parent">Arte e Antiguidades</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/carros-motos-e-outros" target="_parent">Carros, Motos e Outros</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/coleções" target="_parent">Coleções</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/câmaras-digitais-e-foto" target="_parent">Câmaras Digitais e Foto</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/desporto-e-fitness" target="_parent">Desporto e Fitness</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/electrodomésticos" target="_parent">Electrodomésticos</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/electrónica" target="_parent">Electrónica</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/imóveis" target="_parent">Imóveis</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/informática" target="_parent">Informática</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/instrumentos-musicais" target="_parent">Instrumentos Musicais</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/jogos-e-brinquedos" target="_parent">Jogos e Brinquedos</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/jóias-e-relógios" target="_parent">Jóias e Relógios</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/livros-revistas-e-comics" target="_parent">Livros, Revistas e Comics</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/música-e-filmes" target="_parent">Música e Filmes</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/outras-categorias" target="_parent">Outras categorias</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/roupas-e-acessórios" target="_parent">Roupas e Acessórios</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/serviços" target="_parent">Serviços</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/telemóveis-e-telefones" target="_parent">Telemóveis e Telefones</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/videojogos" target="_parent">Videojogos</a></li>
                                                    
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
        <h1 class="title">Lubrificante Castrol Edge Turbo Diesel 5w40 ( 4 Lts.)</h1>
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
<div class="post_title"><a href="http://portugal.comprar-online-ya.com/articulos/lubrificante-castrol-edge-turbo-diesel-5w40-4-lts-/40311">Lubrificante Castrol Edge Turbo Diesel 5w40 ( 4 Lts.)</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MPT_v_I_f_2862375612_072012.jpg" alt="Lubrificante Castrol Edge Turbo Diesel 5w40 ( 4 Lts.)" class="templatemo_pic" title="Lubrificante Castrol Edge Turbo Diesel 5w40 ( 4 Lts.)" /></a>
<h3></h3>

<div style="width: 250px;">Precio: <strong>EUR $32.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://anuncio.mercadolivre.pt/MPT-1062675-lubrificante-castrol-edge-turbo-diesel-5w40-4-lts-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://portugal.comprar-online-ya.com/categorias/acessórios-para-veículos">Acessórios para Veículos</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 portugal.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>