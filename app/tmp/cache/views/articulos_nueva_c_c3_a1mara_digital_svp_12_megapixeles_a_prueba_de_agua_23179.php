<!--cachetime:1345015188--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:57:"nueva-cámara-digital-svp-12-megapixeles-a-prueba-de-agua";i:1;s:5:"23179";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:77:"articulos/nueva-c%C3%A1mara-digital-svp-12-megapixeles-a-prueba-de-agua/23179";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:78:"/articulos/nueva-c%C3%A1mara-digital-svp-12-megapixeles-a-prueba-de-agua/23179";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzUiO3M6Njoibm9tYnJlIjtzOjI1OiJDw6FtYXJhcyBEaWdpdGFsZXMgeSBGb3RvIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTAzOSI7czo0OiJzbHVnIjtzOjI1OiJjw6FtYXJhcy1kaWdpdGFsZXMteS1mb3RvIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319czo3OiJQcm9kdWN0IjthOjE6e3M6NzoiUHJvZHVjdCI7YToxNTp7czoyOiJpZCI7czo1OiIyMzE3OSI7czo0OiJpZG1sIjtzOjEyOiJNUkQ0MDAyOTQ2NDAiO3M6NToidGl0bGUiO3M6NTc6Ik51ZXZhIEPDoW1hcmEgRGlnaXRhbCBTdnAgMTIgTWVnYXBpeGVsZXMgQSBQcnVlYmEgRGUgQWd1YSI7czo4OiJzdWJ0aXRsZSI7czowOiIiO3M6NToicHJpY2UiO3M6NDoiMzgwMCI7czo5OiJwZXJtYWxpbmsiO3M6MTEwOiJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS5kby9NUkQtNDAwMjk0NjQwLW51ZXZhLWNhbWFyYS1kaWdpdGFsLXN2cC0xMi1tZWdhcGl4ZWxlcy1hLXBydWViYS1kZS1hZ3VhLV9KTSI7czo5OiJ0aHVtYm5haWwiO3M6NTg6Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01SRF92X0lfZl8yNTYwOTYyNTI0XzA0MjAxMi5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IkRPUCI7czoxMDoic3RhdGVfbmFtZSI7czo4OiJTYW50aWFnbyI7czo5OiJjaXR5X25hbWUiO3M6ODoiU2FudGlhZ28iO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjM6IjI3NSI7czo1OiJhZGRlZCI7czoxOToiMjAxMi0wNi0yNiAwMDo1ODozMiI7czo0OiJzbHVnIjtzOjU3OiJudWV2YS1jw6FtYXJhLWRpZ2l0YWwtc3ZwLTEyLW1lZ2FwaXhlbGVzLWEtcHJ1ZWJhLWRlLWFndWEiO3M6NToic2l0aW8iO3M6MTA6ImRvbWluaWNhbmEiO3M6NjoiY3VzdG9tIjtzOjE6IjAiO319czoxNToibWV0YWRlc2NyaXB0aW9uIjtzOjI5NDoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgTnVldmEgQ8OhbWFyYSBEaWdpdGFsIFN2cCAxMiBNZWdhcGl4ZWxlcyBBIFBydWViYSBEZSBBZ3VhIGVuIGRvbWluaWNhbmEuIGNvbXByYXIgTnVldmEgQ8OhbWFyYSBEaWdpdGFsIFN2cCAxMiBNZWdhcGl4ZWxlcyBBIFBydWViYSBEZSBBZ3VhIG9ubGluZSBlbiBkb21pbmljYW5hLiBjb21wcmFyIG9ubGluZSBlbiBkb21pbmljYW5hLiBjb21wcmFyIE51ZXZhIEPDoW1hcmEgRGlnaXRhbCBTdnAgMTIgTWVnYXBpeGVsZXMgQSBQcnVlYmEgRGUgQWd1YSBlbiBkb21pbmljYW5hIjtzOjEyOiJtZXRha2V5d29yZHMiO3M6OTM6Im1lcmNhZG9saWJyZSxjb21wcmFyLG9ubGluZSxtZXJjYWRvcGFnbyxOdWV2YSxtYXJhLERpZ2l0YWwsTWVnYXBpeGVsZXMsUHJ1ZWJhLEFndWEsZG9taW5pY2FuYSI7czoxMDoidGl0bGVfcGFnZSI7czo5NToiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgTnVldmEgQ8OhbWFyYSBEaWdpdGFsIFN2cCAxMiBNZWdhcGl4ZWxlcyBBIFBydWViYSBEZSBBZ3VhIGVuIGRvbWluaWNhbmEiO3M6MTA6ImNhdGVnb3JpYXMiO2E6MTk6e2k6MDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNjgiO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Nlc29yaW9zIHBhcmEgVmVow61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDE3NDciO3M6NDoic2x1ZyI7czoyNjoiYWNjZXNvcmlvcy1wYXJhLXZlaMOtY3Vsb3MiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjY5IjtzOjY6Im5vbWJyZSI7czoyMDoiQXJ0ZSB5IEFudGlnw7xlZGFkZXMiO3M6NDoiaWRtbCI7czo3OiJNUkQxMzY3IjtzOjQ6InNsdWciO3M6MjA6ImFydGUteS1hbnRpZ8O8ZWRhZGVzIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aToyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI3MCI7czo2OiJub21icmUiO3M6MjE6IkNhcnJvcywgTW90b3MgeSBPdHJvcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDE3NDMiO3M6NDoic2x1ZyI7czoyMDoiY2Fycm9zLW1vdG9zLXktb3Ryb3MiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjcxIjtzOjY6Im5vbWJyZSI7czoyMjoiQ2VsdWxhcmVzIHkgVGVsw6lmb25vcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDEwNTEiO3M6NDoic2x1ZyI7czoyMjoiY2VsdWxhcmVzLXktdGVsw6lmb25vcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6NDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzIiO3M6Njoibm9tYnJlIjtzOjI0OiJDb2xlY2Npb25hYmxlcyB5IEhvYmJpZXMiO3M6NDoiaWRtbCI7czo3OiJNUkQxNzk4IjtzOjQ6InNsdWciO3M6MjQ6ImNvbGVjY2lvbmFibGVzLXktaG9iYmllcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6NTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzMiO3M6Njoibm9tYnJlIjtzOjEyOiJDb21wdXRhY2nDs24iO3M6NDoiaWRtbCI7czo3OiJNUkQxNjQ4IjtzOjQ6InNsdWciO3M6MTI6ImNvbXB1dGFjacOzbiI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6NjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzQiO3M6Njoibm9tYnJlIjtzOjIyOiJDb25zb2xhcyB5IFZpZGVvanVlZ29zIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTE0NCI7czo0OiJzbHVnIjtzOjIyOiJjb25zb2xhcy15LXZpZGVvanVlZ29zIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aTo3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI3NSI7czo2OiJub21icmUiO3M6MjU6IkPDoW1hcmFzIERpZ2l0YWxlcyB5IEZvdG8iO3M6NDoiaWRtbCI7czo3OiJNUkQxMDM5IjtzOjQ6InNsdWciO3M6MjU6ImPDoW1hcmFzLWRpZ2l0YWxlcy15LWZvdG8iO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjc2IjtzOjY6Im5vbWJyZSI7czoxODoiRGVwb3J0ZXMgeSBGaXRuZXNzIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTI3NiI7czo0OiJzbHVnIjtzOjE4OiJkZXBvcnRlcy15LWZpdG5lc3MiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjc3IjtzOjY6Im5vbWJyZSI7czoyNDoiRWxlY3Ryw7NuaWNhIEF1ZGlvIFZpZGVvIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTAwMCI7czo0OiJzbHVnIjtzOjI0OiJlbGVjdHLDs25pY2EtYXVkaW8tdmlkZW8iO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjEwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI3OCI7czo2OiJub21icmUiO3M6MjY6IkhvZ2FyIHkgRWxlY3Ryb2RvbcOpc3RpY29zIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTU3NCI7czo0OiJzbHVnIjtzOjI2OiJob2dhci15LWVsZWN0cm9kb23DqXN0aWNvcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MTE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjc5IjtzOjY6Im5vbWJyZSI7czo5OiJJbm11ZWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNUkQxNDU5IjtzOjQ6InNsdWciO3M6OToiaW5tdWVibGVzIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aToxMjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyODAiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aToxMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyODEiO3M6Njoibm9tYnJlIjtzOjE3OiJKdWVnb3MgeSBKdWd1ZXRlcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDExMzIiO3M6NDoic2x1ZyI7czoxNzoianVlZ29zLXktanVndWV0ZXMiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjE0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI4MiI7czo2OiJub21icmUiO3M6MjU6IkxpYnJvcywgUmV2aXN0YXMgeSBDb21pY3MiO3M6NDoiaWRtbCI7czo3OiJNUkQzMDI1IjtzOjQ6InNsdWciO3M6MjQ6ImxpYnJvcy1yZXZpc3Rhcy15LWNvbWljcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MTU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjgzIjtzOjY6Im5vbWJyZSI7czoyMDoiTcO6c2ljYSB5IFBlbMOtY3VsYXMiO3M6NDoiaWRtbCI7czo3OiJNUkQxMTY4IjtzOjQ6InNsdWciO3M6MjA6Im3DunNpY2EteS1wZWzDrWN1bGFzIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aToxNjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyODQiO3M6Njoibm9tYnJlIjtzOjE3OiJPdHJhcyBjYXRlZ29yw61hcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDE5NTMiO3M6NDoic2x1ZyI7czoxNzoib3RyYXMtY2F0ZWdvcsOtYXMiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjE3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI4NSI7czo2OiJub21icmUiO3M6MjI6IlJvcGEsIFJlbG9qZXMgeSBMZW50ZXMiO3M6NDoiaWRtbCI7czo3OiJNUkQxNDMwIjtzOjQ6InNsdWciO3M6MjE6InJvcGEtcmVsb2plcy15LWxlbnRlcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MTg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjg2IjtzOjY6Im5vbWJyZSI7czo5OiJTZXJ2aWNpb3MiO3M6NDoiaWRtbCI7czo3OiJNUkQxNTQwIjtzOjQ6InNsdWciO3M6OToic2VydmljaW9zIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNzE3OiI8aDEgY2xhc3M9InRpdGxlIj5OdWV2YSBDw6FtYXJhIERpZ2l0YWwgU3ZwIDEyIE1lZ2FwaXhlbGVzIEEgUHJ1ZWJhIERlIEFndWE8L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL2RvbWluaWNhbmEuY29tcHJhci1vbmxpbmUteWEuY29tL2FydGljdWxvcy9udWV2YS1jw6FtYXJhLWRpZ2l0YWwtc3ZwLTEyLW1lZ2FwaXhlbGVzLWEtcHJ1ZWJhLWRlLWFndWEvMjMxNzkiPk51ZXZhIEPDoW1hcmEgRGlnaXRhbCBTdnAgMTIgTWVnYXBpeGVsZXMgQSBQcnVlYmEgRGUgQWd1YTwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NUkRfdl9JX2ZfMjU2MDk2MjUyNF8wNDIwMTIuanBnIiBhbHQ9Ik51ZXZhIEPDoW1hcmEgRGlnaXRhbCBTdnAgMTIgTWVnYXBpeGVsZXMgQSBQcnVlYmEgRGUgQWd1YSIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iTnVldmEgQ8OhbWFyYSBEaWdpdGFsIFN2cCAxMiBNZWdhcGl4ZWxlcyBBIFBydWViYSBEZSBBZ3VhIiAvPjwvYT4NCjxoMz48L2gzPg0KDQo8ZGl2IHN0eWxlPSJ3aWR0aDogMjUwcHg7Ij5QcmVjaW86IDxzdHJvbmc+RE9QICQzODAwLjAwPC9zdHJvbmc+PC9kaXY+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+PCEtLQ0KZ29vZ2xlX2FkX2NsaWVudCA9ICJjYS1wdWItNzYyOTc3MDEyODUzMjU4OSI7DQovKiBhbnVuY2lvIGJham8gdGl0dWxvICovDQpnb29nbGVfYWRfc2xvdCA9ICI5MTkwNzg5MzE1IjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KPGJyIC8+DQoNCjxhIGNsYXNzPSJidXlfbWwiIHJlbD0ibm9mb2xsb3ciIGhyZWY9Imh0dHA6Ly9hcnRpY3Vsby5tZXJjYWRvbGlicmUuY29tLmRvL01SRC00MDAyOTQ2NDAtbnVldmEtY2FtYXJhLWRpZ2l0YWwtc3ZwLTEyLW1lZ2FwaXhlbGVzLWEtcHJ1ZWJhLWRlLWFndWEtX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly9kb21pbmljYW5hLmNvbXByYXItb25saW5lLXlhLmNvbS9jYXRlZ29yaWFzL2PDoW1hcmFzLWRpZ2l0YWxlcy15LWZvdG8iPkPDoW1hcmFzIERpZ2l0YWxlcyB5IEZvdG88L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Nueva Cámara Digital Svp 12 Megapixeles A Prueba De Agua en dominicana - dominicana.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Nueva,mara,Digital,Megapixeles,Prueba,Agua,dominicana" />
<meta name="description" content="Comprar en mercadolibre Nueva Cámara Digital Svp 12 Megapixeles A Prueba De Agua en dominicana. comprar Nueva Cámara Digital Svp 12 Megapixeles A Prueba De Agua online en dominicana. comprar online en dominicana. comprar Nueva Cámara Digital Svp 12 Megapixeles A Prueba De Agua en dominicana" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://dominicana.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://dominicana.comprar-online-ya.com/" />
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
    <a href="http://dominicana.comprar-online-ya.com/" title="Inicio"><img src="http://dominicana.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://dominicana.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://dominicana.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/arte-y-antigüedades" target="_parent">Arte y Antigüedades</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/carros-motos-y-otros" target="_parent">Carros, Motos y Otros</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/celulares-y-teléfonos" target="_parent">Celulares y Teléfonos</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/coleccionables-y-hobbies" target="_parent">Coleccionables y Hobbies</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/consolas-y-videojuegos" target="_parent">Consolas y Videojuegos</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/cámaras-digitales-y-foto" target="_parent">Cámaras Digitales y Foto</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/electrónica-audio-video" target="_parent">Electrónica Audio Video</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/hogar-y-electrodomésticos" target="_parent">Hogar y Electrodomésticos</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/libros-revistas-y-comics" target="_parent">Libros, Revistas y Comics</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/música-y-películas" target="_parent">Música y Películas</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras categorías</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/ropa-relojes-y-lentes" target="_parent">Ropa, Relojes y Lentes</a></li>
                                    <li><a href="http://dominicana.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                                    
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
        <h1 class="title">Nueva Cámara Digital Svp 12 Megapixeles A Prueba De Agua</h1>
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
<div class="post_title"><a href="http://dominicana.comprar-online-ya.com/articulos/nueva-cámara-digital-svp-12-megapixeles-a-prueba-de-agua/23179">Nueva Cámara Digital Svp 12 Megapixeles A Prueba De Agua</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MRD_v_I_f_2560962524_042012.jpg" alt="Nueva Cámara Digital Svp 12 Megapixeles A Prueba De Agua" class="templatemo_pic" title="Nueva Cámara Digital Svp 12 Megapixeles A Prueba De Agua" /></a>
<h3></h3>

<div style="width: 250px;">Precio: <strong>DOP $3800.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.do/MRD-400294640-nueva-camara-digital-svp-12-megapixeles-a-prueba-de-agua-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://dominicana.comprar-online-ya.com/categorias/cámaras-digitales-y-foto">Cámaras Digitales y Foto</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 dominicana.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>