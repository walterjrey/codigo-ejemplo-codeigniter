<!--cachetime:1345017662--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:47:"revistas-bisuteria-digitales-crea-con-swarovski";i:1;s:5:"40056";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:63:"articulos/revistas-bisuteria-digitales-crea-con-swarovski/40056";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:64:"/articulos/revistas-bisuteria-digitales-crea-con-swarovski/40056";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDQiO3M6Njoibm9tYnJlIjtzOjI4OiJMaWJyb3MsIE3DunNpY2EgeSBQZWzDrWN1bGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMzAyNSI7czo0OiJzbHVnIjtzOjI3OiJsaWJyb3MtbcO6c2ljYS15LXBlbMOtY3VsYXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319czo3OiJQcm9kdWN0IjthOjE6e3M6NzoiUHJvZHVjdCI7YToxNTp7czoyOiJpZCI7czo1OiI0MDA1NiI7czo0OiJpZG1sIjtzOjEyOiJNTFY0MDE4MzY2OTYiO3M6NToidGl0bGUiO3M6NDc6IlJldmlzdGFzIEJpc3V0ZXJpYSBEaWdpdGFsZXMgQ3JlYSBDb24gU3dhcm92c2tpIjtzOjg6InN1YnRpdGxlIjtzOjQ2OiJSZXZpc3RhIERlIEJpc3V0ZXJpYSBDb24gU3dhcm92c2tpIDIwIFJldmlzdGFzIjtzOjU6InByaWNlIjtzOjI6IjQwIjtzOjk6InBlcm1hbGluayI7czoxMDE6Imh0dHA6Ly9hcnRpY3Vsby5tZXJjYWRvbGlicmUuY29tLnZlL01MVi00MDE4MzY2OTYtcmV2aXN0YXMtYmlzdXRlcmlhLWRpZ2l0YWxlcy1jcmVhLWNvbi1zd2Fyb3Zza2ktX0pNIjtzOjk6InRodW1ibmFpbCI7czo1ODoiaHR0cDovL2ltZzIubWxzdGF0aWMuY29tL3NfTUxWX3ZfSV9mXzI5MDkzMTkyNjVfMDcyMDEyLmpwZyI7czoxMToiY3VycmVuY3lfaWQiO3M6MzoiVkVGIjtzOjEwOiJzdGF0ZV9uYW1lIjtzOjg6IkNhcmFib2JvIjtzOjk6ImNpdHlfbmFtZSI7czo4OiJWYWxlbmNpYSI7czoxMToiY2F0ZWdvcnlfaWQiO3M6MzoiMjA0IjtzOjU6ImFkZGVkIjtzOjE5OiIyMDEyLTA3LTI3IDA2OjI1OjM4IjtzOjQ6InNsdWciO3M6NDc6InJldmlzdGFzLWJpc3V0ZXJpYS1kaWdpdGFsZXMtY3JlYS1jb24tc3dhcm92c2tpIjtzOjU6InNpdGlvIjtzOjk6InZlbmV6dWVsYSI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6MjYwOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBSZXZpc3RhcyBCaXN1dGVyaWEgRGlnaXRhbGVzIENyZWEgQ29uIFN3YXJvdnNraSBlbiB2ZW5lenVlbGEuIGNvbXByYXIgUmV2aXN0YXMgQmlzdXRlcmlhIERpZ2l0YWxlcyBDcmVhIENvbiBTd2Fyb3Zza2kgb25saW5lIGVuIHZlbmV6dWVsYS4gY29tcHJhciBvbmxpbmUgZW4gdmVuZXp1ZWxhLiBjb21wcmFyIFJldmlzdGFzIEJpc3V0ZXJpYSBEaWdpdGFsZXMgQ3JlYSBDb24gU3dhcm92c2tpIGVuIHZlbmV6dWVsYSI7czoxMjoibWV0YWtleXdvcmRzIjtzOjEwMToibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLFJldmlzdGEsQmlzdXRlcmlhLFN3YXJvdnNraSxSZXZpc3RhcyxEaWdpdGFsZXMsQ3JlYSx2ZW5lenVlbGEiO3M6MTA6InRpdGxlX3BhZ2UiO3M6ODQ6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIFJldmlzdGFzIEJpc3V0ZXJpYSBEaWdpdGFsZXMgQ3JlYSBDb24gU3dhcm92c2tpIGVuIHZlbmV6dWVsYSI7czoxMDoiY2F0ZWdvcmlhcyI7YToyMzp7aTowO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE4NyI7czo2OiJub21icmUiO3M6MjY6IkFjY2Vzb3Jpb3MgcGFyYSBWZWjDrWN1bG9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTc0NyI7czo0OiJzbHVnIjtzOjI2OiJhY2Nlc29yaW9zLXBhcmEtdmVow61jdWxvcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTg4IjtzOjY6Im5vbWJyZSI7czoxOToiQW5pbWFsZXMgeSBNYXNjb3RhcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjEwNzEiO3M6NDoic2x1ZyI7czoxOToiYW5pbWFsZXMteS1tYXNjb3RhcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTg5IjtzOjY6Im5vbWJyZSI7czo2OiJCZWLDqXMiO3M6NDoiaWRtbCI7czo3OiJNTFYxMzg0IjtzOjQ6InNsdWciO3M6NjoiYmViw6lzIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxOTAiO3M6Njoibm9tYnJlIjtzOjIxOiJDYXJyb3MsIE1vdG9zIHkgT3Ryb3MiO3M6NDoiaWRtbCI7czo3OiJNTFYxNzQzIjtzOjQ6InNsdWciO3M6MjA6ImNhcnJvcy1tb3Rvcy15LW90cm9zIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6NDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxOTEiO3M6Njoibm9tYnJlIjtzOjIyOiJDZWx1bGFyZXMgeSBUZWzDqWZvbm9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTA1MSI7czo0OiJzbHVnIjtzOjIyOiJjZWx1bGFyZXMteS10ZWzDqWZvbm9zIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6NTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxOTIiO3M6Njoibm9tYnJlIjtzOjI0OiJDb2xlY2Npb25hYmxlcyB5IEhvYmJpZXMiO3M6NDoiaWRtbCI7czo3OiJNTFYxNzk4IjtzOjQ6InNsdWciO3M6MjQ6ImNvbGVjY2lvbmFibGVzLXktaG9iYmllcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTkzIjtzOjY6Im5vbWJyZSI7czoxMjoiQ29tcHV0YWNpw7NuIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJjb21wdXRhY2nDs24iO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aTo3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE5NCI7czo2OiJub21icmUiO3M6MjE6IkPDoW1hcmFzIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjEwMzkiO3M6NDoic2x1ZyI7czoyMToiY8OhbWFyYXMteS1hY2Nlc29yaW9zIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6ODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxOTUiO3M6Njoibm9tYnJlIjtzOjI0OiJDw7Nuc29sYXMgeSBWaWRlb2p1ZWdvcyAiO3M6NDoiaWRtbCI7czo3OiJNTFYxMTQ0IjtzOjQ6InNsdWciO3M6MjM6ImPDs25zb2xhcy15LXZpZGVvanVlZ29zIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6OTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxOTYiO3M6Njoibm9tYnJlIjtzOjE4OiJEZXBvcnRlcyB5IEZpdG5lc3MiO3M6NDoiaWRtbCI7czo3OiJNTFYxMjc2IjtzOjQ6InNsdWciO3M6MTg6ImRlcG9ydGVzLXktZml0bmVzcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjEwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjE5NyI7czo2OiJub21icmUiO3M6MTg6IkVsZWN0cm9kb23DqXN0aWNvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjU3MjYiO3M6NDoic2x1ZyI7czoxODoiZWxlY3Ryb2RvbcOpc3RpY29zIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MTE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMTk4IjtzOjY6Im5vbWJyZSI7czoyODoiRWxlY3Ryw7NuaWNhLCAgQXVkaW8geSBWaWRlbyI7czo0OiJpZG1sIjtzOjc6Ik1MVjEwMDAiO3M6NDoic2x1ZyI7czoyNjoiZWxlY3Ryw7NuaWNhLWF1ZGlvLXktdmlkZW8iO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToxMjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIxOTkiO3M6Njoibm9tYnJlIjtzOjE1OiJIb2dhciB5IE11ZWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNTFYxNTc0IjtzOjQ6InNsdWciO3M6MTU6ImhvZ2FyLXktbXVlYmxlcyI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjEzO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIwMCI7czo2OiJub21icmUiO3M6MTA6IkluZHVzdHJpYXMiO3M6NDoiaWRtbCI7czo3OiJNTFYxNDk5IjtzOjQ6InNsdWciO3M6MTA6ImluZHVzdHJpYXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToxNDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDEiO3M6Njoibm9tYnJlIjtzOjk6IklubXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjE0NTkiO3M6NDoic2x1ZyI7czo5OiJpbm11ZWJsZXMiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToxNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDIiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MTY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjAzIjtzOjY6Im5vbWJyZSI7czoxNzoiSnVlZ29zIHkgSnVndWV0ZXMiO3M6NDoiaWRtbCI7czo3OiJNTFYxMTMyIjtzOjQ6InNsdWciO3M6MTc6Imp1ZWdvcy15LWp1Z3VldGVzIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MTc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjA0IjtzOjY6Im5vbWJyZSI7czoyODoiTGlicm9zLCBNw7pzaWNhIHkgUGVsw61jdWxhcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjMwMjUiO3M6NDoic2x1ZyI7czoyNzoibGlicm9zLW3DunNpY2EteS1wZWzDrWN1bGFzIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MTg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjA1IjtzOjY6Im5vbWJyZSI7czoxNzoiT3RyYXMgQ2F0ZWdvcsOtYXMiO3M6NDoiaWRtbCI7czo3OiJNTFYxOTUzIjtzOjQ6InNsdWciO3M6MTc6Im90cmFzLWNhdGVnb3LDrWFzIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MTk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjA2IjtzOjY6Im5vbWJyZSI7czoyNzoiUmVsb2plcywgSm95YXMgeSBCaXN1dGVyw61hIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMzkzNyI7czo0OiJzbHVnIjtzOjI2OiJyZWxvamVzLWpveWFzLXktYmlzdXRlcsOtYSI7czo0OiJzaXRlIjtzOjk6InZlbmV6dWVsYSI7fX1pOjIwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjIwNyI7czo2OiJub21icmUiO3M6MjY6IlJvcGEsIFphcGF0b3MgeSBBY2Nlc29yaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTQzMCI7czo0OiJzbHVnIjtzOjI1OiJyb3BhLXphcGF0b3MteS1hY2Nlc29yaW9zIjtzOjQ6InNpdGUiO3M6OToidmVuZXp1ZWxhIjt9fWk6MjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjA4IjtzOjY6Im5vbWJyZSI7czoxNToiU2FsdWQgeSBCZWxsZXphIjtzOjQ6ImlkbWwiO3M6NzoiTUxWMTI0NiI7czo0OiJzbHVnIjtzOjE1OiJzYWx1ZC15LWJlbGxlemEiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319aToyMjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyMDkiO3M6Njoibm9tYnJlIjtzOjk6IlNlcnZpY2lvcyI7czo0OiJpZG1sIjtzOjc6Ik1MVjE1NDAiO3M6NDoic2x1ZyI7czo5OiJzZXJ2aWNpb3MiO3M6NDoic2l0ZSI7czo5OiJ2ZW5lenVlbGEiO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNzA1OiI8aDEgY2xhc3M9InRpdGxlIj5SZXZpc3RhcyBCaXN1dGVyaWEgRGlnaXRhbGVzIENyZWEgQ29uIFN3YXJvdnNraTwvaDE+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+PCEtLQ0KZ29vZ2xlX2FkX2NsaWVudCA9ICJjYS1wdWItNzYyOTc3MDEyODUzMjU4OSI7DQovKiBjb3kgNDY4eDE1ICggYXJ0aWN1bG9zICkgKi8NCmdvb2dsZV9hZF9zbG90ID0gIjU2ODY0MTk4MjEiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQoNCjxkaXYgY2xhc3M9InBvc3RfYm94IiBhbGlnbj0ianVzdGlmeSI+DQo8ZGl2IGNsYXNzPSJwb3N0X3RpdGxlIj48YSBocmVmPSJodHRwOi8vdmVuZXp1ZWxhLmNvbXByYXItb25saW5lLXlhLmNvbS9hcnRpY3Vsb3MvcmV2aXN0YXMtYmlzdXRlcmlhLWRpZ2l0YWxlcy1jcmVhLWNvbi1zd2Fyb3Zza2kvNDAwNTYiPlJldmlzdGFzIEJpc3V0ZXJpYSBEaWdpdGFsZXMgQ3JlYSBDb24gU3dhcm92c2tpPC9hPjwvZGl2Pg0KPGRpdiBjbGFzcz0icG9zdF90ZXh0X2FyZWEiPg0KPGEgaHJlZj0iIyI+PGltZyBzcmM9Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01MVl92X0lfZl8yOTA5MzE5MjY1XzA3MjAxMi5qcGciIGFsdD0iUmV2aXN0YXMgQmlzdXRlcmlhIERpZ2l0YWxlcyBDcmVhIENvbiBTd2Fyb3Zza2kiIGNsYXNzPSJ0ZW1wbGF0ZW1vX3BpYyIgdGl0bGU9IlJldmlzdGFzIEJpc3V0ZXJpYSBEaWdpdGFsZXMgQ3JlYSBDb24gU3dhcm92c2tpIiAvPjwvYT4NCjxoMz5SZXZpc3RhIERlIEJpc3V0ZXJpYSBDb24gU3dhcm92c2tpIDIwIFJldmlzdGFzPC9oMz4NCg0KPGRpdiBzdHlsZT0id2lkdGg6IDI1MHB4OyI+UHJlY2lvOiA8c3Ryb25nPlZFRiAkNDAuMDA8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20udmUvTUxWLTQwMTgzNjY5Ni1yZXZpc3Rhcy1iaXN1dGVyaWEtZGlnaXRhbGVzLWNyZWEtY29uLXN3YXJvdnNraS1fSk0iIHRhcmdldD0iX2JsYW5rIj5WZXIvQ29tcHJhcjwvYT4NCjwvZGl2Pg0KPGRpdiBjbGFzcz0icHVibGlzaF9kYXRlIj4gQ2F0ZWdvciZpYWN1dGU7YTogPGEgaHJlZj0iaHR0cDovL3ZlbmV6dWVsYS5jb21wcmFyLW9ubGluZS15YS5jb20vY2F0ZWdvcmlhcy9saWJyb3MtbcO6c2ljYS15LXBlbMOtY3VsYXMiPkxpYnJvcywgTcO6c2ljYSB5IFBlbMOtY3VsYXM8L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Revistas Bisuteria Digitales Crea Con Swarovski en venezuela - venezuela.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Revista,Bisuteria,Swarovski,Revistas,Digitales,Crea,venezuela" />
<meta name="description" content="Comprar en mercadolibre Revistas Bisuteria Digitales Crea Con Swarovski en venezuela. comprar Revistas Bisuteria Digitales Crea Con Swarovski online en venezuela. comprar online en venezuela. comprar Revistas Bisuteria Digitales Crea Con Swarovski en venezuela" />
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
        <h1 class="title">Revistas Bisuteria Digitales Crea Con Swarovski</h1>
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
<div class="post_title"><a href="http://venezuela.comprar-online-ya.com/articulos/revistas-bisuteria-digitales-crea-con-swarovski/40056">Revistas Bisuteria Digitales Crea Con Swarovski</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLV_v_I_f_2909319265_072012.jpg" alt="Revistas Bisuteria Digitales Crea Con Swarovski" class="templatemo_pic" title="Revistas Bisuteria Digitales Crea Con Swarovski" /></a>
<h3>Revista De Bisuteria Con Swarovski 20 Revistas</h3>

<div style="width: 250px;">Precio: <strong>VEF $40.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.ve/MLV-401836696-revistas-bisuteria-digitales-crea-con-swarovski-_JM" target="_blank">Ver/Comprar</a>
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