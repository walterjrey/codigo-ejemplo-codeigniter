<!--cachetime:1345016067--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:59:"mp3-clip-expandible-metalico-hasta-8gb-accesorios-completos";i:1;s:5:"11680";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:75:"articulos/mp3-clip-expandible-metalico-hasta-8gb-accesorios-completos/11680";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:76:"/articulos/mp3-clip-expandible-metalico-hasta-8gb-accesorios-completos/11680";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzgiO3M6Njoibm9tYnJlIjtzOjI3OiJFbGVjdHLDs25pY2EsIEF1ZGlvIHkgVmlkZW8iO3M6NDoiaWRtbCI7czo3OiJNUEUxMDAwIjtzOjQ6InNsdWciO3M6MjY6ImVsZWN0csOzbmljYS1hdWRpby15LXZpZGVvIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjExNjgwIjtzOjQ6ImlkbWwiO3M6MTE6Ik1QRTE5Nzg0NTc5IjtzOjU6InRpdGxlIjtzOjU5OiJNcDMgQ2xpcCBFeHBhbmRpYmxlIE1ldGFsaWNvIEhhc3RhIDhnYiBBY2Nlc29yaW9zIENvbXBsZXRvcyI7czo4OiJzdWJ0aXRsZSI7czo2OToiTWluaSBNcDMgRGlmZXJlbnRlcyBDb2xvcmVzICsgQWNjZXNvcmlvcyBDb21wbGV0b3MgLSBQcmVjaW8gRGUgT2ZlcnRhIjtzOjU6InByaWNlIjtzOjU6IjI5Ljk5IjtzOjk6InBlcm1hbGluayI7czoxMTI6Imh0dHA6Ly9hcnRpY3Vsby5tZXJjYWRvbGlicmUuY29tLnBlL01QRS0xOTc4NDU3OS1tcDMtY2xpcC1leHBhbmRpYmxlLW1ldGFsaWNvLWhhc3RhLThnYi1hY2Nlc29yaW9zLWNvbXBsZXRvcy1fSk0iO3M6OToidGh1bWJuYWlsIjtzOjU4OiJodHRwOi8vaW1nMS5tbHN0YXRpYy5jb20vc19NUEVfdl9JX2ZfMjcxODE0MjI4Nl8wNTIwMTIuanBnIjtzOjExOiJjdXJyZW5jeV9pZCI7czozOiJQRU4iO3M6MTA6InN0YXRlX25hbWUiO3M6NjoiQ2FsbGFvIjtzOjk6ImNpdHlfbmFtZSI7czo0OiJMaW1hIjtzOjExOiJjYXRlZ29yeV9pZCI7czozOiIyMzgiO3M6NToiYWRkZWQiO3M6MTk6IjIwMTItMDYtMDkgMjI6NDQ6NDIiO3M6NDoic2x1ZyI7czo1OToibXAzLWNsaXAtZXhwYW5kaWJsZS1tZXRhbGljby1oYXN0YS04Z2ItYWNjZXNvcmlvcy1jb21wbGV0b3MiO3M6NToic2l0aW8iO3M6NDoicGVydSI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6Mjc2OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBNcDMgQ2xpcCBFeHBhbmRpYmxlIE1ldGFsaWNvIEhhc3RhIDhnYiBBY2Nlc29yaW9zIENvbXBsZXRvcyBlbiBwZXJ1LiBjb21wcmFyIE1wMyBDbGlwIEV4cGFuZGlibGUgTWV0YWxpY28gSGFzdGEgOGdiIEFjY2Vzb3Jpb3MgQ29tcGxldG9zIG9ubGluZSBlbiBwZXJ1LiBjb21wcmFyIG9ubGluZSBlbiBwZXJ1LiBjb21wcmFyIE1wMyBDbGlwIEV4cGFuZGlibGUgTWV0YWxpY28gSGFzdGEgOGdiIEFjY2Vzb3Jpb3MgQ29tcGxldG9zIGVuIHBlcnUiO3M6MTI6Im1ldGFrZXl3b3JkcyI7czoxMzQ6Im1lcmNhZG9saWJyZSxjb21wcmFyLG9ubGluZSxtZXJjYWRvcGFnbyxNaW5pLERpZmVyZW50ZXMsQ29sb3JlcyxBY2Nlc29yaW9zLENvbXBsZXRvcyxQcmVjaW8sT2ZlcnRhLENsaXAsRXhwYW5kaWJsZSxNZXRhbGljbyxIYXN0YSxwZXJ1IjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjkxOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBNcDMgQ2xpcCBFeHBhbmRpYmxlIE1ldGFsaWNvIEhhc3RhIDhnYiBBY2Nlc29yaW9zIENvbXBsZXRvcyBlbiBwZXJ1IjtzOjEwOiJjYXRlZ29yaWFzIjthOjE5OntpOjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjI5IjtzOjY6Im5vbWJyZSI7czoyNjoiQWNjZXNvcmlvcyBwYXJhIFZlaMOtY3Vsb3MiO3M6NDoiaWRtbCI7czo3OiJNUEUxNzQ3IjtzOjQ6InNsdWciO3M6MjY6ImFjY2Vzb3Jpb3MtcGFyYS12ZWjDrWN1bG9zIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjMwIjtzOjY6Im5vbWJyZSI7czoyMDoiQXJ0ZSB5IEFudGlnw7xlZGFkZXMiO3M6NDoiaWRtbCI7czo3OiJNUEUxMzY3IjtzOjQ6InNsdWciO3M6MjA6ImFydGUteS1hbnRpZ8O8ZWRhZGVzIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjMxIjtzOjY6Im5vbWJyZSI7czoyMDoiQXV0b3MsIE1vdG9zIHkgT3Ryb3MiO3M6NDoiaWRtbCI7czo3OiJNUEUxNzQzIjtzOjQ6InNsdWciO3M6MTk6ImF1dG9zLW1vdG9zLXktb3Ryb3MiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzIiO3M6Njoibm9tYnJlIjtzOjIyOiJDZWx1bGFyZXMgeSBUZWzDqWZvbm9zIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTA1MSI7czo0OiJzbHVnIjtzOjIyOiJjZWx1bGFyZXMteS10ZWzDqWZvbm9zIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjMzIjtzOjY6Im5vbWJyZSI7czoyNDoiQ29sZWNjaW9uYWJsZXMgeSBIb2JiaWVzIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTc5OCI7czo0OiJzbHVnIjtzOjI0OiJjb2xlY2Npb25hYmxlcy15LWhvYmJpZXMiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6NTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzQiO3M6Njoibm9tYnJlIjtzOjEyOiJDb21wdXRhY2nDs24iO3M6NDoiaWRtbCI7czo3OiJNUEUxNjQ4IjtzOjQ6InNsdWciO3M6MTI6ImNvbXB1dGFjacOzbiI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aTo2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIzNSI7czo2OiJub21icmUiO3M6MjM6IkNvbnNvbGFzIHkgVmlkZW9qdWVnb3MgIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTE0NCI7czo0OiJzbHVnIjtzOjIyOiJjb25zb2xhcy15LXZpZGVvanVlZ29zIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjM2IjtzOjY6Im5vbWJyZSI7czoyMToiQ8OhbWFyYXMgeSBBY2Nlc29yaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTAzOSI7czo0OiJzbHVnIjtzOjIxOiJjw6FtYXJhcy15LWFjY2Vzb3Jpb3MiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6ODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMzciO3M6Njoibm9tYnJlIjtzOjE4OiJEZXBvcnRlcyB5IEZpdG5lc3MiO3M6NDoiaWRtbCI7czo3OiJNUEUxMjc2IjtzOjQ6InNsdWciO3M6MTg6ImRlcG9ydGVzLXktZml0bmVzcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aTo5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIzOCI7czo2OiJub21icmUiO3M6Mjc6IkVsZWN0csOzbmljYSwgQXVkaW8geSBWaWRlbyI7czo0OiJpZG1sIjtzOjc6Ik1QRTEwMDAiO3M6NDoic2x1ZyI7czoyNjoiZWxlY3Ryw7NuaWNhLWF1ZGlvLXktdmlkZW8iO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MTA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjM5IjtzOjY6Im5vbWJyZSI7czoyNjoiSG9nYXIgeSBFbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoiaWRtbCI7czo3OiJNUEUxNTc0IjtzOjQ6InNsdWciO3M6MjY6ImhvZ2FyLXktZWxlY3Ryb2RvbcOpc3RpY29zIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjExO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI0MCI7czo2OiJub21icmUiO3M6OToiSW5tdWVibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTQ1OSI7czo0OiJzbHVnIjtzOjk6ImlubXVlYmxlcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aToxMjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNDEiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjEzO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI0MiI7czo2OiJub21icmUiO3M6MTc6Ikp1ZWdvcyB5IEp1Z3VldGVzIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTEzMiI7czo0OiJzbHVnIjtzOjE3OiJqdWVnb3MteS1qdWd1ZXRlcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aToxNDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNDMiO3M6Njoibm9tYnJlIjtzOjI1OiJMaWJyb3MsIFJldmlzdGFzIHkgQ29taWNzIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMzAyNSI7czo0OiJzbHVnIjtzOjI0OiJsaWJyb3MtcmV2aXN0YXMteS1jb21pY3MiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MTU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjQ0IjtzOjY6Im5vbWJyZSI7czoyMDoiTcO6c2ljYSB5IFBlbMOtY3VsYXMiO3M6NDoiaWRtbCI7czo3OiJNUEUxMTY4IjtzOjQ6InNsdWciO3M6MjA6Im3DunNpY2EteS1wZWzDrWN1bGFzIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX1pOjE2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI0NSI7czo2OiJub21icmUiO3M6MTc6Ik90cmFzIGNhdGVnb3LDrWFzIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTk1MyI7czo0OiJzbHVnIjtzOjE3OiJvdHJhcy1jYXRlZ29yw61hcyI7czo0OiJzaXRlIjtzOjQ6InBlcnUiO319aToxNzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNDYiO3M6Njoibm9tYnJlIjtzOjIyOiJSb3BhLCBSZWxvamVzIHkgTGVudGVzIjtzOjQ6ImlkbWwiO3M6NzoiTVBFMTQzMCI7czo0OiJzbHVnIjtzOjIxOiJyb3BhLXJlbG9qZXMteS1sZW50ZXMiO3M6NDoic2l0ZSI7czo0OiJwZXJ1Ijt9fWk6MTg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjQ3IjtzOjY6Im5vbWJyZSI7czo5OiJTZXJ2aWNpb3MiO3M6NDoiaWRtbCI7czo3OiJNUEUxNTQwIjtzOjQ6InNsdWciO3M6OToic2VydmljaW9zIjtzOjQ6InNpdGUiO3M6NDoicGVydSI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE3ODc6IjxoMSBjbGFzcz0idGl0bGUiPk1wMyBDbGlwIEV4cGFuZGlibGUgTWV0YWxpY28gSGFzdGEgOGdiIEFjY2Vzb3Jpb3MgQ29tcGxldG9zPC9oMT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGNveSA0Njh4MTUgKCBhcnRpY3Vsb3MgKSAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiNTY4NjQxOTgyMSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCg0KPGRpdiBjbGFzcz0icG9zdF9ib3giIGFsaWduPSJqdXN0aWZ5Ij4NCjxkaXYgY2xhc3M9InBvc3RfdGl0bGUiPjxhIGhyZWY9Imh0dHA6Ly9wZXJ1LmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvbXAzLWNsaXAtZXhwYW5kaWJsZS1tZXRhbGljby1oYXN0YS04Z2ItYWNjZXNvcmlvcy1jb21wbGV0b3MvMTE2ODAiPk1wMyBDbGlwIEV4cGFuZGlibGUgTWV0YWxpY28gSGFzdGEgOGdiIEFjY2Vzb3Jpb3MgQ29tcGxldG9zPC9hPjwvZGl2Pg0KPGRpdiBjbGFzcz0icG9zdF90ZXh0X2FyZWEiPg0KPGEgaHJlZj0iIyI+PGltZyBzcmM9Imh0dHA6Ly9pbWcxLm1sc3RhdGljLmNvbS9zX01QRV92X0lfZl8yNzE4MTQyMjg2XzA1MjAxMi5qcGciIGFsdD0iTXAzIENsaXAgRXhwYW5kaWJsZSBNZXRhbGljbyBIYXN0YSA4Z2IgQWNjZXNvcmlvcyBDb21wbGV0b3MiIGNsYXNzPSJ0ZW1wbGF0ZW1vX3BpYyIgdGl0bGU9Ik1wMyBDbGlwIEV4cGFuZGlibGUgTWV0YWxpY28gSGFzdGEgOGdiIEFjY2Vzb3Jpb3MgQ29tcGxldG9zIiAvPjwvYT4NCjxoMz5NaW5pIE1wMyBEaWZlcmVudGVzIENvbG9yZXMgKyBBY2Nlc29yaW9zIENvbXBsZXRvcyAtIFByZWNpbyBEZSBPZmVydGE8L2gzPg0KDQo8ZGl2IHN0eWxlPSJ3aWR0aDogMjUwcHg7Ij5QcmVjaW86IDxzdHJvbmc+UEVOICQyOS45OTwvc3Ryb25nPjwvZGl2Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogYW51bmNpbyBiYWpvIHRpdHVsbyAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiOTE5MDc4OTMxNSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCjxiciAvPg0KDQo8YSBjbGFzcz0iYnV5X21sIiByZWw9Im5vZm9sbG93IiBocmVmPSJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS5wZS9NUEUtMTk3ODQ1NzktbXAzLWNsaXAtZXhwYW5kaWJsZS1tZXRhbGljby1oYXN0YS04Z2ItYWNjZXNvcmlvcy1jb21wbGV0b3MtX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly9wZXJ1LmNvbXByYXItb25saW5lLXlhLmNvbS9jYXRlZ29yaWFzL2VsZWN0csOzbmljYS1hdWRpby15LXZpZGVvIj5FbGVjdHLDs25pY2EsIEF1ZGlvIHkgVmlkZW88L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Mp3 Clip Expandible Metalico Hasta 8gb Accesorios Completos en peru - peru.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Mini,Diferentes,Colores,Accesorios,Completos,Precio,Oferta,Clip,Expandible,Metalico,Hasta,peru" />
<meta name="description" content="Comprar en mercadolibre Mp3 Clip Expandible Metalico Hasta 8gb Accesorios Completos en peru. comprar Mp3 Clip Expandible Metalico Hasta 8gb Accesorios Completos online en peru. comprar online en peru. comprar Mp3 Clip Expandible Metalico Hasta 8gb Accesorios Completos en peru" />
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
        <h1 class="title">Mp3 Clip Expandible Metalico Hasta 8gb Accesorios Completos</h1>
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
<div class="post_title"><a href="http://peru.comprar-online-ya.com/articulos/mp3-clip-expandible-metalico-hasta-8gb-accesorios-completos/11680">Mp3 Clip Expandible Metalico Hasta 8gb Accesorios Completos</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img1.mlstatic.com/s_MPE_v_I_f_2718142286_052012.jpg" alt="Mp3 Clip Expandible Metalico Hasta 8gb Accesorios Completos" class="templatemo_pic" title="Mp3 Clip Expandible Metalico Hasta 8gb Accesorios Completos" /></a>
<h3>Mini Mp3 Diferentes Colores + Accesorios Completos - Precio De Oferta</h3>

<div style="width: 250px;">Precio: <strong>PEN $29.99</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.pe/MPE-19784579-mp3-clip-expandible-metalico-hasta-8gb-accesorios-completos-_JM" target="_blank">Ver/Comprar</a>
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