<!--cachetime:1345015097--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:56:"ipod-touch-64gb-4g-nuevo-regalo-4000-juegos-aplicaciones";i:1;s:5:"11703";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:72:"articulos/ipod-touch-64gb-4g-nuevo-regalo-4000-juegos-aplicaciones/11703";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:73:"/articulos/ipod-touch-64gb-4g-nuevo-regalo-4000-juegos-aplicaciones/11703";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzgiO3M6Njoibm9tYnJlIjtzOjI3OiJFbGVjdHLDs25pY2EsIEF1ZGlvIHkgVmlkZW8iO3M6NDoiaWRtbCI7czo3OiJNUEUxMDAwIjtzOjQ6InNsdWciO3M6MjY6ImVsZWN0csOzbmljYS1hdWRpby15LXZpZGVvIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjExNzAzIjtzOjQ6ImlkbWwiO3M6MTI6Ik1QRTQwMDQ2NzQwNSI7czo1OiJ0aXRsZSI7czo2MDoiSXBvZCBUb3VjaCA2NGdiIDRnIE51ZXZvICsgUmVnYWxvICsgNDAwMCBKdWVnb3MgQXBsaWNhY2lvbmVzIjtzOjg6InN1YnRpdGxlIjtzOjcwOiJJcG9kIE51ZXZvICsgTWlsZXMgVmlkZW9zICsgUGVsaWN1bGFzICsgSnVlZ29zICsgUmVnYWxvcyBZIFByb21vY2lvbmVzIjtzOjU6InByaWNlIjtzOjY6Ijk5OS45OSI7czo5OiJwZXJtYWxpbmsiO3M6MTEwOiJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS5wZS9NUEUtNDAwNDY3NDA1LWlwb2QtdG91Y2gtNjRnYi00Zy1udWV2by1yZWdhbG8tNDAwMC1qdWVnb3MtYXBsaWNhY2lvbmVzLV9KTSI7czo5OiJ0aHVtYm5haWwiO3M6NTQ6Imh0dHA6Ly9pbWcxLm1sc3RhdGljLmNvbS9zX01QRV92X0lfZl8xNzc0MzkzNV85OTI2LmpwZyI7czoxMToiY3VycmVuY3lfaWQiO3M6MzoiUEVOIjtzOjEwOiJzdGF0ZV9uYW1lIjtzOjQ6IkxpbWEiO3M6OToiY2l0eV9uYW1lIjtzOjEwOiJNaXJhZmxvcmVzIjtzOjExOiJjYXRlZ29yeV9pZCI7czozOiIyMzgiO3M6NToiYWRkZWQiO3M6MTk6IjIwMTItMDYtMDkgMjI6NDQ6NDMiO3M6NDoic2x1ZyI7czo1NjoiaXBvZC10b3VjaC02NGdiLTRnLW51ZXZvLXJlZ2Fsby00MDAwLWp1ZWdvcy1hcGxpY2FjaW9uZXMiO3M6NToic2l0aW8iO3M6NDoicGVydSI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6Mjc5OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBJcG9kIFRvdWNoIDY0Z2IgNGcgTnVldm8gKyBSZWdhbG8gKyA0MDAwIEp1ZWdvcyBBcGxpY2FjaW9uZXMgZW4gcGVydS4gY29tcHJhciBJcG9kIFRvdWNoIDY0Z2IgNGcgTnVldm8gKyBSZWdhbG8gKyA0MDAwIEp1ZWdvcyBBcGxpY2FjaW9uZXMgb25saW5lIGVuIHBlcnUuIGNvbXByYXIgb25saW5lIGVuIHBlcnUuIGNvbXByYXIgSXBvZCBUb3VjaCA2NGdiIDRnIE51ZXZvICsgUmVnYWxvICsgNDAwMCBKdWVnb3MgQXBsaWNhY2lvbmVzIGVuIHBlcnUiO3M6MTI6Im1ldGFrZXl3b3JkcyI7czoxNDE6Im1lcmNhZG9saWJyZSxjb21wcmFyLG9ubGluZSxtZXJjYWRvcGFnbyxJcG9kLE51ZXZvLE1pbGVzLFZpZGVvcyxQZWxpY3VsYXMsSnVlZ29zLFJlZ2Fsb3MsUHJvbW9jaW9uZXMsVG91Y2gsNjRnYixSZWdhbG8sNDAwMCxBcGxpY2FjaW9uZXMscGVydSI7czoxMDoidGl0bGVfcGFnZSI7czo5MjoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgSXBvZCBUb3VjaCA2NGdiIDRnIE51ZXZvICsgUmVnYWxvICsgNDAwMCBKdWVnb3MgQXBsaWNhY2lvbmVzIGVuIHBlcnUiO3M6MTA6ImNhdGVnb3JpYXMiO2E6MTk6e2k6MDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMjkiO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Nlc29yaW9zIHBhcmEgVmVow61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTE3NDciO3M6NDoic2x1ZyI7czoyNjoiYWNjZXNvcmlvcy1wYXJhLXZlaMOtY3Vsb3MiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzAiO3M6Njoibm9tYnJlIjtzOjIwOiJBcnRlIHkgQW50aWfDvGVkYWRlcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTEzNjciO3M6NDoic2x1ZyI7czoyMDoiYXJ0ZS15LWFudGlnw7xlZGFkZXMiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzEiO3M6Njoibm9tYnJlIjtzOjIwOiJBdXRvcywgTW90b3MgeSBPdHJvcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTE3NDMiO3M6NDoic2x1ZyI7czoxOToiYXV0b3MtbW90b3MteS1vdHJvcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aTozO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIzMiI7czo2OiJub21icmUiO3M6MjI6IkNlbHVsYXJlcyB5IFRlbMOpZm9ub3MiO3M6NDoiaWRtbCI7czo3OiJNUEUxMDUxIjtzOjQ6InNsdWciO3M6MjI6ImNlbHVsYXJlcy15LXRlbMOpZm9ub3MiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6NDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzMiO3M6Njoibm9tYnJlIjtzOjI0OiJDb2xlY2Npb25hYmxlcyB5IEhvYmJpZXMiO3M6NDoiaWRtbCI7czo3OiJNUEUxNzk4IjtzOjQ6InNsdWciO3M6MjQ6ImNvbGVjY2lvbmFibGVzLXktaG9iYmllcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aTo1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIzNCI7czo2OiJub21icmUiO3M6MTI6IkNvbXB1dGFjacOzbiI7czo0OiJpZG1sIjtzOjc6Ik1QRTE2NDgiO3M6NDoic2x1ZyI7czoxMjoiY29tcHV0YWNpw7NuIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjM1IjtzOjY6Im5vbWJyZSI7czoyMzoiQ29uc29sYXMgeSBWaWRlb2p1ZWdvcyAiO3M6NDoiaWRtbCI7czo3OiJNUEUxMTQ0IjtzOjQ6InNsdWciO3M6MjI6ImNvbnNvbGFzLXktdmlkZW9qdWVnb3MiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6NzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzYiO3M6Njoibm9tYnJlIjtzOjIxOiJDw6FtYXJhcyB5IEFjY2Vzb3Jpb3MiO3M6NDoiaWRtbCI7czo3OiJNUEUxMDM5IjtzOjQ6InNsdWciO3M6MjE6ImPDoW1hcmFzLXktYWNjZXNvcmlvcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aTo4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIzNyI7czo2OiJub21icmUiO3M6MTg6IkRlcG9ydGVzIHkgRml0bmVzcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTEyNzYiO3M6NDoic2x1ZyI7czoxODoiZGVwb3J0ZXMteS1maXRuZXNzIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjM4IjtzOjY6Im5vbWJyZSI7czoyNzoiRWxlY3Ryw7NuaWNhLCBBdWRpbyB5IFZpZGVvIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTAwMCI7czo0OiJzbHVnIjtzOjI2OiJlbGVjdHLDs25pY2EtYXVkaW8teS12aWRlbyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aToxMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzkiO3M6Njoibm9tYnJlIjtzOjI2OiJIb2dhciB5IEVsZWN0cm9kb23DqXN0aWNvcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTE1NzQiO3M6NDoic2x1ZyI7czoyNjoiaG9nYXIteS1lbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MTE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjQwIjtzOjY6Im5vbWJyZSI7czo5OiJJbm11ZWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNUEUxNDU5IjtzOjQ6InNsdWciO3M6OToiaW5tdWVibGVzIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjEyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI0MSI7czo2OiJub21icmUiO3M6MjI6Ikluc3RydW1lbnRvcyBNdXNpY2FsZXMiO3M6NDoiaWRtbCI7czo3OiJNUEUxMTgyIjtzOjQ6InNsdWciO3M6MjI6Imluc3RydW1lbnRvcy1tdXNpY2FsZXMiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MTM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjQyIjtzOjY6Im5vbWJyZSI7czoxNzoiSnVlZ29zIHkgSnVndWV0ZXMiO3M6NDoiaWRtbCI7czo3OiJNUEUxMTMyIjtzOjQ6InNsdWciO3M6MTc6Imp1ZWdvcy15LWp1Z3VldGVzIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjE0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI0MyI7czo2OiJub21icmUiO3M6MjU6IkxpYnJvcywgUmV2aXN0YXMgeSBDb21pY3MiO3M6NDoiaWRtbCI7czo3OiJNUEUzMDI1IjtzOjQ6InNsdWciO3M6MjQ6ImxpYnJvcy1yZXZpc3Rhcy15LWNvbWljcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aToxNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNDQiO3M6Njoibm9tYnJlIjtzOjIwOiJNw7pzaWNhIHkgUGVsw61jdWxhcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTExNjgiO3M6NDoic2x1ZyI7czoyMDoibcO6c2ljYS15LXBlbMOtY3VsYXMiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MTY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjQ1IjtzOjY6Im5vbWJyZSI7czoxNzoiT3RyYXMgY2F0ZWdvcsOtYXMiO3M6NDoiaWRtbCI7czo3OiJNUEUxOTUzIjtzOjQ6InNsdWciO3M6MTc6Im90cmFzLWNhdGVnb3LDrWFzIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjE3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI0NiI7czo2OiJub21icmUiO3M6MjI6IlJvcGEsIFJlbG9qZXMgeSBMZW50ZXMiO3M6NDoiaWRtbCI7czo3OiJNUEUxNDMwIjtzOjQ6InNsdWciO3M6MjE6InJvcGEtcmVsb2plcy15LWxlbnRlcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aToxODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNDciO3M6Njoibm9tYnJlIjtzOjk6IlNlcnZpY2lvcyI7czo0OiJpZG1sIjtzOjc6Ik1QRTE1NDAiO3M6NDoic2x1ZyI7czo5OiJzZXJ2aWNpb3MiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fX1zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTc4NDoiPGgxIGNsYXNzPSJ0aXRsZSI+SXBvZCBUb3VjaCA2NGdiIDRnIE51ZXZvICsgUmVnYWxvICsgNDAwMCBKdWVnb3MgQXBsaWNhY2lvbmVzPC9oMT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGNveSA0Njh4MTUgKCBhcnRpY3Vsb3MgKSAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiNTY4NjQxOTgyMSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCg0KPGRpdiBjbGFzcz0icG9zdF9ib3giIGFsaWduPSJqdXN0aWZ5Ij4NCjxkaXYgY2xhc3M9InBvc3RfdGl0bGUiPjxhIGhyZWY9Imh0dHA6Ly9wZXJ1LmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvaXBvZC10b3VjaC02NGdiLTRnLW51ZXZvLXJlZ2Fsby00MDAwLWp1ZWdvcy1hcGxpY2FjaW9uZXMvMTE3MDMiPklwb2QgVG91Y2ggNjRnYiA0ZyBOdWV2byArIFJlZ2FsbyArIDQwMDAgSnVlZ29zIEFwbGljYWNpb25lczwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMS5tbHN0YXRpYy5jb20vc19NUEVfdl9JX2ZfMTc3NDM5MzVfOTkyNi5qcGciIGFsdD0iSXBvZCBUb3VjaCA2NGdiIDRnIE51ZXZvICsgUmVnYWxvICsgNDAwMCBKdWVnb3MgQXBsaWNhY2lvbmVzIiBjbGFzcz0idGVtcGxhdGVtb19waWMiIHRpdGxlPSJJcG9kIFRvdWNoIDY0Z2IgNGcgTnVldm8gKyBSZWdhbG8gKyA0MDAwIEp1ZWdvcyBBcGxpY2FjaW9uZXMiIC8+PC9hPg0KPGgzPklwb2QgTnVldm8gKyBNaWxlcyBWaWRlb3MgKyBQZWxpY3VsYXMgKyBKdWVnb3MgKyBSZWdhbG9zIFkgUHJvbW9jaW9uZXM8L2gzPg0KDQo8ZGl2IHN0eWxlPSJ3aWR0aDogMjUwcHg7Ij5QcmVjaW86IDxzdHJvbmc+UEVOICQ5OTkuOTk8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20ucGUvTVBFLTQwMDQ2NzQwNS1pcG9kLXRvdWNoLTY0Z2ItNGctbnVldm8tcmVnYWxvLTQwMDAtanVlZ29zLWFwbGljYWNpb25lcy1fSk0iIHRhcmdldD0iX2JsYW5rIj5WZXIvQ29tcHJhcjwvYT4NCjwvZGl2Pg0KPGRpdiBjbGFzcz0icHVibGlzaF9kYXRlIj4gQ2F0ZWdvciZpYWN1dGU7YTogPGEgaHJlZj0iaHR0cDovL3BlcnUuY29tcHJhci1vbmxpbmUteWEuY29tL2NhdGVnb3JpYXMvZWxlY3Ryw7NuaWNhLWF1ZGlvLXktdmlkZW8iPkVsZWN0csOzbmljYSwgQXVkaW8geSBWaWRlbzwvYT48L2Rpdj4NCjwvZGl2Pg0KDQoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6ODoiUHJvZHVjdHMiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Ipod Touch 64gb 4g Nuevo + Regalo + 4000 Juegos Aplicaciones en peru - peru.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Ipod,Nuevo,Miles,Videos,Peliculas,Juegos,Regalos,Promociones,Touch,64gb,Regalo,4000,Aplicaciones,peru" />
<meta name="description" content="Comprar en mercadolibre Ipod Touch 64gb 4g Nuevo + Regalo + 4000 Juegos Aplicaciones en peru. comprar Ipod Touch 64gb 4g Nuevo + Regalo + 4000 Juegos Aplicaciones online en peru. comprar online en peru. comprar Ipod Touch 64gb 4g Nuevo + Regalo + 4000 Juegos Aplicaciones en peru" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://peru.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://peru.comprar-online-ya.com/" />
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
    <a href="http://peru.comprar-online-ya.com/" title="Inicio"><img src="http://peru.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://peru.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://peru.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/arte-y-antigüedades" target="_parent">Arte y Antigüedades</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/autos-motos-y-otros" target="_parent">Autos, Motos y Otros</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/celulares-y-teléfonos" target="_parent">Celulares y Teléfonos</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/coleccionables-y-hobbies" target="_parent">Coleccionables y Hobbies</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/consolas-y-videojuegos" target="_parent">Consolas y Videojuegos </a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/cámaras-y-accesorios" target="_parent">Cámaras y Accesorios</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/electrónica-audio-y-video" target="_parent">Electrónica, Audio y Video</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/hogar-y-electrodomésticos" target="_parent">Hogar y Electrodomésticos</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/libros-revistas-y-comics" target="_parent">Libros, Revistas y Comics</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/música-y-películas" target="_parent">Música y Películas</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras categorías</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/ropa-relojes-y-lentes" target="_parent">Ropa, Relojes y Lentes</a></li>
                                    <li><a href="http://peru.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                                    
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
        <h1 class="title">Ipod Touch 64gb 4g Nuevo + Regalo + 4000 Juegos Aplicaciones</h1>
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
<div class="post_title"><a href="http://peru.comprar-online-ya.com/articulos/ipod-touch-64gb-4g-nuevo-regalo-4000-juegos-aplicaciones/11703">Ipod Touch 64gb 4g Nuevo + Regalo + 4000 Juegos Aplicaciones</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img1.mlstatic.com/s_MPE_v_I_f_17743935_9926.jpg" alt="Ipod Touch 64gb 4g Nuevo + Regalo + 4000 Juegos Aplicaciones" class="templatemo_pic" title="Ipod Touch 64gb 4g Nuevo + Regalo + 4000 Juegos Aplicaciones" /></a>
<h3>Ipod Nuevo + Miles Videos + Peliculas + Juegos + Regalos Y Promociones</h3>

<div style="width: 250px;">Precio: <strong>PEN $999.99</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.pe/MPE-400467405-ipod-touch-64gb-4g-nuevo-regalo-4000-juegos-aplicaciones-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://peru.comprar-online-ya.com/categorias/electrónica-audio-y-video">Electrónica, Audio y Video</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 peru.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>