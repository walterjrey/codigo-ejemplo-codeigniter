<!--cachetime:1345019904--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:54:"fuente-xbox-360-220v-conecta-tu-consola-directo-a-220v";i:1;s:5:"17150";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:70:"articulos/fuente-xbox-360-220v-conecta-tu-consola-directo-a-220v/17150";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:71:"/articulos/fuente-xbox-360-220v-conecta-tu-consola-directo-a-220v/17150";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzIiO3M6Njoibm9tYnJlIjtzOjIyOiJDb25zb2xhcyB5IFZpZGVvanVlZ29zIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTE0NCI7czo0OiJzbHVnIjtzOjIyOiJjb25zb2xhcy15LXZpZGVvanVlZ29zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjE3MTUwIjtzOjQ6ImlkbWwiO3M6MTI6Ik1MVTQwMjkwMTk3NiI7czo1OiJ0aXRsZSI7czo1NDoiRnVlbnRlIFhib3ggMzYwIDIyMHYgQ29uZWN0YSBUdSBDb25zb2xhIERpcmVjdG8gQSAyMjB2IjtzOjg6InN1YnRpdGxlIjtzOjY2OiJDZWxzaG9wLmdwcyBHYXJtaW4rY2FtYXJhcyBTYW1zdW5nK25pa29uK3Nvbnkrbm90ZWJvb2srbmV0Ym9vayt3aWkiO3M6NToicHJpY2UiO3M6NDoiNzQuOSI7czo5OiJwZXJtYWxpbmsiO3M6MTA4OiJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS51eS9NTFUtNDAyOTAxOTc2LWZ1ZW50ZS14Ym94LTM2MC0yMjB2LWNvbmVjdGEtdHUtY29uc29sYS1kaXJlY3RvLWEtMjIwdi1fSk0iO3M6OToidGh1bWJuYWlsIjtzOjU0OiJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NTFVfdl9JX2ZfMjY4MDk2NDlfODEyNy5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IlVTRCI7czoxMDoic3RhdGVfbmFtZSI7czoxMDoiTW9udGV2aWRlbyI7czo5OiJjaXR5X25hbWUiO3M6NjoiQ2VudHJvIjtzOjExOiJjYXRlZ29yeV9pZCI7czozOiIxNzIiO3M6NToiYWRkZWQiO3M6MTk6IjIwMTItMDYtMTYgMTU6MTU6MjAiO3M6NDoic2x1ZyI7czo1NDoiZnVlbnRlLXhib3gtMzYwLTIyMHYtY29uZWN0YS10dS1jb25zb2xhLWRpcmVjdG8tYS0yMjB2IjtzOjU6InNpdGlvIjtzOjc6InVydWd1YXkiO3M6NjoiY3VzdG9tIjtzOjE6IjAiO319czoxNToibWV0YWRlc2NyaXB0aW9uIjtzOjI3MzoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgRnVlbnRlIFhib3ggMzYwIDIyMHYgQ29uZWN0YSBUdSBDb25zb2xhIERpcmVjdG8gQSAyMjB2IGVuIHVydWd1YXkuIGNvbXByYXIgRnVlbnRlIFhib3ggMzYwIDIyMHYgQ29uZWN0YSBUdSBDb25zb2xhIERpcmVjdG8gQSAyMjB2IG9ubGluZSBlbiB1cnVndWF5LiBjb21wcmFyIG9ubGluZSBlbiB1cnVndWF5LiBjb21wcmFyIEZ1ZW50ZSBYYm94IDM2MCAyMjB2IENvbmVjdGEgVHUgQ29uc29sYSBEaXJlY3RvIEEgMjIwdiBlbiB1cnVndWF5IjtzOjEyOiJtZXRha2V5d29yZHMiO3M6MTQ3OiJtZXJjYWRvbGlicmUsY29tcHJhcixvbmxpbmUsbWVyY2Fkb3BhZ28sQ2Vsc2hvcCxHYXJtaW4sY2FtYXJhcyxTYW1zdW5nLG5pa29uLHNvbnksbm90ZWJvb2ssbmV0Ym9vayxGdWVudGUsWGJveCwyMjB2LENvbmVjdGEsQ29uc29sYSxEaXJlY3RvLHVydWd1YXkiO3M6MTA6InRpdGxlX3BhZ2UiO3M6ODk6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIEZ1ZW50ZSBYYm94IDM2MCAyMjB2IENvbmVjdGEgVHUgQ29uc29sYSBEaXJlY3RvIEEgMjIwdiBlbiB1cnVndWF5IjtzOjEwOiJjYXRlZ29yaWFzIjthOjIzOntpOjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY0IjtzOjY6Im5vbWJyZSI7czoyNjoiQWNjZXNvcmlvcyBwYXJhIFZlaMOtY3Vsb3MiO3M6NDoiaWRtbCI7czo3OiJNTFU1NzI1IjtzOjQ6InNsdWciO3M6MjY6ImFjY2Vzb3Jpb3MtcGFyYS12ZWjDrWN1bG9zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY1IjtzOjY6Im5vbWJyZSI7czoxOToiQW5pbWFsZXMgeSBNYXNjb3RhcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTEwNzEiO3M6NDoic2x1ZyI7czoxOToiYW5pbWFsZXMteS1tYXNjb3RhcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2NiI7czo2OiJub21icmUiO3M6MjA6IkFydGUgeSBBbnRpZ8O8ZWRhZGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTM2NyI7czo0OiJzbHVnIjtzOjIwOiJhcnRlLXktYW50aWfDvGVkYWRlcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aTozO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2NyI7czo2OiJub21icmUiO3M6MjA6IkF1dG9zLCBNb3RvcyB5IE90cm9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTc0MyI7czo0OiJzbHVnIjtzOjE5OiJhdXRvcy1tb3Rvcy15LW90cm9zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY4IjtzOjY6Im5vbWJyZSI7czo2OiJCZWLDqXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxMzg0IjtzOjQ6InNsdWciO3M6NjoiYmViw6lzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY5IjtzOjY6Im5vbWJyZSI7czoyMjoiQ2VsdWxhcmVzIHkgVGVsZWZvbsOtYSI7czo0OiJpZG1sIjtzOjc6Ik1MVTEwNTEiO3M6NDoic2x1ZyI7czoyMjoiY2VsdWxhcmVzLXktdGVsZWZvbsOtYSI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aTo2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3MCI7czo2OiJub21icmUiO3M6MTQ6IkNvbGVjY2lvbmFibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTc5OCI7czo0OiJzbHVnIjtzOjE0OiJjb2xlY2Npb25hYmxlcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aTo3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3MSI7czo2OiJub21icmUiO3M6MTI6IkNvbXB1dGFjacOzbiI7czo0OiJpZG1sIjtzOjc6Ik1MVTE2NDgiO3M6NDoic2x1ZyI7czoxMjoiY29tcHV0YWNpw7NuIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTcyIjtzOjY6Im5vbWJyZSI7czoyMjoiQ29uc29sYXMgeSBWaWRlb2p1ZWdvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTExNDQiO3M6NDoic2x1ZyI7czoyMjoiY29uc29sYXMteS12aWRlb2p1ZWdvcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aTo5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3MyI7czo2OiJub21icmUiO3M6MjE6IkPDoW1hcmFzIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTEwMzkiO3M6NDoic2x1ZyI7czoyMToiY8OhbWFyYXMteS1hY2Nlc29yaW9zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjEwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3NCI7czo2OiJub21icmUiO3M6MTg6IkRlcG9ydGVzIHkgRml0bmVzcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTEyNzYiO3M6NDoic2x1ZyI7czoxODoiZGVwb3J0ZXMteS1maXRuZXNzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjExO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3NSI7czo2OiJub21icmUiO3M6MzA6IkVsZWN0cm9kb23DqXN0aWNvcyB5IEFpcmVzIEFjLiI7czo0OiJpZG1sIjtzOjc6Ik1MVTU3MjYiO3M6NDoic2x1ZyI7czozMDoiZWxlY3Ryb2RvbcOpc3RpY29zLXktYWlyZXMtYWMtIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjEyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3NiI7czo2OiJub21icmUiO3M6Mjc6IkVsZWN0csOzbmljYSwgQXVkaW8geSBWaWRlbyI7czo0OiJpZG1sIjtzOjc6Ik1MVTEwMDAiO3M6NDoic2x1ZyI7czoyNjoiZWxlY3Ryw7NuaWNhLWF1ZGlvLXktdmlkZW8iO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTc3IjtzOjY6Im5vbWJyZSI7czoyNDoiSG9nYXIsIE11ZWJsZXMgeSBKYXJkw61uIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTU3NCI7czo0OiJzbHVnIjtzOjIzOiJob2dhci1tdWVibGVzLXktamFyZMOtbiI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxNDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzgiO3M6Njoibm9tYnJlIjtzOjIxOiJJbmR1c3RyaWFzIHkgT2ZpY2luYXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxNDk5IjtzOjQ6InNsdWciO3M6MjE6ImluZHVzdHJpYXMteS1vZmljaW5hcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzkiO3M6Njoibm9tYnJlIjtzOjk6IklubXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE0NTkiO3M6NDoic2x1ZyI7czo5OiJpbm11ZWJsZXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTgwIjtzOjY6Im5vbWJyZSI7czoyMjoiSW5zdHJ1bWVudG9zIE11c2ljYWxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTExODIiO3M6NDoic2x1ZyI7czoyMjoiaW5zdHJ1bWVudG9zLW11c2ljYWxlcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxNzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODEiO3M6Njoibm9tYnJlIjtzOjE3OiJKdWVnb3MgeSBKdWd1ZXRlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTExMzIiO3M6NDoic2x1ZyI7czoxNzoianVlZ29zLXktanVndWV0ZXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTgyIjtzOjY6Im5vbWJyZSI7czoyODoiTcO6c2ljYSwgTGlicm9zIHkgUGVsw61jdWxhcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTExNjgiO3M6NDoic2x1ZyI7czoyNzoibcO6c2ljYS1saWJyb3MteS1wZWzDrWN1bGFzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4MyI7czo2OiJub21icmUiO3M6MTc6Ik90cmFzIGNhdGVnb3LDrWFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTk1MyI7czo0OiJzbHVnIjtzOjE3OiJvdHJhcy1jYXRlZ29yw61hcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToyMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODQiO3M6Njoibm9tYnJlIjtzOjIxOiJSb3BhLCBKb3lhcyB5IFJlbG9qZXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxNDMwIjtzOjQ6InNsdWciO3M6MjA6InJvcGEtam95YXMteS1yZWxvamVzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjIxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4NSI7czo2OiJub21icmUiO3M6MTU6IlNhbHVkIHkgQmVsbGV6YSI7czo0OiJpZG1sIjtzOjc6Ik1MVTEyNDYiO3M6NDoic2x1ZyI7czoxNToic2FsdWQteS1iZWxsZXphIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjIyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4NiI7czo2OiJub21icmUiO3M6OToiU2VydmljaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTU0MCI7czo0OiJzbHVnIjtzOjk6InNlcnZpY2lvcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNzQ4OiI8aDEgY2xhc3M9InRpdGxlIj5GdWVudGUgWGJveCAzNjAgMjIwdiBDb25lY3RhIFR1IENvbnNvbGEgRGlyZWN0byBBIDIyMHY8L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL3VydWd1YXkuY29tcHJhci1vbmxpbmUteWEuY29tL2FydGljdWxvcy9mdWVudGUteGJveC0zNjAtMjIwdi1jb25lY3RhLXR1LWNvbnNvbGEtZGlyZWN0by1hLTIyMHYvMTcxNTAiPkZ1ZW50ZSBYYm94IDM2MCAyMjB2IENvbmVjdGEgVHUgQ29uc29sYSBEaXJlY3RvIEEgMjIwdjwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NTFVfdl9JX2ZfMjY4MDk2NDlfODEyNy5qcGciIGFsdD0iRnVlbnRlIFhib3ggMzYwIDIyMHYgQ29uZWN0YSBUdSBDb25zb2xhIERpcmVjdG8gQSAyMjB2IiBjbGFzcz0idGVtcGxhdGVtb19waWMiIHRpdGxlPSJGdWVudGUgWGJveCAzNjAgMjIwdiBDb25lY3RhIFR1IENvbnNvbGEgRGlyZWN0byBBIDIyMHYiIC8+PC9hPg0KPGgzPkNlbHNob3AuZ3BzIEdhcm1pbitjYW1hcmFzIFNhbXN1bmcrbmlrb24rc29ueStub3RlYm9vaytuZXRib29rK3dpaTwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5VU0QgJDc0LjkwPC9zdHJvbmc+PC9kaXY+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+PCEtLQ0KZ29vZ2xlX2FkX2NsaWVudCA9ICJjYS1wdWItNzYyOTc3MDEyODUzMjU4OSI7DQovKiBhbnVuY2lvIGJham8gdGl0dWxvICovDQpnb29nbGVfYWRfc2xvdCA9ICI5MTkwNzg5MzE1IjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KPGJyIC8+DQoNCjxhIGNsYXNzPSJidXlfbWwiIHJlbD0ibm9mb2xsb3ciIGhyZWY9Imh0dHA6Ly9hcnRpY3Vsby5tZXJjYWRvbGlicmUuY29tLnV5L01MVS00MDI5MDE5NzYtZnVlbnRlLXhib3gtMzYwLTIyMHYtY29uZWN0YS10dS1jb25zb2xhLWRpcmVjdG8tYS0yMjB2LV9KTSIgdGFyZ2V0PSJfYmxhbmsiPlZlci9Db21wcmFyPC9hPg0KPC9kaXY+DQo8ZGl2IGNsYXNzPSJwdWJsaXNoX2RhdGUiPiBDYXRlZ29yJmlhY3V0ZTthOiA8YSBocmVmPSJodHRwOi8vdXJ1Z3VheS5jb21wcmFyLW9ubGluZS15YS5jb20vY2F0ZWdvcmlhcy9jb25zb2xhcy15LXZpZGVvanVlZ29zIj5Db25zb2xhcyB5IFZpZGVvanVlZ29zPC9hPjwvZGl2Pg0KPC9kaXY+DQoNCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo4OiJQcm9kdWN0cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Fuente Xbox 360 220v Conecta Tu Consola Directo A 220v en uruguay - uruguay.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Celshop,Garmin,camaras,Samsung,nikon,sony,notebook,netbook,Fuente,Xbox,220v,Conecta,Consola,Directo,uruguay" />
<meta name="description" content="Comprar en mercadolibre Fuente Xbox 360 220v Conecta Tu Consola Directo A 220v en uruguay. comprar Fuente Xbox 360 220v Conecta Tu Consola Directo A 220v online en uruguay. comprar online en uruguay. comprar Fuente Xbox 360 220v Conecta Tu Consola Directo A 220v en uruguay" />
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
        <h1 class="title">Fuente Xbox 360 220v Conecta Tu Consola Directo A 220v</h1>
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
<div class="post_title"><a href="http://uruguay.comprar-online-ya.com/articulos/fuente-xbox-360-220v-conecta-tu-consola-directo-a-220v/17150">Fuente Xbox 360 220v Conecta Tu Consola Directo A 220v</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLU_v_I_f_26809649_8127.jpg" alt="Fuente Xbox 360 220v Conecta Tu Consola Directo A 220v" class="templatemo_pic" title="Fuente Xbox 360 220v Conecta Tu Consola Directo A 220v" /></a>
<h3>Celshop.gps Garmin+camaras Samsung+nikon+sony+notebook+netbook+wii</h3>

<div style="width: 250px;">Precio: <strong>USD $74.90</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.uy/MLU-402901976-fuente-xbox-360-220v-conecta-tu-consola-directo-a-220v-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://uruguay.comprar-online-ya.com/categorias/consolas-y-videojuegos">Consolas y Videojuegos</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 uruguay.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>