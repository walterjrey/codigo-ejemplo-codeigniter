<!--cachetime:1345015134--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:45:"libro-de-autocad-video-cursos-autocad-y-revit";i:1;s:5:"40055";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:61:"articulos/libro-de-autocad-video-cursos-autocad-y-revit/40055";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:62:"/articulos/libro-de-autocad-video-cursos-autocad-y-revit/40055";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDQiO3M6Njoibm9tYnJlIjtzOjI4OiJMaWJyb3MsIE3DunNpY2EgeSBQZWzDrWN1bGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMzAyNSI7czo0OiJzbHVnIjtzOjI3OiJsaWJyb3MtbcO6c2ljYS15LXBlbMOtY3VsYXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319czo3OiJQcm9kdWN0IjthOjE6e3M6NzoiUHJvZHVjdCI7YToxNTp7czoyOiJpZCI7czo1OiI0MDA1NSI7czo0OiJpZG1sIjtzOjEyOiJNTFY0MDIwMDM1MTciO3M6NToidGl0bGUiO3M6NDc6IkxpYnJvIERlIEF1dG9jYWQgKyBWaWRlbyBDdXJzb3MgQXV0b2NhZCBZIFJldml0IjtzOjg6InN1YnRpdGxlIjtzOjA6IiI7czo1OiJwcmljZSI7czozOiIxNTAiO3M6OToicGVybWFsaW5rIjtzOjk5OiJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS52ZS9NTFYtNDAyMDAzNTE3LWxpYnJvLWRlLWF1dG9jYWQtdmlkZW8tY3Vyc29zLWF1dG9jYWQteS1yZXZpdC1fSk0iO3M6OToidGh1bWJuYWlsIjtzOjU4OiJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NTFZfdl9JX2ZfMjg5OTQwMTc0Ml8wNzIwMTIuanBnIjtzOjExOiJjdXJyZW5jeV9pZCI7czozOiJWRUYiO3M6MTA6InN0YXRlX25hbWUiO3M6NToiWnVsaWEiO3M6OToiY2l0eV9uYW1lIjtzOjk6Ik1hcmFjYWlibyI7czoxMToiY2F0ZWdvcnlfaWQiO3M6MzoiMjA0IjtzOjU6ImFkZGVkIjtzOjE5OiIyMDEyLTA3LTI3IDA2OjI1OjM3IjtzOjQ6InNsdWciO3M6NDU6ImxpYnJvLWRlLWF1dG9jYWQtdmlkZW8tY3Vyc29zLWF1dG9jYWQteS1yZXZpdCI7czo1OiJzaXRpbyI7czo5OiJ2ZW5lenVlbGEiO3M6NjoiY3VzdG9tIjtzOjE6IjAiO319czoxNToibWV0YWRlc2NyaXB0aW9uIjtzOjI2MDoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgTGlicm8gRGUgQXV0b2NhZCArIFZpZGVvIEN1cnNvcyBBdXRvY2FkIFkgUmV2aXQgZW4gdmVuZXp1ZWxhLiBjb21wcmFyIExpYnJvIERlIEF1dG9jYWQgKyBWaWRlbyBDdXJzb3MgQXV0b2NhZCBZIFJldml0IG9ubGluZSBlbiB2ZW5lenVlbGEuIGNvbXByYXIgb25saW5lIGVuIHZlbmV6dWVsYS4gY29tcHJhciBMaWJybyBEZSBBdXRvY2FkICsgVmlkZW8gQ3Vyc29zIEF1dG9jYWQgWSBSZXZpdCBlbiB2ZW5lenVlbGEiO3M6MTI6Im1ldGFrZXl3b3JkcyI7czo4MjoibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLExpYnJvLEF1dG9jYWQsVmlkZW8sQ3Vyc29zLFJldml0LHZlbmV6dWVsYSI7czoxMDoidGl0bGVfcGFnZSI7czo4NDoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgTGlicm8gRGUgQXV0b2NhZCArIFZpZGVvIEN1cnNvcyBBdXRvY2FkIFkgUmV2aXQgZW4gdmVuZXp1ZWxhIjtzOjEwOiJjYXRlZ29yaWFzIjthOjIzOntpOjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTg3IjtzOjY6Im5vbWJyZSI7czoyNjoiQWNjZXNvcmlvcyBwYXJhIFZlaMOtY3Vsb3MiO3M6NDoiaWRtbCI7czo3OiJNTFYxNzQ3IjtzOjQ6InNsdWciO3M6MjY6ImFjY2Vzb3Jpb3MtcGFyYS12ZWjDrWN1bG9zIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODgiO3M6Njoibm9tYnJlIjtzOjE5OiJBbmltYWxlcyB5IE1hc2NvdGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTA3MSI7czo0OiJzbHVnIjtzOjE5OiJhbmltYWxlcy15LW1hc2NvdGFzIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODkiO3M6Njoibm9tYnJlIjtzOjY6IkJlYsOpcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjEzODQiO3M6NDoic2x1ZyI7czo2OiJiZWLDqXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aTozO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE5MCI7czo2OiJub21icmUiO3M6MjE6IkNhcnJvcywgTW90b3MgeSBPdHJvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjE3NDMiO3M6NDoic2x1ZyI7czoyMDoiY2Fycm9zLW1vdG9zLXktb3Ryb3MiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aTo0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE5MSI7czo2OiJub21icmUiO3M6MjI6IkNlbHVsYXJlcyB5IFRlbMOpZm9ub3MiO3M6NDoiaWRtbCI7czo3OiJNTFYxMDUxIjtzOjQ6InNsdWciO3M6MjI6ImNlbHVsYXJlcy15LXRlbMOpZm9ub3MiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aTo1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE5MiI7czo2OiJub21icmUiO3M6MjQ6IkNvbGVjY2lvbmFibGVzIHkgSG9iYmllcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjE3OTgiO3M6NDoic2x1ZyI7czoyNDoiY29sZWNjaW9uYWJsZXMteS1ob2JiaWVzIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6NjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxOTMiO3M6Njoibm9tYnJlIjtzOjEyOiJDb21wdXRhY2nDs24iO3M6NDoiaWRtbCI7czo3OiJNTFYxNjQ4IjtzOjQ6InNsdWciO3M6MTI6ImNvbXB1dGFjacOzbiI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTk0IjtzOjY6Im5vbWJyZSI7czoyMToiQ8OhbWFyYXMgeSBBY2Nlc29yaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTAzOSI7czo0OiJzbHVnIjtzOjIxOiJjw6FtYXJhcy15LWFjY2Vzb3Jpb3MiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aTo4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE5NSI7czo2OiJub21icmUiO3M6MjQ6IkPDs25zb2xhcyB5IFZpZGVvanVlZ29zICI7czo0OiJpZG1sIjtzOjc6Ik1MVjExNDQiO3M6NDoic2x1ZyI7czoyMzoiY8OzbnNvbGFzLXktdmlkZW9qdWVnb3MiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aTo5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE5NiI7czo2OiJub21icmUiO3M6MTg6IkRlcG9ydGVzIHkgRml0bmVzcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjEyNzYiO3M6NDoic2x1ZyI7czoxODoiZGVwb3J0ZXMteS1maXRuZXNzIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MTA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTk3IjtzOjY6Im5vbWJyZSI7czoxODoiRWxlY3Ryb2RvbcOpc3RpY29zIjtzOjQ6ImlkbWwiO3M6NzoiTUxWNTcyNiI7czo0OiJzbHVnIjtzOjE4OiJlbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToxMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxOTgiO3M6Njoibm9tYnJlIjtzOjI4OiJFbGVjdHLDs25pY2EsICBBdWRpbyB5IFZpZGVvIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTAwMCI7czo0OiJzbHVnIjtzOjI2OiJlbGVjdHLDs25pY2EtYXVkaW8teS12aWRlbyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjEyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE5OSI7czo2OiJub21icmUiO3M6MTU6IkhvZ2FyIHkgTXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjE1NzQiO3M6NDoic2x1ZyI7czoxNToiaG9nYXIteS1tdWVibGVzIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MTM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjAwIjtzOjY6Im5vbWJyZSI7czoxMDoiSW5kdXN0cmlhcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjE0OTkiO3M6NDoic2x1ZyI7czoxMDoiaW5kdXN0cmlhcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjE0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIwMSI7czo2OiJub21icmUiO3M6OToiSW5tdWVibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTQ1OSI7czo0OiJzbHVnIjtzOjk6ImlubXVlYmxlcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjE1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIwMiI7czo2OiJub21icmUiO3M6MjI6Ikluc3RydW1lbnRvcyBNdXNpY2FsZXMiO3M6NDoiaWRtbCI7czo3OiJNTFYxMTgyIjtzOjQ6InNsdWciO3M6MjI6Imluc3RydW1lbnRvcy1tdXNpY2FsZXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToxNjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDMiO3M6Njoibm9tYnJlIjtzOjE3OiJKdWVnb3MgeSBKdWd1ZXRlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjExMzIiO3M6NDoic2x1ZyI7czoxNzoianVlZ29zLXktanVndWV0ZXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToxNzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDQiO3M6Njoibm9tYnJlIjtzOjI4OiJMaWJyb3MsIE3DunNpY2EgeSBQZWzDrWN1bGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMzAyNSI7czo0OiJzbHVnIjtzOjI3OiJsaWJyb3MtbcO6c2ljYS15LXBlbMOtY3VsYXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToxODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDUiO3M6Njoibm9tYnJlIjtzOjE3OiJPdHJhcyBDYXRlZ29yw61hcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjE5NTMiO3M6NDoic2x1ZyI7czoxNzoib3RyYXMtY2F0ZWdvcsOtYXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToxOTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDYiO3M6Njoibm9tYnJlIjtzOjI3OiJSZWxvamVzLCBKb3lhcyB5IEJpc3V0ZXLDrWEiO3M6NDoiaWRtbCI7czo3OiJNTFYzOTM3IjtzOjQ6InNsdWciO3M6MjY6InJlbG9qZXMtam95YXMteS1iaXN1dGVyw61hIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjA3IjtzOjY6Im5vbWJyZSI7czoyNjoiUm9wYSwgWmFwYXRvcyB5IEFjY2Vzb3Jpb3MiO3M6NDoiaWRtbCI7czo3OiJNTFYxNDMwIjtzOjQ6InNsdWciO3M6MjU6InJvcGEtemFwYXRvcy15LWFjY2Vzb3Jpb3MiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToyMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDgiO3M6Njoibm9tYnJlIjtzOjE1OiJTYWx1ZCB5IEJlbGxlemEiO3M6NDoiaWRtbCI7czo3OiJNTFYxMjQ2IjtzOjQ6InNsdWciO3M6MTU6InNhbHVkLXktYmVsbGV6YSI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjIyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIwOSI7czo2OiJub21icmUiO3M6OToiU2VydmljaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTU0MCI7czo0OiJzbHVnIjtzOjk6InNlcnZpY2lvcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE2NTY6IjxoMSBjbGFzcz0idGl0bGUiPkxpYnJvIERlIEF1dG9jYWQgKyBWaWRlbyBDdXJzb3MgQXV0b2NhZCBZIFJldml0PC9oMT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGNveSA0Njh4MTUgKCBhcnRpY3Vsb3MgKSAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiNTY4NjQxOTgyMSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCg0KPGRpdiBjbGFzcz0icG9zdF9ib3giIGFsaWduPSJqdXN0aWZ5Ij4NCjxkaXYgY2xhc3M9InBvc3RfdGl0bGUiPjxhIGhyZWY9Imh0dHA6Ly92ZW5lenVlbGEuY29tcHJhci1vbmxpbmUteWEuY29tL2FydGljdWxvcy9saWJyby1kZS1hdXRvY2FkLXZpZGVvLWN1cnNvcy1hdXRvY2FkLXktcmV2aXQvNDAwNTUiPkxpYnJvIERlIEF1dG9jYWQgKyBWaWRlbyBDdXJzb3MgQXV0b2NhZCBZIFJldml0PC9hPjwvZGl2Pg0KPGRpdiBjbGFzcz0icG9zdF90ZXh0X2FyZWEiPg0KPGEgaHJlZj0iIyI+PGltZyBzcmM9Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01MVl92X0lfZl8yODk5NDAxNzQyXzA3MjAxMi5qcGciIGFsdD0iTGlicm8gRGUgQXV0b2NhZCArIFZpZGVvIEN1cnNvcyBBdXRvY2FkIFkgUmV2aXQiIGNsYXNzPSJ0ZW1wbGF0ZW1vX3BpYyIgdGl0bGU9IkxpYnJvIERlIEF1dG9jYWQgKyBWaWRlbyBDdXJzb3MgQXV0b2NhZCBZIFJldml0IiAvPjwvYT4NCjxoMz48L2gzPg0KDQo8ZGl2IHN0eWxlPSJ3aWR0aDogMjUwcHg7Ij5QcmVjaW86IDxzdHJvbmc+VkVGICQxNTAuMDA8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20udmUvTUxWLTQwMjAwMzUxNy1saWJyby1kZS1hdXRvY2FkLXZpZGVvLWN1cnNvcy1hdXRvY2FkLXktcmV2aXQtX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly92ZW5lenVlbGEuY29tcHJhci1vbmxpbmUteWEuY29tL2NhdGVnb3JpYXMvbGlicm9zLW3DunNpY2EteS1wZWzDrWN1bGFzIj5MaWJyb3MsIE3DunNpY2EgeSBQZWzDrWN1bGFzPC9hPjwvZGl2Pg0KPC9kaXY+DQoNCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo4OiJQcm9kdWN0cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Libro De Autocad + Video Cursos Autocad Y Revit en venezuela - venezuela.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Libro,Autocad,Video,Cursos,Revit,venezuela" />
<meta name="description" content="Comprar en mercadolibre Libro De Autocad + Video Cursos Autocad Y Revit en venezuela. comprar Libro De Autocad + Video Cursos Autocad Y Revit online en venezuela. comprar online en venezuela. comprar Libro De Autocad + Video Cursos Autocad Y Revit en venezuela" />
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
        <h1 class="title">Libro De Autocad + Video Cursos Autocad Y Revit</h1>
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
<div class="post_title"><a href="http://venezuela.comprar-online-ya.com/articulos/libro-de-autocad-video-cursos-autocad-y-revit/40055">Libro De Autocad + Video Cursos Autocad Y Revit</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLV_v_I_f_2899401742_072012.jpg" alt="Libro De Autocad + Video Cursos Autocad Y Revit" class="templatemo_pic" title="Libro De Autocad + Video Cursos Autocad Y Revit" /></a>
<h3></h3>

<div style="width: 250px;">Precio: <strong>VEF $150.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.ve/MLV-402003517-libro-de-autocad-video-cursos-autocad-y-revit-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://venezuela.comprar-online-ya.com/categorias/libros-música-y-películas">Libros, Música y Películas</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 venezuela.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>