<!--cachetime:1345016707--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:58:"notebook-lenovo-g560-p6200-4gb-500gb-teclado-num-led-15-6-";i:1;s:5:"34154";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:74:"articulos/notebook-lenovo-g560-p6200-4gb-500gb-teclado-num-led-15-6-/34154";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:75:"/articulos/notebook-lenovo-g560-p6200-4gb-500gb-teclado-num-led-15-6-/34154";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoxOiI4IjtzOjY6Im5vbWJyZSI7czoxMjoiQ29tcHV0YWNpw7NuIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJjb21wdXRhY2nDs24iO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319czo3OiJQcm9kdWN0IjthOjE6e3M6NzoiUHJvZHVjdCI7YToxNTp7czoyOiJpZCI7czo1OiIzNDE1NCI7czo0OiJpZG1sIjtzOjEyOiJNTEE0MjgxODk4OTkiO3M6NToidGl0bGUiO3M6NTg6Ik5vdGVib29rIExlbm92byBHNTYwIFA2MjAwIDRnYiA1MDBnYiBUZWNsYWRvIE51bSBMZWQgMTUuNiciO3M6ODoic3VidGl0bGUiO3M6Njk6IkxlY3RvciBUYXJqZXRhcyBJbnRlbCBEdWFsIENvcmUgMTUuNiBEdmRydyBEcml2ZXJzIFhwIDcgU2VydmljaW8gMDgwMCI7czo1OiJwcmljZSI7czo2OiIzOTc5LjkiO3M6OToicGVybWFsaW5rIjtzOjExMDoiaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20uYXIvTUxBLTQyODE4OTg5OS1ub3RlYm9vay1sZW5vdm8tZzU2MC1wNjIwMC00Z2ItNTAwZ2ItdGVjbGFkby1udW0tbGVkLTE1Ni1fSk0iO3M6OToidGh1bWJuYWlsIjtzOjU0OiJodHRwOi8vaW1nMi5tbHN0YXRpYy5jb20vc19NTEFfdl9JX2ZfOTY2MzAzODVfMTY3Mi5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IkFSUyI7czoxMDoic3RhdGVfbmFtZSI7czoxNToiQ2FwaXRhbCBGZWRlcmFsIjtzOjk6ImNpdHlfbmFtZSI7czoyNToiTE9DQUwgREVTREUgMTk5MSBWaWxsYSBEZSI7czoxMToiY2F0ZWdvcnlfaWQiO3M6MToiOCI7czo1OiJhZGRlZCI7czoxOToiMjAxMi0wNy0xNSAwMDowMDo1MiI7czo0OiJzbHVnIjtzOjU4OiJub3RlYm9vay1sZW5vdm8tZzU2MC1wNjIwMC00Z2ItNTAwZ2ItdGVjbGFkby1udW0tbGVkLTE1LTYtIjtzOjU6InNpdGlvIjtzOjk6ImFyZ2VudGluYSI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6MjkzOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBOb3RlYm9vayBMZW5vdm8gRzU2MCBQNjIwMCA0Z2IgNTAwZ2IgVGVjbGFkbyBOdW0gTGVkIDE1LjYnIGVuIGFyZ2VudGluYS4gY29tcHJhciBOb3RlYm9vayBMZW5vdm8gRzU2MCBQNjIwMCA0Z2IgNTAwZ2IgVGVjbGFkbyBOdW0gTGVkIDE1LjYnIG9ubGluZSBlbiBhcmdlbnRpbmEuIGNvbXByYXIgb25saW5lIGVuIGFyZ2VudGluYS4gY29tcHJhciBOb3RlYm9vayBMZW5vdm8gRzU2MCBQNjIwMCA0Z2IgNTAwZ2IgVGVjbGFkbyBOdW0gTGVkIDE1LjYnIGVuIGFyZ2VudGluYSI7czoxMjoibWV0YWtleXdvcmRzIjtzOjE1MjoibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLExlY3RvcixUYXJqZXRhcyxJbnRlbCxEdWFsLENvcmUsRHZkcncsRHJpdmVycyxTZXJ2aWNpbywwODAwLE5vdGVib29rLExlbm92byxHNTYwLFA2MjAwLDUwMGdiLFRlY2xhZG8sJyxhcmdlbnRpbmEiO3M6MTA6InRpdGxlX3BhZ2UiO3M6OTU6IkNvbXByYXIgZW4gbWVyY2Fkb2xpYnJlIE5vdGVib29rIExlbm92byBHNTYwIFA2MjAwIDRnYiA1MDBnYiBUZWNsYWRvIE51bSBMZWQgMTUuNicgZW4gYXJnZW50aW5hIjtzOjEwOiJjYXRlZ29yaWFzIjthOjI2OntpOjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MToiMSI7czo2OiJub21icmUiO3M6MjY6IkFjY2Vzb3Jpb3MgcGFyYSBWZWjDrWN1bG9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxBNTcyNSI7czo0OiJzbHVnIjtzOjI2OiJhY2Nlc29yaW9zLXBhcmEtdmVow61jdWxvcyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MToiMiI7czo2OiJub21icmUiO3M6MTk6IkFuaW1hbGVzIHkgTWFzY290YXMiO3M6NDoiaWRtbCI7czo3OiJNTEExMDcxIjtzOjQ6InNsdWciO3M6MTk6ImFuaW1hbGVzLXktbWFzY290YXMiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjE6IjMiO3M6Njoibm9tYnJlIjtzOjEzOiJBbnRpZ8O8ZWRhZGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTM2NyI7czo0OiJzbHVnIjtzOjEzOiJhbnRpZ8O8ZWRhZGVzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoxOiI0IjtzOjY6Im5vbWJyZSI7czoyMDoiQXV0b3MsIE1vdG9zIHkgT3Ryb3MiO3M6NDoiaWRtbCI7czo3OiJNTEExNzQzIjtzOjQ6InNsdWciO3M6MTk6ImF1dG9zLW1vdG9zLXktb3Ryb3MiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aTo0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjE6IjUiO3M6Njoibm9tYnJlIjtzOjY6IkJlYsOpcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTEzODQiO3M6NDoic2x1ZyI7czo2OiJiZWLDqXMiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aTo1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjE6IjYiO3M6Njoibm9tYnJlIjtzOjIyOiJDZWx1bGFyZXMgeSBUZWzDqWZvbm9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTA1MSI7czo0OiJzbHVnIjtzOjIyOiJjZWx1bGFyZXMteS10ZWzDqWZvbm9zIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6NjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoxOiI3IjtzOjY6Im5vbWJyZSI7czoyNDoiQ29sZWNjaW9uYWJsZXMgeSBIb2JiaWVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTc5OCI7czo0OiJzbHVnIjtzOjI0OiJjb2xlY2Npb25hYmxlcy15LWhvYmJpZXMiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aTo3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjE6IjgiO3M6Njoibm9tYnJlIjtzOjEyOiJDb21wdXRhY2nDs24iO3M6NDoiaWRtbCI7czo3OiJNTEExNjQ4IjtzOjQ6InNsdWciO3M6MTI6ImNvbXB1dGFjacOzbiI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MToiOSI7czo2OiJub21icmUiO3M6MjI6IkNvbnNvbGFzIHkgVmlkZW9qdWVnb3MiO3M6NDoiaWRtbCI7czo3OiJNTEExMTQ0IjtzOjQ6InNsdWciO3M6MjI6ImNvbnNvbGFzLXktdmlkZW9qdWVnb3MiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aTo5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjEwIjtzOjY6Im5vbWJyZSI7czoyMToiQ8OhbWFyYXMgeSBBY2Nlc29yaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTAzOSI7czo0OiJzbHVnIjtzOjIxOiJjw6FtYXJhcy15LWFjY2Vzb3Jpb3MiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToxMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIxMSI7czo2OiJub21icmUiO3M6MTg6IkRlcG9ydGVzIHkgRml0bmVzcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTEyNzYiO3M6NDoic2x1ZyI7czoxODoiZGVwb3J0ZXMteS1maXRuZXNzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MTE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMTIiO3M6Njoibm9tYnJlIjtzOjMwOiJFbGVjdHJvZG9tw6lzdGljb3MgeSBBaXJlcyBBYy4iO3M6NDoiaWRtbCI7czo3OiJNTEE1NzI2IjtzOjQ6InNsdWciO3M6MzA6ImVsZWN0cm9kb23DqXN0aWNvcy15LWFpcmVzLWFjLSI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjEyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjEzIjtzOjY6Im5vbWJyZSI7czoyNzoiRWxlY3Ryw7NuaWNhLCBBdWRpbyB5IFZpZGVvIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTAwMCI7czo0OiJzbHVnIjtzOjI2OiJlbGVjdHLDs25pY2EtYXVkaW8teS12aWRlbyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjEzO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjE0IjtzOjY6Im5vbWJyZSI7czoyMToiRW50cmFkYXMgcGFyYSBFdmVudG9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMjU0NyI7czo0OiJzbHVnIjtzOjIxOiJlbnRyYWRhcy1wYXJhLWV2ZW50b3MiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToxNDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIxNSI7czo2OiJub21icmUiO3M6MjQ6IkhvZ2FyLCBNdWVibGVzIHkgSmFyZMOtbiI7czo0OiJpZG1sIjtzOjc6Ik1MQTE1NzQiO3M6NDoic2x1ZyI7czoyMzoiaG9nYXItbXVlYmxlcy15LWphcmTDrW4iO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToxNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIxNiI7czo2OiJub21icmUiO3M6MjE6IkluZHVzdHJpYXMgeSBPZmljaW5hcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTE0OTkiO3M6NDoic2x1ZyI7czoyMToiaW5kdXN0cmlhcy15LW9maWNpbmFzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MTY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMTciO3M6Njoibm9tYnJlIjtzOjk6IklubXVlYmxlcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTE0NTkiO3M6NDoic2x1ZyI7czo5OiJpbm11ZWJsZXMiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToxNzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIxOCI7czo2OiJub21icmUiO3M6MjI6Ikluc3RydW1lbnRvcyBNdXNpY2FsZXMiO3M6NDoiaWRtbCI7czo3OiJNTEExMTgyIjtzOjQ6InNsdWciO3M6MjI6Imluc3RydW1lbnRvcy1tdXNpY2FsZXMiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToxODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIxOSI7czo2OiJub21icmUiO3M6MTU6IkpveWFzIHkgUmVsb2plcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTM5MzciO3M6NDoic2x1ZyI7czoxNToiam95YXMteS1yZWxvamVzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MTk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMjAiO3M6Njoibm9tYnJlIjtzOjE3OiJKdWVnb3MgeSBKdWd1ZXRlcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTExMzIiO3M6NDoic2x1ZyI7czoxNzoianVlZ29zLXktanVndWV0ZXMiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToyMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIyMSI7czo2OiJub21icmUiO3M6MjU6IkxpYnJvcywgUmV2aXN0YXMgeSBDb21pY3MiO3M6NDoiaWRtbCI7czo3OiJNTEEzMDI1IjtzOjQ6InNsdWciO3M6MjQ6ImxpYnJvcy1yZXZpc3Rhcy15LWNvbWljcyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjIxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjIyIjtzOjY6Im5vbWJyZSI7czoyODoiTcO6c2ljYSwgUGVsw61jdWxhcyB5IFNlcmllcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTExNjgiO3M6NDoic2x1ZyI7czoyNzoibcO6c2ljYS1wZWzDrWN1bGFzLXktc2VyaWVzIjtzOjQ6InNpdGUiO3M6OToiYXJnZW50aW5hIjt9fWk6MjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMjMiO3M6Njoibm9tYnJlIjtzOjE3OiJPdHJhcyBjYXRlZ29yw61hcyI7czo0OiJpZG1sIjtzOjc6Ik1MQTE5NTMiO3M6NDoic2x1ZyI7czoxNzoib3RyYXMtY2F0ZWdvcsOtYXMiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToyMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIyNCI7czo2OiJub21icmUiO3M6MTc6IlJvcGEgeSBBY2Nlc29yaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTQzMCI7czo0OiJzbHVnIjtzOjE3OiJyb3BhLXktYWNjZXNvcmlvcyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX1pOjI0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjI1IjtzOjY6Im5vbWJyZSI7czoxNToiU2FsdWQgeSBCZWxsZXphIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTI0NiI7czo0OiJzbHVnIjtzOjE1OiJzYWx1ZC15LWJlbGxlemEiO3M6NDoic2l0ZSI7czo5OiJhcmdlbnRpbmEiO319aToyNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIyNiI7czo2OiJub21icmUiO3M6OToiU2VydmljaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxBMTU0MCI7czo0OiJzbHVnIjtzOjk6InNlcnZpY2lvcyI7czo0OiJzaXRlIjtzOjk6ImFyZ2VudGluYSI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE3NTk6IjxoMSBjbGFzcz0idGl0bGUiPk5vdGVib29rIExlbm92byBHNTYwIFA2MjAwIDRnYiA1MDBnYiBUZWNsYWRvIE51bSBMZWQgMTUuNic8L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL2FyZ2VudGluYS5jb21wcmFyLW9ubGluZS15YS5jb20vYXJ0aWN1bG9zL25vdGVib29rLWxlbm92by1nNTYwLXA2MjAwLTRnYi01MDBnYi10ZWNsYWRvLW51bS1sZWQtMTUtNi0vMzQxNTQiPk5vdGVib29rIExlbm92byBHNTYwIFA2MjAwIDRnYiA1MDBnYiBUZWNsYWRvIE51bSBMZWQgMTUuNic8L2E+PC9kaXY+DQo8ZGl2IGNsYXNzPSJwb3N0X3RleHRfYXJlYSI+DQo8YSBocmVmPSIjIj48aW1nIHNyYz0iaHR0cDovL2ltZzIubWxzdGF0aWMuY29tL3NfTUxBX3ZfSV9mXzk2NjMwMzg1XzE2NzIuanBnIiBhbHQ9Ik5vdGVib29rIExlbm92byBHNTYwIFA2MjAwIDRnYiA1MDBnYiBUZWNsYWRvIE51bSBMZWQgMTUuNiciIGNsYXNzPSJ0ZW1wbGF0ZW1vX3BpYyIgdGl0bGU9Ik5vdGVib29rIExlbm92byBHNTYwIFA2MjAwIDRnYiA1MDBnYiBUZWNsYWRvIE51bSBMZWQgMTUuNiciIC8+PC9hPg0KPGgzPkxlY3RvciBUYXJqZXRhcyBJbnRlbCBEdWFsIENvcmUgMTUuNiBEdmRydyBEcml2ZXJzIFhwIDcgU2VydmljaW8gMDgwMDwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5BUlMgJDM5NzkuOTA8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FydGljdWxvLm1lcmNhZG9saWJyZS5jb20uYXIvTUxBLTQyODE4OTg5OS1ub3RlYm9vay1sZW5vdm8tZzU2MC1wNjIwMC00Z2ItNTAwZ2ItdGVjbGFkby1udW0tbGVkLTE1Ni1fSk0iIHRhcmdldD0iX2JsYW5rIj5WZXIvQ29tcHJhcjwvYT4NCjwvZGl2Pg0KPGRpdiBjbGFzcz0icHVibGlzaF9kYXRlIj4gQ2F0ZWdvciZpYWN1dGU7YTogPGEgaHJlZj0iaHR0cDovL2FyZ2VudGluYS5jb21wcmFyLW9ubGluZS15YS5jb20vY2F0ZWdvcmlhcy9jb21wdXRhY2nDs24iPkNvbXB1dGFjacOzbjwvYT48L2Rpdj4NCjwvZGl2Pg0KDQoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6ODoiUHJvZHVjdHMiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Notebook Lenovo G560 P6200 4gb 500gb Teclado Num Led 15.6' en argentina - argentina.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Lector,Tarjetas,Intel,Dual,Core,Dvdrw,Drivers,Servicio,0800,Notebook,Lenovo,G560,P6200,500gb,Teclado,',argentina" />
<meta name="description" content="Comprar en mercadolibre Notebook Lenovo G560 P6200 4gb 500gb Teclado Num Led 15.6' en argentina. comprar Notebook Lenovo G560 P6200 4gb 500gb Teclado Num Led 15.6' online en argentina. comprar online en argentina. comprar Notebook Lenovo G560 P6200 4gb 500gb Teclado Num Led 15.6' en argentina" />
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
        <h1 class="title">Notebook Lenovo G560 P6200 4gb 500gb Teclado Num Led 15.6'</h1>
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
<div class="post_title"><a href="http://argentina.comprar-online-ya.com/articulos/notebook-lenovo-g560-p6200-4gb-500gb-teclado-num-led-15-6-/34154">Notebook Lenovo G560 P6200 4gb 500gb Teclado Num Led 15.6'</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLA_v_I_f_96630385_1672.jpg" alt="Notebook Lenovo G560 P6200 4gb 500gb Teclado Num Led 15.6'" class="templatemo_pic" title="Notebook Lenovo G560 P6200 4gb 500gb Teclado Num Led 15.6'" /></a>
<h3>Lector Tarjetas Intel Dual Core 15.6 Dvdrw Drivers Xp 7 Servicio 0800</h3>

<div style="width: 250px;">Precio: <strong>ARS $3979.90</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://articulo.mercadolibre.com.ar/MLA-428189899-notebook-lenovo-g560-p6200-4gb-500gb-teclado-num-led-156-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://argentina.comprar-online-ya.com/categorias/computación">Computación</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 argentina.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>