<!--cachetime:1345017221--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:44:"serie-el-auto-fantastico-completa-pague-8mil";i:1;s:5:"45033";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:60:"articulos/serie-el-auto-fantastico-completa-pague-8mil/45033";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:61:"/articulos/serie-el-auto-fantastico-completa-pague-8mil/45033";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI5NCI7czo2OiJub21icmUiO3M6MjA6Ik3DunNpY2EgeSBQZWzDrWN1bGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUNSMTE2OCI7czo0OiJzbHVnIjtzOjIwOiJtw7pzaWNhLXktcGVsw61jdWxhcyI7czo0OiJzaXRlIjtzOjk6ImNvc3RhcmljYSI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjQ1MDMzIjtzOjQ6ImlkbWwiO3M6MTA6Ik1DUjY3NTk0MjMiO3M6NToidGl0bGUiO3M6NDY6IlNlcmllIEVsIEF1dG8gRmFudGFzdGljby4gQ29tcGxldGEuIFBhZ3VlIDhtaWwiO3M6ODoic3VidGl0bGUiO3M6MDoiIjtzOjU6InByaWNlIjtzOjQ6IjgwMDAiO3M6OToicGVybWFsaW5rIjtzOjk1OiJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvLmNyL01DUi02NzU5NDIzLXNlcmllLWVsLWF1dG8tZmFudGFzdGljby1jb21wbGV0YS1wYWd1ZS04bWlsLV9KTSI7czo5OiJ0aHVtYm5haWwiO3M6NTg6Imh0dHA6Ly9pbWcxLm1sc3RhdGljLmNvbS9zX01DUl92X0lfZl8yNjY5MzU5MTQ4XzA1MjAxMi5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IkNSQyI7czoxMDoic3RhdGVfbmFtZSI7czo5OiJTYW4gSm9zw6kiO3M6OToiY2l0eV9uYW1lIjtzOjc6IkNlbnRyYWwiO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjI6Ijk0IjtzOjU6ImFkZGVkIjtzOjE5OiIyMDEyLTA4LTAzIDA2OjQwOjE0IjtzOjQ6InNsdWciO3M6NDQ6InNlcmllLWVsLWF1dG8tZmFudGFzdGljby1jb21wbGV0YS1wYWd1ZS04bWlsIjtzOjU6InNpdGlvIjtzOjk6ImNvc3RhcmljYSI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6MjU3OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBTZXJpZSBFbCBBdXRvIEZhbnRhc3RpY28uIENvbXBsZXRhLiBQYWd1ZSA4bWlsIGVuIGNvc3RhcmljYS4gY29tcHJhciBTZXJpZSBFbCBBdXRvIEZhbnRhc3RpY28uIENvbXBsZXRhLiBQYWd1ZSA4bWlsIG9ubGluZSBlbiBjb3N0YXJpY2EuIGNvbXByYXIgb25saW5lIGVuIGNvc3RhcmljYS4gY29tcHJhciBTZXJpZSBFbCBBdXRvIEZhbnRhc3RpY28uIENvbXBsZXRhLiBQYWd1ZSA4bWlsIGVuIGNvc3RhcmljYSI7czoxMjoibWV0YWtleXdvcmRzIjtzOjkxOiJtZXJjYWRvbGlicmUsY29tcHJhcixvbmxpbmUsbWVyY2Fkb3BhZ28sU2VyaWUsQXV0byxGYW50YXN0aWNvLENvbXBsZXRhLFBhZ3VlLDhtaWwsY29zdGFyaWNhIjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjgzOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBTZXJpZSBFbCBBdXRvIEZhbnRhc3RpY28uIENvbXBsZXRhLiBQYWd1ZSA4bWlsIGVuIGNvc3RhcmljYSI7czoxMDoiY2F0ZWdvcmlhcyI7YToyMDp7aTowO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6Ijc3IjtzOjY6Im5vbWJyZSI7czoyNjoiQWNjZXNvcmlvcyBwYXJhIFZlaMOtY3Vsb3MiO3M6NDoiaWRtbCI7czo3OiJNQ1IxNzQ3IjtzOjQ6InNsdWciO3M6MjY6ImFjY2Vzb3Jpb3MtcGFyYS12ZWjDrWN1bG9zIjtzOjQ6InNpdGUiO3M6OToiY29zdGFyaWNhIjt9fWk6MTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI3OCI7czo2OiJub21icmUiO3M6MjA6IkFydGUgeSBBbnRpZ8O8ZWRhZGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUNSMTM2NyI7czo0OiJzbHVnIjtzOjIwOiJhcnRlLXktYW50aWfDvGVkYWRlcyI7czo0OiJzaXRlIjtzOjk6ImNvc3RhcmljYSI7fX1pOjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNzkiO3M6Njoibm9tYnJlIjtzOjIwOiJBdXRvcywgTW90b3MgeSBPdHJvcyI7czo0OiJpZG1sIjtzOjc6Ik1DUjE3NDMiO3M6NDoic2x1ZyI7czoxOToiYXV0b3MtbW90b3MteS1vdHJvcyI7czo0OiJzaXRlIjtzOjk6ImNvc3RhcmljYSI7fX1pOjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiODAiO3M6Njoibm9tYnJlIjtzOjIyOiJDZWx1bGFyZXMgeSBUZWzDqWZvbm9zIjtzOjQ6ImlkbWwiO3M6NzoiTUNSMTA1MSI7czo0OiJzbHVnIjtzOjIyOiJjZWx1bGFyZXMteS10ZWzDqWZvbm9zIjtzOjQ6InNpdGUiO3M6OToiY29zdGFyaWNhIjt9fWk6NDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI4MSI7czo2OiJub21icmUiO3M6MjQ6IkNvbGVjY2lvbmFibGVzIHkgSG9iYmllcyI7czo0OiJpZG1sIjtzOjc6Ik1DUjE3OTgiO3M6NDoic2x1ZyI7czoyNDoiY29sZWNjaW9uYWJsZXMteS1ob2JiaWVzIjtzOjQ6InNpdGUiO3M6OToiY29zdGFyaWNhIjt9fWk6NTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI4MiI7czo2OiJub21icmUiO3M6MTI6IkNvbXB1dGFjacOzbiI7czo0OiJpZG1sIjtzOjc6Ik1DUjE2NDgiO3M6NDoic2x1ZyI7czoxMjoiY29tcHV0YWNpw7NuIjtzOjQ6InNpdGUiO3M6OToiY29zdGFyaWNhIjt9fWk6NjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI4MyI7czo2OiJub21icmUiO3M6MjI6IkNvbnNvbGFzIHkgVmlkZW9qdWVnb3MiO3M6NDoiaWRtbCI7czo3OiJNQ1IxMTQ0IjtzOjQ6InNsdWciO3M6MjI6ImNvbnNvbGFzLXktdmlkZW9qdWVnb3MiO3M6NDoic2l0ZSI7czo5OiJjb3N0YXJpY2EiO319aTo3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6Ijg0IjtzOjY6Im5vbWJyZSI7czoyNjoiQ8OhbWFyYXMgRGlnaXRhbGVzIHkgRm90by4iO3M6NDoiaWRtbCI7czo3OiJNQ1IxMDM5IjtzOjQ6InNsdWciO3M6MjY6ImPDoW1hcmFzLWRpZ2l0YWxlcy15LWZvdG8tIjtzOjQ6InNpdGUiO3M6OToiY29zdGFyaWNhIjt9fWk6ODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI4NSI7czo2OiJub21icmUiO3M6MTg6IkRlcG9ydGVzIHkgRml0bmVzcyI7czo0OiJpZG1sIjtzOjc6Ik1DUjEyNzYiO3M6NDoic2x1ZyI7czoxODoiZGVwb3J0ZXMteS1maXRuZXNzIjtzOjQ6InNpdGUiO3M6OToiY29zdGFyaWNhIjt9fWk6OTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI4NiI7czo2OiJub21icmUiO3M6Mjc6IkVsZWN0csOzbmljYSwgQXVkaW8geSBWaWRlbyI7czo0OiJpZG1sIjtzOjc6Ik1DUjEwMDAiO3M6NDoic2x1ZyI7czoyNjoiZWxlY3Ryw7NuaWNhLWF1ZGlvLXktdmlkZW8iO3M6NDoic2l0ZSI7czo5OiJjb3N0YXJpY2EiO319aToxMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI4NyI7czo2OiJub21icmUiO3M6MjY6IkhvZ2FyIHkgRWxlY3Ryb2RvbcOpc3RpY29zIjtzOjQ6ImlkbWwiO3M6NzoiTUNSMTU3NCI7czo0OiJzbHVnIjtzOjI2OiJob2dhci15LWVsZWN0cm9kb23DqXN0aWNvcyI7czo0OiJzaXRlIjtzOjk6ImNvc3RhcmljYSI7fX1pOjExO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6Ijg4IjtzOjY6Im5vbWJyZSI7czoyNToiSW5kdW1lbnRhcmlhIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1DUjE0MzAiO3M6NDoic2x1ZyI7czoyNToiaW5kdW1lbnRhcmlhLXktYWNjZXNvcmlvcyI7czo0OiJzaXRlIjtzOjk6ImNvc3RhcmljYSI7fX1pOjEyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6Ijg5IjtzOjY6Im5vbWJyZSI7czo5OiJJbm11ZWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNQ1IxNDU5IjtzOjQ6InNsdWciO3M6OToiaW5tdWVibGVzIjtzOjQ6InNpdGUiO3M6OToiY29zdGFyaWNhIjt9fWk6MTM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiOTAiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUNSMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6OToiY29zdGFyaWNhIjt9fWk6MTQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiOTEiO3M6Njoibm9tYnJlIjtzOjE1OiJKb3lhcyB5IFJlbG9qZXMiO3M6NDoiaWRtbCI7czo3OiJNQ1IzOTM3IjtzOjQ6InNsdWciO3M6MTU6ImpveWFzLXktcmVsb2plcyI7czo0OiJzaXRlIjtzOjk6ImNvc3RhcmljYSI7fX1pOjE1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjkyIjtzOjY6Im5vbWJyZSI7czoxNzoiSnVlZ29zIHkgSnVndWV0ZXMiO3M6NDoiaWRtbCI7czo3OiJNQ1IxMTMyIjtzOjQ6InNsdWciO3M6MTc6Imp1ZWdvcy15LWp1Z3VldGVzIjtzOjQ6InNpdGUiO3M6OToiY29zdGFyaWNhIjt9fWk6MTY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiOTMiO3M6Njoibm9tYnJlIjtzOjI1OiJMaWJyb3MsIFJldmlzdGFzIHkgQ29taWNzIjtzOjQ6ImlkbWwiO3M6NzoiTUNSMzAyNSI7czo0OiJzbHVnIjtzOjI0OiJsaWJyb3MtcmV2aXN0YXMteS1jb21pY3MiO3M6NDoic2l0ZSI7czo5OiJjb3N0YXJpY2EiO319aToxNzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI5NCI7czo2OiJub21icmUiO3M6MjA6Ik3DunNpY2EgeSBQZWzDrWN1bGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUNSMTE2OCI7czo0OiJzbHVnIjtzOjIwOiJtw7pzaWNhLXktcGVsw61jdWxhcyI7czo0OiJzaXRlIjtzOjk6ImNvc3RhcmljYSI7fX1pOjE4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6Ijk1IjtzOjY6Im5vbWJyZSI7czoxNzoiT3RyYXMgY2F0ZWdvcsOtYXMiO3M6NDoiaWRtbCI7czo3OiJNQ1IxOTUzIjtzOjQ6InNsdWciO3M6MTc6Im90cmFzLWNhdGVnb3LDrWFzIjtzOjQ6InNpdGUiO3M6OToiY29zdGFyaWNhIjt9fWk6MTk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiOTYiO3M6Njoibm9tYnJlIjtzOjk6IlNlcnZpY2lvcyI7czo0OiJpZG1sIjtzOjc6Ik1DUjE1NDAiO3M6NDoic2x1ZyI7czo5OiJzZXJ2aWNpb3MiO3M6NDoic2l0ZSI7czo5OiJjb3N0YXJpY2EiO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNjMzOiI8aDEgY2xhc3M9InRpdGxlIj5TZXJpZSBFbCBBdXRvIEZhbnRhc3RpY28uIENvbXBsZXRhLiBQYWd1ZSA4bWlsPC9oMT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGNveSA0Njh4MTUgKCBhcnRpY3Vsb3MgKSAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiNTY4NjQxOTgyMSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCg0KPGRpdiBjbGFzcz0icG9zdF9ib3giIGFsaWduPSJqdXN0aWZ5Ij4NCjxkaXYgY2xhc3M9InBvc3RfdGl0bGUiPjxhIGhyZWY9Imh0dHA6Ly9jb3N0YXJpY2EuY29tcHJhci1vbmxpbmUteWEuY29tL2FydGljdWxvcy9zZXJpZS1lbC1hdXRvLWZhbnRhc3RpY28tY29tcGxldGEtcGFndWUtOG1pbC80NTAzMyI+U2VyaWUgRWwgQXV0byBGYW50YXN0aWNvLiBDb21wbGV0YS4gUGFndWUgOG1pbDwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMS5tbHN0YXRpYy5jb20vc19NQ1Jfdl9JX2ZfMjY2OTM1OTE0OF8wNTIwMTIuanBnIiBhbHQ9IlNlcmllIEVsIEF1dG8gRmFudGFzdGljby4gQ29tcGxldGEuIFBhZ3VlIDhtaWwiIGNsYXNzPSJ0ZW1wbGF0ZW1vX3BpYyIgdGl0bGU9IlNlcmllIEVsIEF1dG8gRmFudGFzdGljby4gQ29tcGxldGEuIFBhZ3VlIDhtaWwiIC8+PC9hPg0KPGgzPjwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5DUkMgJDgwMDAuMDA8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jby5jci9NQ1ItNjc1OTQyMy1zZXJpZS1lbC1hdXRvLWZhbnRhc3RpY28tY29tcGxldGEtcGFndWUtOG1pbC1fSk0iIHRhcmdldD0iX2JsYW5rIj5WZXIvQ29tcHJhcjwvYT4NCjwvZGl2Pg0KPGRpdiBjbGFzcz0icHVibGlzaF9kYXRlIj4gQ2F0ZWdvciZpYWN1dGU7YTogPGEgaHJlZj0iaHR0cDovL2Nvc3RhcmljYS5jb21wcmFyLW9ubGluZS15YS5jb20vY2F0ZWdvcmlhcy9tw7pzaWNhLXktcGVsw61jdWxhcyI+TcO6c2ljYSB5IFBlbMOtY3VsYXM8L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Serie El Auto Fantastico. Completa. Pague 8mil en costarica - costarica.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Serie,Auto,Fantastico,Completa,Pague,8mil,costarica" />
<meta name="description" content="Comprar en mercadolibre Serie El Auto Fantastico. Completa. Pague 8mil en costarica. comprar Serie El Auto Fantastico. Completa. Pague 8mil online en costarica. comprar online en costarica. comprar Serie El Auto Fantastico. Completa. Pague 8mil en costarica" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://costarica.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://costarica.comprar-online-ya.com/" />
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
    <a href="http://costarica.comprar-online-ya.com/" title="Inicio"><img src="http://costarica.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://costarica.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://costarica.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/arte-y-antigüedades" target="_parent">Arte y Antigüedades</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/autos-motos-y-otros" target="_parent">Autos, Motos y Otros</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/celulares-y-teléfonos" target="_parent">Celulares y Teléfonos</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/coleccionables-y-hobbies" target="_parent">Coleccionables y Hobbies</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/consolas-y-videojuegos" target="_parent">Consolas y Videojuegos</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/cámaras-digitales-y-foto-" target="_parent">Cámaras Digitales y Foto.</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/electrónica-audio-y-video" target="_parent">Electrónica, Audio y Video</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/hogar-y-electrodomésticos" target="_parent">Hogar y Electrodomésticos</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/indumentaria-y-accesorios" target="_parent">Indumentaria y Accesorios</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/joyas-y-relojes" target="_parent">Joyas y Relojes</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/libros-revistas-y-comics" target="_parent">Libros, Revistas y Comics</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/música-y-películas" target="_parent">Música y Películas</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras categorías</a></li>
                                    <li><a href="http://costarica.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                                    
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
        <h1 class="title">Serie El Auto Fantastico. Completa. Pague 8mil</h1>
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
<div class="post_title"><a href="http://costarica.comprar-online-ya.com/articulos/serie-el-auto-fantastico-completa-pague-8mil/45033">Serie El Auto Fantastico. Completa. Pague 8mil</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img1.mlstatic.com/s_MCR_v_I_f_2669359148_052012.jpg" alt="Serie El Auto Fantastico. Completa. Pague 8mil" class="templatemo_pic" title="Serie El Auto Fantastico. Completa. Pague 8mil" /></a>
<h3></h3>

<div style="width: 250px;">Precio: <strong>CRC $8000.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.co.cr/MCR-6759423-serie-el-auto-fantastico-completa-pague-8mil-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://costarica.comprar-online-ya.com/categorias/música-y-películas">Música y Películas</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 costarica.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>