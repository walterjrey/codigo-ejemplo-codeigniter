<!--cachetime:1345018959--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:33:"video-camara-sony-dcr-dvd203-ntsc";i:1;s:5:"42183";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:49:"articulos/video-camara-sony-dcr-dvd203-ntsc/42183";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:50:"/articulos/video-camara-sony-dcr-dvd203-ntsc/42183";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzUiO3M6Njoibm9tYnJlIjtzOjI1OiJDw6FtYXJhcyBEaWdpdGFsZXMgeSBGb3RvIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTAzOSI7czo0OiJzbHVnIjtzOjI1OiJjw6FtYXJhcy1kaWdpdGFsZXMteS1mb3RvIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319czo3OiJQcm9kdWN0IjthOjE6e3M6NzoiUHJvZHVjdCI7YToxNTp7czoyOiJpZCI7czo1OiI0MjE4MyI7czo0OiJpZG1sIjtzOjEyOiJNUkQ0MDAzMDc0NjciO3M6NToidGl0bGUiO3M6MzU6IlZpZGVvIENhbWFyYSBTb255IERjciAtIER2ZDIwMyBOdHNjIjtzOjg6InN1YnRpdGxlIjtzOjA6IiI7czo1OiJwcmljZSI7czo0OiI0NzUwIjtzOjk6InBlcm1hbGluayI7czo4NzoiaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20uZG8vTVJELTQwMDMwNzQ2Ny12aWRlby1jYW1hcmEtc29ueS1kY3ItZHZkMjAzLW50c2MtX0pNIjtzOjk6InRodW1ibmFpbCI7czo1MzoiaHR0cDovL2ltZzEubWxzdGF0aWMuY29tL3NfTVJEX3ZfSV9mXzE1NzA1MDNfOTM2NC5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IkRPUCI7czoxMDoic3RhdGVfbmFtZSI7czoxMzoiU2FudG8gRG9taW5nbyI7czo5OiJjaXR5X25hbWUiO3M6MTc6IkRpc3RyaXRvIE5hY2lvbmFsIjtzOjExOiJjYXRlZ29yeV9pZCI7czozOiIyNzUiO3M6NToiYWRkZWQiO3M6MTk6IjIwMTItMDctMjkgMDI6NTE6MjEiO3M6NDoic2x1ZyI7czozMzoidmlkZW8tY2FtYXJhLXNvbnktZGNyLWR2ZDIwMy1udHNjIjtzOjU6InNpdGlvIjtzOjEwOiJkb21pbmljYW5hIjtzOjY6ImN1c3RvbSI7czoxOiIwIjt9fXM6MTU6Im1ldGFkZXNjcmlwdGlvbiI7czoyMjg6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIFZpZGVvIENhbWFyYSBTb255IERjciAtIER2ZDIwMyBOdHNjIGVuIGRvbWluaWNhbmEuIGNvbXByYXIgVmlkZW8gQ2FtYXJhIFNvbnkgRGNyIC0gRHZkMjAzIE50c2Mgb25saW5lIGVuIGRvbWluaWNhbmEuIGNvbXByYXIgb25saW5lIGVuIGRvbWluaWNhbmEuIGNvbXByYXIgVmlkZW8gQ2FtYXJhIFNvbnkgRGNyIC0gRHZkMjAzIE50c2MgZW4gZG9taW5pY2FuYSI7czoxMjoibWV0YWtleXdvcmRzIjtzOjgwOiJtZXJjYWRvbGlicmUsY29tcHJhcixvbmxpbmUsbWVyY2Fkb3BhZ28sVmlkZW8sQ2FtYXJhLFNvbnksRHZkMjAzLE50c2MsZG9taW5pY2FuYSI7czoxMDoidGl0bGVfcGFnZSI7czo3MzoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgVmlkZW8gQ2FtYXJhIFNvbnkgRGNyIC0gRHZkMjAzIE50c2MgZW4gZG9taW5pY2FuYSI7czoxMDoiY2F0ZWdvcmlhcyI7YToxOTp7aTowO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI2OCI7czo2OiJub21icmUiO3M6MjY6IkFjY2Vzb3Jpb3MgcGFyYSBWZWjDrWN1bG9zIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTc0NyI7czo0OiJzbHVnIjtzOjI2OiJhY2Nlc29yaW9zLXBhcmEtdmVow61jdWxvcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNjkiO3M6Njoibm9tYnJlIjtzOjIwOiJBcnRlIHkgQW50aWfDvGVkYWRlcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDEzNjciO3M6NDoic2x1ZyI7czoyMDoiYXJ0ZS15LWFudGlnw7xlZGFkZXMiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjcwIjtzOjY6Im5vbWJyZSI7czoyMToiQ2Fycm9zLCBNb3RvcyB5IE90cm9zIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTc0MyI7czo0OiJzbHVnIjtzOjIwOiJjYXJyb3MtbW90b3MteS1vdHJvcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzEiO3M6Njoibm9tYnJlIjtzOjIyOiJDZWx1bGFyZXMgeSBUZWzDqWZvbm9zIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTA1MSI7czo0OiJzbHVnIjtzOjIyOiJjZWx1bGFyZXMteS10ZWzDqWZvbm9zIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aTo0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI3MiI7czo2OiJub21icmUiO3M6MjQ6IkNvbGVjY2lvbmFibGVzIHkgSG9iYmllcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDE3OTgiO3M6NDoic2x1ZyI7czoyNDoiY29sZWNjaW9uYWJsZXMteS1ob2JiaWVzIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aTo1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI3MyI7czo2OiJub21icmUiO3M6MTI6IkNvbXB1dGFjacOzbiI7czo0OiJpZG1sIjtzOjc6Ik1SRDE2NDgiO3M6NDoic2x1ZyI7czoxMjoiY29tcHV0YWNpw7NuIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aTo2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI3NCI7czo2OiJub21icmUiO3M6MjI6IkNvbnNvbGFzIHkgVmlkZW9qdWVnb3MiO3M6NDoiaWRtbCI7czo3OiJNUkQxMTQ0IjtzOjQ6InNsdWciO3M6MjI6ImNvbnNvbGFzLXktdmlkZW9qdWVnb3MiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjc1IjtzOjY6Im5vbWJyZSI7czoyNToiQ8OhbWFyYXMgRGlnaXRhbGVzIHkgRm90byI7czo0OiJpZG1sIjtzOjc6Ik1SRDEwMzkiO3M6NDoic2x1ZyI7czoyNToiY8OhbWFyYXMtZGlnaXRhbGVzLXktZm90byI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6ODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzYiO3M6Njoibm9tYnJlIjtzOjE4OiJEZXBvcnRlcyB5IEZpdG5lc3MiO3M6NDoiaWRtbCI7czo3OiJNUkQxMjc2IjtzOjQ6InNsdWciO3M6MTg6ImRlcG9ydGVzLXktZml0bmVzcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6OTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzciO3M6Njoibm9tYnJlIjtzOjI0OiJFbGVjdHLDs25pY2EgQXVkaW8gVmlkZW8iO3M6NDoiaWRtbCI7czo3OiJNUkQxMDAwIjtzOjQ6InNsdWciO3M6MjQ6ImVsZWN0csOzbmljYS1hdWRpby12aWRlbyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MTA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjc4IjtzOjY6Im5vbWJyZSI7czoyNjoiSG9nYXIgeSBFbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoiaWRtbCI7czo3OiJNUkQxNTc0IjtzOjQ6InNsdWciO3M6MjY6ImhvZ2FyLXktZWxlY3Ryb2RvbcOpc3RpY29zIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aToxMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzkiO3M6Njoibm9tYnJlIjtzOjk6IklubXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDE0NTkiO3M6NDoic2x1ZyI7czo5OiJpbm11ZWJsZXMiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjEyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI4MCI7czo2OiJub21icmUiO3M6MjI6Ikluc3RydW1lbnRvcyBNdXNpY2FsZXMiO3M6NDoiaWRtbCI7czo3OiJNUkQxMTgyIjtzOjQ6InNsdWciO3M6MjI6Imluc3RydW1lbnRvcy1tdXNpY2FsZXMiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjEzO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI4MSI7czo2OiJub21icmUiO3M6MTc6Ikp1ZWdvcyB5IEp1Z3VldGVzIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTEzMiI7czo0OiJzbHVnIjtzOjE3OiJqdWVnb3MteS1qdWd1ZXRlcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MTQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjgyIjtzOjY6Im5vbWJyZSI7czoyNToiTGlicm9zLCBSZXZpc3RhcyB5IENvbWljcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDMwMjUiO3M6NDoic2x1ZyI7czoyNDoibGlicm9zLXJldmlzdGFzLXktY29taWNzIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aToxNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyODMiO3M6Njoibm9tYnJlIjtzOjIwOiJNw7pzaWNhIHkgUGVsw61jdWxhcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDExNjgiO3M6NDoic2x1ZyI7czoyMDoibcO6c2ljYS15LXBlbMOtY3VsYXMiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjE2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI4NCI7czo2OiJub21icmUiO3M6MTc6Ik90cmFzIGNhdGVnb3LDrWFzIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTk1MyI7czo0OiJzbHVnIjtzOjE3OiJvdHJhcy1jYXRlZ29yw61hcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MTc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjg1IjtzOjY6Im5vbWJyZSI7czoyMjoiUm9wYSwgUmVsb2plcyB5IExlbnRlcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDE0MzAiO3M6NDoic2x1ZyI7czoyMToicm9wYS1yZWxvamVzLXktbGVudGVzIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aToxODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyODYiO3M6Njoibm9tYnJlIjtzOjk6IlNlcnZpY2lvcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDE1NDAiO3M6NDoic2x1ZyI7czo5OiJzZXJ2aWNpb3MiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE1Nzc6IjxoMSBjbGFzcz0idGl0bGUiPlZpZGVvIENhbWFyYSBTb255IERjciAtIER2ZDIwMyBOdHNjPC9oMT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGNveSA0Njh4MTUgKCBhcnRpY3Vsb3MgKSAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiNTY4NjQxOTgyMSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCg0KPGRpdiBjbGFzcz0icG9zdF9ib3giIGFsaWduPSJqdXN0aWZ5Ij4NCjxkaXYgY2xhc3M9InBvc3RfdGl0bGUiPjxhIGhyZWY9Imh0dHA6Ly9kb21pbmljYW5hLmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvdmlkZW8tY2FtYXJhLXNvbnktZGNyLWR2ZDIwMy1udHNjLzQyMTgzIj5WaWRlbyBDYW1hcmEgU29ueSBEY3IgLSBEdmQyMDMgTnRzYzwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMS5tbHN0YXRpYy5jb20vc19NUkRfdl9JX2ZfMTU3MDUwM185MzY0LmpwZyIgYWx0PSJWaWRlbyBDYW1hcmEgU29ueSBEY3IgLSBEdmQyMDMgTnRzYyIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iVmlkZW8gQ2FtYXJhIFNvbnkgRGNyIC0gRHZkMjAzIE50c2MiIC8+PC9hPg0KPGgzPjwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5ET1AgJDQ3NTAuMDA8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20uZG8vTVJELTQwMDMwNzQ2Ny12aWRlby1jYW1hcmEtc29ueS1kY3ItZHZkMjAzLW50c2MtX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly9kb21pbmljYW5hLmNvbXByYXItb25saW5lLXlhLmNvbS9jYXRlZ29yaWFzL2PDoW1hcmFzLWRpZ2l0YWxlcy15LWZvdG8iPkPDoW1hcmFzIERpZ2l0YWxlcyB5IEZvdG88L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Video Camara Sony Dcr - Dvd203 Ntsc en dominicana - dominicana.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Video,Camara,Sony,Dvd203,Ntsc,dominicana" />
<meta name="description" content="Comprar en mercadolibre Video Camara Sony Dcr - Dvd203 Ntsc en dominicana. comprar Video Camara Sony Dcr - Dvd203 Ntsc online en dominicana. comprar online en dominicana. comprar Video Camara Sony Dcr - Dvd203 Ntsc en dominicana" />
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
        <h1 class="title">Video Camara Sony Dcr - Dvd203 Ntsc</h1>
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
<div class="post_title"><a href="http://dominicana.comprar-online-ya.com/articulos/video-camara-sony-dcr-dvd203-ntsc/42183">Video Camara Sony Dcr - Dvd203 Ntsc</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img1.mlstatic.com/s_MRD_v_I_f_1570503_9364.jpg" alt="Video Camara Sony Dcr - Dvd203 Ntsc" class="templatemo_pic" title="Video Camara Sony Dcr - Dvd203 Ntsc" /></a>
<h3></h3>

<div style="width: 250px;">Precio: <strong>DOP $4750.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.do/MRD-400307467-video-camara-sony-dcr-dvd203-ntsc-_JM" target="_blank">Ver/Comprar</a>
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