<!--cachetime:1345017717--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:49:"amplitube-irig-para-iphone-ipod-ipad-amplificador";i:1;s:5:"25778";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:65:"articulos/amplitube-irig-para-iphone-ipod-ipad-amplificador/25778";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:66:"/articulos/amplitube-irig-para-iphone-ipod-ipad-amplificador/25778";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTUiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6NjoibWV4aWNvIjt9fXM6NzoiUHJvZHVjdCI7YToxOntzOjc6IlByb2R1Y3QiO2E6MTU6e3M6MjoiaWQiO3M6NToiMjU3NzgiO3M6NDoiaWRtbCI7czoxMjoiTUxNNDAzNjEwMTA3IjtzOjU6InRpdGxlIjtzOjU1OiJBbXBsaXR1YmUgSXJpZyAtIFBhcmEgSXBob25lIC8gSXBvZCAvIElwYWQgQW1wbGlmaWNhZG9yIjtzOjg6InN1YnRpdGxlIjtzOjMxOiJBbXBsaWZpY2Fkb3IgRGUgR3VpdGFycmEgWSBCYWpvIjtzOjU6InByaWNlIjtzOjY6IjM0OS45OSI7czo5OiJwZXJtYWxpbmsiO3M6MTAzOiJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS5teC9NTE0tNDAzNjEwMTA3LWFtcGxpdHViZS1pcmlnLXBhcmEtaXBob25lLWlwb2QtaXBhZC1hbXBsaWZpY2Fkb3ItX0pNIjtzOjk6InRodW1ibmFpbCI7czo1NDoiaHR0cDovL2ltZzIubWxzdGF0aWMuY29tL3NfTUxNX3ZfSV9mXzcyMTkyOTg0XzkyMDUuanBnIjtzOjExOiJjdXJyZW5jeV9pZCI7czozOiJNWE4iO3M6MTA6InN0YXRlX25hbWUiO3M6NzoiSmFsaXNjbyI7czo5OiJjaXR5X25hbWUiO3M6MTE6Ikd1YWRhbGFqYXJhIjtzOjExOiJjYXRlZ29yeV9pZCI7czozOiIxNTUiO3M6NToiYWRkZWQiO3M6MTk6IjIwMTItMDctMDIgMDA6Mzc6MDciO3M6NDoic2x1ZyI7czo0OToiYW1wbGl0dWJlLWlyaWctcGFyYS1pcGhvbmUtaXBvZC1pcGFkLWFtcGxpZmljYWRvciI7czo1OiJzaXRpbyI7czo2OiJtZXhpY28iO3M6NjoiY3VzdG9tIjtzOjE6IjAiO319czoxNToibWV0YWRlc2NyaXB0aW9uIjtzOjI3MjoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgQW1wbGl0dWJlIElyaWcgLSBQYXJhIElwaG9uZSAvIElwb2QgLyBJcGFkIEFtcGxpZmljYWRvciBlbiBtZXhpY28uIGNvbXByYXIgQW1wbGl0dWJlIElyaWcgLSBQYXJhIElwaG9uZSAvIElwb2QgLyBJcGFkIEFtcGxpZmljYWRvciBvbmxpbmUgZW4gbWV4aWNvLiBjb21wcmFyIG9ubGluZSBlbiBtZXhpY28uIGNvbXByYXIgQW1wbGl0dWJlIElyaWcgLSBQYXJhIElwaG9uZSAvIElwb2QgLyBJcGFkIEFtcGxpZmljYWRvciBlbiBtZXhpY28iO3M6MTI6Im1ldGFrZXl3b3JkcyI7czoxMTA6Im1lcmNhZG9saWJyZSxjb21wcmFyLG9ubGluZSxtZXJjYWRvcGFnbyxBbXBsaWZpY2Fkb3IsR3VpdGFycmEsQmFqbyxBbXBsaXR1YmUsSXJpZyxQYXJhLElwaG9uZSxJcG9kLElwYWQsbWV4aWNvIjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjg5OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBBbXBsaXR1YmUgSXJpZyAtIFBhcmEgSXBob25lIC8gSXBvZCAvIElwYWQgQW1wbGlmaWNhZG9yIGVuIG1leGljbyI7czoxMDoiY2F0ZWdvcmlhcyI7YToyMzp7aTowO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE0MSI7czo2OiJub21icmUiO3M6MjY6IkFjY2Vzb3Jpb3MgcGFyYSBWZWjDrWN1bG9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTc0NyI7czo0OiJzbHVnIjtzOjI2OiJhY2Nlc29yaW9zLXBhcmEtdmVow61jdWxvcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTQyIjtzOjY6Im5vbWJyZSI7czoxOToiQW5pbWFsZXMgeSBNYXNjb3RhcyI7czo0OiJpZG1sIjtzOjc6Ik1MTTEwNzEiO3M6NDoic2x1ZyI7czoxOToiYW5pbWFsZXMteS1tYXNjb3RhcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTQzIjtzOjY6Im5vbWJyZSI7czoyMDoiQXJ0ZSB5IEFudGlnw7xlZGFkZXMiO3M6NDoiaWRtbCI7czo3OiJNTE0xMzY3IjtzOjQ6InNsdWciO3M6MjA6ImFydGUteS1hbnRpZ8O8ZWRhZGVzIjtzOjQ6InNpdGUiO3M6NjoibWV4aWNvIjt9fWk6MzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNDQiO3M6Njoibm9tYnJlIjtzOjIwOiJBdXRvcywgTW90b3MgeSBPdHJvcyI7czo0OiJpZG1sIjtzOjc6Ik1MTTE3NDMiO3M6NDoic2x1ZyI7czoxOToiYXV0b3MtbW90b3MteS1vdHJvcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTQ1IjtzOjY6Im5vbWJyZSI7czoyMjoiQ2VsdWxhcmVzIHkgVGVsZWZvbsOtYSI7czo0OiJpZG1sIjtzOjc6Ik1MTTEwNTEiO3M6NDoic2x1ZyI7czoyMjoiY2VsdWxhcmVzLXktdGVsZWZvbsOtYSI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTQ2IjtzOjY6Im5vbWJyZSI7czoxNDoiQ29sZWNjaW9uYWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNTE0xNzk4IjtzOjQ6InNsdWciO3M6MTQ6ImNvbGVjY2lvbmFibGVzIjtzOjQ6InNpdGUiO3M6NjoibWV4aWNvIjt9fWk6NjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNDciO3M6Njoibm9tYnJlIjtzOjEyOiJDb21wdXRhY2nDs24iO3M6NDoiaWRtbCI7czo3OiJNTE0xNjQ4IjtzOjQ6InNsdWciO3M6MTI6ImNvbXB1dGFjacOzbiI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTQ4IjtzOjY6Im5vbWJyZSI7czoyMjoiQ29uc29sYXMgeSBWaWRlb2p1ZWdvcyI7czo0OiJpZG1sIjtzOjc6Ik1MTTExNDQiO3M6NDoic2x1ZyI7czoyMjoiY29uc29sYXMteS12aWRlb2p1ZWdvcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTQ5IjtzOjY6Im5vbWJyZSI7czoyMToiQ8OhbWFyYXMgeSBBY2Nlc29yaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTAzOSI7czo0OiJzbHVnIjtzOjIxOiJjw6FtYXJhcy15LWFjY2Vzb3Jpb3MiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aTo5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE1MCI7czo2OiJub21icmUiO3M6MTk6IkRlcG9ydGVzIHkgRml0bmVzcyAiO3M6NDoiaWRtbCI7czo3OiJNTE0xMjc2IjtzOjQ6InNsdWciO3M6MTg6ImRlcG9ydGVzLXktZml0bmVzcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjEwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE1MSI7czo2OiJub21icmUiO3M6Mjc6IkVsZWN0csOzbmljYSwgQXVkaW8geSBWaWRlbyI7czo0OiJpZG1sIjtzOjc6Ik1MTTEwMDAiO3M6NDoic2x1ZyI7czoyNjoiZWxlY3Ryw7NuaWNhLWF1ZGlvLXktdmlkZW8iO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToxMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTIiO3M6Njoibm9tYnJlIjtzOjI2OiJIb2dhciB5IEVsZWN0cm9kb23DqXN0aWNvcyI7czo0OiJpZG1sIjtzOjc6Ik1MTTE1NzQiO3M6NDoic2x1ZyI7czoyNjoiaG9nYXIteS1lbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToxMjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTMiO3M6Njoibm9tYnJlIjtzOjIxOiJJbmR1c3RyaWFzIHkgT2ZpY2luYXMiO3M6NDoiaWRtbCI7czo3OiJNTE0xNDk5IjtzOjQ6InNsdWciO3M6MjE6ImluZHVzdHJpYXMteS1vZmljaW5hcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjEzO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE1NCI7czo2OiJub21icmUiO3M6OToiSW5tdWVibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTQ1OSI7czo0OiJzbHVnIjtzOjk6ImlubXVlYmxlcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjE0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE1NSI7czo2OiJub21icmUiO3M6MjI6Ikluc3RydW1lbnRvcyBNdXNpY2FsZXMiO3M6NDoiaWRtbCI7czo3OiJNTE0xMTgyIjtzOjQ6InNsdWciO3M6MjI6Imluc3RydW1lbnRvcy1tdXNpY2FsZXMiO3M6NDoic2l0ZSI7czo2OiJtZXhpY28iO319aToxNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNTYiO3M6Njoibm9tYnJlIjtzOjE1OiJKb3lhcyB5IFJlbG9qZXMiO3M6NDoiaWRtbCI7czo3OiJNTE0zOTM3IjtzOjQ6InNsdWciO3M6MTU6ImpveWFzLXktcmVsb2plcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjE2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE1NyI7czo2OiJub21icmUiO3M6MTc6Ikp1ZWdvcyB5IEp1Z3VldGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTEzMiI7czo0OiJzbHVnIjtzOjE3OiJqdWVnb3MteS1qdWd1ZXRlcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjE3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE1OCI7czo2OiJub21icmUiO3M6MjU6IkxpYnJvcywgUmV2aXN0YXMgeSBDb21pY3MiO3M6NDoiaWRtbCI7czo3OiJNTE0zMDI1IjtzOjQ6InNsdWciO3M6MjQ6ImxpYnJvcy1yZXZpc3Rhcy15LWNvbWljcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjE4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE1OSI7czo2OiJub21icmUiO3M6Mjg6Ik3DunNpY2EsIFBlbMOtY3VsYXMgeSBTZXJpZXMiO3M6NDoiaWRtbCI7czo3OiJNTE0xMTY4IjtzOjQ6InNsdWciO3M6Mjc6Im3DunNpY2EtcGVsw61jdWxhcy15LXNlcmllcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjE5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2MCI7czo2OiJub21icmUiO3M6MTc6Ik90cmFzIENhdGVnb3LDrWFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxNMTk1MyI7czo0OiJzbHVnIjtzOjE3OiJvdHJhcy1jYXRlZ29yw61hcyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjIwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2MSI7czo2OiJub21icmUiO3M6MjI6IlJvcGEsIEJvbHNhcyB5IENhbHphZG8iO3M6NDoiaWRtbCI7czo3OiJNTE0xNDMwIjtzOjQ6InNsdWciO3M6MjE6InJvcGEtYm9sc2FzLXktY2FsemFkbyI7czo0OiJzaXRlIjtzOjY6Im1leGljbyI7fX1pOjIxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2MiI7czo2OiJub21icmUiO3M6MTU6IlNhbHVkIHkgQmVsbGV6YSI7czo0OiJpZG1sIjtzOjc6Ik1MTTEyNDYiO3M6NDoic2x1ZyI7czoxNToic2FsdWQteS1iZWxsZXphIjtzOjQ6InNpdGUiO3M6NjoibWV4aWNvIjt9fWk6MjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTYzIjtzOjY6Im5vbWJyZSI7czo5OiJTZXJ2aWNpb3MiO3M6NDoiaWRtbCI7czo3OiJNTE0xNTQwIjtzOjQ6InNsdWciO3M6OToic2VydmljaW9zIjtzOjQ6InNpdGUiO3M6NjoibWV4aWNvIjt9fX1zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTcwNjoiPGgxIGNsYXNzPSJ0aXRsZSI+QW1wbGl0dWJlIElyaWcgLSBQYXJhIElwaG9uZSAvIElwb2QgLyBJcGFkIEFtcGxpZmljYWRvcjwvaDE+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+PCEtLQ0KZ29vZ2xlX2FkX2NsaWVudCA9ICJjYS1wdWItNzYyOTc3MDEyODUzMjU4OSI7DQovKiBjb3kgNDY4eDE1ICggYXJ0aWN1bG9zICkgKi8NCmdvb2dsZV9hZF9zbG90ID0gIjU2ODY0MTk4MjEiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQoNCjxkaXYgY2xhc3M9InBvc3RfYm94IiBhbGlnbj0ianVzdGlmeSI+DQo8ZGl2IGNsYXNzPSJwb3N0X3RpdGxlIj48YSBocmVmPSJodHRwOi8vbWV4aWNvLmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvYW1wbGl0dWJlLWlyaWctcGFyYS1pcGhvbmUtaXBvZC1pcGFkLWFtcGxpZmljYWRvci8yNTc3OCI+QW1wbGl0dWJlIElyaWcgLSBQYXJhIElwaG9uZSAvIElwb2QgLyBJcGFkIEFtcGxpZmljYWRvcjwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NTE1fdl9JX2ZfNzIxOTI5ODRfOTIwNS5qcGciIGFsdD0iQW1wbGl0dWJlIElyaWcgLSBQYXJhIElwaG9uZSAvIElwb2QgLyBJcGFkIEFtcGxpZmljYWRvciIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iQW1wbGl0dWJlIElyaWcgLSBQYXJhIElwaG9uZSAvIElwb2QgLyBJcGFkIEFtcGxpZmljYWRvciIgLz48L2E+DQo8aDM+QW1wbGlmaWNhZG9yIERlIEd1aXRhcnJhIFkgQmFqbzwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5NWE4gJDM0OS45OTwvc3Ryb25nPjwvZGl2Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogYW51bmNpbyBiYWpvIHRpdHVsbyAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiOTE5MDc4OTMxNSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCjxiciAvPg0KDQo8YSBjbGFzcz0iYnV5X21sIiByZWw9Im5vZm9sbG93IiBocmVmPSJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS5teC9NTE0tNDAzNjEwMTA3LWFtcGxpdHViZS1pcmlnLXBhcmEtaXBob25lLWlwb2QtaXBhZC1hbXBsaWZpY2Fkb3ItX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly9tZXhpY28uY29tcHJhci1vbmxpbmUteWEuY29tL2NhdGVnb3JpYXMvaW5zdHJ1bWVudG9zLW11c2ljYWxlcyI+SW5zdHJ1bWVudG9zIE11c2ljYWxlczwvYT48L2Rpdj4NCjwvZGl2Pg0KDQoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6ODoiUHJvZHVjdHMiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Amplitube Irig - Para Iphone / Ipod / Ipad Amplificador en mexico - mexico.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Amplificador,Guitarra,Bajo,Amplitube,Irig,Para,Iphone,Ipod,Ipad,mexico" />
<meta name="description" content="Comprar en mercadolibre Amplitube Irig - Para Iphone / Ipod / Ipad Amplificador en mexico. comprar Amplitube Irig - Para Iphone / Ipod / Ipad Amplificador online en mexico. comprar online en mexico. comprar Amplitube Irig - Para Iphone / Ipod / Ipad Amplificador en mexico" />
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
        <h1 class="title">Amplitube Irig - Para Iphone / Ipod / Ipad Amplificador</h1>
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
<div class="post_title"><a href="http://mexico.comprar-online-ya.com/articulos/amplitube-irig-para-iphone-ipod-ipad-amplificador/25778">Amplitube Irig - Para Iphone / Ipod / Ipad Amplificador</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLM_v_I_f_72192984_9205.jpg" alt="Amplitube Irig - Para Iphone / Ipod / Ipad Amplificador" class="templatemo_pic" title="Amplitube Irig - Para Iphone / Ipod / Ipad Amplificador" /></a>
<h3>Amplificador De Guitarra Y Bajo</h3>

<div style="width: 250px;">Precio: <strong>MXN $349.99</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.mx/MLM-403610107-amplitube-irig-para-iphone-ipod-ipad-amplificador-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://mexico.comprar-online-ya.com/categorias/instrumentos-musicales">Instrumentos Musicales</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 mexico.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>