<!--cachetime:1345017845--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:53:"helicoptero-con-camara-a-control-remoto-fotos-y-video";i:1;s:5:"42149";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:69:"articulos/helicoptero-con-camara-a-control-remoto-fotos-y-video/42149";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:70:"/articulos/helicoptero-con-camara-a-control-remoto-fotos-y-video/42149";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMTEiO3M6Njoibm9tYnJlIjtzOjE3OiJKdWVnb3MgeSBKdWd1ZXRlcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzExMzIiO3M6NDoic2x1ZyI7czoxNzoianVlZ29zLXktanVndWV0ZXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fXM6NzoiUHJvZHVjdCI7YToxOntzOjc6IlByb2R1Y3QiO2E6MTU6e3M6MjoiaWQiO3M6NToiNDIxNDkiO3M6NDoiaWRtbCI7czoxMjoiTUVDNDAwNjUwNTEzIjtzOjU6InRpdGxlIjtzOjU0OiJIZWxpY29wdGVybyBDb24gQ2FtYXJhIEEgQ29udHJvbCBSZW1vdG8sIEZvdG9zIFkgVmlkZW8iO3M6ODoic3VidGl0bGUiO3M6NjU6IkNvbiBNZW1vcmlhIEludGVybmEsIERpc3BvbmVtb3MgRW4gVmFyaW9zIENvbG9yZXMsIFBvY2FzIFVuaWRhZGVzIjtzOjU6InByaWNlIjtzOjY6IjEyOS45OSI7czo5OiJwZXJtYWxpbmsiO3M6MTA3OiJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS5lYy9NRUMtNDAwNjUwNTEzLWhlbGljb3B0ZXJvLWNvbi1jYW1hcmEtYS1jb250cm9sLXJlbW90by1mb3Rvcy15LXZpZGVvLV9KTSI7czo5OiJ0aHVtYm5haWwiO3M6NTI6Imh0dHA6Ly9pbWcxLm1sc3RhdGljLmNvbS9zX01FQ192X0lfZl85NzY3ODUxXzcyNy5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IlVTRCI7czoxMDoic3RhdGVfbmFtZSI7czoxOToiUGljaGluY2hhICggUXVpdG8gKSI7czo5OiJjaXR5X25hbWUiO3M6NToiUXVpdG8iO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjM6IjExMSI7czo1OiJhZGRlZCI7czoxOToiMjAxMi0wNy0yOCAwODozNzoxOCI7czo0OiJzbHVnIjtzOjUzOiJoZWxpY29wdGVyby1jb24tY2FtYXJhLWEtY29udHJvbC1yZW1vdG8tZm90b3MteS12aWRlbyI7czo1OiJzaXRpbyI7czo3OiJlY3VhZG9yIjtzOjY6ImN1c3RvbSI7czoxOiIwIjt9fXM6MTU6Im1ldGFkZXNjcmlwdGlvbiI7czoyNzM6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIEhlbGljb3B0ZXJvIENvbiBDYW1hcmEgQSBDb250cm9sIFJlbW90bywgRm90b3MgWSBWaWRlbyBlbiBlY3VhZG9yLiBjb21wcmFyIEhlbGljb3B0ZXJvIENvbiBDYW1hcmEgQSBDb250cm9sIFJlbW90bywgRm90b3MgWSBWaWRlbyBvbmxpbmUgZW4gZWN1YWRvci4gY29tcHJhciBvbmxpbmUgZW4gZWN1YWRvci4gY29tcHJhciBIZWxpY29wdGVybyBDb24gQ2FtYXJhIEEgQ29udHJvbCBSZW1vdG8sIEZvdG9zIFkgVmlkZW8gZW4gZWN1YWRvciI7czoxMjoibWV0YWtleXdvcmRzIjtzOjE1MDoibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLE1lbW9yaWEsSW50ZXJuYSxEaXNwb25lbW9zLFZhcmlvcyxDb2xvcmVzLFBvY2FzLFVuaWRhZGVzLEhlbGljb3B0ZXJvLENhbWFyYSxDb250cm9sLFJlbW90byxGb3RvcyxWaWRlbyxlY3VhZG9yIjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjg5OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBIZWxpY29wdGVybyBDb24gQ2FtYXJhIEEgQ29udHJvbCBSZW1vdG8sIEZvdG9zIFkgVmlkZW8gZW4gZWN1YWRvciI7czoxMDoiY2F0ZWdvcmlhcyI7YToxOTp7aTowO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6Ijk3IjtzOjY6Im5vbWJyZSI7czoyNjoiQWNjZXNvcmlvcyBwYXJhIFZlaMOtY3Vsb3MiO3M6NDoiaWRtbCI7czo3OiJNRUM1NzI1IjtzOjQ6InNsdWciO3M6MjY6ImFjY2Vzb3Jpb3MtcGFyYS12ZWjDrWN1bG9zIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiOTgiO3M6Njoibm9tYnJlIjtzOjE5OiJBbmltYWxlcyB5IE1hc2NvdGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTA3MSI7czo0OiJzbHVnIjtzOjE5OiJhbmltYWxlcy15LW1hc2NvdGFzIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiOTkiO3M6Njoibm9tYnJlIjtzOjIwOiJBcnRlIHkgQW50aWfDvGVkYWRlcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzEzNjciO3M6NDoic2x1ZyI7czoyMDoiYXJ0ZS15LWFudGlnw7xlZGFkZXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMDAiO3M6Njoibm9tYnJlIjtzOjIwOiJBdXRvcywgTW90b3MgeSBPdHJvcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzE3NDMiO3M6NDoic2x1ZyI7czoxOToiYXV0b3MtbW90b3MteS1vdHJvcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aTo0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEwMSI7czo2OiJub21icmUiO3M6MjI6IkNlbHVsYXJlcyB5IFRlbGVmb27DrWEiO3M6NDoiaWRtbCI7czo3OiJNRUMxMDUxIjtzOjQ6InNsdWciO3M6MjI6ImNlbHVsYXJlcy15LXRlbGVmb27DrWEiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6NTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMDIiO3M6Njoibm9tYnJlIjtzOjE0OiJDb2xlY2Npb25hYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzE3OTgiO3M6NDoic2x1ZyI7czoxNDoiY29sZWNjaW9uYWJsZXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6NjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMDMiO3M6Njoibm9tYnJlIjtzOjEyOiJDb21wdXRhY2nDs24iO3M6NDoiaWRtbCI7czo3OiJNRUMxNjQ4IjtzOjQ6InNsdWciO3M6MTI6ImNvbXB1dGFjacOzbiI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aTo3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEwNCI7czo2OiJub21icmUiO3M6MjI6IkNvbnNvbGFzIHkgVmlkZW9qdWVnb3MiO3M6NDoiaWRtbCI7czo3OiJNRUMxMTQ0IjtzOjQ6InNsdWciO3M6MjI6ImNvbnNvbGFzLXktdmlkZW9qdWVnb3MiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6ODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMDUiO3M6Njoibm9tYnJlIjtzOjIxOiJDw6FtYXJhcyB5IEFjY2Vzb3Jpb3MiO3M6NDoiaWRtbCI7czo3OiJNRUMxMDM5IjtzOjQ6InNsdWciO3M6MjE6ImPDoW1hcmFzLXktYWNjZXNvcmlvcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aTo5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEwNiI7czo2OiJub21icmUiO3M6MTg6IkRlcG9ydGVzIHkgRml0bmVzcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzEyNzYiO3M6NDoic2x1ZyI7czoxODoiZGVwb3J0ZXMteS1maXRuZXNzIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjEwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjEwNyI7czo2OiJub21icmUiO3M6Mjc6IkVsZWN0csOzbmljYSwgQXVkaW8geSBWaWRlbyI7czo0OiJpZG1sIjtzOjc6Ik1FQzEwMDAiO3M6NDoic2x1ZyI7czoyNjoiZWxlY3Ryw7NuaWNhLWF1ZGlvLXktdmlkZW8iO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MTE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTA4IjtzOjY6Im5vbWJyZSI7czoxNToiSG9nYXIgeSBNdWVibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTU3NCI7czo0OiJzbHVnIjtzOjE1OiJob2dhci15LW11ZWJsZXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MTI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTA5IjtzOjY6Im5vbWJyZSI7czo5OiJJbm11ZWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNRUMxNDU5IjtzOjQ6InNsdWciO3M6OToiaW5tdWVibGVzIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjEzO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjExMCI7czo2OiJub21icmUiO3M6MjI6Ikluc3RydW1lbnRvcyBNdXNpY2FsZXMiO3M6NDoiaWRtbCI7czo3OiJNRUMxMTgyIjtzOjQ6InNsdWciO3M6MjI6Imluc3RydW1lbnRvcy1tdXNpY2FsZXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MTQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTExIjtzOjY6Im5vbWJyZSI7czoxNzoiSnVlZ29zIHkgSnVndWV0ZXMiO3M6NDoiaWRtbCI7czo3OiJNRUMxMTMyIjtzOjQ6InNsdWciO3M6MTc6Imp1ZWdvcy15LWp1Z3VldGVzIjtzOjQ6InNpdGUiO3M6NzoiZWN1YWRvciI7fX1pOjE1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjExMiI7czo2OiJub21icmUiO3M6Mjg6Ik3DunNpY2EsIExpYnJvcyB5IFBlbMOtY3VsYXMiO3M6NDoiaWRtbCI7czo3OiJNRUMxMTY4IjtzOjQ6InNsdWciO3M6Mjc6Im3DunNpY2EtbGlicm9zLXktcGVsw61jdWxhcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aToxNjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMTMiO3M6Njoibm9tYnJlIjtzOjE3OiJPdHJhcyBjYXRlZ29yw61hcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzE5NTMiO3M6NDoic2x1ZyI7czoxNzoib3RyYXMtY2F0ZWdvcsOtYXMiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fWk6MTc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTE0IjtzOjY6Im5vbWJyZSI7czoyMToiUm9wYSwgSm95YXMgeSBSZWxvamVzIjtzOjQ6ImlkbWwiO3M6NzoiTUVDMTQzMCI7czo0OiJzbHVnIjtzOjIwOiJyb3BhLWpveWFzLXktcmVsb2plcyI7czo0OiJzaXRlIjtzOjc6ImVjdWFkb3IiO319aToxODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxMTUiO3M6Njoibm9tYnJlIjtzOjk6IlNlcnZpY2lvcyI7czo0OiJpZG1sIjtzOjc6Ik1FQzE1NDAiO3M6NDoic2x1ZyI7czo5OiJzZXJ2aWNpb3MiO3M6NDoic2l0ZSI7czo3OiJlY3VhZG9yIjt9fX1zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTczNDoiPGgxIGNsYXNzPSJ0aXRsZSI+SGVsaWNvcHRlcm8gQ29uIENhbWFyYSBBIENvbnRyb2wgUmVtb3RvLCBGb3RvcyBZIFZpZGVvPC9oMT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGNveSA0Njh4MTUgKCBhcnRpY3Vsb3MgKSAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiNTY4NjQxOTgyMSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCg0KPGRpdiBjbGFzcz0icG9zdF9ib3giIGFsaWduPSJqdXN0aWZ5Ij4NCjxkaXYgY2xhc3M9InBvc3RfdGl0bGUiPjxhIGhyZWY9Imh0dHA6Ly9lY3VhZG9yLmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvaGVsaWNvcHRlcm8tY29uLWNhbWFyYS1hLWNvbnRyb2wtcmVtb3RvLWZvdG9zLXktdmlkZW8vNDIxNDkiPkhlbGljb3B0ZXJvIENvbiBDYW1hcmEgQSBDb250cm9sIFJlbW90bywgRm90b3MgWSBWaWRlbzwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMS5tbHN0YXRpYy5jb20vc19NRUNfdl9JX2ZfOTc2Nzg1MV83MjcuanBnIiBhbHQ9IkhlbGljb3B0ZXJvIENvbiBDYW1hcmEgQSBDb250cm9sIFJlbW90bywgRm90b3MgWSBWaWRlbyIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iSGVsaWNvcHRlcm8gQ29uIENhbWFyYSBBIENvbnRyb2wgUmVtb3RvLCBGb3RvcyBZIFZpZGVvIiAvPjwvYT4NCjxoMz5Db24gTWVtb3JpYSBJbnRlcm5hLCBEaXNwb25lbW9zIEVuIFZhcmlvcyBDb2xvcmVzLCBQb2NhcyBVbmlkYWRlczwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5VU0QgJDEyOS45OTwvc3Ryb25nPjwvZGl2Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogYW51bmNpbyBiYWpvIHRpdHVsbyAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiOTE5MDc4OTMxNSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCjxiciAvPg0KDQo8YSBjbGFzcz0iYnV5X21sIiByZWw9Im5vZm9sbG93IiBocmVmPSJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS5lYy9NRUMtNDAwNjUwNTEzLWhlbGljb3B0ZXJvLWNvbi1jYW1hcmEtYS1jb250cm9sLXJlbW90by1mb3Rvcy15LXZpZGVvLV9KTSIgdGFyZ2V0PSJfYmxhbmsiPlZlci9Db21wcmFyPC9hPg0KPC9kaXY+DQo8ZGl2IGNsYXNzPSJwdWJsaXNoX2RhdGUiPiBDYXRlZ29yJmlhY3V0ZTthOiA8YSBocmVmPSJodHRwOi8vZWN1YWRvci5jb21wcmFyLW9ubGluZS15YS5jb20vY2F0ZWdvcmlhcy9qdWVnb3MteS1qdWd1ZXRlcyI+SnVlZ29zIHkgSnVndWV0ZXM8L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Helicoptero Con Camara A Control Remoto, Fotos Y Video en ecuador - ecuador.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Memoria,Interna,Disponemos,Varios,Colores,Pocas,Unidades,Helicoptero,Camara,Control,Remoto,Fotos,Video,ecuador" />
<meta name="description" content="Comprar en mercadolibre Helicoptero Con Camara A Control Remoto, Fotos Y Video en ecuador. comprar Helicoptero Con Camara A Control Remoto, Fotos Y Video online en ecuador. comprar online en ecuador. comprar Helicoptero Con Camara A Control Remoto, Fotos Y Video en ecuador" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://ecuador.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://ecuador.comprar-online-ya.com/" />
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
    <a href="http://ecuador.comprar-online-ya.com/" title="Inicio"><img src="http://ecuador.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://ecuador.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://ecuador.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/animales-y-mascotas" target="_parent">Animales y Mascotas</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/arte-y-antigüedades" target="_parent">Arte y Antigüedades</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/autos-motos-y-otros" target="_parent">Autos, Motos y Otros</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/celulares-y-telefonía" target="_parent">Celulares y Telefonía</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/coleccionables" target="_parent">Coleccionables</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/consolas-y-videojuegos" target="_parent">Consolas y Videojuegos</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/cámaras-y-accesorios" target="_parent">Cámaras y Accesorios</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/electrónica-audio-y-video" target="_parent">Electrónica, Audio y Video</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/hogar-y-muebles" target="_parent">Hogar y Muebles</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/música-libros-y-películas" target="_parent">Música, Libros y Películas</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras categorías</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/ropa-joyas-y-relojes" target="_parent">Ropa, Joyas y Relojes</a></li>
                                    <li><a href="http://ecuador.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                                    
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
        <h1 class="title">Helicoptero Con Camara A Control Remoto, Fotos Y Video</h1>
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
<div class="post_title"><a href="http://ecuador.comprar-online-ya.com/articulos/helicoptero-con-camara-a-control-remoto-fotos-y-video/42149">Helicoptero Con Camara A Control Remoto, Fotos Y Video</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img1.mlstatic.com/s_MEC_v_I_f_9767851_727.jpg" alt="Helicoptero Con Camara A Control Remoto, Fotos Y Video" class="templatemo_pic" title="Helicoptero Con Camara A Control Remoto, Fotos Y Video" /></a>
<h3>Con Memoria Interna, Disponemos En Varios Colores, Pocas Unidades</h3>

<div style="width: 250px;">Precio: <strong>USD $129.99</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.ec/MEC-400650513-helicoptero-con-camara-a-control-remoto-fotos-y-video-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://ecuador.comprar-online-ya.com/categorias/juegos-y-juguetes">Juegos y Juguetes</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 ecuador.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>