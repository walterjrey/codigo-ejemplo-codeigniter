<!--cachetime:1345016595--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:33:"line-6-pod-xt-live-poco-uso-10500";i:1;s:5:"42912";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:49:"articulos/line-6-pod-xt-live-poco-uso-10500/42912";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:50:"/articulos/line-6-pod-xt-live-poco-uso-10500/42912";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyODAiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319czo3OiJQcm9kdWN0IjthOjE6e3M6NzoiUHJvZHVjdCI7YToxNTp7czoyOiJpZCI7czo1OiI0MjkxMiI7czo0OiJpZG1sIjtzOjEyOiJNUkQ0MDAzMDc5MDMiO3M6NToidGl0bGUiO3M6MzM6IkxpbmUgNiBQb2QgWHQgTGl2ZSBQb2NvIFVzbyAxMDUwMCI7czo4OiJzdWJ0aXRsZSI7czowOiIiO3M6NToicHJpY2UiO3M6NToiMTA1MDAiO3M6OToicGVybWFsaW5rIjtzOjg3OiJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS5kby9NUkQtNDAwMzA3OTAzLWxpbmUtNi1wb2QteHQtbGl2ZS1wb2NvLXVzby0xMDUwMC1fSk0iO3M6OToidGh1bWJuYWlsIjtzOjU4OiJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NUkRfdl9JX2ZfMjk2NTgzOTcyMV8wNzIwMTIuanBnIjtzOjExOiJjdXJyZW5jeV9pZCI7czozOiJET1AiO3M6MTA6InN0YXRlX25hbWUiO3M6MTQ6IlNhbiBDcmlzdMOzYmFsIjtzOjk6ImNpdHlfbmFtZSI7czoxMzoiU2FuIENyaXN0b2JhbCI7czoxMToiY2F0ZWdvcnlfaWQiO3M6MzoiMjgwIjtzOjU6ImFkZGVkIjtzOjE5OiIyMDEyLTA3LTMwIDAyOjUxOjQ4IjtzOjQ6InNsdWciO3M6MzM6ImxpbmUtNi1wb2QteHQtbGl2ZS1wb2NvLXVzby0xMDUwMCI7czo1OiJzaXRpbyI7czoxMDoiZG9taW5pY2FuYSI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6MjIyOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBMaW5lIDYgUG9kIFh0IExpdmUgUG9jbyBVc28gMTA1MDAgZW4gZG9taW5pY2FuYS4gY29tcHJhciBMaW5lIDYgUG9kIFh0IExpdmUgUG9jbyBVc28gMTA1MDAgb25saW5lIGVuIGRvbWluaWNhbmEuIGNvbXByYXIgb25saW5lIGVuIGRvbWluaWNhbmEuIGNvbXByYXIgTGluZSA2IFBvZCBYdCBMaXZlIFBvY28gVXNvIDEwNTAwIGVuIGRvbWluaWNhbmEiO3M6MTI6Im1ldGFrZXl3b3JkcyI7czo3MToibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLExpbmUsTGl2ZSxQb2NvLDEwNTAwLGRvbWluaWNhbmEiO3M6MTA6InRpdGxlX3BhZ2UiO3M6NzE6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIExpbmUgNiBQb2QgWHQgTGl2ZSBQb2NvIFVzbyAxMDUwMCBlbiBkb21pbmljYW5hIjtzOjEwOiJjYXRlZ29yaWFzIjthOjE5OntpOjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjY4IjtzOjY6Im5vbWJyZSI7czoyNjoiQWNjZXNvcmlvcyBwYXJhIFZlaMOtY3Vsb3MiO3M6NDoiaWRtbCI7czo3OiJNUkQxNzQ3IjtzOjQ6InNsdWciO3M6MjY6ImFjY2Vzb3Jpb3MtcGFyYS12ZWjDrWN1bG9zIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aToxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI2OSI7czo2OiJub21icmUiO3M6MjA6IkFydGUgeSBBbnRpZ8O8ZWRhZGVzIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTM2NyI7czo0OiJzbHVnIjtzOjIwOiJhcnRlLXktYW50aWfDvGVkYWRlcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzAiO3M6Njoibm9tYnJlIjtzOjIxOiJDYXJyb3MsIE1vdG9zIHkgT3Ryb3MiO3M6NDoiaWRtbCI7czo3OiJNUkQxNzQzIjtzOjQ6InNsdWciO3M6MjA6ImNhcnJvcy1tb3Rvcy15LW90cm9zIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aTozO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI3MSI7czo2OiJub21icmUiO3M6MjI6IkNlbHVsYXJlcyB5IFRlbMOpZm9ub3MiO3M6NDoiaWRtbCI7czo3OiJNUkQxMDUxIjtzOjQ6InNsdWciO3M6MjI6ImNlbHVsYXJlcy15LXRlbMOpZm9ub3MiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjcyIjtzOjY6Im5vbWJyZSI7czoyNDoiQ29sZWNjaW9uYWJsZXMgeSBIb2JiaWVzIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTc5OCI7czo0OiJzbHVnIjtzOjI0OiJjb2xlY2Npb25hYmxlcy15LWhvYmJpZXMiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjczIjtzOjY6Im5vbWJyZSI7czoxMjoiQ29tcHV0YWNpw7NuIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJjb21wdXRhY2nDs24iO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjc0IjtzOjY6Im5vbWJyZSI7czoyMjoiQ29uc29sYXMgeSBWaWRlb2p1ZWdvcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDExNDQiO3M6NDoic2x1ZyI7czoyMjoiY29uc29sYXMteS12aWRlb2p1ZWdvcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6NzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzUiO3M6Njoibm9tYnJlIjtzOjI1OiJDw6FtYXJhcyBEaWdpdGFsZXMgeSBGb3RvIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTAzOSI7czo0OiJzbHVnIjtzOjI1OiJjw6FtYXJhcy1kaWdpdGFsZXMteS1mb3RvIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aTo4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI3NiI7czo2OiJub21icmUiO3M6MTg6IkRlcG9ydGVzIHkgRml0bmVzcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDEyNzYiO3M6NDoic2x1ZyI7czoxODoiZGVwb3J0ZXMteS1maXRuZXNzIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aTo5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI3NyI7czo2OiJub21icmUiO3M6MjQ6IkVsZWN0csOzbmljYSBBdWRpbyBWaWRlbyI7czo0OiJpZG1sIjtzOjc6Ik1SRDEwMDAiO3M6NDoic2x1ZyI7czoyNDoiZWxlY3Ryw7NuaWNhLWF1ZGlvLXZpZGVvIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aToxMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNzgiO3M6Njoibm9tYnJlIjtzOjI2OiJIb2dhciB5IEVsZWN0cm9kb23DqXN0aWNvcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDE1NzQiO3M6NDoic2x1ZyI7czoyNjoiaG9nYXIteS1lbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjExO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI3OSI7czo2OiJub21icmUiO3M6OToiSW5tdWVibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTQ1OSI7czo0OiJzbHVnIjtzOjk6ImlubXVlYmxlcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MTI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjgwIjtzOjY6Im5vbWJyZSI7czoyMjoiSW5zdHJ1bWVudG9zIE11c2ljYWxlcyI7czo0OiJpZG1sIjtzOjc6Ik1SRDExODIiO3M6NDoic2x1ZyI7czoyMjoiaW5zdHJ1bWVudG9zLW11c2ljYWxlcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MTM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjgxIjtzOjY6Im5vbWJyZSI7czoxNzoiSnVlZ29zIHkgSnVndWV0ZXMiO3M6NDoiaWRtbCI7czo3OiJNUkQxMTMyIjtzOjQ6InNsdWciO3M6MTc6Imp1ZWdvcy15LWp1Z3VldGVzIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aToxNDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyODIiO3M6Njoibm9tYnJlIjtzOjI1OiJMaWJyb3MsIFJldmlzdGFzIHkgQ29taWNzIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMzAyNSI7czo0OiJzbHVnIjtzOjI0OiJsaWJyb3MtcmV2aXN0YXMteS1jb21pY3MiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjE1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI4MyI7czo2OiJub21icmUiO3M6MjA6Ik3DunNpY2EgeSBQZWzDrWN1bGFzIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTE2OCI7czo0OiJzbHVnIjtzOjIwOiJtw7pzaWNhLXktcGVsw61jdWxhcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fWk6MTY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjg0IjtzOjY6Im5vbWJyZSI7czoxNzoiT3RyYXMgY2F0ZWdvcsOtYXMiO3M6NDoiaWRtbCI7czo3OiJNUkQxOTUzIjtzOjQ6InNsdWciO3M6MTc6Im90cmFzLWNhdGVnb3LDrWFzIjtzOjQ6InNpdGUiO3M6MTA6ImRvbWluaWNhbmEiO319aToxNzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyODUiO3M6Njoibm9tYnJlIjtzOjIyOiJSb3BhLCBSZWxvamVzIHkgTGVudGVzIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTQzMCI7czo0OiJzbHVnIjtzOjIxOiJyb3BhLXJlbG9qZXMteS1sZW50ZXMiO3M6NDoic2l0ZSI7czoxMDoiZG9taW5pY2FuYSI7fX1pOjE4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI4NiI7czo2OiJub21icmUiO3M6OToiU2VydmljaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTVJEMTU0MCI7czo0OiJzbHVnIjtzOjk6InNlcnZpY2lvcyI7czo0OiJzaXRlIjtzOjEwOiJkb21pbmljYW5hIjt9fX1zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTU2OToiPGgxIGNsYXNzPSJ0aXRsZSI+TGluZSA2IFBvZCBYdCBMaXZlIFBvY28gVXNvIDEwNTAwPC9oMT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGNveSA0Njh4MTUgKCBhcnRpY3Vsb3MgKSAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiNTY4NjQxOTgyMSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCg0KPGRpdiBjbGFzcz0icG9zdF9ib3giIGFsaWduPSJqdXN0aWZ5Ij4NCjxkaXYgY2xhc3M9InBvc3RfdGl0bGUiPjxhIGhyZWY9Imh0dHA6Ly9kb21pbmljYW5hLmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvbGluZS02LXBvZC14dC1saXZlLXBvY28tdXNvLTEwNTAwLzQyOTEyIj5MaW5lIDYgUG9kIFh0IExpdmUgUG9jbyBVc28gMTA1MDA8L2E+PC9kaXY+DQo8ZGl2IGNsYXNzPSJwb3N0X3RleHRfYXJlYSI+DQo8YSBocmVmPSIjIj48aW1nIHNyYz0iaHR0cDovL2ltZzIubWxzdGF0aWMuY29tL3NfTVJEX3ZfSV9mXzI5NjU4Mzk3MjFfMDcyMDEyLmpwZyIgYWx0PSJMaW5lIDYgUG9kIFh0IExpdmUgUG9jbyBVc28gMTA1MDAiIGNsYXNzPSJ0ZW1wbGF0ZW1vX3BpYyIgdGl0bGU9IkxpbmUgNiBQb2QgWHQgTGl2ZSBQb2NvIFVzbyAxMDUwMCIgLz48L2E+DQo8aDM+PC9oMz4NCg0KPGRpdiBzdHlsZT0id2lkdGg6IDI1MHB4OyI+UHJlY2lvOiA8c3Ryb25nPkRPUCAkMTA1MDAuMDA8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20uZG8vTVJELTQwMDMwNzkwMy1saW5lLTYtcG9kLXh0LWxpdmUtcG9jby11c28tMTA1MDAtX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly9kb21pbmljYW5hLmNvbXByYXItb25saW5lLXlhLmNvbS9jYXRlZ29yaWFzL2luc3RydW1lbnRvcy1tdXNpY2FsZXMiPkluc3RydW1lbnRvcyBNdXNpY2FsZXM8L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Line 6 Pod Xt Live Poco Uso 10500 en dominicana - dominicana.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Line,Live,Poco,10500,dominicana" />
<meta name="description" content="Comprar en mercadolibre Line 6 Pod Xt Live Poco Uso 10500 en dominicana. comprar Line 6 Pod Xt Live Poco Uso 10500 online en dominicana. comprar online en dominicana. comprar Line 6 Pod Xt Live Poco Uso 10500 en dominicana" />
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
        <h1 class="title">Line 6 Pod Xt Live Poco Uso 10500</h1>
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
<div class="post_title"><a href="http://dominicana.comprar-online-ya.com/articulos/line-6-pod-xt-live-poco-uso-10500/42912">Line 6 Pod Xt Live Poco Uso 10500</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MRD_v_I_f_2965839721_072012.jpg" alt="Line 6 Pod Xt Live Poco Uso 10500" class="templatemo_pic" title="Line 6 Pod Xt Live Poco Uso 10500" /></a>
<h3></h3>

<div style="width: 250px;">Precio: <strong>DOP $10500.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.do/MRD-400307903-line-6-pod-xt-live-poco-uso-10500-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://dominicana.comprar-online-ya.com/categorias/instrumentos-musicales">Instrumentos Musicales</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 dominicana.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>