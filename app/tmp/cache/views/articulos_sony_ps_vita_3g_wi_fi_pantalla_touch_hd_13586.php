<!--cachetime:1345016676--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:39:"sony-ps-vita-3g-wi-fi-pantalla-touch-hd";i:1;s:5:"13586";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:55:"articulos/sony-ps-vita-3g-wi-fi-pantalla-touch-hd/13586";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:56:"/articulos/sony-ps-vita-3g-wi-fi-pantalla-touch-hd/13586";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoxOiI5IjtzOjY6Im5vbWJyZSI7czoyMjoiQ29uc29sYXMgeSBWaWRlb2p1ZWdvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTExNDQiO3M6NDoic2x1ZyI7czoyMjoiY29uc29sYXMteS12aWRlb2p1ZWdvcyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjEzNTg2IjtzOjQ6ImlkbWwiO3M6MTI6Ik1MQTE0ODAyODMwMCI7czo1OiJ0aXRsZSI7czo0MzoiU29ueSBQcyBWaXRhIDNnIC0gV2kgRmkgLSBQYW50YWxsYSBUb3VjaCBIZCI7czo4OiJzdWJ0aXRsZSI7czo0OToiTnVldmFzIEJveCwgR2FyYW50aWEgRXNjcml0YSwgU29tb3MgSW1wb3J0YWRvcmVzISI7czo1OiJwcmljZSI7czo0OiIxOTc5IjtzOjk6InBlcm1hbGluayI7czo5MzoiaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20uYXIvTUxBLTE0ODAyODMwMC1zb255LXBzLXZpdGEtM2ctd2ktZmktcGFudGFsbGEtdG91Y2gtaGQtX0pNIjtzOjk6InRodW1ibmFpbCI7czo1ODoiaHR0cDovL2ltZzIubWxzdGF0aWMuY29tL3NfTUxBX3ZfSV9mXzI2NDA3NzI0NDdfMDQyMDEyLmpwZyI7czoxMToiY3VycmVuY3lfaWQiO3M6MzoiQVJTIjtzOjEwOiJzdGF0ZV9uYW1lIjtzOjE1OiJDYXBpdGFsIEZlZGVyYWwiO3M6OToiY2l0eV9uYW1lIjtzOjc6IkNlbnRyby4iO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjE6IjkiO3M6NToiYWRkZWQiO3M6MTk6IjIwMTItMDYtMTQgMTk6NTY6NTQiO3M6NDoic2x1ZyI7czozOToic29ueS1wcy12aXRhLTNnLXdpLWZpLXBhbnRhbGxhLXRvdWNoLWhkIjtzOjU6InNpdGlvIjtzOjk6ImFyZ2VudGluYSI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6MjQ4OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBTb255IFBzIFZpdGEgM2cgLSBXaSBGaSAtIFBhbnRhbGxhIFRvdWNoIEhkIGVuIGFyZ2VudGluYS4gY29tcHJhciBTb255IFBzIFZpdGEgM2cgLSBXaSBGaSAtIFBhbnRhbGxhIFRvdWNoIEhkIG9ubGluZSBlbiBhcmdlbnRpbmEuIGNvbXByYXIgb25saW5lIGVuIGFyZ2VudGluYS4gY29tcHJhciBTb255IFBzIFZpdGEgM2cgLSBXaSBGaSAtIFBhbnRhbGxhIFRvdWNoIEhkIGVuIGFyZ2VudGluYSI7czoxMjoibWV0YWtleXdvcmRzIjtzOjExNzoibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLE51ZXZhcyxHYXJhbnRpYSxFc2NyaXRhLFNvbW9zLEltcG9ydGFkb3JlcyxTb255LFZpdGEsUGFudGFsbGEsVG91Y2gsYXJnZW50aW5hIjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjgwOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBTb255IFBzIFZpdGEgM2cgLSBXaSBGaSAtIFBhbnRhbGxhIFRvdWNoIEhkIGVuIGFyZ2VudGluYSI7czoxMDoiY2F0ZWdvcmlhcyI7YToyNjp7aTowO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjE6IjEiO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Nlc29yaW9zIHBhcmEgVmVow61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTU3MjUiO3M6NDoic2x1ZyI7czoyNjoiYWNjZXNvcmlvcy1wYXJhLXZlaMOtY3Vsb3MiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjE6IjIiO3M6Njoibm9tYnJlIjtzOjE5OiJBbmltYWxlcyB5IE1hc2NvdGFzIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTA3MSI7czo0OiJzbHVnIjtzOjE5OiJhbmltYWxlcy15LW1hc2NvdGFzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoxOiIzIjtzOjY6Im5vbWJyZSI7czoxMzoiQW50aWfDvGVkYWRlcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTEzNjciO3M6NDoic2x1ZyI7czoxMzoiYW50aWfDvGVkYWRlcyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MToiNCI7czo2OiJub21icmUiO3M6MjA6IkF1dG9zLCBNb3RvcyB5IE90cm9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTc0MyI7czo0OiJzbHVnIjtzOjE5OiJhdXRvcy1tb3Rvcy15LW90cm9zIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6NDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoxOiI1IjtzOjY6Im5vbWJyZSI7czo2OiJCZWLDqXMiO3M6NDoiaWRtbCI7czo3OiJNTEExMzg0IjtzOjQ6InNsdWciO3M6NjoiYmViw6lzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6NTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoxOiI2IjtzOjY6Im5vbWJyZSI7czoyMjoiQ2VsdWxhcmVzIHkgVGVsw6lmb25vcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTEwNTEiO3M6NDoic2x1ZyI7czoyMjoiY2VsdWxhcmVzLXktdGVsw6lmb25vcyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MToiNyI7czo2OiJub21icmUiO3M6MjQ6IkNvbGVjY2lvbmFibGVzIHkgSG9iYmllcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTE3OTgiO3M6NDoic2x1ZyI7czoyNDoiY29sZWNjaW9uYWJsZXMteS1ob2JiaWVzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6NzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoxOiI4IjtzOjY6Im5vbWJyZSI7czoxMjoiQ29tcHV0YWNpw7NuIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJjb21wdXRhY2nDs24iO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aTo4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjE6IjkiO3M6Njoibm9tYnJlIjtzOjIyOiJDb25zb2xhcyB5IFZpZGVvanVlZ29zIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTE0NCI7czo0OiJzbHVnIjtzOjIyOiJjb25zb2xhcy15LXZpZGVvanVlZ29zIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6OTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIxMCI7czo2OiJub21icmUiO3M6MjE6IkPDoW1hcmFzIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTEwMzkiO3M6NDoic2x1ZyI7czoyMToiY8OhbWFyYXMteS1hY2Nlc29yaW9zIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MTA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMTEiO3M6Njoibm9tYnJlIjtzOjE4OiJEZXBvcnRlcyB5IEZpdG5lc3MiO3M6NDoiaWRtbCI7czo3OiJNTEExMjc2IjtzOjQ6InNsdWciO3M6MTg6ImRlcG9ydGVzLXktZml0bmVzcyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjExO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjEyIjtzOjY6Im5vbWJyZSI7czozMDoiRWxlY3Ryb2RvbcOpc3RpY29zIHkgQWlyZXMgQWMuIjtzOjQ6ImlkbWwiO3M6NzoiTUxBNTcyNiI7czo0OiJzbHVnIjtzOjMwOiJlbGVjdHJvZG9tw6lzdGljb3MteS1haXJlcy1hYy0iO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToxMjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIxMyI7czo2OiJub21icmUiO3M6Mjc6IkVsZWN0csOzbmljYSwgQXVkaW8geSBWaWRlbyI7czo0OiJpZG1sIjtzOjc6Ik1MQTEwMDAiO3M6NDoic2x1ZyI7czoyNjoiZWxlY3Ryw7NuaWNhLWF1ZGlvLXktdmlkZW8iO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToxMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIxNCI7czo2OiJub21icmUiO3M6MjE6IkVudHJhZGFzIHBhcmEgRXZlbnRvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTI1NDciO3M6NDoic2x1ZyI7czoyMToiZW50cmFkYXMtcGFyYS1ldmVudG9zIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MTQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMTUiO3M6Njoibm9tYnJlIjtzOjI0OiJIb2dhciwgTXVlYmxlcyB5IEphcmTDrW4iO3M6NDoiaWRtbCI7czo3OiJNTEExNTc0IjtzOjQ6InNsdWciO3M6MjM6ImhvZ2FyLW11ZWJsZXMteS1qYXJkw61uIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MTU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMTYiO3M6Njoibm9tYnJlIjtzOjIxOiJJbmR1c3RyaWFzIHkgT2ZpY2luYXMiO3M6NDoiaWRtbCI7czo3OiJNTEExNDk5IjtzOjQ6InNsdWciO3M6MjE6ImluZHVzdHJpYXMteS1vZmljaW5hcyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjE2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjE3IjtzOjY6Im5vbWJyZSI7czo5OiJJbm11ZWJsZXMiO3M6NDoiaWRtbCI7czo3OiJNTEExNDU5IjtzOjQ6InNsdWciO3M6OToiaW5tdWVibGVzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MTc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMTgiO3M6Njoibm9tYnJlIjtzOjIyOiJJbnN0cnVtZW50b3MgTXVzaWNhbGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTE4MiI7czo0OiJzbHVnIjtzOjIyOiJpbnN0cnVtZW50b3MtbXVzaWNhbGVzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MTg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMTkiO3M6Njoibm9tYnJlIjtzOjE1OiJKb3lhcyB5IFJlbG9qZXMiO3M6NDoiaWRtbCI7czo3OiJNTEEzOTM3IjtzOjQ6InNsdWciO3M6MTU6ImpveWFzLXktcmVsb2plcyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjE5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjIwIjtzOjY6Im5vbWJyZSI7czoxNzoiSnVlZ29zIHkgSnVndWV0ZXMiO3M6NDoiaWRtbCI7czo3OiJNTEExMTMyIjtzOjQ6InNsdWciO3M6MTc6Imp1ZWdvcy15LWp1Z3VldGVzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMjEiO3M6Njoibm9tYnJlIjtzOjI1OiJMaWJyb3MsIFJldmlzdGFzIHkgQ29taWNzIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMzAyNSI7czo0OiJzbHVnIjtzOjI0OiJsaWJyb3MtcmV2aXN0YXMteS1jb21pY3MiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToyMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIyMiI7czo2OiJub21icmUiO3M6Mjg6Ik3DunNpY2EsIFBlbMOtY3VsYXMgeSBTZXJpZXMiO3M6NDoiaWRtbCI7czo3OiJNTEExMTY4IjtzOjQ6InNsdWciO3M6Mjc6Im3DunNpY2EtcGVsw61jdWxhcy15LXNlcmllcyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjIyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjIzIjtzOjY6Im5vbWJyZSI7czoxNzoiT3RyYXMgY2F0ZWdvcsOtYXMiO3M6NDoiaWRtbCI7czo3OiJNTEExOTUzIjtzOjQ6InNsdWciO3M6MTc6Im90cmFzLWNhdGVnb3LDrWFzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMjQiO3M6Njoibm9tYnJlIjtzOjE3OiJSb3BhIHkgQWNjZXNvcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTE0MzAiO3M6NDoic2x1ZyI7czoxNzoicm9wYS15LWFjY2Vzb3Jpb3MiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToyNDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIyNSI7czo2OiJub21icmUiO3M6MTU6IlNhbHVkIHkgQmVsbGV6YSI7czo0OiJpZG1sIjtzOjc6Ik1MQTEyNDYiO3M6NDoic2x1ZyI7czoxNToic2FsdWQteS1iZWxsZXphIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MjU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMjYiO3M6Njoibm9tYnJlIjtzOjk6IlNlcnZpY2lvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTE1NDAiO3M6NDoic2x1ZyI7czo5OiJzZXJ2aWNpb3MiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNjY3OiI8aDEgY2xhc3M9InRpdGxlIj5Tb255IFBzIFZpdGEgM2cgLSBXaSBGaSAtIFBhbnRhbGxhIFRvdWNoIEhkPC9oMT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGNveSA0Njh4MTUgKCBhcnRpY3Vsb3MgKSAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiNTY4NjQxOTgyMSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCg0KPGRpdiBjbGFzcz0icG9zdF9ib3giIGFsaWduPSJqdXN0aWZ5Ij4NCjxkaXYgY2xhc3M9InBvc3RfdGl0bGUiPjxhIGhyZWY9Imh0dHA6Ly9hcmdlbnRpbmEuY29tcHJhci1vbmxpbmUteWEuY29tL2FydGljdWxvcy9zb255LXBzLXZpdGEtM2ctd2ktZmktcGFudGFsbGEtdG91Y2gtaGQvMTM1ODYiPlNvbnkgUHMgVml0YSAzZyAtIFdpIEZpIC0gUGFudGFsbGEgVG91Y2ggSGQ8L2E+PC9kaXY+DQo8ZGl2IGNsYXNzPSJwb3N0X3RleHRfYXJlYSI+DQo8YSBocmVmPSIjIj48aW1nIHNyYz0iaHR0cDovL2ltZzIubWxzdGF0aWMuY29tL3NfTUxBX3ZfSV9mXzI2NDA3NzI0NDdfMDQyMDEyLmpwZyIgYWx0PSJTb255IFBzIFZpdGEgM2cgLSBXaSBGaSAtIFBhbnRhbGxhIFRvdWNoIEhkIiBjbGFzcz0idGVtcGxhdGVtb19waWMiIHRpdGxlPSJTb255IFBzIFZpdGEgM2cgLSBXaSBGaSAtIFBhbnRhbGxhIFRvdWNoIEhkIiAvPjwvYT4NCjxoMz5OdWV2YXMgQm94LCBHYXJhbnRpYSBFc2NyaXRhLCBTb21vcyBJbXBvcnRhZG9yZXMhPC9oMz4NCg0KPGRpdiBzdHlsZT0id2lkdGg6IDI1MHB4OyI+UHJlY2lvOiA8c3Ryb25nPkFSUyAkMTk3OS4wMDwvc3Ryb25nPjwvZGl2Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogYW51bmNpbyBiYWpvIHRpdHVsbyAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiOTE5MDc4OTMxNSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCjxiciAvPg0KDQo8YSBjbGFzcz0iYnV5X21sIiByZWw9Im5vZm9sbG93IiBocmVmPSJodHRwOi8vYXJ0aWN1bG8ubWVyY2Fkb2xpYnJlLmNvbS5hci9NTEEtMTQ4MDI4MzAwLXNvbnktcHMtdml0YS0zZy13aS1maS1wYW50YWxsYS10b3VjaC1oZC1fSk0iIHRhcmdldD0iX2JsYW5rIj5WZXIvQ29tcHJhcjwvYT4NCjwvZGl2Pg0KPGRpdiBjbGFzcz0icHVibGlzaF9kYXRlIj4gQ2F0ZWdvciZpYWN1dGU7YTogPGEgaHJlZj0iaHR0cDovL2FyZ2VudGluYS5jb21wcmFyLW9ubGluZS15YS5jb20vY2F0ZWdvcmlhcy9jb25zb2xhcy15LXZpZGVvanVlZ29zIj5Db25zb2xhcyB5IFZpZGVvanVlZ29zPC9hPjwvZGl2Pg0KPC9kaXY+DQoNCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo4OiJQcm9kdWN0cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Sony Ps Vita 3g - Wi Fi - Pantalla Touch Hd en argentina - argentina.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Nuevas,Garantia,Escrita,Somos,Importadores,Sony,Vita,Pantalla,Touch,argentina" />
<meta name="description" content="Comprar en mercadolibre Sony Ps Vita 3g - Wi Fi - Pantalla Touch Hd en argentina. comprar Sony Ps Vita 3g - Wi Fi - Pantalla Touch Hd online en argentina. comprar online en argentina. comprar Sony Ps Vita 3g - Wi Fi - Pantalla Touch Hd en argentina" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://argentina.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://argentina.comprar-online-ya.com/" />
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
    <a href="http://argentina.comprar-online-ya.com/" title="Inicio"><img src="http://argentina.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://argentina.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://argentina.comprar-online-ya.com/categorias/accesorios-para-vehículos" target="_parent">Accesorios para Vehículos</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/animales-y-mascotas" target="_parent">Animales y Mascotas</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/antigüedades" target="_parent">Antigüedades</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/autos-motos-y-otros" target="_parent">Autos, Motos y Otros</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/bebés" target="_parent">Bebés</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/celulares-y-teléfonos" target="_parent">Celulares y Teléfonos</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/coleccionables-y-hobbies" target="_parent">Coleccionables y Hobbies</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/computación" target="_parent">Computación</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/consolas-y-videojuegos" target="_parent">Consolas y Videojuegos</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/cámaras-y-accesorios" target="_parent">Cámaras y Accesorios</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/deportes-y-fitness" target="_parent">Deportes y Fitness</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/electrodomésticos-y-aires-ac-" target="_parent">Electrodomésticos y Aires Ac.</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/electrónica-audio-y-video" target="_parent">Electrónica, Audio y Video</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/entradas-para-eventos" target="_parent">Entradas para Eventos</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/hogar-muebles-y-jardín" target="_parent">Hogar, Muebles y Jardín</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/industrias-y-oficinas" target="_parent">Industrias y Oficinas</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/inmuebles" target="_parent">Inmuebles</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/instrumentos-musicales" target="_parent">Instrumentos Musicales</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/joyas-y-relojes" target="_parent">Joyas y Relojes</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/juegos-y-juguetes" target="_parent">Juegos y Juguetes</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/libros-revistas-y-comics" target="_parent">Libros, Revistas y Comics</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/música-películas-y-series" target="_parent">Música, Películas y Series</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/otras-categorías" target="_parent">Otras categorías</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/ropa-y-accesorios" target="_parent">Ropa y Accesorios</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/salud-y-belleza" target="_parent">Salud y Belleza</a></li>
                                    <li><a href="http://argentina.comprar-online-ya.com/categorias/servicios" target="_parent">Servicios</a></li>
                                                    
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
        <h1 class="title">Sony Ps Vita 3g - Wi Fi - Pantalla Touch Hd</h1>
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
<div class="post_title"><a href="http://argentina.comprar-online-ya.com/articulos/sony-ps-vita-3g-wi-fi-pantalla-touch-hd/13586">Sony Ps Vita 3g - Wi Fi - Pantalla Touch Hd</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLA_v_I_f_2640772447_042012.jpg" alt="Sony Ps Vita 3g - Wi Fi - Pantalla Touch Hd" class="templatemo_pic" title="Sony Ps Vita 3g - Wi Fi - Pantalla Touch Hd" /></a>
<h3>Nuevas Box, Garantia Escrita, Somos Importadores!</h3>

<div style="width: 250px;">Precio: <strong>ARS $1979.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.ar/MLA-148028300-sony-ps-vita-3g-wi-fi-pantalla-touch-hd-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://argentina.comprar-online-ya.com/categorias/consolas-y-videojuegos">Consolas y Videojuegos</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 argentina.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>