<!--cachetime:1345016863--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:53:"camara-pluma-espia-4gb-mini-dvr-memoria-interna-video";i:1;s:5:"27513";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:69:"articulos/camara-pluma-espia-4gb-mini-dvr-memoria-interna-video/27513";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:70:"/articulos/camara-pluma-espia-4gb-mini-dvr-memoria-interna-video/27513";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMDciO3M6Njoibm9tYnJlIjtzOjI3OiJFbGVjdHLDs25pY2EsIEF1ZGlvIHkgVmlkZW8iO3M6NDoiaWRtbCI7czo3OiJNRUMxMDAwIjtzOjQ6InNsdWciO3M6MjY6ImVsZWN0csOzbmljYS1hdWRpby15LXZpZGVvIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjI3NTEzIjtzOjQ6ImlkbWwiO3M6MTI6Ik1FQzQwMDU1MjM3OCI7czo1OiJ0aXRsZSI7czo1MzoiQ2FtYXJhIFBsdW1hIEVzcGlhIDRnYiBNaW5pIER2ciBNZW1vcmlhIEludGVybmEgVmlkZW8iO3M6ODoic3VidGl0bGUiO3M6NDM6Ik1lbW9yaWEgSW50ZXJuYSBEZSA0Z2IgTGEgTWVqb3IgRGVsIE1lcmNhZG8iO3M6NToicHJpY2UiO3M6NToiNDQuOTUiO3M6OToicGVybWFsaW5rIjtzOjEwNzoiaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20uZWMvTUVDLTQwMDU1MjM3OC1jYW1hcmEtcGx1bWEtZXNwaWEtNGdiLW1pbmktZHZyLW1lbW9yaWEtaW50ZXJuYS12aWRlby1fSk0iO3M6OToidGh1bWJuYWlsIjtzOjUzOiJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NRUNfdl9JX2ZfNzIyOTY2M183Mjk1LmpwZyI7czoxMToiY3VycmVuY3lfaWQiO3M6MzoiVVNEIjtzOjEwOiJzdGF0ZV9uYW1lIjtzOjY6Ikd1YXlhcyI7czo5OiJjaXR5X25hbWUiO3M6OToiR3VheWFxdWlsIjtzOjExOiJjYXRlZ29yeV9pZCI7czozOiIxMDciO3M6NToiYWRkZWQiO3M6MTk6IjIwMTItMDctMDMgMTI6NDE6MzYiO3M6NDoic2x1ZyI7czo1MzoiY2FtYXJhLXBsdW1hLWVzcGlhLTRnYi1taW5pLWR2ci1tZW1vcmlhLWludGVybmEtdmlkZW8iO3M6NToic2l0aW8iO3M6NzoiZWN1YWRvciI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6MjcwOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBDYW1hcmEgUGx1bWEgRXNwaWEgNGdiIE1pbmkgRHZyIE1lbW9yaWEgSW50ZXJuYSBWaWRlbyBlbiBlY3VhZG9yLiBjb21wcmFyIENhbWFyYSBQbHVtYSBFc3BpYSA0Z2IgTWluaSBEdnIgTWVtb3JpYSBJbnRlcm5hIFZpZGVvIG9ubGluZSBlbiBlY3VhZG9yLiBjb21wcmFyIG9ubGluZSBlbiBlY3VhZG9yLiBjb21wcmFyIENhbWFyYSBQbHVtYSBFc3BpYSA0Z2IgTWluaSBEdnIgTWVtb3JpYSBJbnRlcm5hIFZpZGVvIGVuIGVjdWFkb3IiO3M6MTI6Im1ldGFrZXl3b3JkcyI7czoxMDc6Im1lcmNhZG9saWJyZSxjb21wcmFyLG9ubGluZSxtZXJjYWRvcGFnbyxNZW1vcmlhLEludGVybmEsTWVqb3IsTWVyY2FkbyxDYW1hcmEsUGx1bWEsRXNwaWEsTWluaSxWaWRlbyxlY3VhZG9yIjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjg4OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBDYW1hcmEgUGx1bWEgRXNwaWEgNGdiIE1pbmkgRHZyIE1lbW9yaWEgSW50ZXJuYSBWaWRlbyBlbiBlY3VhZG9yIjtzOjEwOiJjYXRlZ29yaWFzIjthOjE5OntpOjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiOTciO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Nlc29yaW9zIHBhcmEgVmVow61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzU3MjUiO3M6NDoic2x1ZyI7czoyNjoiYWNjZXNvcmlvcy1wYXJhLXZlaMOtY3Vsb3MiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI5OCI7czo2OiJub21icmUiO3M6MTk6IkFuaW1hbGVzIHkgTWFzY290YXMiO3M6NDoiaWRtbCI7czo3OiJNRUMxMDcxIjtzOjQ6InNsdWciO3M6MTk6ImFuaW1hbGVzLXktbWFzY290YXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI5OSI7czo2OiJub21icmUiO3M6MjA6IkFydGUgeSBBbnRpZ8O8ZWRhZGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTM2NyI7czo0OiJzbHVnIjtzOjIwOiJhcnRlLXktYW50aWfDvGVkYWRlcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aTozO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEwMCI7czo2OiJub21icmUiO3M6MjA6IkF1dG9zLCBNb3RvcyB5IE90cm9zIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTc0MyI7czo0OiJzbHVnIjtzOjE5OiJhdXRvcy1tb3Rvcy15LW90cm9zIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTAxIjtzOjY6Im5vbWJyZSI7czoyMjoiQ2VsdWxhcmVzIHkgVGVsZWZvbsOtYSI7czo0OiJpZG1sIjtzOjc6Ik1FQzEwNTEiO3M6NDoic2x1ZyI7czoyMjoiY2VsdWxhcmVzLXktdGVsZWZvbsOtYSI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aTo1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEwMiI7czo2OiJub21icmUiO3M6MTQ6IkNvbGVjY2lvbmFibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTc5OCI7czo0OiJzbHVnIjtzOjE0OiJjb2xlY2Npb25hYmxlcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aTo2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEwMyI7czo2OiJub21icmUiO3M6MTI6IkNvbXB1dGFjacOzbiI7czo0OiJpZG1sIjtzOjc6Ik1FQzE2NDgiO3M6NDoic2x1ZyI7czoxMjoiY29tcHV0YWNpw7NuIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTA0IjtzOjY6Im5vbWJyZSI7czoyMjoiQ29uc29sYXMgeSBWaWRlb2p1ZWdvcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzExNDQiO3M6NDoic2x1ZyI7czoyMjoiY29uc29sYXMteS12aWRlb2p1ZWdvcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aTo4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEwNSI7czo2OiJub21icmUiO3M6MjE6IkPDoW1hcmFzIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzEwMzkiO3M6NDoic2x1ZyI7czoyMToiY8OhbWFyYXMteS1hY2Nlc29yaW9zIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTA2IjtzOjY6Im5vbWJyZSI7czoxODoiRGVwb3J0ZXMgeSBGaXRuZXNzIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTI3NiI7czo0OiJzbHVnIjtzOjE4OiJkZXBvcnRlcy15LWZpdG5lc3MiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MTA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTA3IjtzOjY6Im5vbWJyZSI7czoyNzoiRWxlY3Ryw7NuaWNhLCBBdWRpbyB5IFZpZGVvIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTAwMCI7czo0OiJzbHVnIjtzOjI2OiJlbGVjdHLDs25pY2EtYXVkaW8teS12aWRlbyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aToxMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMDgiO3M6Njoibm9tYnJlIjtzOjE1OiJIb2dhciB5IE11ZWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNRUMxNTc0IjtzOjQ6InNsdWciO3M6MTU6ImhvZ2FyLXktbXVlYmxlcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aToxMjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMDkiO3M6Njoibm9tYnJlIjtzOjk6IklubXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzE0NTkiO3M6NDoic2x1ZyI7czo5OiJpbm11ZWJsZXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MTM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTEwIjtzOjY6Im5vbWJyZSI7czoyMjoiSW5zdHJ1bWVudG9zIE11c2ljYWxlcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzExODIiO3M6NDoic2x1ZyI7czoyMjoiaW5zdHJ1bWVudG9zLW11c2ljYWxlcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aToxNDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMTEiO3M6Njoibm9tYnJlIjtzOjE3OiJKdWVnb3MgeSBKdWd1ZXRlcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzExMzIiO3M6NDoic2x1ZyI7czoxNzoianVlZ29zLXktanVndWV0ZXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MTU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTEyIjtzOjY6Im5vbWJyZSI7czoyODoiTcO6c2ljYSwgTGlicm9zIHkgUGVsw61jdWxhcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzExNjgiO3M6NDoic2x1ZyI7czoyNzoibcO6c2ljYS1saWJyb3MteS1wZWzDrWN1bGFzIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjE2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjExMyI7czo2OiJub21icmUiO3M6MTc6Ik90cmFzIGNhdGVnb3LDrWFzIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTk1MyI7czo0OiJzbHVnIjtzOjE3OiJvdHJhcy1jYXRlZ29yw61hcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aToxNzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMTQiO3M6Njoibm9tYnJlIjtzOjIxOiJSb3BhLCBKb3lhcyB5IFJlbG9qZXMiO3M6NDoiaWRtbCI7czo3OiJNRUMxNDMwIjtzOjQ6InNsdWciO3M6MjA6InJvcGEtam95YXMteS1yZWxvamVzIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjE4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjExNSI7czo2OiJub21icmUiO3M6OToiU2VydmljaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTU0MCI7czo0OiJzbHVnIjtzOjk6InNlcnZpY2lvcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNzI3OiI8aDEgY2xhc3M9InRpdGxlIj5DYW1hcmEgUGx1bWEgRXNwaWEgNGdiIE1pbmkgRHZyIE1lbW9yaWEgSW50ZXJuYSBWaWRlbzwvaDE+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+PCEtLQ0KZ29vZ2xlX2FkX2NsaWVudCA9ICJjYS1wdWItNzYyOTc3MDEyODUzMjU4OSI7DQovKiBjb3kgNDY4eDE1ICggYXJ0aWN1bG9zICkgKi8NCmdvb2dsZV9hZF9zbG90ID0gIjU2ODY0MTk4MjEiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQoNCjxkaXYgY2xhc3M9InBvc3RfYm94IiBhbGlnbj0ianVzdGlmeSI+DQo8ZGl2IGNsYXNzPSJwb3N0X3RpdGxlIj48YSBocmVmPSJodHRwOi8vZWN1YWRvci5jb21wcmFyLW9ubGluZS15YS5jb20vYXJ0aWN1bG9zL2NhbWFyYS1wbHVtYS1lc3BpYS00Z2ItbWluaS1kdnItbWVtb3JpYS1pbnRlcm5hLXZpZGVvLzI3NTEzIj5DYW1hcmEgUGx1bWEgRXNwaWEgNGdiIE1pbmkgRHZyIE1lbW9yaWEgSW50ZXJuYSBWaWRlbzwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NRUNfdl9JX2ZfNzIyOTY2M183Mjk1LmpwZyIgYWx0PSJDYW1hcmEgUGx1bWEgRXNwaWEgNGdiIE1pbmkgRHZyIE1lbW9yaWEgSW50ZXJuYSBWaWRlbyIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iQ2FtYXJhIFBsdW1hIEVzcGlhIDRnYiBNaW5pIER2ciBNZW1vcmlhIEludGVybmEgVmlkZW8iIC8+PC9hPg0KPGgzPk1lbW9yaWEgSW50ZXJuYSBEZSA0Z2IgTGEgTWVqb3IgRGVsIE1lcmNhZG88L2gzPg0KDQo8ZGl2IHN0eWxlPSJ3aWR0aDogMjUwcHg7Ij5QcmVjaW86IDxzdHJvbmc+VVNEICQ0NC45NTwvc3Ryb25nPjwvZGl2Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogYW51bmNpbyBiYWpvIHRpdHVsbyAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiOTE5MDc4OTMxNSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCjxiciAvPg0KDQo8YSBjbGFzcz0iYnV5X21sIiByZWw9Im5vZm9sbG93IiBocmVmPSJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS5lYy9NRUMtNDAwNTUyMzc4LWNhbWFyYS1wbHVtYS1lc3BpYS00Z2ItbWluaS1kdnItbWVtb3JpYS1pbnRlcm5hLXZpZGVvLV9KTSIgdGFyZ2V0PSJfYmxhbmsiPlZlci9Db21wcmFyPC9hPg0KPC9kaXY+DQo8ZGl2IGNsYXNzPSJwdWJsaXNoX2RhdGUiPiBDYXRlZ29yJmlhY3V0ZTthOiA8YSBocmVmPSJodHRwOi8vZWN1YWRvci5jb21wcmFyLW9ubGluZS15YS5jb20vY2F0ZWdvcmlhcy9lbGVjdHLDs25pY2EtYXVkaW8teS12aWRlbyI+RWxlY3Ryw7NuaWNhLCBBdWRpbyB5IFZpZGVvPC9hPjwvZGl2Pg0KPC9kaXY+DQoNCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo4OiJQcm9kdWN0cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Camara Pluma Espia 4gb Mini Dvr Memoria Interna Video en ecuador - ecuador.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Memoria,Interna,Mejor,Mercado,Camara,Pluma,Espia,Mini,Video,ecuador" />
<meta name="description" content="Comprar en mercadolibre Camara Pluma Espia 4gb Mini Dvr Memoria Interna Video en ecuador. comprar Camara Pluma Espia 4gb Mini Dvr Memoria Interna Video online en ecuador. comprar online en ecuador. comprar Camara Pluma Espia 4gb Mini Dvr Memoria Interna Video en ecuador" />
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
        <h1 class="title">Camara Pluma Espia 4gb Mini Dvr Memoria Interna Video</h1>
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
<div class="post_title"><a href="http://ecuador.comprar-online-ya.com/articulos/camara-pluma-espia-4gb-mini-dvr-memoria-interna-video/27513">Camara Pluma Espia 4gb Mini Dvr Memoria Interna Video</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MEC_v_I_f_7229663_7295.jpg" alt="Camara Pluma Espia 4gb Mini Dvr Memoria Interna Video" class="templatemo_pic" title="Camara Pluma Espia 4gb Mini Dvr Memoria Interna Video" /></a>
<h3>Memoria Interna De 4gb La Mejor Del Mercado</h3>

<div style="width: 250px;">Precio: <strong>USD $44.95</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.ec/MEC-400552378-camara-pluma-espia-4gb-mini-dvr-memoria-interna-video-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://ecuador.comprar-online-ya.com/categorias/electrónica-audio-y-video">Electrónica, Audio y Video</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 ecuador.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>