<!--cachetime:1345020349--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:51:"mecanismo-abertura-de-porta-de-garagem-com-comando-";i:1;s:5:"30348";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:67:"articulos/mecanismo-abertura-de-porta-de-garagem-com-comando-/30348";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:68:"/articulos/mecanismo-abertura-de-porta-de-garagem-com-comando-/30348";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNjMiO3M6Njoibm9tYnJlIjtzOjE3OiJPdXRyYXMgY2F0ZWdvcmlhcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDE5NTMiO3M6NDoic2x1ZyI7czoxNzoib3V0cmFzLWNhdGVnb3JpYXMiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjMwMzQ4IjtzOjQ6ImlkbWwiO3M6MTA6Ik1QVDEwNjIxODkiO3M6NToidGl0bGUiO3M6NTE6Ik1lY2FuaXNtbyBBYmVydHVyYSBEZSBQb3J0YSBEZSBHYXJhZ2VtIENvbSBDb21hbmRvLiI7czo4OiJzdWJ0aXRsZSI7czowOiIiO3M6NToicHJpY2UiO3M6MzoiMTUwIjtzOjk6InBlcm1hbGluayI7czo5NzoiaHR0cDovL2FudW5jaW8ubWVyY2Fkb2xpdnJlLnB0L01QVC0xMDYyMTg5LW1lY2FuaXNtby1hYmVydHVyYS1kZS1wb3J0YS1kZS1nYXJhZ2VtLWNvbS1jb21hbmRvLV9KTSI7czo5OiJ0aHVtYm5haWwiO3M6NTg6Imh0dHA6Ly9pbWcxLm1sc3RhdGljLmNvbS9zX01QVF92X0lfZl8yODgwNDA4MTI2XzA3MjAxMi5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IkVVUiI7czoxMDoic3RhdGVfbmFtZSI7czo5OiJWaWxhIFJlYWwiO3M6OToiY2l0eV9uYW1lIjtzOjk6InZpbGEgcmVhbCI7czoxMToiY2F0ZWdvcnlfaWQiO3M6MzoiMjYzIjtzOjU6ImFkZGVkIjtzOjE5OiIyMDEyLTA3LTA4IDEyOjExOjAyIjtzOjQ6InNsdWciO3M6NTE6Im1lY2FuaXNtby1hYmVydHVyYS1kZS1wb3J0YS1kZS1nYXJhZ2VtLWNvbS1jb21hbmRvLSI7czo1OiJzaXRpbyI7czo4OiJwb3J0dWdhbCI7czo2OiJjdXN0b20iO3M6MToiMCI7fX1zOjE1OiJtZXRhZGVzY3JpcHRpb24iO3M6MjY4OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBNZWNhbmlzbW8gQWJlcnR1cmEgRGUgUG9ydGEgRGUgR2FyYWdlbSBDb20gQ29tYW5kby4gZW4gcG9ydHVnYWwuIGNvbXByYXIgTWVjYW5pc21vIEFiZXJ0dXJhIERlIFBvcnRhIERlIEdhcmFnZW0gQ29tIENvbWFuZG8uIG9ubGluZSBlbiBwb3J0dWdhbC4gY29tcHJhciBvbmxpbmUgZW4gcG9ydHVnYWwuIGNvbXByYXIgTWVjYW5pc21vIEFiZXJ0dXJhIERlIFBvcnRhIERlIEdhcmFnZW0gQ29tIENvbWFuZG8uIGVuIHBvcnR1Z2FsIjtzOjEyOiJtZXRha2V5d29yZHMiO3M6OTA6Im1lcmNhZG9saWJyZSxjb21wcmFyLG9ubGluZSxtZXJjYWRvcGFnbyxNZWNhbmlzbW8sQWJlcnR1cmEsUG9ydGEsR2FyYWdlbSxDb21hbmRvLixwb3J0dWdhbCI7czoxMDoidGl0bGVfcGFnZSI7czo4NzoiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgTWVjYW5pc21vIEFiZXJ0dXJhIERlIFBvcnRhIERlIEdhcmFnZW0gQ29tIENvbWFuZG8uIGVuIHBvcnR1Z2FsIjtzOjEwOiJjYXRlZ29yaWFzIjthOjIwOntpOjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjQ4IjtzOjY6Im5vbWJyZSI7czoyNjoiQWNlc3PDs3Jpb3MgcGFyYSBWZcOtY3Vsb3MiO3M6NDoiaWRtbCI7czo3OiJNUFQxNzQ3IjtzOjQ6InNsdWciO3M6MjY6ImFjZXNzw7NyaW9zLXBhcmEtdmXDrWN1bG9zIjtzOjQ6InNpdGUiO3M6ODoicG9ydHVnYWwiO319aToxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI0OSI7czo2OiJub21icmUiO3M6MTk6IkFydGUgZSBBbnRpZ3VpZGFkZXMiO3M6NDoiaWRtbCI7czo3OiJNUFQxMzY3IjtzOjQ6InNsdWciO3M6MTk6ImFydGUtZS1hbnRpZ3VpZGFkZXMiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjI7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjUwIjtzOjY6Im5vbWJyZSI7czoyMjoiQ2Fycm9zLCBNb3RvcyBlIE91dHJvcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDE3NDMiO3M6NDoic2x1ZyI7czoyMToiY2Fycm9zLW1vdG9zLWUtb3V0cm9zIjtzOjQ6InNpdGUiO3M6ODoicG9ydHVnYWwiO319aTozO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI1MSI7czo2OiJub21icmUiO3M6MTA6IkNvbGXDp8O1ZXMiO3M6NDoiaWRtbCI7czo3OiJNUFQxNzk4IjtzOjQ6InNsdWciO3M6MTA6ImNvbGXDp8O1ZXMiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjUyIjtzOjY6Im5vbWJyZSI7czoyNDoiQ8OibWFyYXMgRGlnaXRhaXMgZSBGb3RvIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTAzOSI7czo0OiJzbHVnIjtzOjI0OiJjw6JtYXJhcy1kaWdpdGFpcy1lLWZvdG8iO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjUzIjtzOjY6Im5vbWJyZSI7czoxODoiRGVzcG9ydG8gZSBGaXRuZXNzIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTI3NiI7czo0OiJzbHVnIjtzOjE4OiJkZXNwb3J0by1lLWZpdG5lc3MiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjU0IjtzOjY6Im5vbWJyZSI7czoxODoiRWxlY3Ryb2RvbcOpc3RpY29zIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTU3NCI7czo0OiJzbHVnIjtzOjE4OiJlbGVjdHJvZG9tw6lzdGljb3MiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjU1IjtzOjY6Im5vbWJyZSI7czoxMjoiRWxlY3Ryw7NuaWNhIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTAwMCI7czo0OiJzbHVnIjtzOjEyOiJlbGVjdHLDs25pY2EiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjg7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjU2IjtzOjY6Im5vbWJyZSI7czo4OiJJbcOzdmVpcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDE0NTkiO3M6NDoic2x1ZyI7czo4OiJpbcOzdmVpcyI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6OTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNTciO3M6Njoibm9tYnJlIjtzOjEyOiJJbmZvcm3DoXRpY2EiO3M6NDoiaWRtbCI7czo3OiJNUFQxNjQ4IjtzOjQ6InNsdWciO3M6MTI6ImluZm9ybcOhdGljYSI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6MTA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjU4IjtzOjY6Im5vbWJyZSI7czoyMToiSW5zdHJ1bWVudG9zIE11c2ljYWlzIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTE4MiI7czo0OiJzbHVnIjtzOjIxOiJpbnN0cnVtZW50b3MtbXVzaWNhaXMiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjExO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI1OSI7czo2OiJub21icmUiO3M6MTg6IkpvZ29zIGUgQnJpbnF1ZWRvcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDExMzIiO3M6NDoic2x1ZyI7czoxODoiam9nb3MtZS1icmlucXVlZG9zIjtzOjQ6InNpdGUiO3M6ODoicG9ydHVnYWwiO319aToxMjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNjAiO3M6Njoibm9tYnJlIjtzOjE4OiJKw7NpYXMgZSBSZWzDs2dpb3MiO3M6NDoiaWRtbCI7czo3OiJNUFQzOTM3IjtzOjQ6InNsdWciO3M6MTg6ImrDs2lhcy1lLXJlbMOzZ2lvcyI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6MTM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjYxIjtzOjY6Im5vbWJyZSI7czoyNToiTGl2cm9zLCBSZXZpc3RhcyBlIENvbWljcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDMwMjUiO3M6NDoic2x1ZyI7czoyNDoibGl2cm9zLXJldmlzdGFzLWUtY29taWNzIjtzOjQ6InNpdGUiO3M6ODoicG9ydHVnYWwiO319aToxNDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNjIiO3M6Njoibm9tYnJlIjtzOjE2OiJNw7pzaWNhIGUgRmlsbWVzIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTE2OCI7czo0OiJzbHVnIjtzOjE2OiJtw7pzaWNhLWUtZmlsbWVzIjtzOjQ6InNpdGUiO3M6ODoicG9ydHVnYWwiO319aToxNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNjMiO3M6Njoibm9tYnJlIjtzOjE3OiJPdXRyYXMgY2F0ZWdvcmlhcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDE5NTMiO3M6NDoic2x1ZyI7czoxNzoib3V0cmFzLWNhdGVnb3JpYXMiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjE2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI2NCI7czo2OiJub21icmUiO3M6MjA6IlJvdXBhcyBlIEFjZXNzw7NyaW9zIjtzOjQ6ImlkbWwiO3M6NzoiTVBUMTQzMCI7czo0OiJzbHVnIjtzOjIwOiJyb3VwYXMtZS1hY2Vzc8OzcmlvcyI7czo0OiJzaXRlIjtzOjg6InBvcnR1Z2FsIjt9fWk6MTc7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MzoiMjY1IjtzOjY6Im5vbWJyZSI7czo5OiJTZXJ2acOnb3MiO3M6NDoiaWRtbCI7czo3OiJNUFQxNTQwIjtzOjQ6InNsdWciO3M6OToic2VydmnDp29zIjtzOjQ6InNpdGUiO3M6ODoicG9ydHVnYWwiO319aToxODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czozOiIyNjYiO3M6Njoibm9tYnJlIjtzOjIzOiJUZWxlbcOzdmVpcyBlIFRlbGVmb25lcyI7czo0OiJpZG1sIjtzOjc6Ik1QVDEwNTEiO3M6NDoic2x1ZyI7czoyMzoidGVsZW3Ds3ZlaXMtZS10ZWxlZm9uZXMiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX1pOjE5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjM6IjI2NyI7czo2OiJub21icmUiO3M6MTA6IlZpZGVvam9nb3MiO3M6NDoiaWRtbCI7czo3OiJNUFQxMTQ0IjtzOjQ6InNsdWciO3M6MTA6InZpZGVvam9nb3MiO3M6NDoic2l0ZSI7czo4OiJwb3J0dWdhbCI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjE2NTM6IjxoMSBjbGFzcz0idGl0bGUiPk1lY2FuaXNtbyBBYmVydHVyYSBEZSBQb3J0YSBEZSBHYXJhZ2VtIENvbSBDb21hbmRvLjwvaDE+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+PCEtLQ0KZ29vZ2xlX2FkX2NsaWVudCA9ICJjYS1wdWItNzYyOTc3MDEyODUzMjU4OSI7DQovKiBjb3kgNDY4eDE1ICggYXJ0aWN1bG9zICkgKi8NCmdvb2dsZV9hZF9zbG90ID0gIjU2ODY0MTk4MjEiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQoNCjxkaXYgY2xhc3M9InBvc3RfYm94IiBhbGlnbj0ianVzdGlmeSI+DQo8ZGl2IGNsYXNzPSJwb3N0X3RpdGxlIj48YSBocmVmPSJodHRwOi8vcG9ydHVnYWwuY29tcHJhci1vbmxpbmUteWEuY29tL2FydGljdWxvcy9tZWNhbmlzbW8tYWJlcnR1cmEtZGUtcG9ydGEtZGUtZ2FyYWdlbS1jb20tY29tYW5kby0vMzAzNDgiPk1lY2FuaXNtbyBBYmVydHVyYSBEZSBQb3J0YSBEZSBHYXJhZ2VtIENvbSBDb21hbmRvLjwvYT48L2Rpdj4NCjxkaXYgY2xhc3M9InBvc3RfdGV4dF9hcmVhIj4NCjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJodHRwOi8vaW1nMS5tbHN0YXRpYy5jb20vc19NUFRfdl9JX2ZfMjg4MDQwODEyNl8wNzIwMTIuanBnIiBhbHQ9Ik1lY2FuaXNtbyBBYmVydHVyYSBEZSBQb3J0YSBEZSBHYXJhZ2VtIENvbSBDb21hbmRvLiIgY2xhc3M9InRlbXBsYXRlbW9fcGljIiB0aXRsZT0iTWVjYW5pc21vIEFiZXJ0dXJhIERlIFBvcnRhIERlIEdhcmFnZW0gQ29tIENvbWFuZG8uIiAvPjwvYT4NCjxoMz48L2gzPg0KDQo8ZGl2IHN0eWxlPSJ3aWR0aDogMjUwcHg7Ij5QcmVjaW86IDxzdHJvbmc+RVVSICQxNTAuMDA8L3N0cm9uZz48L2Rpdj4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij48IS0tDQpnb29nbGVfYWRfY2xpZW50ID0gImNhLXB1Yi03NjI5NzcwMTI4NTMyNTg5IjsNCi8qIGFudW5jaW8gYmFqbyB0aXR1bG8gKi8NCmdvb2dsZV9hZF9zbG90ID0gIjkxOTA3ODkzMTUiOw0KZ29vZ2xlX2FkX3dpZHRoID0gNDY4Ow0KZ29vZ2xlX2FkX2hlaWdodCA9IDE1Ow0KLy8tLT4NCjwvc2NyaXB0Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiDQpzcmM9Imh0dHA6Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvc2hvd19hZHMuanMiPg0KPC9zY3JpcHQ+DQo8YnIgLz4NCg0KPGEgY2xhc3M9ImJ1eV9tbCIgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL2FudW5jaW8ubWVyY2Fkb2xpdnJlLnB0L01QVC0xMDYyMTg5LW1lY2FuaXNtby1hYmVydHVyYS1kZS1wb3J0YS1kZS1nYXJhZ2VtLWNvbS1jb21hbmRvLV9KTSIgdGFyZ2V0PSJfYmxhbmsiPlZlci9Db21wcmFyPC9hPg0KPC9kaXY+DQo8ZGl2IGNsYXNzPSJwdWJsaXNoX2RhdGUiPiBDYXRlZ29yJmlhY3V0ZTthOiA8YSBocmVmPSJodHRwOi8vcG9ydHVnYWwuY29tcHJhci1vbmxpbmUteWEuY29tL2NhdGVnb3JpYXMvb3V0cmFzLWNhdGVnb3JpYXMiPk91dHJhcyBjYXRlZ29yaWFzPC9hPjwvZGl2Pg0KPC9kaXY+DQoNCiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo4OiJQcm9kdWN0cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Mecanismo Abertura De Porta De Garagem Com Comando. en portugal - portugal.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Mecanismo,Abertura,Porta,Garagem,Comando.,portugal" />
<meta name="description" content="Comprar en mercadolibre Mecanismo Abertura De Porta De Garagem Com Comando. en portugal. comprar Mecanismo Abertura De Porta De Garagem Com Comando. online en portugal. comprar online en portugal. comprar Mecanismo Abertura De Porta De Garagem Com Comando. en portugal" />
<meta name="msvalidate.01" content="700C0112467381B2C708E82466A90888" />
<link href="http://portugal.comprar-online-ya.com/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<base href="http://portugal.comprar-online-ya.com/" />
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
    <a href="http://portugal.comprar-online-ya.com/" title="Inicio"><img src="http://portugal.comprar-online-ya.com/images/logo-comprar-online-ya.png" align="Logo comprar-online-ya.com" border="0" title="Logo" /></a>
    </div>
</div>
  

  <div id="templatemo_left_column">
           
            <ul class="templatemo_menu">
            <li><a href="http://portugal.comprar-online-ya.com/">Inicio</a></li>
                                                <li><a href="http://portugal.comprar-online-ya.com/categorias/acessórios-para-veículos" target="_parent">Acessórios para Veículos</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/arte-e-antiguidades" target="_parent">Arte e Antiguidades</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/carros-motos-e-outros" target="_parent">Carros, Motos e Outros</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/coleções" target="_parent">Coleções</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/câmaras-digitais-e-foto" target="_parent">Câmaras Digitais e Foto</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/desporto-e-fitness" target="_parent">Desporto e Fitness</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/electrodomésticos" target="_parent">Electrodomésticos</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/electrónica" target="_parent">Electrónica</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/imóveis" target="_parent">Imóveis</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/informática" target="_parent">Informática</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/instrumentos-musicais" target="_parent">Instrumentos Musicais</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/jogos-e-brinquedos" target="_parent">Jogos e Brinquedos</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/jóias-e-relógios" target="_parent">Jóias e Relógios</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/livros-revistas-e-comics" target="_parent">Livros, Revistas e Comics</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/música-e-filmes" target="_parent">Música e Filmes</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/outras-categorias" target="_parent">Outras categorias</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/roupas-e-acessórios" target="_parent">Roupas e Acessórios</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/serviços" target="_parent">Serviços</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/telemóveis-e-telefones" target="_parent">Telemóveis e Telefones</a></li>
                                    <li><a href="http://portugal.comprar-online-ya.com/categorias/videojogos" target="_parent">Videojogos</a></li>
                                                    
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
        <h1 class="title">Mecanismo Abertura De Porta De Garagem Com Comando.</h1>
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
<div class="post_title"><a href="http://portugal.comprar-online-ya.com/articulos/mecanismo-abertura-de-porta-de-garagem-com-comando-/30348">Mecanismo Abertura De Porta De Garagem Com Comando.</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img1.mlstatic.com/s_MPT_v_I_f_2880408126_072012.jpg" alt="Mecanismo Abertura De Porta De Garagem Com Comando." class="templatemo_pic" title="Mecanismo Abertura De Porta De Garagem Com Comando." /></a>
<h3></h3>

<div style="width: 250px;">Precio: <strong>EUR $150.00</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://anuncio.mercadolivre.pt/MPT-1062189-mecanismo-abertura-de-porta-de-garagem-com-comando-_JM" target="_blank">Ver/Comprar</a>
</div>
<div class="publish_date"> Categor&iacute;a: <a href="http://portugal.comprar-online-ya.com/categorias/outras-categorias">Outras categorias</a></div>
</div>

      </div>


	<div id="templatemo_footer">
    Copyright © 2012 portugal.comprar-online-ya.com - Todos los derechos reservados
    </div>
        
</div>
<div class="templatemo_spacer"></div>
</body>
</html>