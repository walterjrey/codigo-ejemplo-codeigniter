<!--cachetime:1345017316--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:58:"camara-fuji-film-hs20-exr-16mp-30x-hdmi-hd-profesional-exr";i:1;s:4:"9776";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:73:"articulos/camara-fuji-film-hs20-exr-16mp-30x-hdmi-hd-profesional-exr/9776";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:74:"/articulos/camara-fuji-film-hs20-exr-16mp-30x-hdmi-hd-profesional-exr/9776";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxOTQiO3M6Njoibm9tYnJlIjtzOjIxOiJDw6FtYXJhcyB5IEFjY2Vzb3Jpb3MiO3M6NDoiaWRtbCI7czo3OiJNTFYxMDM5IjtzOjQ6InNsdWciO3M6MjE6ImPDoW1hcmFzLXktYWNjZXNvcmlvcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjQ6Ijk3NzYiO3M6NDoiaWRtbCI7czoxMToiTUxWMzg3MDIxMjUiO3M6NToidGl0bGUiO3M6NTg6IkNhbWFyYSBGdWppIEZpbG0gSHMyMCBFeHIgMTZtcCAzMHggSGRtaSBIZCBQcm9mZXNpb25hbCBFeHIiO3M6ODoic3VidGl0bGUiO3M6NzA6IlRpZW5kYSBFbiBDaGFjYW8gRnVsbCBIZCBNZWdhIFpvb20gRmxhc2ggSW50ZWxpZ2VudGUgUmFmYWdhIFBhbm9yYW1pY2EiO3M6NToicHJpY2UiO3M6NDoiMzk5OSI7czo5OiJwZXJtYWxpbmsiO3M6MTExOiJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS52ZS9NTFYtMzg3MDIxMjUtY2FtYXJhLWZ1amktZmlsbS1oczIwLWV4ci0xNm1wLTMweC1oZG1pLWhkLXByb2Zlc2lvbmFsLWV4ci1fSk0iO3M6OToidGh1bWJuYWlsIjtzOjU4OiJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NTFZfdl9JX2ZfMjU5NDYxOTc3OV8wNDIwMTIuanBnIjtzOjExOiJjdXJyZW5jeV9pZCI7czozOiJWRUYiO3M6MTA6InN0YXRlX25hbWUiO3M6MTY6IkRpc3RyaXRvIENhcGl0YWwiO3M6OToiY2l0eV9uYW1lIjtzOjE0OiJDSEFDQU8gQ0FSQUNBUyI7czoxMToiY2F0ZWdvcnlfaWQiO3M6MzoiMTk0IjtzOjU6ImFkZGVkIjtzOjE5OiIyMDEyLTA2LTA5IDIyOjQyOjQwIjtzOjQ6InNsdWciO3M6NTg6ImNhbWFyYS1mdWppLWZpbG0taHMyMC1leHItMTZtcC0zMHgtaGRtaS1oZC1wcm9mZXNpb25hbC1leHIiO3M6NToic2l0aW8iO3M6OToidmVuZXp1ZWxhIjtzOjY6ImN1c3RvbSI7czoxOiIwIjt9fXM6MTU6Im1ldGFkZXNjcmlwdGlvbiI7czoyOTM6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIENhbWFyYSBGdWppIEZpbG0gSHMyMCBFeHIgMTZtcCAzMHggSGRtaSBIZCBQcm9mZXNpb25hbCBFeHIgZW4gdmVuZXp1ZWxhLiBjb21wcmFyIENhbWFyYSBGdWppIEZpbG0gSHMyMCBFeHIgMTZtcCAzMHggSGRtaSBIZCBQcm9mZXNpb25hbCBFeHIgb25saW5lIGVuIHZlbmV6dWVsYS4gY29tcHJhciBvbmxpbmUgZW4gdmVuZXp1ZWxhLiBjb21wcmFyIENhbWFyYSBGdWppIEZpbG0gSHMyMCBFeHIgMTZtcCAzMHggSGRtaSBIZCBQcm9mZXNpb25hbCBFeHIgZW4gdmVuZXp1ZWxhIjtzOjEyOiJtZXRha2V5d29yZHMiO3M6MTU4OiJtZXJjYWRvbGlicmUsY29tcHJhcixvbmxpbmUsbWVyY2Fkb3BhZ28sVGllbmRhLENoYWNhbyxGdWxsLE1lZ2EsWm9vbSxGbGFzaCxJbnRlbGlnZW50ZSxSYWZhZ2EsUGFub3JhbWljYSxDYW1hcmEsRnVqaSxGaWxtLEhzMjAsMTZtcCxIZG1pLFByb2Zlc2lvbmFsLHZlbmV6dWVsYSI7czoxMDoidGl0bGVfcGFnZSI7czo5NToiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgQ2FtYXJhIEZ1amkgRmlsbSBIczIwIEV4ciAxNm1wIDMweCBIZG1pIEhkIFByb2Zlc2lvbmFsIEV4ciBlbiB2ZW5lenVlbGEiO3M6MTA6ImNhdGVnb3JpYXMiO2E6MjM6e2k6MDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODciO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Nlc29yaW9zIHBhcmEgVmVow61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjE3NDciO3M6NDoic2x1ZyI7czoyNjoiYWNjZXNvcmlvcy1wYXJhLXZlaMOtY3Vsb3MiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4OCI7czo2OiJub21icmUiO3M6MTk6IkFuaW1hbGVzIHkgTWFzY290YXMiO3M6NDoiaWRtbCI7czo3OiJNTFYxMDcxIjtzOjQ6InNsdWciO3M6MTk6ImFuaW1hbGVzLXktbWFzY290YXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4OSI7czo2OiJub21icmUiO3M6NjoiQmViw6lzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTM4NCI7czo0OiJzbHVnIjtzOjY6ImJlYsOpcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTkwIjtzOjY6Im5vbWJyZSI7czoyMToiQ2Fycm9zLCBNb3RvcyB5IE90cm9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTc0MyI7czo0OiJzbHVnIjtzOjIwOiJjYXJyb3MtbW90b3MteS1vdHJvcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTkxIjtzOjY6Im5vbWJyZSI7czoyMjoiQ2VsdWxhcmVzIHkgVGVsw6lmb25vcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjEwNTEiO3M6NDoic2x1ZyI7czoyMjoiY2VsdWxhcmVzLXktdGVsw6lmb25vcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTkyIjtzOjY6Im5vbWJyZSI7czoyNDoiQ29sZWNjaW9uYWJsZXMgeSBIb2JiaWVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTc5OCI7czo0OiJzbHVnIjtzOjI0OiJjb2xlY2Npb25hYmxlcy15LWhvYmJpZXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aTo2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE5MyI7czo2OiJub21icmUiO3M6MTI6IkNvbXB1dGFjacOzbiI7czo0OiJpZG1sIjtzOjc6Ik1MVjE2NDgiO3M6NDoic2x1ZyI7czoxMjoiY29tcHV0YWNpw7NuIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6NzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxOTQiO3M6Njoibm9tYnJlIjtzOjIxOiJDw6FtYXJhcyB5IEFjY2Vzb3Jpb3MiO3M6NDoiaWRtbCI7czo3OiJNTFYxMDM5IjtzOjQ6InNsdWciO3M6MjE6ImPDoW1hcmFzLXktYWNjZXNvcmlvcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTk1IjtzOjY6Im5vbWJyZSI7czoyNDoiQ8OzbnNvbGFzIHkgVmlkZW9qdWVnb3MgIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTE0NCI7czo0OiJzbHVnIjtzOjIzOiJjw7Nuc29sYXMteS12aWRlb2p1ZWdvcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTk2IjtzOjY6Im5vbWJyZSI7czoxODoiRGVwb3J0ZXMgeSBGaXRuZXNzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTI3NiI7czo0OiJzbHVnIjtzOjE4OiJkZXBvcnRlcy15LWZpdG5lc3MiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToxMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxOTciO3M6Njoibm9tYnJlIjtzOjE4OiJFbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoiaWRtbCI7czo3OiJNTFY1NzI2IjtzOjQ6InNsdWciO3M6MTg6ImVsZWN0cm9kb23DqXN0aWNvcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjExO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE5OCI7czo2OiJub21icmUiO3M6Mjg6IkVsZWN0csOzbmljYSwgIEF1ZGlvIHkgVmlkZW8iO3M6NDoiaWRtbCI7czo3OiJNTFYxMDAwIjtzOjQ6InNsdWciO3M6MjY6ImVsZWN0csOzbmljYS1hdWRpby15LXZpZGVvIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MTI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTk5IjtzOjY6Im5vbWJyZSI7czoxNToiSG9nYXIgeSBNdWVibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTU3NCI7czo0OiJzbHVnIjtzOjE1OiJob2dhci15LW11ZWJsZXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToxMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDAiO3M6Njoibm9tYnJlIjtzOjEwOiJJbmR1c3RyaWFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTQ5OSI7czo0OiJzbHVnIjtzOjEwOiJpbmR1c3RyaWFzIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MTQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjAxIjtzOjY6Im5vbWJyZSI7czo5OiJJbm11ZWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNTFYxNDU5IjtzOjQ6InNsdWciO3M6OToiaW5tdWVibGVzIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MTU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjAyIjtzOjY6Im5vbWJyZSI7czoyMjoiSW5zdHJ1bWVudG9zIE11c2ljYWxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjExODIiO3M6NDoic2x1ZyI7czoyMjoiaW5zdHJ1bWVudG9zLW11c2ljYWxlcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjE2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIwMyI7czo2OiJub21icmUiO3M6MTc6Ikp1ZWdvcyB5IEp1Z3VldGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTEzMiI7czo0OiJzbHVnIjtzOjE3OiJqdWVnb3MteS1qdWd1ZXRlcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjE3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIwNCI7czo2OiJub21icmUiO3M6Mjg6IkxpYnJvcywgTcO6c2ljYSB5IFBlbMOtY3VsYXMiO3M6NDoiaWRtbCI7czo3OiJNTFYzMDI1IjtzOjQ6InNsdWciO3M6Mjc6ImxpYnJvcy1tw7pzaWNhLXktcGVsw61jdWxhcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjE4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIwNSI7czo2OiJub21icmUiO3M6MTc6Ik90cmFzIENhdGVnb3LDrWFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTk1MyI7czo0OiJzbHVnIjtzOjE3OiJvdHJhcy1jYXRlZ29yw61hcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjE5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIwNiI7czo2OiJub21icmUiO3M6Mjc6IlJlbG9qZXMsIEpveWFzIHkgQmlzdXRlcsOtYSI7czo0OiJpZG1sIjtzOjc6Ik1MVjM5MzciO3M6NDoic2x1ZyI7czoyNjoicmVsb2plcy1qb3lhcy15LWJpc3V0ZXLDrWEiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToyMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDciO3M6Njoibm9tYnJlIjtzOjI2OiJSb3BhLCBaYXBhdG9zIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjE0MzAiO3M6NDoic2x1ZyI7czoyNToicm9wYS16YXBhdG9zLXktYWNjZXNvcmlvcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjIxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIwOCI7czo2OiJub21icmUiO3M6MTU6IlNhbHVkIHkgQmVsbGV6YSI7czo0OiJpZG1sIjtzOjc6Ik1MVjEyNDYiO3M6NDoic2x1ZyI7czoxNToic2FsdWQteS1iZWxsZXphIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjA5IjtzOjY6Im5vbWJyZSI7czo5OiJTZXJ2aWNpb3MiO3M6NDoiaWRtbCI7czo3OiJNTFYxNTQwIjtzOjQ6InNsdWciO3M6OToic2VydmljaW9zIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fX1zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTc4MjoiPGgxIGNsYXNzPSJ0aXRsZSI+Q2FtYXJhIEZ1amkgRmlsbSBIczIwIEV4ciAxNm1wIDMweCBIZG1pIEhkIFByb2Zlc2lvbmFsIEV4cjwvaDE+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+PCEtLQ0KZ29vZ2xlX2FkX2NsaWVudCA9ICJjYS1wdWItNzYyOTc3MDEyODUzMjU4OSI7DQovKiBjb3kgNDY4eDE1ICggYXJ0aWN1bG9zICkgKi8NCmdvb2dsZV9hZF9zbG90ID0gIjU2ODY0MTk4MjEiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQoNCjxkaXYgY2xhc3M9InBvc3RfYm94IiBhbGlnbj0ianVzdGlmeSI+DQo8ZGl2IGNsYXNzPSJwb3N0X3RpdGxlIj48YSBocmVmPSJodHRwOi8vdmVuZXp1ZWxhLmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvY2FtYXJhLWZ1amktZmlsbS1oczIwLWV4ci0xNm1wLTMweC1oZG1pLWhkLXByb2Zlc2lvbmFsLWV4ci85Nzc2Ij5DYW1hcmEgRnVqaSBGaWxtIEhzMjAgRXhyIDE2bXAgMzB4IEhkbWkgSGQgUHJvZmVzaW9uYWwgRXhyPC9hPjwvZGl2Pg0KPGRpdiBjbGFzcz0icG9zdF90ZXh0X2FyZWEiPg0KPGEgaHJlZj0iIyI+PGltZyBzcmM9Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01MVl92X0lfZl8yNTk0NjE5Nzc5XzA0MjAxMi5qcGciIGFsdD0iQ2FtYXJhIEZ1amkgRmlsbSBIczIwIEV4ciAxNm1wIDMweCBIZG1pIEhkIFByb2Zlc2lvbmFsIEV4ciIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iQ2FtYXJhIEZ1amkgRmlsbSBIczIwIEV4ciAxNm1wIDMweCBIZG1pIEhkIFByb2Zlc2lvbmFsIEV4ciIgLz48L2E+DQo8aDM+VGllbmRhIEVuIENoYWNhbyBGdWxsIEhkIE1lZ2EgWm9vbSBGbGFzaCBJbnRlbGlnZW50ZSBSYWZhZ2EgUGFub3JhbWljYTwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5WRUYgJDM5OTkuMDA8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20udmUvTUxWLTM4NzAyMTI1LWNhbWFyYS1mdWppLWZpbG0taHMyMC1leHItMTZtcC0zMHgtaGRtaS1oZC1wcm9mZXNpb25hbC1leHItX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly92ZW5lenVlbGEuY29tcHJhci1vbmxpbmUteWEuY29tL2NhdGVnb3JpYXMvY8OhbWFyYXMteS1hY2Nlc29yaW9zIj5Dw6FtYXJhcyB5IEFjY2Vzb3Jpb3M8L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Camara Fuji Film Hs20 Exr 16mp 30x Hdmi Hd Profesional Exr en venezuela - venezuela.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Tienda,Chacao,Full,Mega,Zoom,Flash,Inteligente,Rafaga,Panoramica,Camara,Fuji,Film,Hs20,16mp,Hdmi,Profesional,venezuela" />
<meta name="description" content="Comprar en mercadolibre Camara Fuji Film Hs20 Exr 16mp 30x Hdmi Hd Profesional Exr en venezuela. comprar Camara Fuji Film Hs20 Exr 16mp 30x Hdmi Hd Profesional Exr online en venezuela. comprar online en venezuela. comprar Camara Fuji Film Hs20 Exr 16mp 30x Hdmi Hd Profesional Exr en venezuela" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://venezuela.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://venezuela.comprar-online-ya.com/" />
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
    <a href="http://venezuela.comprar-online-ya.com/" title="Inicio"><img src="http://venezuela.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://venezuela.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://venezuela.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/animales-y-mascotas" target="_parent">Animales y Mascotas</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/bebés" target="_parent">Bebés</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/carros-motos-y-otros" target="_parent">Carros, Motos y Otros</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/celulares-y-teléfonos" target="_parent">Celulares y Teléfonos</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/coleccionables-y-hobbies" target="_parent">Coleccionables y Hobbies</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/cámaras-y-accesorios" target="_parent">Cámaras y Accesorios</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/cónsolas-y-videojuegos" target="_parent">Cónsolas y Videojuegos </a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/electrodomésticos" target="_parent">Electrodomésticos</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/electrónica-audio-y-video" target="_parent">Electrónica,  Audio y Video</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/hogar-y-muebles" target="_parent">Hogar y Muebles</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/industrias" target="_parent">Industrias</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/libros-música-y-películas" target="_parent">Libros, Música y Películas</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras Categorías</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/relojes-joyas-y-bisutería" target="_parent">Relojes, Joyas y Bisutería</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/ropa-zapatos-y-accesorios" target="_parent">Ropa, Zapatos y Accesorios</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/salud-y-belleza" target="_parent">Salud y Belleza</a></li>
                                    <li><a href="http://venezuela.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                                    
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
        <h1 class="title">Camara Fuji Film Hs20 Exr 16mp 30x Hdmi Hd Profesional Exr</h1>
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
<div class="post_title"><a href="http://venezuela.comprar-online-ya.com/articulos/camara-fuji-film-hs20-exr-16mp-30x-hdmi-hd-profesional-exr/9776">Camara Fuji Film Hs20 Exr 16mp 30x Hdmi Hd Profesional Exr</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLV_v_I_f_2594619779_042012.jpg" alt="Camara Fuji Film Hs20 Exr 16mp 30x Hdmi Hd Profesional Exr" class="templatemo_pic" title="Camara Fuji Film Hs20 Exr 16mp 30x Hdmi Hd Profesional Exr" /></a>
<h3>Tienda En Chacao Full Hd Mega Zoom Flash Inteligente Rafaga Panoramica</h3>

<div style="width: 250px;">Precio: <strong>VEF $3999.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.ve/MLV-38702125-camara-fuji-film-hs20-exr-16mp-30x-hdmi-hd-profesional-exr-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://venezuela.comprar-online-ya.com/categorias/cámaras-y-accesorios">Cámaras y Accesorios</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 venezuela.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>