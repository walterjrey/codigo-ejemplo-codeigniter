<!--cachetime:1345020818--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:49:"nerf-lançador-nerf-maverick-hasbro-com-6-dardos-";i:1;s:5:"41114";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:69:"articulos/nerf-lan%C3%A7ador-nerf-maverick-hasbro-com-6-dardos-/41114";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:70:"/articulos/nerf-lan%C3%A7ador-nerf-maverick-hasbro-com-6-dardos-/41114";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIzMyI7czo2OiJub21icmUiO3M6MjA6IkJyaW5xdWVkb3MgZSBIb2JiaWVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTEzMiI7czo0OiJzbHVnIjtzOjIwOiJicmlucXVlZG9zLWUtaG9iYmllcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjQxMTE0IjtzOjQ6ImlkbWwiO3M6MTI6Ik1MQjQzMDc0MzI2NSI7czo1OiJ0aXRsZSI7czo1NjoiTmVyZiAtIExhbsOnYWRvciBOZXJmIE1hdmVyaWNrIC0gSGFzYnJvICggQ29tIDYgRGFyZG9zICkiO3M6ODoic3VidGl0bGUiO3M6MjI6IkNvbSA2IERhcmRvcyBJbmNsdXNvcy4iO3M6NToicHJpY2UiO3M6MjoiNjkiO3M6OToicGVybWFsaW5rIjtzOjEwMToiaHR0cDovL3Byb2R1dG8ubWVyY2Fkb2xpdnJlLmNvbS5ici9NTEItNDMwNzQzMjY1LW5lcmYtbGFuY2Fkb3ItbmVyZi1tYXZlcmljay1oYXNicm8tY29tLTYtZGFyZG9zLS1fSk0iO3M6OToidGh1bWJuYWlsIjtzOjU1OiJodHRwOi8vaW1nMS5tbHN0YXRpYy5jb20vc19NTEJfdl9JX2ZfMjA5Mjc2MzYxXzI4ODMuanBnIjtzOjExOiJjdXJyZW5jeV9pZCI7czozOiJCUkwiO3M6MTA6InN0YXRlX25hbWUiO3M6MTA6IlPDo28gUGF1bG8iO3M6OToiY2l0eV9uYW1lIjtzOjExOiJTQU5UTyBBTkRSRSI7czoxMToiY2F0ZWdvcnlfaWQiO3M6MjoiMzMiO3M6NToiYWRkZWQiO3M6MTk6IjIwMTItMDctMjcgMDc6NDg6NDgiO3M6NDoic2x1ZyI7czo0OToibmVyZi1sYW7Dp2Fkb3ItbmVyZi1tYXZlcmljay1oYXNicm8tY29tLTYtZGFyZG9zLSI7czo1OiJzaXRpbyI7czo2OiJicmFzaWwiO3M6NjoiY3VzdG9tIjtzOjE6IjAiO319czoxNToibWV0YWRlc2NyaXB0aW9uIjtzOjI3NToiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgTmVyZiAtIExhbsOnYWRvciBOZXJmIE1hdmVyaWNrIC0gSGFzYnJvICggQ29tIDYgRGFyZG9zICkgZW4gYnJhc2lsLiBjb21wcmFyIE5lcmYgLSBMYW7Dp2Fkb3IgTmVyZiBNYXZlcmljayAtIEhhc2JybyAoIENvbSA2IERhcmRvcyApIG9ubGluZSBlbiBicmFzaWwuIGNvbXByYXIgb25saW5lIGVuIGJyYXNpbC4gY29tcHJhciBOZXJmIC0gTGFuw6dhZG9yIE5lcmYgTWF2ZXJpY2sgLSBIYXNicm8gKCBDb20gNiBEYXJkb3MgKSBlbiBicmFzaWwiO3M6MTI6Im1ldGFrZXl3b3JkcyI7czo5MDoibWVyY2Fkb2xpYnJlLGNvbXByYXIsb25saW5lLG1lcmNhZG9wYWdvLERhcmRvcyxJbmNsdXNvcyxOZXJmLGFkb3IsTWF2ZXJpY2ssSGFzYnJvLCksYnJhc2lsIjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjkwOiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBOZXJmIC0gTGFuw6dhZG9yIE5lcmYgTWF2ZXJpY2sgLSBIYXNicm8gKCBDb20gNiBEYXJkb3MgKSBlbiBicmFzaWwiO3M6MTA6ImNhdGVnb3JpYXMiO2E6Mjc6e2k6MDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIyNyI7czo2OiJub21icmUiO3M6MjY6IkFjZXNzw7NyaW9zIHBhcmEgVmXDrWN1bG9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxCNTY3MiI7czo0OiJzbHVnIjtzOjI2OiJhY2Vzc8Ozcmlvcy1wYXJhLXZlw61jdWxvcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMjgiO3M6Njoibm9tYnJlIjtzOjI4OiJBZ3JvLCBJbmTDunN0cmlhIGUgQ29tw6lyY2lvIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTQ5OSI7czo0OiJzbHVnIjtzOjI3OiJhZ3JvLWluZMO6c3RyaWEtZS1jb23DqXJjaW8iO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aToyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjI5IjtzOjY6Im5vbWJyZSI7czo3OiJBbmltYWlzIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTA3MSI7czo0OiJzbHVnIjtzOjc6ImFuaW1haXMiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aTozO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjMwIjtzOjY6Im5vbWJyZSI7czoxMjoiQW50aWd1aWRhZGVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTM2NyI7czo0OiJzbHVnIjtzOjEyOiJhbnRpZ3VpZGFkZXMiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aTo0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjMxIjtzOjY6Im5vbWJyZSI7czoxNzoiQXJ0ZSBlIEFydGVzYW5hdG8iO3M6NDoiaWRtbCI7czo3OiJNTEIxMzY4IjtzOjQ6InNsdWciO3M6MTc6ImFydGUtZS1hcnRlc2FuYXRvIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6NTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIzMiI7czo2OiJub21icmUiO3M6NjoiQmViw6pzIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTM4NCI7czo0OiJzbHVnIjtzOjY6ImJlYsOqcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMzMiO3M6Njoibm9tYnJlIjtzOjIwOiJCcmlucXVlZG9zIGUgSG9iYmllcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjExMzIiO3M6NDoic2x1ZyI7czoyMDoiYnJpbnF1ZWRvcy1lLWhvYmJpZXMiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aTo3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjM0IjtzOjY6Im5vbWJyZSI7czoyNjoiQ2Fsw6dhZG9zLCBSb3VwYXMgZSBCb2xzYXMiO3M6NDoiaWRtbCI7czo3OiJNTEIxNDMwIjtzOjQ6InNsdWciO3M6MjU6ImNhbMOnYWRvcy1yb3VwYXMtZS1ib2xzYXMiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aTo4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjM1IjtzOjY6Im5vbWJyZSI7czoyMjoiQ2Fycm9zLCBNb3RvcyBlIE91dHJvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjE3NDMiO3M6NDoic2x1ZyI7czoyMToiY2Fycm9zLW1vdG9zLWUtb3V0cm9zIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6OTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIzNiI7czo2OiJub21icmUiO3M6Mjc6IkNhc2EsIE3Ds3ZlaXMgZSBEZWNvcmHDp8OjbyI7czo0OiJpZG1sIjtzOjc6Ik1MQjE1NzQiO3M6NDoic2x1ZyI7czoyNjoiY2FzYS1tw7N2ZWlzLWUtZGVjb3Jhw6fDo28iO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aToxMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIzNyI7czo2OiJub21icmUiO3M6MjE6IkNlbHVsYXJlcyBlIFRlbGVmb25lcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjEwNTEiO3M6NDoic2x1ZyI7czoyMToiY2VsdWxhcmVzLWUtdGVsZWZvbmVzIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MTE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMzgiO3M6Njoibm9tYnJlIjtzOjE5OiJDb2xlw6fDtWVzIGUgQ29taWNzIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTc5OCI7czo0OiJzbHVnIjtzOjE5OiJjb2xlw6fDtWVzLWUtY29taWNzIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MTI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMzkiO3M6Njoibm9tYnJlIjtzOjIyOiJDw6JtZXJhcyBlIEFjZXNzw7NyaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTAzOSI7czo0OiJzbHVnIjtzOjIyOiJjw6JtZXJhcy1lLWFjZXNzw7NyaW9zIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MTM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNDAiO3M6Njoibm9tYnJlIjtzOjE3OiJFbGV0cm9kb23DqXN0aWNvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjU3MjYiO3M6NDoic2x1ZyI7czoxNzoiZWxldHJvZG9tw6lzdGljb3MiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aToxNDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI0MSI7czo2OiJub21icmUiO3M6Mjk6IkVsZXRyw7RuaWNvcywgw4F1ZGlvIGUgVsOtZGVvIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTAwMCI7czo0OiJzbHVnIjtzOjEzOiJlbGV0csO0bmljb3MtIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MTU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNDIiO3M6Njoibm9tYnJlIjtzOjE4OiJFc3BvcnRlcyBlIEZpdG5lc3MiO3M6NDoiaWRtbCI7czo3OiJNTEIxMjc2IjtzOjQ6InNsdWciO3M6MTg6ImVzcG9ydGVzLWUtZml0bmVzcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjE2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjQzIjtzOjY6Im5vbWJyZSI7czoxNzoiRmlsbWVzIGUgU2VyaWFkb3MiO3M6NDoiaWRtbCI7czo3OiJNTEIzMjgxIjtzOjQ6InNsdWciO3M6MTc6ImZpbG1lcy1lLXNlcmlhZG9zIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MTc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNDQiO3M6Njoibm9tYnJlIjtzOjU6IkdhbWVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTE0NCI7czo0OiJzbHVnIjtzOjU6ImdhbWVzIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MTg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNDUiO3M6Njoibm9tYnJlIjtzOjg6Ikltw7N2ZWlzIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTQ1OSI7czo0OiJzbHVnIjtzOjg6Imltw7N2ZWlzIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MTk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNDYiO3M6Njoibm9tYnJlIjtzOjEyOiJJbmZvcm3DoXRpY2EiO3M6NDoiaWRtbCI7czo3OiJNTEIxNjQ4IjtzOjQ6InNsdWciO3M6MTI6ImluZm9ybcOhdGljYSI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjIwO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjQ3IjtzOjY6Im5vbWJyZSI7czoyMToiSW5zdHJ1bWVudG9zIE11c2ljYWlzIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTE4MiI7czo0OiJzbHVnIjtzOjIxOiJpbnN0cnVtZW50b3MtbXVzaWNhaXMiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aToyMTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI0OCI7czo2OiJub21icmUiO3M6MTg6IkrDs2lhcyBlIFJlbMOzZ2lvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjM5MzciO3M6NDoic2x1ZyI7czoxODoiasOzaWFzLWUtcmVsw7NnaW9zIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNDkiO3M6Njoibm9tYnJlIjtzOjY6IkxpdnJvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjExOTYiO3M6NDoic2x1ZyI7czo2OiJsaXZyb3MiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aToyMzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI1MCI7czo2OiJub21icmUiO3M6MTU6Ik1haXMgQ2F0ZWdvcmlhcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjE5NTMiO3M6NDoic2x1ZyI7czoxNToibWFpcy1jYXRlZ29yaWFzIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MjQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNTEiO3M6Njoibm9tYnJlIjtzOjc6Ik3DunNpY2EiO3M6NDoiaWRtbCI7czo3OiJNTEIxMTY4IjtzOjQ6InNsdWciO3M6NzoibcO6c2ljYSI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjI1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjUyIjtzOjY6Im5vbWJyZSI7czoxNToiU2HDumRlIGUgQmVsZXphIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTI0NiI7czo0OiJzbHVnIjtzOjE1OiJzYcO6ZGUtZS1iZWxlemEiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aToyNjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI1MyI7czo2OiJub21icmUiO3M6OToiU2VydmnDp29zIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTU0MCI7czo0OiJzbHVnIjtzOjk6InNlcnZpw6dvcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE2OTU6IjxoMSBjbGFzcz0idGl0bGUiPk5lcmYgLSBMYW7Dp2Fkb3IgTmVyZiBNYXZlcmljayAtIEhhc2JybyAoIENvbSA2IERhcmRvcyApPC9oMT4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGNveSA0Njh4MTUgKCBhcnRpY3Vsb3MgKSAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiNTY4NjQxOTgyMSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCg0KPGRpdiBjbGFzcz0icG9zdF9ib3giIGFsaWduPSJqdXN0aWZ5Ij4NCjxkaXYgY2xhc3M9InBvc3RfdGl0bGUiPjxhIGhyZWY9Imh0dHA6Ly9icmFzaWwuY29tcHJhci1vbmxpbmUteWEuY29tL2FydGljdWxvcy9uZXJmLWxhbsOnYWRvci1uZXJmLW1hdmVyaWNrLWhhc2Jyby1jb20tNi1kYXJkb3MtLzQxMTE0Ij5OZXJmIC0gTGFuw6dhZG9yIE5lcmYgTWF2ZXJpY2sgLSBIYXNicm8gKCBDb20gNiBEYXJkb3MgKTwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMS5tbHN0YXRpYy5jb20vc19NTEJfdl9JX2ZfMjA5Mjc2MzYxXzI4ODMuanBnIiBhbHQ9Ik5lcmYgLSBMYW7Dp2Fkb3IgTmVyZiBNYXZlcmljayAtIEhhc2JybyAoIENvbSA2IERhcmRvcyApIiBjbGFzcz0idGVtcGxhdGVtb19waWMiIHRpdGxlPSJOZXJmIC0gTGFuw6dhZG9yIE5lcmYgTWF2ZXJpY2sgLSBIYXNicm8gKCBDb20gNiBEYXJkb3MgKSIgLz48L2E+DQo8aDM+Q29tIDYgRGFyZG9zIEluY2x1c29zLjwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5CUkwgJDY5LjAwPC9zdHJvbmc+PC9kaXY+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+PCEtLQ0KZ29vZ2xlX2FkX2NsaWVudCA9ICJjYS1wdWItNzYyOTc3MDEyODUzMjU4OSI7DQovKiBhbnVuY2lvIGJham8gdGl0dWxvICovDQpnb29nbGVfYWRfc2xvdCA9ICI5MTkwNzg5MzE1IjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KPGJyIC8+DQoNCjxhIGNsYXNzPSJidXlfbWwiIHJlbD0ibm9mb2xsb3ciIGhyZWY9Imh0dHA6Ly9wcm9kdXRvLm1lcmNhZG9saXZyZS5jb20uYnIvTUxCLTQzMDc0MzI2NS1uZXJmLWxhbmNhZG9yLW5lcmYtbWF2ZXJpY2staGFzYnJvLWNvbS02LWRhcmRvcy0tX0pNIiB0YXJnZXQ9Il9ibGFuayI+VmVyL0NvbXByYXI8L2E+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9InB1Ymxpc2hfZGF0ZSI+IENhdGVnb3ImaWFjdXRlO2E6IDxhIGhyZWY9Imh0dHA6Ly9icmFzaWwuY29tcHJhci1vbmxpbmUteWEuY29tL2NhdGVnb3JpYXMvYnJpbnF1ZWRvcy1lLWhvYmJpZXMiPkJyaW5xdWVkb3MgZSBIb2JiaWVzPC9hPjwvZGl2Pg0KPC9kaXY+DQoNCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo4OiJQcm9kdWN0cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Nerf - Lançador Nerf Maverick - Hasbro ( Com 6 Dardos ) en brasil - brasil.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Dardos,Inclusos,Nerf,ador,Maverick,Hasbro,),brasil" />
<meta name="description" content="Comprar en mercadolibre Nerf - Lançador Nerf Maverick - Hasbro ( Com 6 Dardos ) en brasil. comprar Nerf - Lançador Nerf Maverick - Hasbro ( Com 6 Dardos ) online en brasil. comprar online en brasil. comprar Nerf - Lançador Nerf Maverick - Hasbro ( Com 6 Dardos ) en brasil" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://brasil.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://brasil.comprar-online-ya.com/" />
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
    <a href="http://brasil.comprar-online-ya.com/" title="Inicio"><img src="http://brasil.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://brasil.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://brasil.comprar-online-ya.com/categorias/acessórios-para-veículos" target="_parent">Acessórios para Veículos</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/agro-indústria-e-comércio" target="_parent">Agro, Indústria e Comércio</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/animais" target="_parent">Animais</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/antiguidades" target="_parent">Antiguidades</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/arte-e-artesanato" target="_parent">Arte e Artesanato</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/bebês" target="_parent">Bebês</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/brinquedos-e-hobbies" target="_parent">Brinquedos e Hobbies</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/calçados-roupas-e-bolsas" target="_parent">Calçados, Roupas e Bolsas</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/carros-motos-e-outros" target="_parent">Carros, Motos e Outros</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/casa-móveis-e-decoração" target="_parent">Casa, Móveis e Decoração</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/celulares-e-telefones" target="_parent">Celulares e Telefones</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/coleções-e-comics" target="_parent">Coleções e Comics</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/câmeras-e-acessórios" target="_parent">Câmeras e Acessórios</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/eletrodomésticos" target="_parent">Eletrodomésticos</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/eletrônicos-" target="_parent">Eletrônicos, Áudio e Vídeo</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/esportes-e-fitness" target="_parent">Esportes e Fitness</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/filmes-e-seriados" target="_parent">Filmes e Seriados</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/games" target="_parent">Games</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/imóveis" target="_parent">Imóveis</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/informática" target="_parent">Informática</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/instrumentos-musicais" target="_parent">Instrumentos Musicais</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/jóias-e-relógios" target="_parent">Jóias e Relógios</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/livros" target="_parent">Livros</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/mais-categorias" target="_parent">Mais Categorias</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/música" target="_parent">Música</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/saúde-e-beleza" target="_parent">Saúde e Beleza</a></li>
                                    <li><a href="http://brasil.comprar-online-ya.com/categorias/serviços" target="_parent">Serviços</a></li>
                                                    
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
        <h1 class="title">Nerf - Lançador Nerf Maverick - Hasbro ( Com 6 Dardos )</h1>
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
<div class="post_title"><a href="http://brasil.comprar-online-ya.com/articulos/nerf-lançador-nerf-maverick-hasbro-com-6-dardos-/41114">Nerf - Lançador Nerf Maverick - Hasbro ( Com 6 Dardos )</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img1.mlstatic.com/s_MLB_v_I_f_209276361_2883.jpg" alt="Nerf - Lançador Nerf Maverick - Hasbro ( Com 6 Dardos )" class="templatemo_pic" title="Nerf - Lançador Nerf Maverick - Hasbro ( Com 6 Dardos )" /></a>
<h3>Com 6 Dardos Inclusos.</h3>

<div style="width: 250px;">Precio: <strong>BRL $69.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://produto.mercadolivre.com.br/MLB-430743265-nerf-lancador-nerf-maverick-hasbro-com-6-dardos--_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://brasil.comprar-online-ya.com/categorias/brinquedos-e-hobbies">Brinquedos e Hobbies</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 brasil.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>