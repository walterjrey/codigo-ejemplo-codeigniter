<!--cachetime:1345019019--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:48:"bandanas-multifuncionales-tipo-buff-lippi-doite-";i:1;s:5:"25882";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:64:"articulos/bandanas-multifuncionales-tipo-buff-lippi-doite-/25882";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:65:"/articulos/bandanas-multifuncionales-tipo-buff-lippi-doite-/25882";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMjYiO3M6Njoibm9tYnJlIjtzOjE5OiJEZXBvcnRlcyB5IEZpdG5lc3MgIjtzOjQ6ImlkbWwiO3M6NzoiTUxDMTI3NiI7czo0OiJzbHVnIjtzOjE4OiJkZXBvcnRlcy15LWZpdG5lc3MiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjI1ODgyIjtzOjQ6ImlkbWwiO3M6MTI6Ik1MQzQwMzI5NjEzOCI7czo1OiJ0aXRsZSI7czo2MToiQmFuZGFuYXMgTXVsdGlmdW5jaW9uYWxlcyBUaXBvIEJ1ZmYsIExpcHBpLCBEb2l0ZS4uLsKhbnVldmFzISI7czo4OiJzdWJ0aXRsZSI7czoyODoiRW50cmVnYW1vcyBCb2xldGEgTyBGYWN0dXJhLiI7czo1OiJwcmljZSI7czo0OiIyOTkwIjtzOjk6InBlcm1hbGluayI7czoxMDM6Imh0dHA6Ly9hcnRpY3Vsby5tZXJjYWRvbGlicmUuY2wvTUxDLTQwMzI5NjEzOC1iYW5kYW5hcy1tdWx0aWZ1bmNpb25hbGVzLXRpcG8tYnVmZi1saXBwaS1kb2l0ZW51ZXZhcy1fSk0iO3M6OToidGh1bWJuYWlsIjtzOjU4OiJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NTENfdl9JX2ZfMjY1MzMyODY3Nl8wNTIwMTIuanBnIjtzOjExOiJjdXJyZW5jeV9pZCI7czozOiJDTFAiO3M6MTA6InN0YXRlX25hbWUiO3M6MTg6IlJNIChNZXRyb3BvbGl0YW5hKSI7czo5OiJjaXR5X25hbWUiO3M6ODoiU2FudGlhZ28iO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjM6IjEyNiI7czo1OiJhZGRlZCI7czoxOToiMjAxMi0wNy0wMiAwMDozOTozOCI7czo0OiJzbHVnIjtzOjQ4OiJiYW5kYW5hcy1tdWx0aWZ1bmNpb25hbGVzLXRpcG8tYnVmZi1saXBwaS1kb2l0ZS0iO3M6NToic2l0aW8iO3M6NToiY2hpbGUiO3M6NjoiY3VzdG9tIjtzOjE6IjAiO319czoxNToibWV0YWRlc2NyaXB0aW9uIjtzOjI4NjoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgQmFuZGFuYXMgTXVsdGlmdW5jaW9uYWxlcyBUaXBvIEJ1ZmYsIExpcHBpLCBEb2l0ZS4uLsKhbnVldmFzISBlbiBjaGlsZS4gY29tcHJhciBCYW5kYW5hcyBNdWx0aWZ1bmNpb25hbGVzIFRpcG8gQnVmZiwgTGlwcGksIERvaXRlLi4uwqFudWV2YXMhIG9ubGluZSBlbiBjaGlsZS4gY29tcHJhciBvbmxpbmUgZW4gY2hpbGUuIGNvbXByYXIgQmFuZGFuYXMgTXVsdGlmdW5jaW9uYWxlcyBUaXBvIEJ1ZmYsIExpcHBpLCBEb2l0ZS4uLsKhbnVldmFzISBlbiBjaGlsZSI7czoxMjoibWV0YWtleXdvcmRzIjtzOjEzMToibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLEVudHJlZ2Ftb3MsQm9sZXRhLEZhY3R1cmEsQmFuZGFuYXMsTXVsdGlmdW5jaW9uYWxlcyxUaXBvLEJ1ZmYsTGlwcGksRG9pdGUuLi7CoW51ZXZhcyEsY2hpbGUiO3M6MTA6InRpdGxlX3BhZ2UiO3M6OTQ6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIEJhbmRhbmFzIE11bHRpZnVuY2lvbmFsZXMgVGlwbyBCdWZmLCBMaXBwaSwgRG9pdGUuLi7CoW51ZXZhcyEgZW4gY2hpbGUiO3M6MTA6ImNhdGVnb3JpYXMiO2E6MjU6e2k6MDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMTYiO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Nlc29yaW9zIHBhcmEgVmVow61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQzE3NDciO3M6NDoic2x1ZyI7czoyNjoiYWNjZXNvcmlvcy1wYXJhLXZlaMOtY3Vsb3MiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTE3IjtzOjY6Im5vbWJyZSI7czoxOToiQW5pbWFsZXMgeSBNYXNjb3RhcyI7czo0OiJpZG1sIjtzOjc6Ik1MQzEwNzEiO3M6NDoic2x1ZyI7czoxOToiYW5pbWFsZXMteS1tYXNjb3RhcyI7czo0OiJzaXRlIjtzOjU6ImNoaWxlIjt9fWk6MjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMTgiO3M6Njoibm9tYnJlIjtzOjIwOiJBcnRlIHkgQW50aWfDvGVkYWRlcyI7czo0OiJpZG1sIjtzOjc6Ik1MQzEzNjciO3M6NDoic2x1ZyI7czoyMDoiYXJ0ZS15LWFudGlnw7xlZGFkZXMiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTE5IjtzOjY6Im5vbWJyZSI7czoyMDoiQXV0b3MsIE1vdG9zIHkgT3Ryb3MiO3M6NDoiaWRtbCI7czo3OiJNTEMxNzQzIjtzOjQ6InNsdWciO3M6MTk6ImF1dG9zLW1vdG9zLXktb3Ryb3MiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTIwIjtzOjY6Im5vbWJyZSI7czo2OiJCZWLDqXMiO3M6NDoiaWRtbCI7czo3OiJNTEMxMzg0IjtzOjQ6InNsdWciO3M6NjoiYmViw6lzIjtzOjQ6InNpdGUiO3M6NToiY2hpbGUiO319aTo1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEyMSI7czo2OiJub21icmUiO3M6MjI6IkNlbHVsYXJlcyB5IFRlbGVmb27DrWEiO3M6NDoiaWRtbCI7czo3OiJNTEMxMDUxIjtzOjQ6InNsdWciO3M6MjI6ImNlbHVsYXJlcy15LXRlbGVmb27DrWEiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTIyIjtzOjY6Im5vbWJyZSI7czoyNDoiQ29sZWNjaW9uYWJsZXMgeSBIb2JiaWVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxDMTc5OCI7czo0OiJzbHVnIjtzOjI0OiJjb2xlY2Npb25hYmxlcy15LWhvYmJpZXMiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTIzIjtzOjY6Im5vbWJyZSI7czoxMjoiQ29tcHV0YWNpw7NuIjtzOjQ6ImlkbWwiO3M6NzoiTUxDMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJjb21wdXRhY2nDs24iO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTI0IjtzOjY6Im5vbWJyZSI7czoyMjoiQ29uc29sYXMgeSBWaWRlb2p1ZWdvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQzExNDQiO3M6NDoic2x1ZyI7czoyMjoiY29uc29sYXMteS12aWRlb2p1ZWdvcyI7czo0OiJzaXRlIjtzOjU6ImNoaWxlIjt9fWk6OTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMjUiO3M6Njoibm9tYnJlIjtzOjIxOiJDw6FtYXJhcyB5IEFjY2Vzb3Jpb3MiO3M6NDoiaWRtbCI7czo3OiJNTEMxMDM5IjtzOjQ6InNsdWciO3M6MjE6ImPDoW1hcmFzLXktYWNjZXNvcmlvcyI7czo0OiJzaXRlIjtzOjU6ImNoaWxlIjt9fWk6MTA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTI2IjtzOjY6Im5vbWJyZSI7czoxOToiRGVwb3J0ZXMgeSBGaXRuZXNzICI7czo0OiJpZG1sIjtzOjc6Ik1MQzEyNzYiO3M6NDoic2x1ZyI7czoxODoiZGVwb3J0ZXMteS1maXRuZXNzIjtzOjQ6InNpdGUiO3M6NToiY2hpbGUiO319aToxMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMjciO3M6Njoibm9tYnJlIjtzOjE4OiJFbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoiaWRtbCI7czo3OiJNTEM1NzI2IjtzOjQ6InNsdWciO3M6MTg6ImVsZWN0cm9kb23DqXN0aWNvcyI7czo0OiJzaXRlIjtzOjU6ImNoaWxlIjt9fWk6MTI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTI4IjtzOjY6Im5vbWJyZSI7czoyNzoiRWxlY3Ryw7NuaWNhLCBBdWRpbyB5IFZpZGVvIjtzOjQ6ImlkbWwiO3M6NzoiTUxDMTAwMCI7czo0OiJzbHVnIjtzOjI2OiJlbGVjdHLDs25pY2EtYXVkaW8teS12aWRlbyI7czo0OiJzaXRlIjtzOjU6ImNoaWxlIjt9fWk6MTM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTI5IjtzOjY6Im5vbWJyZSI7czoxNToiSG9nYXIgeSBNdWVibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxDMTU3NCI7czo0OiJzbHVnIjtzOjE1OiJob2dhci15LW11ZWJsZXMiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjE0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEzMCI7czo2OiJub21icmUiO3M6MjE6IkluZHVzdHJpYXMgeSBPZmljaW5hcyI7czo0OiJpZG1sIjtzOjc6Ik1MQzE0OTkiO3M6NDoic2x1ZyI7czoyMToiaW5kdXN0cmlhcy15LW9maWNpbmFzIjtzOjQ6InNpdGUiO3M6NToiY2hpbGUiO319aToxNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMzEiO3M6Njoibm9tYnJlIjtzOjk6IklubXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MQzE0NTkiO3M6NDoic2x1ZyI7czo5OiJpbm11ZWJsZXMiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjE2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEzMiI7czo2OiJub21icmUiO3M6MjI6Ikluc3RydW1lbnRvcyBNdXNpY2FsZXMiO3M6NDoiaWRtbCI7czo3OiJNTEMxMTgyIjtzOjQ6InNsdWciO3M6MjI6Imluc3RydW1lbnRvcy1tdXNpY2FsZXMiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjE3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEzMyI7czo2OiJub21icmUiO3M6MTc6Ikp1ZWdvcyB5IEp1Z3VldGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxDMTEzMiI7czo0OiJzbHVnIjtzOjE3OiJqdWVnb3MteS1qdWd1ZXRlcyI7czo0OiJzaXRlIjtzOjU6ImNoaWxlIjt9fWk6MTg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTM0IjtzOjY6Im5vbWJyZSI7czoyNToiTGlicm9zLCBSZXZpc3RhcyB5IENvbWljcyI7czo0OiJpZG1sIjtzOjc6Ik1MQzMwMjUiO3M6NDoic2x1ZyI7czoyNDoibGlicm9zLXJldmlzdGFzLXktY29taWNzIjtzOjQ6InNpdGUiO3M6NToiY2hpbGUiO319aToxOTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMzUiO3M6Njoibm9tYnJlIjtzOjIwOiJNw7pzaWNhIHkgUGVsw61jdWxhcyI7czo0OiJpZG1sIjtzOjc6Ik1MQzExNjgiO3M6NDoic2x1ZyI7czoyMDoibcO6c2ljYS15LXBlbMOtY3VsYXMiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjIwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEzNiI7czo2OiJub21icmUiO3M6MTc6Ik90cmFzIENhdGVnb3LDrWFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxDMTk1MyI7czo0OiJzbHVnIjtzOjE3OiJvdHJhcy1jYXRlZ29yw61hcyI7czo0OiJzaXRlIjtzOjU6ImNoaWxlIjt9fWk6MjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTM3IjtzOjY6Im5vbWJyZSI7czoxNToiUmVsb2plcyB5IEpveWFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxDMzkzNyI7czo0OiJzbHVnIjtzOjE1OiJyZWxvamVzLXktam95YXMiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjIyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEzOCI7czo2OiJub21icmUiO3M6MTU6IlNhbHVkIHkgQmVsbGV6YSI7czo0OiJpZG1sIjtzOjc6Ik1MQzEyNDYiO3M6NDoic2x1ZyI7czoxNToic2FsdWQteS1iZWxsZXphIjtzOjQ6InNpdGUiO3M6NToiY2hpbGUiO319aToyMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMzkiO3M6Njoibm9tYnJlIjtzOjk6IlNlcnZpY2lvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQzE1NDAiO3M6NDoic2x1ZyI7czo5OiJzZXJ2aWNpb3MiO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX1pOjI0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE0MCI7czo2OiJub21icmUiO3M6MTk6IlZlc3R1YXJpbyB5IENhbHphZG8iO3M6NDoiaWRtbCI7czo3OiJNTEMxNDMwIjtzOjQ6InNsdWciO3M6MTk6InZlc3R1YXJpby15LWNhbHphZG8iO3M6NDoic2l0ZSI7czo1OiJjaGlsZSI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE3MjI6IjxoMSBjbGFzcz0idGl0bGUiPkJhbmRhbmFzIE11bHRpZnVuY2lvbmFsZXMgVGlwbyBCdWZmLCBMaXBwaSwgRG9pdGUuLi7CoW51ZXZhcyE8L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL2NoaWxlLmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvYmFuZGFuYXMtbXVsdGlmdW5jaW9uYWxlcy10aXBvLWJ1ZmYtbGlwcGktZG9pdGUtLzI1ODgyIj5CYW5kYW5hcyBNdWx0aWZ1bmNpb25hbGVzIFRpcG8gQnVmZiwgTGlwcGksIERvaXRlLi4uwqFudWV2YXMhPC9hPjwvZGl2Pg0KPGRpdiBjbGFzcz0icG9zdF90ZXh0X2FyZWEiPg0KPGEgaHJlZj0iIyI+PGltZyBzcmM9Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01MQ192X0lfZl8yNjUzMzI4Njc2XzA1MjAxMi5qcGciIGFsdD0iQmFuZGFuYXMgTXVsdGlmdW5jaW9uYWxlcyBUaXBvIEJ1ZmYsIExpcHBpLCBEb2l0ZS4uLsKhbnVldmFzISIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iQmFuZGFuYXMgTXVsdGlmdW5jaW9uYWxlcyBUaXBvIEJ1ZmYsIExpcHBpLCBEb2l0ZS4uLsKhbnVldmFzISIgLz48L2E+DQo8aDM+RW50cmVnYW1vcyBCb2xldGEgTyBGYWN0dXJhLjwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5DTFAgJDI5OTAuMDA8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jbC9NTEMtNDAzMjk2MTM4LWJhbmRhbmFzLW11bHRpZnVuY2lvbmFsZXMtdGlwby1idWZmLWxpcHBpLWRvaXRlbnVldmFzLV9KTSIgdGFyZ2V0PSJfYmxhbmsiPlZlci9Db21wcmFyPC9hPg0KPC9kaXY+DQo8ZGl2IGNsYXNzPSJwdWJsaXNoX2RhdGUiPiBDYXRlZ29yJmlhY3V0ZTthOiA8YSBocmVmPSJodHRwOi8vY2hpbGUuY29tcHJhci1vbmxpbmUteWEuY29tL2NhdGVnb3JpYXMvZGVwb3J0ZXMteS1maXRuZXNzIj5EZXBvcnRlcyB5IEZpdG5lc3MgPC9hPjwvZGl2Pg0KPC9kaXY+DQoNCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo4OiJQcm9kdWN0cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Bandanas Multifuncionales Tipo Buff, Lippi, Doite...¡nuevas! en chile - chile.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Entregamos,Boleta,Factura,Bandanas,Multifuncionales,Tipo,Buff,Lippi,Doite...¡nuevas!,chile" />
<meta name="description" content="Comprar en mercadolibre Bandanas Multifuncionales Tipo Buff, Lippi, Doite...¡nuevas! en chile. comprar Bandanas Multifuncionales Tipo Buff, Lippi, Doite...¡nuevas! online en chile. comprar online en chile. comprar Bandanas Multifuncionales Tipo Buff, Lippi, Doite...¡nuevas! en chile" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://chile.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://chile.comprar-online-ya.com/" />
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
    <a href="http://chile.comprar-online-ya.com/" title="Inicio"><img src="http://chile.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://chile.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://chile.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/animales-y-mascotas" target="_parent">Animales y Mascotas</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/arte-y-antigüedades" target="_parent">Arte y Antigüedades</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/autos-motos-y-otros" target="_parent">Autos, Motos y Otros</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/bebés" target="_parent">Bebés</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/celulares-y-telefonía" target="_parent">Celulares y Telefonía</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/coleccionables-y-hobbies" target="_parent">Coleccionables y Hobbies</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/consolas-y-videojuegos" target="_parent">Consolas y Videojuegos</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/cámaras-y-accesorios" target="_parent">Cámaras y Accesorios</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness </a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/electrodomésticos" target="_parent">Electrodomésticos</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/electrónica-audio-y-video" target="_parent">Electrónica, Audio y Video</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/hogar-y-muebles" target="_parent">Hogar y Muebles</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/industrias-y-oficinas" target="_parent">Industrias y Oficinas</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/libros-revistas-y-comics" target="_parent">Libros, Revistas y Comics</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/música-y-películas" target="_parent">Música y Películas</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras Categorías</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/relojes-y-joyas" target="_parent">Relojes y Joyas</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/salud-y-belleza" target="_parent">Salud y Belleza</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                    <li><a href="http://chile.comprar-online-ya.com/categorias/vestuario-y-calzado" target="_parent">Vestuario y Calzado</a></li>
                                                    
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
        <h1 class="title">Bandanas Multifuncionales Tipo Buff, Lippi, Doite...¡nuevas!</h1>
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
<div class="post_title"><a href="http://chile.comprar-online-ya.com/articulos/bandanas-multifuncionales-tipo-buff-lippi-doite-/25882">Bandanas Multifuncionales Tipo Buff, Lippi, Doite...¡nuevas!</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLC_v_I_f_2653328676_052012.jpg" alt="Bandanas Multifuncionales Tipo Buff, Lippi, Doite...¡nuevas!" class="templatemo_pic" title="Bandanas Multifuncionales Tipo Buff, Lippi, Doite...¡nuevas!" /></a>
<h3>Entregamos Boleta O Factura.</h3>

<div style="width: 250px;">Precio: <strong>CLP $2990.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.cl/MLC-403296138-bandanas-multifuncionales-tipo-buff-lippi-doitenuevas-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://chile.comprar-online-ya.com/categorias/deportes-y-fitness">Deportes y Fitness </a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 chile.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>