<!--cachetime:1345020326--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:53:"joystic-playstation-2-dual-shock-2-oferta-imperdible-";i:1;s:4:"8723";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:68:"articulos/joystic-playstation-2-dual-shock-2-oferta-imperdible-/8723";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:69:"/articulos/joystic-playstation-2-dual-shock-2-oferta-imperdible-/8723";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzIiO3M6Njoibm9tYnJlIjtzOjIyOiJDb25zb2xhcyB5IFZpZGVvanVlZ29zIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTE0NCI7czo0OiJzbHVnIjtzOjIyOiJjb25zb2xhcy15LXZpZGVvanVlZ29zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjQ6Ijg3MjMiO3M6NDoiaWRtbCI7czoxMjoiTUxVNDAyOTQ2ODA5IjtzOjU6InRpdGxlIjtzOjYwOiJKb3lzdGljIFBsYXlzdGF0aW9uIDIgRHVhbCBTaG9jayAyIE9mZXJ0YSBJbXBlcmRpYmxlICEgISAhICEiO3M6ODoic3VidGl0bGUiO3M6Njk6IkFjY2Vzb3Jpb3MgSm95c3RpYyBHYW1lcGFkIEd1aXRhcnJhcyBLaXRzIE5vdGVib29rIE5ldGJvb2sgSW1wcmVzb3JhcyI7czo1OiJwcmljZSI7czozOiIxMDUiO3M6OToicGVybWFsaW5rIjtzOjEwNzoiaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20udXkvTUxVLTQwMjk0NjgwOS1qb3lzdGljLXBsYXlzdGF0aW9uLTItZHVhbC1zaG9jay0yLW9mZXJ0YS1pbXBlcmRpYmxlLS1fSk0iO3M6OToidGh1bWJuYWlsIjtzOjU0OiJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NTFVfdl9JX2ZfMTQ0MjE1NzlfNjE2NC5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IlVZVSI7czoxMDoic3RhdGVfbmFtZSI7czoxMDoiTW9udGV2aWRlbyI7czo5OiJjaXR5X25hbWUiO3M6MTQ6IlBVTlRBIENBUlJFVEFTIjtzOjExOiJjYXRlZ29yeV9pZCI7czozOiIxNzIiO3M6NToiYWRkZWQiO3M6MTk6IjIwMTItMDYtMDkgMjI6NDE6NDYiO3M6NDoic2x1ZyI7czo1Mzoiam95c3RpYy1wbGF5c3RhdGlvbi0yLWR1YWwtc2hvY2stMi1vZmVydGEtaW1wZXJkaWJsZS0iO3M6NToic2l0aW8iO3M6NzoidXJ1Z3VheSI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6MjkxOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBKb3lzdGljIFBsYXlzdGF0aW9uIDIgRHVhbCBTaG9jayAyIE9mZXJ0YSBJbXBlcmRpYmxlICEgISAhICEgZW4gdXJ1Z3VheS4gY29tcHJhciBKb3lzdGljIFBsYXlzdGF0aW9uIDIgRHVhbCBTaG9jayAyIE9mZXJ0YSBJbXBlcmRpYmxlICEgISAhICEgb25saW5lIGVuIHVydWd1YXkuIGNvbXByYXIgb25saW5lIGVuIHVydWd1YXkuIGNvbXByYXIgSm95c3RpYyBQbGF5c3RhdGlvbiAyIER1YWwgU2hvY2sgMiBPZmVydGEgSW1wZXJkaWJsZSAhICEgISAhIGVuIHVydWd1YXkiO3M6MTI6Im1ldGFrZXl3b3JkcyI7czoxNjA6Im1lcmNhZG9saWJyZSxjb21wcmFyLG9ubGluZSxtZXJjYWRvcGFnbyxBY2Nlc29yaW9zLEpveXN0aWMsR2FtZXBhZCxHdWl0YXJyYXMsS2l0cyxOb3RlYm9vayxOZXRib29rLEltcHJlc29yYXMsUGxheXN0YXRpb24sRHVhbCxTaG9jayxPZmVydGEsSW1wZXJkaWJsZSwhLHVydWd1YXkiO3M6MTA6InRpdGxlX3BhZ2UiO3M6OTU6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIEpveXN0aWMgUGxheXN0YXRpb24gMiBEdWFsIFNob2NrIDIgT2ZlcnRhIEltcGVyZGlibGUgISAhICEgISBlbiB1cnVndWF5IjtzOjEwOiJjYXRlZ29yaWFzIjthOjIzOntpOjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY0IjtzOjY6Im5vbWJyZSI7czoyNjoiQWNjZXNvcmlvcyBwYXJhIFZlaMOtY3Vsb3MiO3M6NDoiaWRtbCI7czo3OiJNTFU1NzI1IjtzOjQ6InNsdWciO3M6MjY6ImFjY2Vzb3Jpb3MtcGFyYS12ZWjDrWN1bG9zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY1IjtzOjY6Im5vbWJyZSI7czoxOToiQW5pbWFsZXMgeSBNYXNjb3RhcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTEwNzEiO3M6NDoic2x1ZyI7czoxOToiYW5pbWFsZXMteS1tYXNjb3RhcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2NiI7czo2OiJub21icmUiO3M6MjA6IkFydGUgeSBBbnRpZ8O8ZWRhZGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTM2NyI7czo0OiJzbHVnIjtzOjIwOiJhcnRlLXktYW50aWfDvGVkYWRlcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aTozO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE2NyI7czo2OiJub21icmUiO3M6MjA6IkF1dG9zLCBNb3RvcyB5IE90cm9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTc0MyI7czo0OiJzbHVnIjtzOjE5OiJhdXRvcy1tb3Rvcy15LW90cm9zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY4IjtzOjY6Im5vbWJyZSI7czo2OiJCZWLDqXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxMzg0IjtzOjQ6InNsdWciO3M6NjoiYmViw6lzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY5IjtzOjY6Im5vbWJyZSI7czoyMjoiQ2VsdWxhcmVzIHkgVGVsZWZvbsOtYSI7czo0OiJpZG1sIjtzOjc6Ik1MVTEwNTEiO3M6NDoic2x1ZyI7czoyMjoiY2VsdWxhcmVzLXktdGVsZWZvbsOtYSI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aTo2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3MCI7czo2OiJub21icmUiO3M6MTQ6IkNvbGVjY2lvbmFibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTc5OCI7czo0OiJzbHVnIjtzOjE0OiJjb2xlY2Npb25hYmxlcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aTo3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3MSI7czo2OiJub21icmUiO3M6MTI6IkNvbXB1dGFjacOzbiI7czo0OiJpZG1sIjtzOjc6Ik1MVTE2NDgiO3M6NDoic2x1ZyI7czoxMjoiY29tcHV0YWNpw7NuIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTcyIjtzOjY6Im5vbWJyZSI7czoyMjoiQ29uc29sYXMgeSBWaWRlb2p1ZWdvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTExNDQiO3M6NDoic2x1ZyI7czoyMjoiY29uc29sYXMteS12aWRlb2p1ZWdvcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aTo5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3MyI7czo2OiJub21icmUiO3M6MjE6IkPDoW1hcmFzIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTEwMzkiO3M6NDoic2x1ZyI7czoyMToiY8OhbWFyYXMteS1hY2Nlc29yaW9zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjEwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3NCI7czo2OiJub21icmUiO3M6MTg6IkRlcG9ydGVzIHkgRml0bmVzcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTEyNzYiO3M6NDoic2x1ZyI7czoxODoiZGVwb3J0ZXMteS1maXRuZXNzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjExO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3NSI7czo2OiJub21icmUiO3M6MzA6IkVsZWN0cm9kb23DqXN0aWNvcyB5IEFpcmVzIEFjLiI7czo0OiJpZG1sIjtzOjc6Ik1MVTU3MjYiO3M6NDoic2x1ZyI7czozMDoiZWxlY3Ryb2RvbcOpc3RpY29zLXktYWlyZXMtYWMtIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjEyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3NiI7czo2OiJub21icmUiO3M6Mjc6IkVsZWN0csOzbmljYSwgQXVkaW8geSBWaWRlbyI7czo0OiJpZG1sIjtzOjc6Ik1MVTEwMDAiO3M6NDoic2x1ZyI7czoyNjoiZWxlY3Ryw7NuaWNhLWF1ZGlvLXktdmlkZW8iO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTc3IjtzOjY6Im5vbWJyZSI7czoyNDoiSG9nYXIsIE11ZWJsZXMgeSBKYXJkw61uIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTU3NCI7czo0OiJzbHVnIjtzOjIzOiJob2dhci1tdWVibGVzLXktamFyZMOtbiI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxNDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzgiO3M6Njoibm9tYnJlIjtzOjIxOiJJbmR1c3RyaWFzIHkgT2ZpY2luYXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxNDk5IjtzOjQ6InNsdWciO3M6MjE6ImluZHVzdHJpYXMteS1vZmljaW5hcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzkiO3M6Njoibm9tYnJlIjtzOjk6IklubXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE0NTkiO3M6NDoic2x1ZyI7czo5OiJpbm11ZWJsZXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTgwIjtzOjY6Im5vbWJyZSI7czoyMjoiSW5zdHJ1bWVudG9zIE11c2ljYWxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTExODIiO3M6NDoic2x1ZyI7czoyMjoiaW5zdHJ1bWVudG9zLW11c2ljYWxlcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxNzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODEiO3M6Njoibm9tYnJlIjtzOjE3OiJKdWVnb3MgeSBKdWd1ZXRlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTExMzIiO3M6NDoic2x1ZyI7czoxNzoianVlZ29zLXktanVndWV0ZXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTgyIjtzOjY6Im5vbWJyZSI7czoyODoiTcO6c2ljYSwgTGlicm9zIHkgUGVsw61jdWxhcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTExNjgiO3M6NDoic2x1ZyI7czoyNzoibcO6c2ljYS1saWJyb3MteS1wZWzDrWN1bGFzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4MyI7czo2OiJub21icmUiO3M6MTc6Ik90cmFzIGNhdGVnb3LDrWFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTk1MyI7czo0OiJzbHVnIjtzOjE3OiJvdHJhcy1jYXRlZ29yw61hcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToyMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODQiO3M6Njoibm9tYnJlIjtzOjIxOiJSb3BhLCBKb3lhcyB5IFJlbG9qZXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxNDMwIjtzOjQ6InNsdWciO3M6MjA6InJvcGEtam95YXMteS1yZWxvamVzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjIxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4NSI7czo2OiJub21icmUiO3M6MTU6IlNhbHVkIHkgQmVsbGV6YSI7czo0OiJpZG1sIjtzOjc6Ik1MVTEyNDYiO3M6NDoic2x1ZyI7czoxNToic2FsdWQteS1iZWxsZXphIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjIyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4NiI7czo2OiJub21icmUiO3M6OToiU2VydmljaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTU0MCI7czo0OiJzbHVnIjtzOjk6InNlcnZpY2lvcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNzczOiI8aDEgY2xhc3M9InRpdGxlIj5Kb3lzdGljIFBsYXlzdGF0aW9uIDIgRHVhbCBTaG9jayAyIE9mZXJ0YSBJbXBlcmRpYmxlICEgISAhICE8L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL3VydWd1YXkuY29tcHJhci1vbmxpbmUteWEuY29tL2FydGljdWxvcy9qb3lzdGljLXBsYXlzdGF0aW9uLTItZHVhbC1zaG9jay0yLW9mZXJ0YS1pbXBlcmRpYmxlLS84NzIzIj5Kb3lzdGljIFBsYXlzdGF0aW9uIDIgRHVhbCBTaG9jayAyIE9mZXJ0YSBJbXBlcmRpYmxlICEgISAhICE8L2E+PC9kaXY+DQo8ZGl2IGNsYXNzPSJwb3N0X3RleHRfYXJlYSI+DQo8YSBocmVmPSIjIj48aW1nIHNyYz0iaHR0cDovL2ltZzIubWxzdGF0aWMuY29tL3NfTUxVX3ZfSV9mXzE0NDIxNTc5XzYxNjQuanBnIiBhbHQ9IkpveXN0aWMgUGxheXN0YXRpb24gMiBEdWFsIFNob2NrIDIgT2ZlcnRhIEltcGVyZGlibGUgISAhICEgISIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iSm95c3RpYyBQbGF5c3RhdGlvbiAyIER1YWwgU2hvY2sgMiBPZmVydGEgSW1wZXJkaWJsZSAhICEgISAhIiAvPjwvYT4NCjxoMz5BY2Nlc29yaW9zIEpveXN0aWMgR2FtZXBhZCBHdWl0YXJyYXMgS2l0cyBOb3RlYm9vayBOZXRib29rIEltcHJlc29yYXM8L2gzPg0KDQo8ZGl2IHN0eWxlPSJ3aWR0aDogMjUwcHg7Ij5QcmVjaW86IDxzdHJvbmc+VVlVICQxMDUuMDA8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20udXkvTUxVLTQwMjk0NjgwOS1qb3lzdGljLXBsYXlzdGF0aW9uLTItZHVhbC1zaG9jay0yLW9mZXJ0YS1pbXBlcmRpYmxlLS1fSk0iIHRhcmdldD0iX2JsYW5rIj5WZXIvQ29tcHJhcjwvYT4NCjwvZGl2Pg0KPGRpdiBjbGFzcz0icHVibGlzaF9kYXRlIj4gQ2F0ZWdvciZpYWN1dGU7YTogPGEgaHJlZj0iaHR0cDovL3VydWd1YXkuY29tcHJhci1vbmxpbmUteWEuY29tL2NhdGVnb3JpYXMvY29uc29sYXMteS12aWRlb2p1ZWdvcyI+Q29uc29sYXMgeSBWaWRlb2p1ZWdvczwvYT48L2Rpdj4NCjwvZGl2Pg0KDQoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6ODoiUHJvZHVjdHMiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Joystic Playstation 2 Dual Shock 2 Oferta Imperdible ! ! ! ! en uruguay - uruguay.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Accesorios,Joystic,Gamepad,Guitarras,Kits,Notebook,Netbook,Impresoras,Playstation,Dual,Shock,Oferta,Imperdible,!,uruguay" />
<meta name="description" content="Comprar en mercadolibre Joystic Playstation 2 Dual Shock 2 Oferta Imperdible ! ! ! ! en uruguay. comprar Joystic Playstation 2 Dual Shock 2 Oferta Imperdible ! ! ! ! online en uruguay. comprar online en uruguay. comprar Joystic Playstation 2 Dual Shock 2 Oferta Imperdible ! ! ! ! en uruguay" />
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
        <h1 class="title">Joystic Playstation 2 Dual Shock 2 Oferta Imperdible ! ! ! !</h1>
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
<div class="post_title"><a href="http://uruguay.comprar-online-ya.com/articulos/joystic-playstation-2-dual-shock-2-oferta-imperdible-/8723">Joystic Playstation 2 Dual Shock 2 Oferta Imperdible ! ! ! !</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLU_v_I_f_14421579_6164.jpg" alt="Joystic Playstation 2 Dual Shock 2 Oferta Imperdible ! ! ! !" class="templatemo_pic" title="Joystic Playstation 2 Dual Shock 2 Oferta Imperdible ! ! ! !" /></a>
<h3>Accesorios Joystic Gamepad Guitarras Kits Notebook Netbook Impresoras</h3>

<div style="width: 250px;">Precio: <strong>UYU $105.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.uy/MLU-402946809-joystic-playstation-2-dual-shock-2-oferta-imperdible--_JM" target="_blank">Ver/Comprar</a>
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