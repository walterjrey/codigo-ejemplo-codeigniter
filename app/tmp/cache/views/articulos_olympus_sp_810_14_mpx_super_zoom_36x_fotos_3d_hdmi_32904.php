<!--cachetime:1345018015--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:50:"olympus-sp-810-14-mpx-super-zoom-36x-fotos-3d-hdmi";i:1;s:5:"32904";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:66:"articulos/olympus-sp-810-14-mpx-super-zoom-36x-fotos-3d-hdmi/32904";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:67:"/articulos/olympus-sp-810-14-mpx-super-zoom-36x-fotos-3d-hdmi/32904";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI2MSI7czo2OiJub21icmUiO3M6MjE6IkPDoW1hcmFzIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1DTzEwMzkiO3M6NDoic2x1ZyI7czoyMToiY8OhbWFyYXMteS1hY2Nlc29yaW9zIjtzOjQ6InNpdGUiO3M6ODoiY29sb21iaWEiO319czo3OiJQcm9kdWN0IjthOjE6e3M6NzoiUHJvZHVjdCI7YToxNTp7czoyOiJpZCI7czo1OiIzMjkwNCI7czo0OiJpZG1sIjtzOjEyOiJNQ080MDE2Mzc4NzAiO3M6NToidGl0bGUiO3M6NTc6Ik9seW1wdXMgU3AtODEwLCAgMTQgTXB4LCAgU3VwZXIgWm9vbSAzNnggLCBGb3RvcyAzZCwgSGRtaSI7czo4OiJzdWJ0aXRsZSI7czo3MDoiUGFudGFsbGEgMyBQdWxnYWRhcywgUGFub3JhbWljYSwgVmlkZW8gSGQsIE1lbW9yaWEgOGcsIFN1cGVyIFByb21vY2lvbiI7czo1OiJwcmljZSI7czo2OiI1OTkwMDAiO3M6OToicGVybWFsaW5rIjtzOjEwNDoiaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20uY28vTUNPLTQwMTYzNzg3MC1vbHltcHVzLXNwLTgxMC0xNC1tcHgtc3VwZXItem9vbS0zNngtZm90b3MtM2QtaGRtaS1fSk0iO3M6OToidGh1bWJuYWlsIjtzOjU4OiJodHRwOi8vaW1nMS5tbHN0YXRpYy5jb20vc19NQ09fdl9JX2ZfMjQxNTAyMDczOF8wMjIwMTIuanBnIjtzOjExOiJjdXJyZW5jeV9pZCI7czozOiJDT1AiO3M6MTA6InN0YXRlX25hbWUiO3M6OToiU2FudGFuZGVyIjtzOjk6ImNpdHlfbmFtZSI7czoxMToiQnVjYXJhbWFuZ2EiO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjI6IjYxIjtzOjU6ImFkZGVkIjtzOjE5OiIyMDEyLTA3LTEzIDAwOjQxOjE4IjtzOjQ6InNsdWciO3M6NTA6Im9seW1wdXMtc3AtODEwLTE0LW1weC1zdXBlci16b29tLTM2eC1mb3Rvcy0zZC1oZG1pIjtzOjU6InNpdGlvIjtzOjg6ImNvbG9tYmlhIjtzOjY6ImN1c3RvbSI7czoxOiIwIjt9fXM6MTU6Im1ldGFkZXNjcmlwdGlvbiI7czoyODY6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIE9seW1wdXMgU3AtODEwLCAgMTQgTXB4LCAgU3VwZXIgWm9vbSAzNnggLCBGb3RvcyAzZCwgSGRtaSBlbiBjb2xvbWJpYS4gY29tcHJhciBPbHltcHVzIFNwLTgxMCwgIDE0IE1weCwgIFN1cGVyIFpvb20gMzZ4ICwgRm90b3MgM2QsIEhkbWkgb25saW5lIGVuIGNvbG9tYmlhLiBjb21wcmFyIG9ubGluZSBlbiBjb2xvbWJpYS4gY29tcHJhciBPbHltcHVzIFNwLTgxMCwgIDE0IE1weCwgIFN1cGVyIFpvb20gMzZ4ICwgRm90b3MgM2QsIEhkbWkgZW4gY29sb21iaWEiO3M6MTI6Im1ldGFrZXl3b3JkcyI7czoxMzE6Im1lcmNhZG9saWJyZSxjb21wcmFyLG9ubGluZSxtZXJjYWRvcGFnbyxQYW50YWxsYSxQdWxnYWRhcyxQYW5vcmFtaWNhLFZpZGVvLE1lbW9yaWEsU3VwZXIsUHJvbW9jaW9uLE9seW1wdXMsWm9vbSxGb3RvcyxIZG1pLGNvbG9tYmlhIjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjkzOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBPbHltcHVzIFNwLTgxMCwgIDE0IE1weCwgIFN1cGVyIFpvb20gMzZ4ICwgRm90b3MgM2QsIEhkbWkgZW4gY29sb21iaWEiO3M6MTA6ImNhdGVnb3JpYXMiO2E6MjM6e2k6MDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI1NCI7czo2OiJub21icmUiO3M6MjY6IkFjY2Vzb3Jpb3MgcGFyYSBWZWjDrWN1bG9zIjtzOjQ6ImlkbWwiO3M6NzoiTUNPMTc0NyI7czo0OiJzbHVnIjtzOjI2OiJhY2Nlc29yaW9zLXBhcmEtdmVow61jdWxvcyI7czo0OiJzaXRlIjtzOjg6ImNvbG9tYmlhIjt9fWk6MTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI1NSI7czo2OiJub21icmUiO3M6MTk6IkFuaW1hbGVzIHkgTWFzY290YXMiO3M6NDoiaWRtbCI7czo3OiJNQ08xMDcxIjtzOjQ6InNsdWciO3M6MTk6ImFuaW1hbGVzLXktbWFzY290YXMiO3M6NDoic2l0ZSI7czo4OiJjb2xvbWJpYSI7fX1pOjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNTYiO3M6Njoibm9tYnJlIjtzOjIxOiJDYXJyb3MsIE1vdG9zIHkgT3Ryb3MiO3M6NDoiaWRtbCI7czo3OiJNQ08xNzQzIjtzOjQ6InNsdWciO3M6MjA6ImNhcnJvcy1tb3Rvcy15LW90cm9zIjtzOjQ6InNpdGUiO3M6ODoiY29sb21iaWEiO319aTozO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjU3IjtzOjY6Im5vbWJyZSI7czoyMjoiQ2VsdWxhcmVzIHkgVGVsw6lmb25vcyI7czo0OiJpZG1sIjtzOjc6Ik1DTzEwNTEiO3M6NDoic2x1ZyI7czoyMjoiY2VsdWxhcmVzLXktdGVsw6lmb25vcyI7czo0OiJzaXRlIjtzOjg6ImNvbG9tYmlhIjt9fWk6NDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI1OCI7czo2OiJub21icmUiO3M6MjQ6IkNvbGVjY2lvbmFibGVzIHkgSG9iYmllcyI7czo0OiJpZG1sIjtzOjc6Ik1DTzE3OTgiO3M6NDoic2x1ZyI7czoyNDoiY29sZWNjaW9uYWJsZXMteS1ob2JiaWVzIjtzOjQ6InNpdGUiO3M6ODoiY29sb21iaWEiO319aTo1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjU5IjtzOjY6Im5vbWJyZSI7czoxMjoiQ29tcHV0YWNpw7NuIjtzOjQ6ImlkbWwiO3M6NzoiTUNPMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJjb21wdXRhY2nDs24iO3M6NDoic2l0ZSI7czo4OiJjb2xvbWJpYSI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNjAiO3M6Njoibm9tYnJlIjtzOjIzOiJDb25zb2xhcyB5IFZpZGVvanVlZ29zICI7czo0OiJpZG1sIjtzOjc6Ik1DTzExNDQiO3M6NDoic2x1ZyI7czoyMjoiY29uc29sYXMteS12aWRlb2p1ZWdvcyI7czo0OiJzaXRlIjtzOjg6ImNvbG9tYmlhIjt9fWk6NzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI2MSI7czo2OiJub21icmUiO3M6MjE6IkPDoW1hcmFzIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1DTzEwMzkiO3M6NDoic2x1ZyI7czoyMToiY8OhbWFyYXMteS1hY2Nlc29yaW9zIjtzOjQ6InNpdGUiO3M6ODoiY29sb21iaWEiO319aTo4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjYyIjtzOjY6Im5vbWJyZSI7czoxODoiRGVwb3J0ZXMgeSBGaXRuZXNzIjtzOjQ6ImlkbWwiO3M6NzoiTUNPMTI3NiI7czo0OiJzbHVnIjtzOjE4OiJkZXBvcnRlcy15LWZpdG5lc3MiO3M6NDoic2l0ZSI7czo4OiJjb2xvbWJpYSI7fX1pOjk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNjMiO3M6Njoibm9tYnJlIjtzOjE4OiJFbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoiaWRtbCI7czo3OiJNQ081NzI2IjtzOjQ6InNsdWciO3M6MTg6ImVsZWN0cm9kb23DqXN0aWNvcyI7czo0OiJzaXRlIjtzOjg6ImNvbG9tYmlhIjt9fWk6MTA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNjQiO3M6Njoibm9tYnJlIjtzOjI3OiJFbGVjdHLDs25pY2EsIEF1ZGlvIHkgVmlkZW8iO3M6NDoiaWRtbCI7czo3OiJNQ08xMDAwIjtzOjQ6InNsdWciO3M6MjY6ImVsZWN0csOzbmljYS1hdWRpby15LXZpZGVvIjtzOjQ6InNpdGUiO3M6ODoiY29sb21iaWEiO319aToxMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI2NSI7czo2OiJub21icmUiO3M6MTU6IkhvZ2FyIHkgTXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1DTzE1NzQiO3M6NDoic2x1ZyI7czoxNToiaG9nYXIteS1tdWVibGVzIjtzOjQ6InNpdGUiO3M6ODoiY29sb21iaWEiO319aToxMjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI2NiI7czo2OiJub21icmUiO3M6MjE6IkluZHVzdHJpYXMgeSBPZmljaW5hcyI7czo0OiJpZG1sIjtzOjc6Ik1DTzE0OTkiO3M6NDoic2x1ZyI7czoyMToiaW5kdXN0cmlhcy15LW9maWNpbmFzIjtzOjQ6InNpdGUiO3M6ODoiY29sb21iaWEiO319aToxMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI2NyI7czo2OiJub21icmUiO3M6OToiSW5tdWVibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUNPMTQ1OSI7czo0OiJzbHVnIjtzOjk6ImlubXVlYmxlcyI7czo0OiJzaXRlIjtzOjg6ImNvbG9tYmlhIjt9fWk6MTQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNjgiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUNPMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6ODoiY29sb21iaWEiO319aToxNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI2OSI7czo2OiJub21icmUiO3M6MTc6Ikp1ZWdvcyB5IEp1Z3VldGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUNPMTEzMiI7czo0OiJzbHVnIjtzOjE3OiJqdWVnb3MteS1qdWd1ZXRlcyI7czo0OiJzaXRlIjtzOjg6ImNvbG9tYmlhIjt9fWk6MTY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNzAiO3M6Njoibm9tYnJlIjtzOjI1OiJMaWJyb3MsIFJldmlzdGFzIHkgQ29taWNzIjtzOjQ6ImlkbWwiO3M6NzoiTUNPMzAyNSI7czo0OiJzbHVnIjtzOjI0OiJsaWJyb3MtcmV2aXN0YXMteS1jb21pY3MiO3M6NDoic2l0ZSI7czo4OiJjb2xvbWJpYSI7fX1pOjE3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjcxIjtzOjY6Im5vbWJyZSI7czoyODoiTcO6c2ljYSwgUGVsw61jdWxhcyB5IFNlcmllcyI7czo0OiJpZG1sIjtzOjc6Ik1DTzExNjgiO3M6NDoic2x1ZyI7czoyNzoibcO6c2ljYS1wZWzDrWN1bGFzLXktc2VyaWVzIjtzOjQ6InNpdGUiO3M6ODoiY29sb21iaWEiO319aToxODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI3MiI7czo2OiJub21icmUiO3M6MTc6Ik90cmFzIGNhdGVnb3LDrWFzIjtzOjQ6ImlkbWwiO3M6NzoiTUNPMTk1MyI7czo0OiJzbHVnIjtzOjE3OiJvdHJhcy1jYXRlZ29yw61hcyI7czo0OiJzaXRlIjtzOjg6ImNvbG9tYmlhIjt9fWk6MTk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNzMiO3M6Njoibm9tYnJlIjtzOjE1OiJSZWxvamVzIHkgSm95YXMiO3M6NDoiaWRtbCI7czo3OiJNQ08zOTM3IjtzOjQ6InNsdWciO3M6MTU6InJlbG9qZXMteS1qb3lhcyI7czo0OiJzaXRlIjtzOjg6ImNvbG9tYmlhIjt9fWk6MjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNzQiO3M6Njoibm9tYnJlIjtzOjE3OiJSb3BhIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1DTzE0MzAiO3M6NDoic2x1ZyI7czoxNzoicm9wYS15LWFjY2Vzb3Jpb3MiO3M6NDoic2l0ZSI7czo4OiJjb2xvbWJpYSI7fX1pOjIxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6Ijc1IjtzOjY6Im5vbWJyZSI7czoxNToiU2FsdWQgeSBCZWxsZXphIjtzOjQ6ImlkbWwiO3M6NzoiTUNPMTI0NiI7czo0OiJzbHVnIjtzOjE1OiJzYWx1ZC15LWJlbGxlemEiO3M6NDoic2l0ZSI7czo4OiJjb2xvbWJpYSI7fX1pOjIyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6Ijc2IjtzOjY6Im5vbWJyZSI7czo5OiJTZXJ2aWNpb3MiO3M6NDoiaWRtbCI7czo3OiJNQ08xNTQwIjtzOjQ6InNsdWciO3M6OToic2VydmljaW9zIjtzOjQ6InNpdGUiO3M6ODoiY29sb21iaWEiO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNzY0OiI8aDEgY2xhc3M9InRpdGxlIj5PbHltcHVzIFNwLTgxMCwgIDE0IE1weCwgIFN1cGVyIFpvb20gMzZ4ICwgRm90b3MgM2QsIEhkbWk8L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL2NvbG9tYmlhLmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3Mvb2x5bXB1cy1zcC04MTAtMTQtbXB4LXN1cGVyLXpvb20tMzZ4LWZvdG9zLTNkLWhkbWkvMzI5MDQiPk9seW1wdXMgU3AtODEwLCAgMTQgTXB4LCAgU3VwZXIgWm9vbSAzNnggLCBGb3RvcyAzZCwgSGRtaTwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMS5tbHN0YXRpYy5jb20vc19NQ09fdl9JX2ZfMjQxNTAyMDczOF8wMjIwMTIuanBnIiBhbHQ9Ik9seW1wdXMgU3AtODEwLCAgMTQgTXB4LCAgU3VwZXIgWm9vbSAzNnggLCBGb3RvcyAzZCwgSGRtaSIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iT2x5bXB1cyBTcC04MTAsICAxNCBNcHgsICBTdXBlciBab29tIDM2eCAsIEZvdG9zIDNkLCBIZG1pIiAvPjwvYT4NCjxoMz5QYW50YWxsYSAzIFB1bGdhZGFzLCBQYW5vcmFtaWNhLCBWaWRlbyBIZCwgTWVtb3JpYSA4ZywgU3VwZXIgUHJvbW9jaW9uPC9oMz4NCg0KPGRpdiBzdHlsZT0id2lkdGg6IDI1MHB4OyI+UHJlY2lvOiA8c3Ryb25nPkNPUCAkNTk5MDAwLjAwPC9zdHJvbmc+PC9kaXY+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+PCEtLQ0KZ29vZ2xlX2FkX2NsaWVudCA9ICJjYS1wdWItNzYyOTc3MDEyODUzMjU4OSI7DQovKiBhbnVuY2lvIGJham8gdGl0dWxvICovDQpnb29nbGVfYWRfc2xvdCA9ICI5MTkwNzg5MzE1IjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KPGJyIC8+DQoNCjxhIGNsYXNzPSJidXlfbWwiIHJlbD0ibm9mb2xsb3ciIGhyZWY9Imh0dHA6Ly9hcnRpY3Vsby5tZXJjYWRvbGlicmUuY29tLmNvL01DTy00MDE2Mzc4NzAtb2x5bXB1cy1zcC04MTAtMTQtbXB4LXN1cGVyLXpvb20tMzZ4LWZvdG9zLTNkLWhkbWktX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly9jb2xvbWJpYS5jb21wcmFyLW9ubGluZS15YS5jb20vY2F0ZWdvcmlhcy9jw6FtYXJhcy15LWFjY2Vzb3Jpb3MiPkPDoW1hcmFzIHkgQWNjZXNvcmlvczwvYT48L2Rpdj4NCjwvZGl2Pg0KDQoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6ODoiUHJvZHVjdHMiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Olympus Sp-810,  14 Mpx,  Super Zoom 36x , Fotos 3d, Hdmi en colombia - colombia.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Pantalla,Pulgadas,Panoramica,Video,Memoria,Super,Promocion,Olympus,Zoom,Fotos,Hdmi,colombia" />
<meta name="description" content="Comprar en mercadolibre Olympus Sp-810,  14 Mpx,  Super Zoom 36x , Fotos 3d, Hdmi en colombia. comprar Olympus Sp-810,  14 Mpx,  Super Zoom 36x , Fotos 3d, Hdmi online en colombia. comprar online en colombia. comprar Olympus Sp-810,  14 Mpx,  Super Zoom 36x , Fotos 3d, Hdmi en colombia" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://colombia.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://colombia.comprar-online-ya.com/" />
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
    <a href="http://colombia.comprar-online-ya.com/" title="Inicio"><img src="http://colombia.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://colombia.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://colombia.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/animales-y-mascotas" target="_parent">Animales y Mascotas</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/carros-motos-y-otros" target="_parent">Carros, Motos y Otros</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/celulares-y-teléfonos" target="_parent">Celulares y Teléfonos</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/coleccionables-y-hobbies" target="_parent">Coleccionables y Hobbies</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/consolas-y-videojuegos" target="_parent">Consolas y Videojuegos </a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/cámaras-y-accesorios" target="_parent">Cámaras y Accesorios</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/electrodomésticos" target="_parent">Electrodomésticos</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/electrónica-audio-y-video" target="_parent">Electrónica, Audio y Video</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/hogar-y-muebles" target="_parent">Hogar y Muebles</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/industrias-y-oficinas" target="_parent">Industrias y Oficinas</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/libros-revistas-y-comics" target="_parent">Libros, Revistas y Comics</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/música-películas-y-series" target="_parent">Música, Películas y Series</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras categorías</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/relojes-y-joyas" target="_parent">Relojes y Joyas</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/ropa-y-accesorios" target="_parent">Ropa y Accesorios</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/salud-y-belleza" target="_parent">Salud y Belleza</a></li>
                                    <li><a href="http://colombia.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                                    
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
        <h1 class="title">Olympus Sp-810,  14 Mpx,  Super Zoom 36x , Fotos 3d, Hdmi</h1>
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
<div class="post_title"><a href="http://colombia.comprar-online-ya.com/articulos/olympus-sp-810-14-mpx-super-zoom-36x-fotos-3d-hdmi/32904">Olympus Sp-810,  14 Mpx,  Super Zoom 36x , Fotos 3d, Hdmi</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img1.mlstatic.com/s_MCO_v_I_f_2415020738_022012.jpg" alt="Olympus Sp-810,  14 Mpx,  Super Zoom 36x , Fotos 3d, Hdmi" class="templatemo_pic" title="Olympus Sp-810,  14 Mpx,  Super Zoom 36x , Fotos 3d, Hdmi" /></a>
<h3>Pantalla 3 Pulgadas, Panoramica, Video Hd, Memoria 8g, Super Promocion</h3>

<div style="width: 250px;">Precio: <strong>COP $599000.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.co/MCO-401637870-olympus-sp-810-14-mpx-super-zoom-36x-fotos-3d-hdmi-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://colombia.comprar-online-ya.com/categorias/cámaras-y-accesorios">Cámaras y Accesorios</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 colombia.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>