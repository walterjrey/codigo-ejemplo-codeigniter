<!--cachetime:1345019956--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:52:"casa-buceo-ph-de-dos-pisos-3-dormitorios-para-entrar";i:1;s:4:"9064";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:67:"articulos/casa-buceo-ph-de-dos-pisos-3-dormitorios-para-entrar/9064";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:68:"/articulos/casa-buceo-ph-de-dos-pisos-3-dormitorios-para-entrar/9064";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzkiO3M6Njoibm9tYnJlIjtzOjk6IklubXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE0NTkiO3M6NDoic2x1ZyI7czo5OiJpbm11ZWJsZXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fXM6NzoiUHJvZHVjdCI7YToxOntzOjc6IlByb2R1Y3QiO2E6MTU6e3M6MjoiaWQiO3M6NDoiOTA2NCI7czo0OiJpZG1sIjtzOjExOiJNTFUzMTIxNTQ1NyI7czo1OiJ0aXRsZSI7czo1MzoiQ2FzYSBCdWNlbyBQaCBEZSBEb3MgUGlzb3MgMyBEb3JtaXRvcmlvcyAgUGFyYSBFbnRyYXIiO3M6ODoic3VidGl0bGUiO3M6MDoiIjtzOjU6InByaWNlIjtzOjY6IjEzNDkwMCI7czo5OiJwZXJtYWxpbmsiO3M6MTAxOiJodHRwOi8vY2FzYS5tZXJjYWRvbGlicmUuY29tLnV5L01MVS0zMTIxNTQ1Ny1jYXNhLWJ1Y2VvLXBoLWRlLWRvcy1waXNvcy0zLWRvcm1pdG9yaW9zLXBhcmEtZW50cmFyLV9KTSI7czo5OiJ0aHVtYm5haWwiO3M6NTg6Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01MVV92X0lfZl8yNjMwNDYwMDM1XzA0MjAxMi5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IlVTRCI7czoxMDoic3RhdGVfbmFtZSI7czoxMDoiTW9udGV2aWRlbyI7czo5OiJjaXR5X25hbWUiO3M6NToiQnVjZW8iO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjM6IjE3OSI7czo1OiJhZGRlZCI7czoxOToiMjAxMi0wNi0wOSAyMjo0MjowMSI7czo0OiJzbHVnIjtzOjUyOiJjYXNhLWJ1Y2VvLXBoLWRlLWRvcy1waXNvcy0zLWRvcm1pdG9yaW9zLXBhcmEtZW50cmFyIjtzOjU6InNpdGlvIjtzOjc6InVydWd1YXkiO3M6NjoiY3VzdG9tIjtzOjE6IjAiO319czoxNToibWV0YWRlc2NyaXB0aW9uIjtzOjI3MDoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgQ2FzYSBCdWNlbyBQaCBEZSBEb3MgUGlzb3MgMyBEb3JtaXRvcmlvcyAgUGFyYSBFbnRyYXIgZW4gdXJ1Z3VheS4gY29tcHJhciBDYXNhIEJ1Y2VvIFBoIERlIERvcyBQaXNvcyAzIERvcm1pdG9yaW9zICBQYXJhIEVudHJhciBvbmxpbmUgZW4gdXJ1Z3VheS4gY29tcHJhciBvbmxpbmUgZW4gdXJ1Z3VheS4gY29tcHJhciBDYXNhIEJ1Y2VvIFBoIERlIERvcyBQaXNvcyAzIERvcm1pdG9yaW9zICBQYXJhIEVudHJhciBlbiB1cnVndWF5IjtzOjEyOiJtZXRha2V5d29yZHMiO3M6ODg6Im1lcmNhZG9saWJyZSxjb21wcmFyLG9ubGluZSxtZXJjYWRvcGFnbyxDYXNhLEJ1Y2VvLFBpc29zLERvcm1pdG9yaW9zLFBhcmEsRW50cmFyLHVydWd1YXkiO3M6MTA6InRpdGxlX3BhZ2UiO3M6ODg6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIENhc2EgQnVjZW8gUGggRGUgRG9zIFBpc29zIDMgRG9ybWl0b3Jpb3MgIFBhcmEgRW50cmFyIGVuIHVydWd1YXkiO3M6MTA6ImNhdGVnb3JpYXMiO2E6MjM6e2k6MDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjQiO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Nlc29yaW9zIHBhcmEgVmVow61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTU3MjUiO3M6NDoic2x1ZyI7czoyNjoiYWNjZXNvcmlvcy1wYXJhLXZlaMOtY3Vsb3MiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjUiO3M6Njoibm9tYnJlIjtzOjE5OiJBbmltYWxlcyB5IE1hc2NvdGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTA3MSI7czo0OiJzbHVnIjtzOjE5OiJhbmltYWxlcy15LW1hc2NvdGFzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY2IjtzOjY6Im5vbWJyZSI7czoyMDoiQXJ0ZSB5IEFudGlnw7xlZGFkZXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxMzY3IjtzOjQ6InNsdWciO3M6MjA6ImFydGUteS1hbnRpZ8O8ZWRhZGVzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY3IjtzOjY6Im5vbWJyZSI7czoyMDoiQXV0b3MsIE1vdG9zIHkgT3Ryb3MiO3M6NDoiaWRtbCI7czo3OiJNTFUxNzQzIjtzOjQ6InNsdWciO3M6MTk6ImF1dG9zLW1vdG9zLXktb3Ryb3MiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6NDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjgiO3M6Njoibm9tYnJlIjtzOjY6IkJlYsOpcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTEzODQiO3M6NDoic2x1ZyI7czo2OiJiZWLDqXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6NTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjkiO3M6Njoibm9tYnJlIjtzOjIyOiJDZWx1bGFyZXMgeSBUZWxlZm9uw61hIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTA1MSI7czo0OiJzbHVnIjtzOjIyOiJjZWx1bGFyZXMteS10ZWxlZm9uw61hIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTcwIjtzOjY6Im5vbWJyZSI7czoxNDoiQ29sZWNjaW9uYWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxNzk4IjtzOjQ6InNsdWciO3M6MTQ6ImNvbGVjY2lvbmFibGVzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTcxIjtzOjY6Im5vbWJyZSI7czoxMjoiQ29tcHV0YWNpw7NuIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJjb21wdXRhY2nDs24iO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6ODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzIiO3M6Njoibm9tYnJlIjtzOjIyOiJDb25zb2xhcyB5IFZpZGVvanVlZ29zIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTE0NCI7czo0OiJzbHVnIjtzOjIyOiJjb25zb2xhcy15LXZpZGVvanVlZ29zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTczIjtzOjY6Im5vbWJyZSI7czoyMToiQ8OhbWFyYXMgeSBBY2Nlc29yaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTAzOSI7czo0OiJzbHVnIjtzOjIxOiJjw6FtYXJhcy15LWFjY2Vzb3Jpb3MiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTc0IjtzOjY6Im5vbWJyZSI7czoxODoiRGVwb3J0ZXMgeSBGaXRuZXNzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTI3NiI7czo0OiJzbHVnIjtzOjE4OiJkZXBvcnRlcy15LWZpdG5lc3MiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTc1IjtzOjY6Im5vbWJyZSI7czozMDoiRWxlY3Ryb2RvbcOpc3RpY29zIHkgQWlyZXMgQWMuIjtzOjQ6ImlkbWwiO3M6NzoiTUxVNTcyNiI7czo0OiJzbHVnIjtzOjMwOiJlbGVjdHJvZG9tw6lzdGljb3MteS1haXJlcy1hYy0iO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTc2IjtzOjY6Im5vbWJyZSI7czoyNzoiRWxlY3Ryw7NuaWNhLCBBdWRpbyB5IFZpZGVvIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTAwMCI7czo0OiJzbHVnIjtzOjI2OiJlbGVjdHLDs25pY2EtYXVkaW8teS12aWRlbyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzciO3M6Njoibm9tYnJlIjtzOjI0OiJIb2dhciwgTXVlYmxlcyB5IEphcmTDrW4iO3M6NDoiaWRtbCI7czo3OiJNTFUxNTc0IjtzOjQ6InNsdWciO3M6MjM6ImhvZ2FyLW11ZWJsZXMteS1qYXJkw61uIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3OCI7czo2OiJub21icmUiO3M6MjE6IkluZHVzdHJpYXMgeSBPZmljaW5hcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE0OTkiO3M6NDoic2x1ZyI7czoyMToiaW5kdXN0cmlhcy15LW9maWNpbmFzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3OSI7czo2OiJub21icmUiO3M6OToiSW5tdWVibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTQ1OSI7czo0OiJzbHVnIjtzOjk6ImlubXVlYmxlcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxNjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODAiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4MSI7czo2OiJub21icmUiO3M6MTc6Ikp1ZWdvcyB5IEp1Z3VldGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTEzMiI7czo0OiJzbHVnIjtzOjE3OiJqdWVnb3MteS1qdWd1ZXRlcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODIiO3M6Njoibm9tYnJlIjtzOjI4OiJNw7pzaWNhLCBMaWJyb3MgeSBQZWzDrWN1bGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTE2OCI7czo0OiJzbHVnIjtzOjI3OiJtw7pzaWNhLWxpYnJvcy15LXBlbMOtY3VsYXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTgzIjtzOjY6Im5vbWJyZSI7czoxNzoiT3RyYXMgY2F0ZWdvcsOtYXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxOTUzIjtzOjQ6InNsdWciO3M6MTc6Im90cmFzLWNhdGVnb3LDrWFzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjIwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4NCI7czo2OiJub21icmUiO3M6MjE6IlJvcGEsIEpveWFzIHkgUmVsb2plcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE0MzAiO3M6NDoic2x1ZyI7czoyMDoicm9wYS1qb3lhcy15LXJlbG9qZXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTg1IjtzOjY6Im5vbWJyZSI7czoxNToiU2FsdWQgeSBCZWxsZXphIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTI0NiI7czo0OiJzbHVnIjtzOjE1OiJzYWx1ZC15LWJlbGxlemEiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTg2IjtzOjY6Im5vbWJyZSI7czo5OiJTZXJ2aWNpb3MiO3M6NDoiaWRtbCI7czo3OiJNTFUxNTQwIjtzOjQ6InNsdWciO3M6OToic2VydmljaW9zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE2NTA6IjxoMSBjbGFzcz0idGl0bGUiPkNhc2EgQnVjZW8gUGggRGUgRG9zIFBpc29zIDMgRG9ybWl0b3Jpb3MgIFBhcmEgRW50cmFyPC9oMT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGNveSA0Njh4MTUgKCBhcnRpY3Vsb3MgKSAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiNTY4NjQxOTgyMSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCg0KPGRpdiBjbGFzcz0icG9zdF9ib3giIGFsaWduPSJqdXN0aWZ5Ij4NCjxkaXYgY2xhc3M9InBvc3RfdGl0bGUiPjxhIGhyZWY9Imh0dHA6Ly91cnVndWF5LmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvY2FzYS1idWNlby1waC1kZS1kb3MtcGlzb3MtMy1kb3JtaXRvcmlvcy1wYXJhLWVudHJhci85MDY0Ij5DYXNhIEJ1Y2VvIFBoIERlIERvcyBQaXNvcyAzIERvcm1pdG9yaW9zICBQYXJhIEVudHJhcjwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NTFVfdl9JX2ZfMjYzMDQ2MDAzNV8wNDIwMTIuanBnIiBhbHQ9IkNhc2EgQnVjZW8gUGggRGUgRG9zIFBpc29zIDMgRG9ybWl0b3Jpb3MgIFBhcmEgRW50cmFyIiBjbGFzcz0idGVtcGxhdGVtb19waWMiIHRpdGxlPSJDYXNhIEJ1Y2VvIFBoIERlIERvcyBQaXNvcyAzIERvcm1pdG9yaW9zICBQYXJhIEVudHJhciIgLz48L2E+DQo8aDM+PC9oMz4NCg0KPGRpdiBzdHlsZT0id2lkdGg6IDI1MHB4OyI+UHJlY2lvOiA8c3Ryb25nPlVTRCAkMTM0OTAwLjAwPC9zdHJvbmc+PC9kaXY+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+PCEtLQ0KZ29vZ2xlX2FkX2NsaWVudCA9ICJjYS1wdWItNzYyOTc3MDEyODUzMjU4OSI7DQovKiBhbnVuY2lvIGJham8gdGl0dWxvICovDQpnb29nbGVfYWRfc2xvdCA9ICI5MTkwNzg5MzE1IjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KPGJyIC8+DQoNCjxhIGNsYXNzPSJidXlfbWwiIHJlbD0ibm9mb2xsb3ciIGhyZWY9Imh0dHA6Ly9jYXNhLm1lcmNhZG9saWJyZS5jb20udXkvTUxVLTMxMjE1NDU3LWNhc2EtYnVjZW8tcGgtZGUtZG9zLXBpc29zLTMtZG9ybWl0b3Jpb3MtcGFyYS1lbnRyYXItX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly91cnVndWF5LmNvbXByYXItb25saW5lLXlhLmNvbS9jYXRlZ29yaWFzL2lubXVlYmxlcyI+SW5tdWVibGVzPC9hPjwvZGl2Pg0KPC9kaXY+DQoNCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo4OiJQcm9kdWN0cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Casa Buceo Ph De Dos Pisos 3 Dormitorios  Para Entrar en uruguay - uruguay.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Casa,Buceo,Pisos,Dormitorios,Para,Entrar,uruguay" />
<meta name="description" content="Comprar en mercadolibre Casa Buceo Ph De Dos Pisos 3 Dormitorios  Para Entrar en uruguay. comprar Casa Buceo Ph De Dos Pisos 3 Dormitorios  Para Entrar online en uruguay. comprar online en uruguay. comprar Casa Buceo Ph De Dos Pisos 3 Dormitorios  Para Entrar en uruguay" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://uruguay.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://uruguay.comprar-online-ya.com/" />
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
    <a href="http://uruguay.comprar-online-ya.com/" title="Inicio"><img src="http://uruguay.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://uruguay.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://uruguay.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/animales-y-mascotas" target="_parent">Animales y Mascotas</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/arte-y-antigüedades" target="_parent">Arte y Antigüedades</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/autos-motos-y-otros" target="_parent">Autos, Motos y Otros</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/bebés" target="_parent">Bebés</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/celulares-y-telefonía" target="_parent">Celulares y Telefonía</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/coleccionables" target="_parent">Coleccionables</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/consolas-y-videojuegos" target="_parent">Consolas y Videojuegos</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/cámaras-y-accesorios" target="_parent">Cámaras y Accesorios</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/electrodomésticos-y-aires-ac-" target="_parent">Electrodomésticos y Aires Ac.</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/electrónica-audio-y-video" target="_parent">Electrónica, Audio y Video</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/hogar-muebles-y-jardín" target="_parent">Hogar, Muebles y Jardín</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/industrias-y-oficinas" target="_parent">Industrias y Oficinas</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/música-libros-y-películas" target="_parent">Música, Libros y Películas</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras categorías</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/ropa-joyas-y-relojes" target="_parent">Ropa, Joyas y Relojes</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/salud-y-belleza" target="_parent">Salud y Belleza</a></li>
                                    <li><a href="http://uruguay.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                                    
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
        <h1 class="title">Casa Buceo Ph De Dos Pisos 3 Dormitorios  Para Entrar</h1>
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
<div class="post_title"><a href="http://uruguay.comprar-online-ya.com/articulos/casa-buceo-ph-de-dos-pisos-3-dormitorios-para-entrar/9064">Casa Buceo Ph De Dos Pisos 3 Dormitorios  Para Entrar</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLU_v_I_f_2630460035_042012.jpg" alt="Casa Buceo Ph De Dos Pisos 3 Dormitorios  Para Entrar" class="templatemo_pic" title="Casa Buceo Ph De Dos Pisos 3 Dormitorios  Para Entrar" /></a>
<h3></h3>

<div style="width: 250px;">Precio: <strong>USD $134900.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://casa.mercadolibre.com.uy/MLU-31215457-casa-buceo-ph-de-dos-pisos-3-dormitorios-para-entrar-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://uruguay.comprar-online-ya.com/categorias/inmuebles">Inmuebles</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 uruguay.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>