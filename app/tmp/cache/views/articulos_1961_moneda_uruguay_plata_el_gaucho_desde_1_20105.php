<!--cachetime:1345020025--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:43:"1961-moneda-uruguay-plata-el-gaucho-desde-1";i:1;s:5:"20105";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:59:"articulos/1961-moneda-uruguay-plata-el-gaucho-desde-1/20105";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:60:"/articulos/1961-moneda-uruguay-plata-el-gaucho-desde-1/20105";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzAiO3M6Njoibm9tYnJlIjtzOjE0OiJDb2xlY2Npb25hYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE3OTgiO3M6NDoic2x1ZyI7czoxNDoiY29sZWNjaW9uYWJsZXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fXM6NzoiUHJvZHVjdCI7YToxOntzOjc6IlByb2R1Y3QiO2E6MTU6e3M6MjoiaWQiO3M6NToiMjAxMDUiO3M6NDoiaWRtbCI7czoxMToiTUxVMzE3MDU1ODMiO3M6NToidGl0bGUiO3M6NDU6IjE5NjEgTW9uZWRhIFVydWd1YXkgUGxhdGEgRWwgR2F1Y2hvIERlc2RlICQgMSI7czo4OiJzdWJ0aXRsZSI7czowOiIiO3M6NToicHJpY2UiO3M6MzoiMTkwIjtzOjk6InBlcm1hbGluayI7czo5NjoiaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20udXkvTUxVLTMxNzA1NTgzLTE5NjEtbW9uZWRhLXVydWd1YXktcGxhdGEtZWwtZ2F1Y2hvLWRlc2RlLTEtX0pNIjtzOjk6InRodW1ibmFpbCI7czo1ODoiaHR0cDovL2ltZzEubWxzdGF0aWMuY29tL3NfTUxVX3ZfSV9mXzI4MTAzMTE0NDZfMDYyMDEyLmpwZyI7czoxMToiY3VycmVuY3lfaWQiO3M6MzoiVVlVIjtzOjEwOiJzdGF0ZV9uYW1lIjtzOjEwOiJNb250ZXZpZGVvIjtzOjk6ImNpdHlfbmFtZSI7czoxNDoiQ29sb24gLSBMZXppY2EiO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjM6IjE3MCI7czo1OiJhZGRlZCI7czoxOToiMjAxMi0wNi0yMCAxMjo0MzoxNSI7czo0OiJzbHVnIjtzOjQzOiIxOTYxLW1vbmVkYS11cnVndWF5LXBsYXRhLWVsLWdhdWNoby1kZXNkZS0xIjtzOjU6InNpdGlvIjtzOjc6InVydWd1YXkiO3M6NjoiY3VzdG9tIjtzOjE6IjAiO319czoxNToibWV0YWRlc2NyaXB0aW9uIjtzOjI0NjoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgMTk2MSBNb25lZGEgVXJ1Z3VheSBQbGF0YSBFbCBHYXVjaG8gRGVzZGUgJCAxIGVuIHVydWd1YXkuIGNvbXByYXIgMTk2MSBNb25lZGEgVXJ1Z3VheSBQbGF0YSBFbCBHYXVjaG8gRGVzZGUgJCAxIG9ubGluZSBlbiB1cnVndWF5LiBjb21wcmFyIG9ubGluZSBlbiB1cnVndWF5LiBjb21wcmFyIDE5NjEgTW9uZWRhIFVydWd1YXkgUGxhdGEgRWwgR2F1Y2hvIERlc2RlICQgMSBlbiB1cnVndWF5IjtzOjEyOiJtZXRha2V5d29yZHMiO3M6ODY6Im1lcmNhZG9saWJyZSxjb21wcmFyLG9ubGluZSxtZXJjYWRvcGFnbywxOTYxLE1vbmVkYSxVcnVndWF5LFBsYXRhLEdhdWNobyxEZXNkZSx1cnVndWF5IjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjgwOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSAxOTYxIE1vbmVkYSBVcnVndWF5IFBsYXRhIEVsIEdhdWNobyBEZXNkZSAkIDEgZW4gdXJ1Z3VheSI7czoxMDoiY2F0ZWdvcmlhcyI7YToyMzp7aTowO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2NCI7czo2OiJub21icmUiO3M6MjY6IkFjY2Vzb3Jpb3MgcGFyYSBWZWjDrWN1bG9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxVNTcyNSI7czo0OiJzbHVnIjtzOjI2OiJhY2Nlc29yaW9zLXBhcmEtdmVow61jdWxvcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2NSI7czo2OiJub21icmUiO3M6MTk6IkFuaW1hbGVzIHkgTWFzY290YXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxMDcxIjtzOjQ6InNsdWciO3M6MTk6ImFuaW1hbGVzLXktbWFzY290YXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjYiO3M6Njoibm9tYnJlIjtzOjIwOiJBcnRlIHkgQW50aWfDvGVkYWRlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTEzNjciO3M6NDoic2x1ZyI7czoyMDoiYXJ0ZS15LWFudGlnw7xlZGFkZXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjciO3M6Njoibm9tYnJlIjtzOjIwOiJBdXRvcywgTW90b3MgeSBPdHJvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE3NDMiO3M6NDoic2x1ZyI7czoxOToiYXV0b3MtbW90b3MteS1vdHJvcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aTo0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2OCI7czo2OiJub21icmUiO3M6NjoiQmViw6lzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTM4NCI7czo0OiJzbHVnIjtzOjY6ImJlYsOpcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aTo1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2OSI7czo2OiJub21icmUiO3M6MjI6IkNlbHVsYXJlcyB5IFRlbGVmb27DrWEiO3M6NDoiaWRtbCI7czo3OiJNTFUxMDUxIjtzOjQ6InNsdWciO3M6MjI6ImNlbHVsYXJlcy15LXRlbGVmb27DrWEiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6NjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzAiO3M6Njoibm9tYnJlIjtzOjE0OiJDb2xlY2Npb25hYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE3OTgiO3M6NDoic2x1ZyI7czoxNDoiY29sZWNjaW9uYWJsZXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6NzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzEiO3M6Njoibm9tYnJlIjtzOjEyOiJDb21wdXRhY2nDs24iO3M6NDoiaWRtbCI7czo3OiJNTFUxNjQ4IjtzOjQ6InNsdWciO3M6MTI6ImNvbXB1dGFjacOzbiI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aTo4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3MiI7czo2OiJub21icmUiO3M6MjI6IkNvbnNvbGFzIHkgVmlkZW9qdWVnb3MiO3M6NDoiaWRtbCI7czo3OiJNTFUxMTQ0IjtzOjQ6InNsdWciO3M6MjI6ImNvbnNvbGFzLXktdmlkZW9qdWVnb3MiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6OTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzMiO3M6Njoibm9tYnJlIjtzOjIxOiJDw6FtYXJhcyB5IEFjY2Vzb3Jpb3MiO3M6NDoiaWRtbCI7czo3OiJNTFUxMDM5IjtzOjQ6InNsdWciO3M6MjE6ImPDoW1hcmFzLXktYWNjZXNvcmlvcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzQiO3M6Njoibm9tYnJlIjtzOjE4OiJEZXBvcnRlcyB5IEZpdG5lc3MiO3M6NDoiaWRtbCI7czo3OiJNTFUxMjc2IjtzOjQ6InNsdWciO3M6MTg6ImRlcG9ydGVzLXktZml0bmVzcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzUiO3M6Njoibm9tYnJlIjtzOjMwOiJFbGVjdHJvZG9tw6lzdGljb3MgeSBBaXJlcyBBYy4iO3M6NDoiaWRtbCI7czo3OiJNTFU1NzI2IjtzOjQ6InNsdWciO3M6MzA6ImVsZWN0cm9kb23DqXN0aWNvcy15LWFpcmVzLWFjLSI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxMjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzYiO3M6Njoibm9tYnJlIjtzOjI3OiJFbGVjdHLDs25pY2EsIEF1ZGlvIHkgVmlkZW8iO3M6NDoiaWRtbCI7czo3OiJNTFUxMDAwIjtzOjQ6InNsdWciO3M6MjY6ImVsZWN0csOzbmljYS1hdWRpby15LXZpZGVvIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjEzO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3NyI7czo2OiJub21icmUiO3M6MjQ6IkhvZ2FyLCBNdWVibGVzIHkgSmFyZMOtbiI7czo0OiJpZG1sIjtzOjc6Ik1MVTE1NzQiO3M6NDoic2x1ZyI7czoyMzoiaG9nYXItbXVlYmxlcy15LWphcmTDrW4iO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTc4IjtzOjY6Im5vbWJyZSI7czoyMToiSW5kdXN0cmlhcyB5IE9maWNpbmFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTQ5OSI7czo0OiJzbHVnIjtzOjIxOiJpbmR1c3RyaWFzLXktb2ZpY2luYXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTc5IjtzOjY6Im5vbWJyZSI7czo5OiJJbm11ZWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxNDU5IjtzOjQ6InNsdWciO3M6OToiaW5tdWVibGVzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4MCI7czo2OiJub21icmUiO3M6MjI6Ikluc3RydW1lbnRvcyBNdXNpY2FsZXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxMTgyIjtzOjQ6InNsdWciO3M6MjI6Imluc3RydW1lbnRvcy1tdXNpY2FsZXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTgxIjtzOjY6Im5vbWJyZSI7czoxNzoiSnVlZ29zIHkgSnVndWV0ZXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxMTMyIjtzOjQ6InNsdWciO3M6MTc6Imp1ZWdvcy15LWp1Z3VldGVzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4MiI7czo2OiJub21icmUiO3M6Mjg6Ik3DunNpY2EsIExpYnJvcyB5IFBlbMOtY3VsYXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxMTY4IjtzOjQ6InNsdWciO3M6Mjc6Im3DunNpY2EtbGlicm9zLXktcGVsw61jdWxhcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxOTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODMiO3M6Njoibm9tYnJlIjtzOjE3OiJPdHJhcyBjYXRlZ29yw61hcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE5NTMiO3M6NDoic2x1ZyI7czoxNzoib3RyYXMtY2F0ZWdvcsOtYXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTg0IjtzOjY6Im5vbWJyZSI7czoyMToiUm9wYSwgSm95YXMgeSBSZWxvamVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTQzMCI7czo0OiJzbHVnIjtzOjIwOiJyb3BhLWpveWFzLXktcmVsb2plcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToyMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODUiO3M6Njoibm9tYnJlIjtzOjE1OiJTYWx1ZCB5IEJlbGxlemEiO3M6NDoiaWRtbCI7czo3OiJNTFUxMjQ2IjtzOjQ6InNsdWciO3M6MTU6InNhbHVkLXktYmVsbGV6YSI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToyMjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODYiO3M6Njoibm9tYnJlIjtzOjk6IlNlcnZpY2lvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE1NDAiO3M6NDoic2x1ZyI7czo5OiJzZXJ2aWNpb3MiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fX1zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTYxMjoiPGgxIGNsYXNzPSJ0aXRsZSI+MTk2MSBNb25lZGEgVXJ1Z3VheSBQbGF0YSBFbCBHYXVjaG8gRGVzZGUgJCAxPC9oMT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGNveSA0Njh4MTUgKCBhcnRpY3Vsb3MgKSAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiNTY4NjQxOTgyMSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCg0KPGRpdiBjbGFzcz0icG9zdF9ib3giIGFsaWduPSJqdXN0aWZ5Ij4NCjxkaXYgY2xhc3M9InBvc3RfdGl0bGUiPjxhIGhyZWY9Imh0dHA6Ly91cnVndWF5LmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvMTk2MS1tb25lZGEtdXJ1Z3VheS1wbGF0YS1lbC1nYXVjaG8tZGVzZGUtMS8yMDEwNSI+MTk2MSBNb25lZGEgVXJ1Z3VheSBQbGF0YSBFbCBHYXVjaG8gRGVzZGUgJCAxPC9hPjwvZGl2Pg0KPGRpdiBjbGFzcz0icG9zdF90ZXh0X2FyZWEiPg0KPGEgaHJlZj0iIyI+PGltZyBzcmM9Imh0dHA6Ly9pbWcxLm1sc3RhdGljLmNvbS9zX01MVV92X0lfZl8yODEwMzExNDQ2XzA2MjAxMi5qcGciIGFsdD0iMTk2MSBNb25lZGEgVXJ1Z3VheSBQbGF0YSBFbCBHYXVjaG8gRGVzZGUgJCAxIiBjbGFzcz0idGVtcGxhdGVtb19waWMiIHRpdGxlPSIxOTYxIE1vbmVkYSBVcnVndWF5IFBsYXRhIEVsIEdhdWNobyBEZXNkZSAkIDEiIC8+PC9hPg0KPGgzPjwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5VWVUgJDE5MC4wMDwvc3Ryb25nPjwvZGl2Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogYW51bmNpbyBiYWpvIHRpdHVsbyAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiOTE5MDc4OTMxNSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCjxiciAvPg0KDQo8YSBjbGFzcz0iYnV5X21sIiByZWw9Im5vZm9sbG93IiBocmVmPSJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS51eS9NTFUtMzE3MDU1ODMtMTk2MS1tb25lZGEtdXJ1Z3VheS1wbGF0YS1lbC1nYXVjaG8tZGVzZGUtMS1fSk0iIHRhcmdldD0iX2JsYW5rIj5WZXIvQ29tcHJhcjwvYT4NCjwvZGl2Pg0KPGRpdiBjbGFzcz0icHVibGlzaF9kYXRlIj4gQ2F0ZWdvciZpYWN1dGU7YTogPGEgaHJlZj0iaHR0cDovL3VydWd1YXkuY29tcHJhci1vbmxpbmUteWEuY29tL2NhdGVnb3JpYXMvY29sZWNjaW9uYWJsZXMiPkNvbGVjY2lvbmFibGVzPC9hPjwvZGl2Pg0KPC9kaXY+DQoNCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo4OiJQcm9kdWN0cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre 1961 Moneda Uruguay Plata El Gaucho Desde $ 1 en uruguay - uruguay.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,1961,Moneda,Uruguay,Plata,Gaucho,Desde,uruguay" />
<meta name="description" content="Comprar en mercadolibre 1961 Moneda Uruguay Plata El Gaucho Desde $ 1 en uruguay. comprar 1961 Moneda Uruguay Plata El Gaucho Desde $ 1 online en uruguay. comprar online en uruguay. comprar 1961 Moneda Uruguay Plata El Gaucho Desde $ 1 en uruguay" />
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
        <h1 class="title">1961 Moneda Uruguay Plata El Gaucho Desde $ 1</h1>
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
<div class="post_title"><a href="http://uruguay.comprar-online-ya.com/articulos/1961-moneda-uruguay-plata-el-gaucho-desde-1/20105">1961 Moneda Uruguay Plata El Gaucho Desde $ 1</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img1.mlstatic.com/s_MLU_v_I_f_2810311446_062012.jpg" alt="1961 Moneda Uruguay Plata El Gaucho Desde $ 1" class="templatemo_pic" title="1961 Moneda Uruguay Plata El Gaucho Desde $ 1" /></a>
<h3></h3>

<div style="width: 250px;">Precio: <strong>UYU $190.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.uy/MLU-31705583-1961-moneda-uruguay-plata-el-gaucho-desde-1-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://uruguay.comprar-online-ya.com/categorias/coleccionables">Coleccionables</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 uruguay.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>