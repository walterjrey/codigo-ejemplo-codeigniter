<!--cachetime:1345018414--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:60:"aretes-collares-pulsera-bisutería-calidad-mayoreo-11-88-pza";i:1;s:5:"25788";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:80:"articulos/aretes-collares-pulsera-bisuter%C3%ADa-calidad-mayoreo-11-88-pza/25788";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:81:"/articulos/aretes-collares-pulsera-bisuter%C3%ADa-calidad-mayoreo-11-88-pza/25788";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTYiO3M6Njoibm9tYnJlIjtzOjE1OiJKb3lhcyB5IFJlbG9qZXMiO3M6NDoiaWRtbCI7czo3OiJNTE0zOTM3IjtzOjQ6InNsdWciO3M6MTU6ImpveWFzLXktcmVsb2plcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjI1Nzg4IjtzOjQ6ImlkbWwiO3M6MTI6Ik1MTTQwNDA3NzA1MSI7czo1OiJ0aXRsZSI7czo2MToiQXJldGVzIENvbGxhcmVzIFB1bHNlcmEgQmlzdXRlcsOtYSBDYWxpZGFkIE1heW9yZW8gJDExLjg4IFB6YSI7czo4OiJzdWJ0aXRsZSI7czo2MzoiUHJvZHVjdG9zIFNlbGVjY2lvbmFkb3MhICBNb2RhIENhbGlkYWQgWSBQcmVjaW8hICBHYW5hIE3DoXMgJCQhIjtzOjU6InByaWNlIjtzOjQ6IjEwMDAiO3M6OToicGVybWFsaW5rIjtzOjExMjoiaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20ubXgvTUxNLTQwNDA3NzA1MS1hcmV0ZXMtY29sbGFyZXMtcHVsc2VyYS1iaXN1dGVyaWEtY2FsaWRhZC1tYXlvcmVvLTExODgtcHphLV9KTSI7czo5OiJ0aHVtYm5haWwiO3M6NTQ6Imh0dHA6Ly9pbWcxLm1sc3RhdGljLmNvbS9zX01MTV92X0lfZl83NzQxMzE2Nl8yNjA4LmpwZyI7czoxMToiY3VycmVuY3lfaWQiO3M6MzoiTVhOIjtzOjEwOiJzdGF0ZV9uYW1lIjtzOjY6IkNvbGltYSI7czo5OiJjaXR5X25hbWUiO3M6NjoiQ29saW1hIjtzOjExOiJjYXRlZ29yeV9pZCI7czozOiIxNTYiO3M6NToiYWRkZWQiO3M6MTk6IjIwMTItMDctMDIgMDA6Mzc6MjUiO3M6NDoic2x1ZyI7czo2MDoiYXJldGVzLWNvbGxhcmVzLXB1bHNlcmEtYmlzdXRlcsOtYS1jYWxpZGFkLW1heW9yZW8tMTEtODgtcHphIjtzOjU6InNpdGlvIjtzOjY6Im1leGljbyI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6MjkwOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBBcmV0ZXMgQ29sbGFyZXMgUHVsc2VyYSBCaXN1dGVyw61hIENhbGlkYWQgTWF5b3JlbyAkMTEuODggUHphIGVuIG1leGljby4gY29tcHJhciBBcmV0ZXMgQ29sbGFyZXMgUHVsc2VyYSBCaXN1dGVyw61hIENhbGlkYWQgTWF5b3JlbyAkMTEuODggUHphIG9ubGluZSBlbiBtZXhpY28uIGNvbXByYXIgb25saW5lIGVuIG1leGljby4gY29tcHJhciBBcmV0ZXMgQ29sbGFyZXMgUHVsc2VyYSBCaXN1dGVyw61hIENhbGlkYWQgTWF5b3JlbyAkMTEuODggUHphIGVuIG1leGljbyI7czoxMjoibWV0YWtleXdvcmRzIjtzOjEzOToibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLFByb2R1Y3RvcyxTZWxlY2Npb25hZG9zLE1vZGEsQ2FsaWRhZCxQcmVjaW8sR2FuYSwkJCEsQXJldGVzLENvbGxhcmVzLFB1bHNlcmEsQmlzdXRlcixNYXlvcmVvLG1leGljbyI7czoxMDoidGl0bGVfcGFnZSI7czo5NToiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgQXJldGVzIENvbGxhcmVzIFB1bHNlcmEgQmlzdXRlcsOtYSBDYWxpZGFkIE1heW9yZW8gJDExLjg4IFB6YSBlbiBtZXhpY28iO3M6MTA6ImNhdGVnb3JpYXMiO2E6MjM6e2k6MDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNDEiO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Nlc29yaW9zIHBhcmEgVmVow61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1MTTE3NDciO3M6NDoic2x1ZyI7czoyNjoiYWNjZXNvcmlvcy1wYXJhLXZlaMOtY3Vsb3MiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE0MiI7czo2OiJub21icmUiO3M6MTk6IkFuaW1hbGVzIHkgTWFzY290YXMiO3M6NDoiaWRtbCI7czo3OiJNTE0xMDcxIjtzOjQ6InNsdWciO3M6MTk6ImFuaW1hbGVzLXktbWFzY290YXMiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE0MyI7czo2OiJub21icmUiO3M6MjA6IkFydGUgeSBBbnRpZ8O8ZWRhZGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTM2NyI7czo0OiJzbHVnIjtzOjIwOiJhcnRlLXktYW50aWfDvGVkYWRlcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTQ0IjtzOjY6Im5vbWJyZSI7czoyMDoiQXV0b3MsIE1vdG9zIHkgT3Ryb3MiO3M6NDoiaWRtbCI7czo3OiJNTE0xNzQzIjtzOjQ6InNsdWciO3M6MTk6ImF1dG9zLW1vdG9zLXktb3Ryb3MiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aTo0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE0NSI7czo2OiJub21icmUiO3M6MjI6IkNlbHVsYXJlcyB5IFRlbGVmb27DrWEiO3M6NDoiaWRtbCI7czo3OiJNTE0xMDUxIjtzOjQ6InNsdWciO3M6MjI6ImNlbHVsYXJlcy15LXRlbGVmb27DrWEiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aTo1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE0NiI7czo2OiJub21icmUiO3M6MTQ6IkNvbGVjY2lvbmFibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTc5OCI7czo0OiJzbHVnIjtzOjE0OiJjb2xlY2Npb25hYmxlcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTQ3IjtzOjY6Im5vbWJyZSI7czoxMjoiQ29tcHV0YWNpw7NuIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJjb21wdXRhY2nDs24iO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aTo3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE0OCI7czo2OiJub21icmUiO3M6MjI6IkNvbnNvbGFzIHkgVmlkZW9qdWVnb3MiO3M6NDoiaWRtbCI7czo3OiJNTE0xMTQ0IjtzOjQ6InNsdWciO3M6MjI6ImNvbnNvbGFzLXktdmlkZW9qdWVnb3MiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aTo4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE0OSI7czo2OiJub21icmUiO3M6MjE6IkPDoW1hcmFzIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1MTTEwMzkiO3M6NDoic2x1ZyI7czoyMToiY8OhbWFyYXMteS1hY2Nlc29yaW9zIjtzOjQ6InNpdGUiO3M6NjoibWV4aWNvIjt9fWk6OTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTAiO3M6Njoibm9tYnJlIjtzOjE5OiJEZXBvcnRlcyB5IEZpdG5lc3MgIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTI3NiI7czo0OiJzbHVnIjtzOjE4OiJkZXBvcnRlcy15LWZpdG5lc3MiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToxMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTEiO3M6Njoibm9tYnJlIjtzOjI3OiJFbGVjdHLDs25pY2EsIEF1ZGlvIHkgVmlkZW8iO3M6NDoiaWRtbCI7czo3OiJNTE0xMDAwIjtzOjQ6InNsdWciO3M6MjY6ImVsZWN0csOzbmljYS1hdWRpby15LXZpZGVvIjtzOjQ6InNpdGUiO3M6NjoibWV4aWNvIjt9fWk6MTE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTUyIjtzOjY6Im5vbWJyZSI7czoyNjoiSG9nYXIgeSBFbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoiaWRtbCI7czo3OiJNTE0xNTc0IjtzOjQ6InNsdWciO3M6MjY6ImhvZ2FyLXktZWxlY3Ryb2RvbcOpc3RpY29zIjtzOjQ6InNpdGUiO3M6NjoibWV4aWNvIjt9fWk6MTI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTUzIjtzOjY6Im5vbWJyZSI7czoyMToiSW5kdXN0cmlhcyB5IE9maWNpbmFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTQ5OSI7czo0OiJzbHVnIjtzOjIxOiJpbmR1c3RyaWFzLXktb2ZpY2luYXMiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToxMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTQiO3M6Njoibm9tYnJlIjtzOjk6IklubXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MTTE0NTkiO3M6NDoic2x1ZyI7czo5OiJpbm11ZWJsZXMiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToxNDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTUiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6NjoibWV4aWNvIjt9fWk6MTU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTU2IjtzOjY6Im5vbWJyZSI7czoxNToiSm95YXMgeSBSZWxvamVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMzkzNyI7czo0OiJzbHVnIjtzOjE1OiJqb3lhcy15LXJlbG9qZXMiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToxNjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTciO3M6Njoibm9tYnJlIjtzOjE3OiJKdWVnb3MgeSBKdWd1ZXRlcyI7czo0OiJpZG1sIjtzOjc6Ik1MTTExMzIiO3M6NDoic2x1ZyI7czoxNzoianVlZ29zLXktanVndWV0ZXMiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToxNzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTgiO3M6Njoibm9tYnJlIjtzOjI1OiJMaWJyb3MsIFJldmlzdGFzIHkgQ29taWNzIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMzAyNSI7czo0OiJzbHVnIjtzOjI0OiJsaWJyb3MtcmV2aXN0YXMteS1jb21pY3MiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToxODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTkiO3M6Njoibm9tYnJlIjtzOjI4OiJNw7pzaWNhLCBQZWzDrWN1bGFzIHkgU2VyaWVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTE2OCI7czo0OiJzbHVnIjtzOjI3OiJtw7pzaWNhLXBlbMOtY3VsYXMteS1zZXJpZXMiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToxOTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjAiO3M6Njoibm9tYnJlIjtzOjE3OiJPdHJhcyBDYXRlZ29yw61hcyI7czo0OiJpZG1sIjtzOjc6Ik1MTTE5NTMiO3M6NDoic2x1ZyI7czoxNzoib3RyYXMtY2F0ZWdvcsOtYXMiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToyMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjEiO3M6Njoibm9tYnJlIjtzOjIyOiJSb3BhLCBCb2xzYXMgeSBDYWx6YWRvIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTQzMCI7czo0OiJzbHVnIjtzOjIxOiJyb3BhLWJvbHNhcy15LWNhbHphZG8iO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToyMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjIiO3M6Njoibm9tYnJlIjtzOjE1OiJTYWx1ZCB5IEJlbGxlemEiO3M6NDoiaWRtbCI7czo3OiJNTE0xMjQ2IjtzOjQ6InNsdWciO3M6MTU6InNhbHVkLXktYmVsbGV6YSI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjIyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2MyI7czo2OiJub21icmUiO3M6OToiU2VydmljaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTU0MCI7czo0OiJzbHVnIjtzOjk6InNlcnZpY2lvcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE3Njk6IjxoMSBjbGFzcz0idGl0bGUiPkFyZXRlcyBDb2xsYXJlcyBQdWxzZXJhIEJpc3V0ZXLDrWEgQ2FsaWRhZCBNYXlvcmVvICQxMS44OCBQemE8L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL21leGljby5jb21wcmFyLW9ubGluZS15YS5jb20vYXJ0aWN1bG9zL2FyZXRlcy1jb2xsYXJlcy1wdWxzZXJhLWJpc3V0ZXLDrWEtY2FsaWRhZC1tYXlvcmVvLTExLTg4LXB6YS8yNTc4OCI+QXJldGVzIENvbGxhcmVzIFB1bHNlcmEgQmlzdXRlcsOtYSBDYWxpZGFkIE1heW9yZW8gJDExLjg4IFB6YTwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMS5tbHN0YXRpYy5jb20vc19NTE1fdl9JX2ZfNzc0MTMxNjZfMjYwOC5qcGciIGFsdD0iQXJldGVzIENvbGxhcmVzIFB1bHNlcmEgQmlzdXRlcsOtYSBDYWxpZGFkIE1heW9yZW8gJDExLjg4IFB6YSIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iQXJldGVzIENvbGxhcmVzIFB1bHNlcmEgQmlzdXRlcsOtYSBDYWxpZGFkIE1heW9yZW8gJDExLjg4IFB6YSIgLz48L2E+DQo8aDM+UHJvZHVjdG9zIFNlbGVjY2lvbmFkb3MhICBNb2RhIENhbGlkYWQgWSBQcmVjaW8hICBHYW5hIE3DoXMgJCQhPC9oMz4NCg0KPGRpdiBzdHlsZT0id2lkdGg6IDI1MHB4OyI+UHJlY2lvOiA8c3Ryb25nPk1YTiAkMTAwMC4wMDwvc3Ryb25nPjwvZGl2Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogYW51bmNpbyBiYWpvIHRpdHVsbyAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiOTE5MDc4OTMxNSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCjxiciAvPg0KDQo8YSBjbGFzcz0iYnV5X21sIiByZWw9Im5vZm9sbG93IiBocmVmPSJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS5teC9NTE0tNDA0MDc3MDUxLWFyZXRlcy1jb2xsYXJlcy1wdWxzZXJhLWJpc3V0ZXJpYS1jYWxpZGFkLW1heW9yZW8tMTE4OC1wemEtX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly9tZXhpY28uY29tcHJhci1vbmxpbmUteWEuY29tL2NhdGVnb3JpYXMvam95YXMteS1yZWxvamVzIj5Kb3lhcyB5IFJlbG9qZXM8L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Aretes Collares Pulsera Bisutería Calidad Mayoreo $11.88 Pza en mexico - mexico.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Productos,Seleccionados,Moda,Calidad,Precio,Gana,$$!,Aretes,Collares,Pulsera,Bisuter,Mayoreo,mexico" />
<meta name="description" content="Comprar en mercadolibre Aretes Collares Pulsera Bisutería Calidad Mayoreo $11.88 Pza en mexico. comprar Aretes Collares Pulsera Bisutería Calidad Mayoreo $11.88 Pza online en mexico. comprar online en mexico. comprar Aretes Collares Pulsera Bisutería Calidad Mayoreo $11.88 Pza en mexico" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://mexico.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://mexico.comprar-online-ya.com/" />
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
    <a href="http://mexico.comprar-online-ya.com/" title="Inicio"><img src="http://mexico.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://mexico.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://mexico.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/animales-y-mascotas" target="_parent">Animales y Mascotas</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/arte-y-antigüedades" target="_parent">Arte y Antigüedades</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/autos-motos-y-otros" target="_parent">Autos, Motos y Otros</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/celulares-y-telefonía" target="_parent">Celulares y Telefonía</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/coleccionables" target="_parent">Coleccionables</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/consolas-y-videojuegos" target="_parent">Consolas y Videojuegos</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/cámaras-y-accesorios" target="_parent">Cámaras y Accesorios</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness </a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/electrónica-audio-y-video" target="_parent">Electrónica, Audio y Video</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/hogar-y-electrodomésticos" target="_parent">Hogar y Electrodomésticos</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/industrias-y-oficinas" target="_parent">Industrias y Oficinas</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/joyas-y-relojes" target="_parent">Joyas y Relojes</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/libros-revistas-y-comics" target="_parent">Libros, Revistas y Comics</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/música-películas-y-series" target="_parent">Música, Películas y Series</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras Categorías</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/ropa-bolsas-y-calzado" target="_parent">Ropa, Bolsas y Calzado</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/salud-y-belleza" target="_parent">Salud y Belleza</a></li>
                                    <li><a href="http://mexico.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                                    
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
        <h1 class="title">Aretes Collares Pulsera Bisutería Calidad Mayoreo $11.88 Pza</h1>
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
<div class="post_title"><a href="http://mexico.comprar-online-ya.com/articulos/aretes-collares-pulsera-bisutería-calidad-mayoreo-11-88-pza/25788">Aretes Collares Pulsera Bisutería Calidad Mayoreo $11.88 Pza</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img1.mlstatic.com/s_MLM_v_I_f_77413166_2608.jpg" alt="Aretes Collares Pulsera Bisutería Calidad Mayoreo $11.88 Pza" class="templatemo_pic" title="Aretes Collares Pulsera Bisutería Calidad Mayoreo $11.88 Pza" /></a>
<h3>Productos Seleccionados!  Moda Calidad Y Precio!  Gana Más $$!</h3>

<div style="width: 250px;">Precio: <strong>MXN $1000.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.mx/MLM-404077051-aretes-collares-pulsera-bisuteria-calidad-mayoreo-1188-pza-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://mexico.comprar-online-ya.com/categorias/joyas-y-relojes">Joyas y Relojes</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 mexico.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>