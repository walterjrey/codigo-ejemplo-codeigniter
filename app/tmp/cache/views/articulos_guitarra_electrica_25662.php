<!--cachetime:1345020127--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:18:"guitarra-electrica";i:1;s:5:"25662";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:34:"articulos/guitarra-electrica/25662";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:35:"/articulos/guitarra-electrica/25662";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODAiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjI1NjYyIjtzOjQ6ImlkbWwiO3M6MTI6Ik1MVTQwMzI2MTk0MSI7czo1OiJ0aXRsZSI7czoxOToiR3VpdGFycmEgIEVsZWN0cmljYSI7czo4OiJzdWJ0aXRsZSI7czowOiIiO3M6NToicHJpY2UiO3M6MzoiMTUwIjtzOjk6InBlcm1hbGluayI7czo3MjoiaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20udXkvTUxVLTQwMzI2MTk0MS1ndWl0YXJyYS1lbGVjdHJpY2EtX0pNIjtzOjk6InRodW1ibmFpbCI7czo1ODoiaHR0cDovL2ltZzIubWxzdGF0aWMuY29tL3NfTUxVX3ZfSV9mXzI4NTM5Mjk3MTlfMDYyMDEyLmpwZyI7czoxMToiY3VycmVuY3lfaWQiO3M6MzoiVVNEIjtzOjEwOiJzdGF0ZV9uYW1lIjtzOjc6IkNvbG9uaWEiO3M6OToiY2l0eV9uYW1lIjtzOjc6IkNvbG9uaWEiO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjM6IjE4MCI7czo1OiJhZGRlZCI7czoxOToiMjAxMi0wNy0wMiAwMDoyOTo1OSI7czo0OiJzbHVnIjtzOjE4OiJndWl0YXJyYS1lbGVjdHJpY2EiO3M6NToic2l0aW8iO3M6NzoidXJ1Z3VheSI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6MTY4OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBHdWl0YXJyYSAgRWxlY3RyaWNhIGVuIHVydWd1YXkuIGNvbXByYXIgR3VpdGFycmEgIEVsZWN0cmljYSBvbmxpbmUgZW4gdXJ1Z3VheS4gY29tcHJhciBvbmxpbmUgZW4gdXJ1Z3VheS4gY29tcHJhciBHdWl0YXJyYSAgRWxlY3RyaWNhIGVuIHVydWd1YXkiO3M6MTI6Im1ldGFrZXl3b3JkcyI7czo2NjoibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLEd1aXRhcnJhLEVsZWN0cmljYSx1cnVndWF5IjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjU0OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBHdWl0YXJyYSAgRWxlY3RyaWNhIGVuIHVydWd1YXkiO3M6MTA6ImNhdGVnb3JpYXMiO2E6MjM6e2k6MDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjQiO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Nlc29yaW9zIHBhcmEgVmVow61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTU3MjUiO3M6NDoic2x1ZyI7czoyNjoiYWNjZXNvcmlvcy1wYXJhLXZlaMOtY3Vsb3MiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjUiO3M6Njoibm9tYnJlIjtzOjE5OiJBbmltYWxlcyB5IE1hc2NvdGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTA3MSI7czo0OiJzbHVnIjtzOjE5OiJhbmltYWxlcy15LW1hc2NvdGFzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY2IjtzOjY6Im5vbWJyZSI7czoyMDoiQXJ0ZSB5IEFudGlnw7xlZGFkZXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxMzY3IjtzOjQ6InNsdWciO3M6MjA6ImFydGUteS1hbnRpZ8O8ZWRhZGVzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTY3IjtzOjY6Im5vbWJyZSI7czoyMDoiQXV0b3MsIE1vdG9zIHkgT3Ryb3MiO3M6NDoiaWRtbCI7czo3OiJNTFUxNzQzIjtzOjQ6InNsdWciO3M6MTk6ImF1dG9zLW1vdG9zLXktb3Ryb3MiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6NDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjgiO3M6Njoibm9tYnJlIjtzOjY6IkJlYsOpcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTEzODQiO3M6NDoic2x1ZyI7czo2OiJiZWLDqXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6NTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNjkiO3M6Njoibm9tYnJlIjtzOjIyOiJDZWx1bGFyZXMgeSBUZWxlZm9uw61hIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTA1MSI7czo0OiJzbHVnIjtzOjIyOiJjZWx1bGFyZXMteS10ZWxlZm9uw61hIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTcwIjtzOjY6Im5vbWJyZSI7czoxNDoiQ29sZWNjaW9uYWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxNzk4IjtzOjQ6InNsdWciO3M6MTQ6ImNvbGVjY2lvbmFibGVzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTcxIjtzOjY6Im5vbWJyZSI7czoxMjoiQ29tcHV0YWNpw7NuIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJjb21wdXRhY2nDs24iO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6ODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzIiO3M6Njoibm9tYnJlIjtzOjIyOiJDb25zb2xhcyB5IFZpZGVvanVlZ29zIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTE0NCI7czo0OiJzbHVnIjtzOjIyOiJjb25zb2xhcy15LXZpZGVvanVlZ29zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTczIjtzOjY6Im5vbWJyZSI7czoyMToiQ8OhbWFyYXMgeSBBY2Nlc29yaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTAzOSI7czo0OiJzbHVnIjtzOjIxOiJjw6FtYXJhcy15LWFjY2Vzb3Jpb3MiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTc0IjtzOjY6Im5vbWJyZSI7czoxODoiRGVwb3J0ZXMgeSBGaXRuZXNzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTI3NiI7czo0OiJzbHVnIjtzOjE4OiJkZXBvcnRlcy15LWZpdG5lc3MiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTc1IjtzOjY6Im5vbWJyZSI7czozMDoiRWxlY3Ryb2RvbcOpc3RpY29zIHkgQWlyZXMgQWMuIjtzOjQ6ImlkbWwiO3M6NzoiTUxVNTcyNiI7czo0OiJzbHVnIjtzOjMwOiJlbGVjdHJvZG9tw6lzdGljb3MteS1haXJlcy1hYy0iO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTc2IjtzOjY6Im5vbWJyZSI7czoyNzoiRWxlY3Ryw7NuaWNhLCBBdWRpbyB5IFZpZGVvIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTAwMCI7czo0OiJzbHVnIjtzOjI2OiJlbGVjdHLDs25pY2EtYXVkaW8teS12aWRlbyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxNzciO3M6Njoibm9tYnJlIjtzOjI0OiJIb2dhciwgTXVlYmxlcyB5IEphcmTDrW4iO3M6NDoiaWRtbCI7czo3OiJNTFUxNTc0IjtzOjQ6InNsdWciO3M6MjM6ImhvZ2FyLW11ZWJsZXMteS1qYXJkw61uIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3OCI7czo2OiJub21icmUiO3M6MjE6IkluZHVzdHJpYXMgeSBPZmljaW5hcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE0OTkiO3M6NDoic2x1ZyI7czoyMToiaW5kdXN0cmlhcy15LW9maWNpbmFzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE3OSI7czo2OiJub21icmUiO3M6OToiSW5tdWVibGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTQ1OSI7czo0OiJzbHVnIjtzOjk6ImlubXVlYmxlcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxNjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODAiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjE3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4MSI7czo2OiJub21icmUiO3M6MTc6Ikp1ZWdvcyB5IEp1Z3VldGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTEzMiI7czo0OiJzbHVnIjtzOjE3OiJqdWVnb3MteS1qdWd1ZXRlcyI7czo0OiJzaXRlIjtzOjc6InVydWd1YXkiO319aToxODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxODIiO3M6Njoibm9tYnJlIjtzOjI4OiJNw7pzaWNhLCBMaWJyb3MgeSBQZWzDrWN1bGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTE2OCI7czo0OiJzbHVnIjtzOjI3OiJtw7pzaWNhLWxpYnJvcy15LXBlbMOtY3VsYXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MTk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTgzIjtzOjY6Im5vbWJyZSI7czoxNzoiT3RyYXMgY2F0ZWdvcsOtYXMiO3M6NDoiaWRtbCI7czo3OiJNTFUxOTUzIjtzOjQ6InNsdWciO3M6MTc6Im90cmFzLWNhdGVnb3LDrWFzIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX1pOjIwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4NCI7czo2OiJub21icmUiO3M6MjE6IlJvcGEsIEpveWFzIHkgUmVsb2plcyI7czo0OiJpZG1sIjtzOjc6Ik1MVTE0MzAiO3M6NDoic2x1ZyI7czoyMDoicm9wYS1qb3lhcy15LXJlbG9qZXMiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTg1IjtzOjY6Im5vbWJyZSI7czoxNToiU2FsdWQgeSBCZWxsZXphIjtzOjQ6ImlkbWwiO3M6NzoiTUxVMTI0NiI7czo0OiJzbHVnIjtzOjE1OiJzYWx1ZC15LWJlbGxlemEiO3M6NDoic2l0ZSI7czo3OiJ1cnVndWF5Ijt9fWk6MjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTg2IjtzOjY6Im5vbWJyZSI7czo5OiJTZXJ2aWNpb3MiO3M6NDoiaWRtbCI7czo3OiJNTFUxNTQwIjtzOjQ6InNsdWciO3M6OToic2VydmljaW9zIjtzOjQ6InNpdGUiO3M6NzoidXJ1Z3VheSI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE0NzU6IjxoMSBjbGFzcz0idGl0bGUiPkd1aXRhcnJhICBFbGVjdHJpY2E8L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL3VydWd1YXkuY29tcHJhci1vbmxpbmUteWEuY29tL2FydGljdWxvcy9ndWl0YXJyYS1lbGVjdHJpY2EvMjU2NjIiPkd1aXRhcnJhICBFbGVjdHJpY2E8L2E+PC9kaXY+DQo8ZGl2IGNsYXNzPSJwb3N0X3RleHRfYXJlYSI+DQo8YSBocmVmPSIjIj48aW1nIHNyYz0iaHR0cDovL2ltZzIubWxzdGF0aWMuY29tL3NfTUxVX3ZfSV9mXzI4NTM5Mjk3MTlfMDYyMDEyLmpwZyIgYWx0PSJHdWl0YXJyYSAgRWxlY3RyaWNhIiBjbGFzcz0idGVtcGxhdGVtb19waWMiIHRpdGxlPSJHdWl0YXJyYSAgRWxlY3RyaWNhIiAvPjwvYT4NCjxoMz48L2gzPg0KDQo8ZGl2IHN0eWxlPSJ3aWR0aDogMjUwcHg7Ij5QcmVjaW86IDxzdHJvbmc+VVNEICQxNTAuMDA8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20udXkvTUxVLTQwMzI2MTk0MS1ndWl0YXJyYS1lbGVjdHJpY2EtX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly91cnVndWF5LmNvbXByYXItb25saW5lLXlhLmNvbS9jYXRlZ29yaWFzL2luc3RydW1lbnRvcy1tdXNpY2FsZXMiPkluc3RydW1lbnRvcyBNdXNpY2FsZXM8L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Guitarra  Electrica en uruguay - uruguay.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Guitarra,Electrica,uruguay" />
<meta name="description" content="Comprar en mercadolibre Guitarra  Electrica en uruguay. comprar Guitarra  Electrica online en uruguay. comprar online en uruguay. comprar Guitarra  Electrica en uruguay" />
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
        <h1 class="title">Guitarra  Electrica</h1>
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
<div class="post_title"><a href="http://uruguay.comprar-online-ya.com/articulos/guitarra-electrica/25662">Guitarra  Electrica</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLU_v_I_f_2853929719_062012.jpg" alt="Guitarra  Electrica" class="templatemo_pic" title="Guitarra  Electrica" /></a>
<h3></h3>

<div style="width: 250px;">Precio: <strong>USD $150.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.uy/MLU-403261941-guitarra-electrica-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://uruguay.comprar-online-ya.com/categorias/instrumentos-musicales">Instrumentos Musicales</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 uruguay.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>