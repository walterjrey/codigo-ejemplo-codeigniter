<!--cachetime:1345015626--><?php
			App::uses('ProductsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:8:"products";s:6:"action";s:4:"item";s:5:"named";a:0:{}s:4:"pass";a:2:{i:0;s:51:"lego-star-wars-9494-anakin-s-jedi-interceptor-novo-";i:1;s:5:"44511";}s:6:"models";a:2:{s:7:"Product";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Product";}s:8:"Category";a:2:{s:6:"plugin";N;s:9:"className";s:8:"Category";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:67:"articulos/lego-star-wars-9494-anakin-s-jedi-interceptor-novo-/44511";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:68:"/articulos/lego-star-wars-9494-anakin-s-jedi-interceptor-novo-/44511";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ProductsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo5OntzOjg6IkNhdGVnb3J5IjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIzMyI7czo2OiJub21icmUiO3M6MjA6IkJyaW5xdWVkb3MgZSBIb2JiaWVzIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTEzMiI7czo0OiJzbHVnIjtzOjIwOiJicmlucXVlZG9zLWUtaG9iYmllcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1zOjc6IlByb2R1Y3QiO2E6MTp7czo3OiJQcm9kdWN0IjthOjE1OntzOjI6ImlkIjtzOjU6IjQ0NTExIjtzOjQ6ImlkbWwiO3M6MTI6Ik1MQjQzMDgyNjI2MyI7czo1OiJ0aXRsZSI7czo1NDoiTGVnbyBTdGFyIFdhcnMgOTQ5NCBBbmFraW4ncyBKZWRpIEludGVyY2VwdG9yLCBOb3ZvISEhIjtzOjg6InN1YnRpdGxlIjtzOjU3OiJQcm9udGEgRW50cmVnYSwgTm92bywgRW52aW8gSW1lZGlhdG8gLSBUaGVfYnJpY2tzX2ltcG9ydHMiO3M6NToicHJpY2UiO3M6NjoiMTk5Ljk5IjtzOjk6InBlcm1hbGluayI7czoxMDI6Imh0dHA6Ly9wcm9kdXRvLm1lcmNhZG9saXZyZS5jb20uYnIvTUxCLTQzMDgyNjI2My1sZWdvLXN0YXItd2Fycy05NDk0LWFuYWtpbnMtamVkaS1pbnRlcmNlcHRvci1ub3ZvLV9KTSI7czo5OiJ0aHVtYm5haWwiO3M6NTg6Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01MQl92X0lfZl8yNjg2NjMyMjk4XzA1MjAxMi5qcGciO3M6MTE6ImN1cnJlbmN5X2lkIjtzOjM6IkJSTCI7czoxMDoic3RhdGVfbmFtZSI7czo1OiJCYWhpYSI7czo5OiJjaXR5X25hbWUiO3M6ODoiU2FsdmFkb3IiO3M6MTE6ImNhdGVnb3J5X2lkIjtzOjI6IjMzIjtzOjU6ImFkZGVkIjtzOjE5OiIyMDEyLTA4LTAyIDA3OjQ4OjU1IjtzOjQ6InNsdWciO3M6NTE6ImxlZ28tc3Rhci13YXJzLTk0OTQtYW5ha2luLXMtamVkaS1pbnRlcmNlcHRvci1ub3ZvLSI7czo1OiJzaXRpbyI7czo2OiJicmFzaWwiO3M6NjoiY3VzdG9tIjtzOjE6IjAiO319czoxNToibWV0YWRlc2NyaXB0aW9uIjtzOjI2OToiQ29tcHJhciBlbiBtZXJjYWRvbGlicmUgTGVnbyBTdGFyIFdhcnMgOTQ5NCBBbmFraW4ncyBKZWRpIEludGVyY2VwdG9yLCBOb3ZvISEhIGVuIGJyYXNpbC4gY29tcHJhciBMZWdvIFN0YXIgV2FycyA5NDk0IEFuYWtpbidzIEplZGkgSW50ZXJjZXB0b3IsIE5vdm8hISEgb25saW5lIGVuIGJyYXNpbC4gY29tcHJhciBvbmxpbmUgZW4gYnJhc2lsLiBjb21wcmFyIExlZ28gU3RhciBXYXJzIDk0OTQgQW5ha2luJ3MgSmVkaSBJbnRlcmNlcHRvciwgTm92byEhISBlbiBicmFzaWwiO3M6MTI6Im1ldGFrZXl3b3JkcyI7czoxNTI6Im1lcmNhZG9saWJyZSxjb21wcmFyLG9ubGluZSxtZXJjYWRvcGFnbyxQcm9udGEsRW50cmVnYSxOb3ZvLEVudmlvLEltZWRpYXRvLFRoZV9icmlja3NfaW1wb3J0cyxMZWdvLFN0YXIsV2Fycyw5NDk0LEFuYWtpbixKZWRpLEludGVyY2VwdG9yLE5vdm8hISEsYnJhc2lsIjtzOjEwOiJ0aXRsZV9wYWdlIjtzOjg4OiJDb21wcmFyIGVuIG1lcmNhZG9saWJyZSBMZWdvIFN0YXIgV2FycyA5NDk0IEFuYWtpbidzIEplZGkgSW50ZXJjZXB0b3IsIE5vdm8hISEgZW4gYnJhc2lsIjtzOjEwOiJjYXRlZ29yaWFzIjthOjI3OntpOjA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMjciO3M6Njoibm9tYnJlIjtzOjI2OiJBY2Vzc8OzcmlvcyBwYXJhIFZlw61jdWxvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjU2NzIiO3M6NDoic2x1ZyI7czoyNjoiYWNlc3PDs3Jpb3MtcGFyYS12ZcOtY3Vsb3MiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aToxO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjI4IjtzOjY6Im5vbWJyZSI7czoyODoiQWdybywgSW5kw7pzdHJpYSBlIENvbcOpcmNpbyI7czo0OiJpZG1sIjtzOjc6Ik1MQjE0OTkiO3M6NDoic2x1ZyI7czoyNzoiYWdyby1pbmTDunN0cmlhLWUtY29tw6lyY2lvIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIyOSI7czo2OiJub21icmUiO3M6NzoiQW5pbWFpcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjEwNzEiO3M6NDoic2x1ZyI7czo3OiJhbmltYWlzIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIzMCI7czo2OiJub21icmUiO3M6MTI6IkFudGlndWlkYWRlcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjEzNjciO3M6NDoic2x1ZyI7czoxMjoiYW50aWd1aWRhZGVzIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6NDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIzMSI7czo2OiJub21icmUiO3M6MTc6IkFydGUgZSBBcnRlc2FuYXRvIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTM2OCI7czo0OiJzbHVnIjtzOjE3OiJhcnRlLWUtYXJ0ZXNhbmF0byI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjU7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMzIiO3M6Njoibm9tYnJlIjtzOjY6IkJlYsOqcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjEzODQiO3M6NDoic2x1ZyI7czo2OiJiZWLDqnMiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aTo2O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjMzIjtzOjY6Im5vbWJyZSI7czoyMDoiQnJpbnF1ZWRvcyBlIEhvYmJpZXMiO3M6NDoiaWRtbCI7czo3OiJNTEIxMTMyIjtzOjQ6InNsdWciO3M6MjA6ImJyaW5xdWVkb3MtZS1ob2JiaWVzIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6NzthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIzNCI7czo2OiJub21icmUiO3M6MjY6IkNhbMOnYWRvcywgUm91cGFzIGUgQm9sc2FzIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTQzMCI7czo0OiJzbHVnIjtzOjI1OiJjYWzDp2Fkb3Mtcm91cGFzLWUtYm9sc2FzIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6ODthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiIzNSI7czo2OiJub21icmUiO3M6MjI6IkNhcnJvcywgTW90b3MgZSBPdXRyb3MiO3M6NDoiaWRtbCI7czo3OiJNTEIxNzQzIjtzOjQ6InNsdWciO3M6MjE6ImNhcnJvcy1tb3Rvcy1lLW91dHJvcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjk7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMzYiO3M6Njoibm9tYnJlIjtzOjI3OiJDYXNhLCBNw7N2ZWlzIGUgRGVjb3Jhw6fDo28iO3M6NDoiaWRtbCI7czo3OiJNTEIxNTc0IjtzOjQ6InNsdWciO3M6MjY6ImNhc2EtbcOzdmVpcy1lLWRlY29yYcOnw6NvIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MTA7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiMzciO3M6Njoibm9tYnJlIjtzOjIxOiJDZWx1bGFyZXMgZSBUZWxlZm9uZXMiO3M6NDoiaWRtbCI7czo3OiJNTEIxMDUxIjtzOjQ6InNsdWciO3M6MjE6ImNlbHVsYXJlcy1lLXRlbGVmb25lcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjExO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjM4IjtzOjY6Im5vbWJyZSI7czoxOToiQ29sZcOnw7VlcyBlIENvbWljcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjE3OTgiO3M6NDoic2x1ZyI7czoxOToiY29sZcOnw7Vlcy1lLWNvbWljcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjEyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjM5IjtzOjY6Im5vbWJyZSI7czoyMjoiQ8OibWVyYXMgZSBBY2Vzc8OzcmlvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjEwMzkiO3M6NDoic2x1ZyI7czoyMjoiY8OibWVyYXMtZS1hY2Vzc8OzcmlvcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjEzO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjQwIjtzOjY6Im5vbWJyZSI7czoxNzoiRWxldHJvZG9tw6lzdGljb3MiO3M6NDoiaWRtbCI7czo3OiJNTEI1NzI2IjtzOjQ6InNsdWciO3M6MTc6ImVsZXRyb2RvbcOpc3RpY29zIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MTQ7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNDEiO3M6Njoibm9tYnJlIjtzOjI5OiJFbGV0csO0bmljb3MsIMOBdWRpbyBlIFbDrWRlbyI7czo0OiJpZG1sIjtzOjc6Ik1MQjEwMDAiO3M6NDoic2x1ZyI7czoxMzoiZWxldHLDtG5pY29zLSI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjE1O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjQyIjtzOjY6Im5vbWJyZSI7czoxODoiRXNwb3J0ZXMgZSBGaXRuZXNzIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTI3NiI7czo0OiJzbHVnIjtzOjE4OiJlc3BvcnRlcy1lLWZpdG5lc3MiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aToxNjthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI0MyI7czo2OiJub21icmUiO3M6MTc6IkZpbG1lcyBlIFNlcmlhZG9zIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMzI4MSI7czo0OiJzbHVnIjtzOjE3OiJmaWxtZXMtZS1zZXJpYWRvcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjE3O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjQ0IjtzOjY6Im5vbWJyZSI7czo1OiJHYW1lcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjExNDQiO3M6NDoic2x1ZyI7czo1OiJnYW1lcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjE4O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjQ1IjtzOjY6Im5vbWJyZSI7czo4OiJJbcOzdmVpcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjE0NTkiO3M6NDoic2x1ZyI7czo4OiJpbcOzdmVpcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjE5O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjQ2IjtzOjY6Im5vbWJyZSI7czoxMjoiSW5mb3Jtw6F0aWNhIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTY0OCI7czo0OiJzbHVnIjtzOjEyOiJpbmZvcm3DoXRpY2EiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aToyMDthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI0NyI7czo2OiJub21icmUiO3M6MjE6Ikluc3RydW1lbnRvcyBNdXNpY2FpcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjExODIiO3M6NDoic2x1ZyI7czoyMToiaW5zdHJ1bWVudG9zLW11c2ljYWlzIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MjE7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNDgiO3M6Njoibm9tYnJlIjtzOjE4OiJKw7NpYXMgZSBSZWzDs2dpb3MiO3M6NDoiaWRtbCI7czo3OiJNTEIzOTM3IjtzOjQ6InNsdWciO3M6MTg6ImrDs2lhcy1lLXJlbMOzZ2lvcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjIyO2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjQ5IjtzOjY6Im5vbWJyZSI7czo2OiJMaXZyb3MiO3M6NDoiaWRtbCI7czo3OiJNTEIxMTk2IjtzOjQ6InNsdWciO3M6NjoibGl2cm9zIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MjM7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNTAiO3M6Njoibm9tYnJlIjtzOjE1OiJNYWlzIENhdGVnb3JpYXMiO3M6NDoiaWRtbCI7czo3OiJNTEIxOTUzIjtzOjQ6InNsdWciO3M6MTU6Im1haXMtY2F0ZWdvcmlhcyI7czo0OiJzaXRlIjtzOjY6ImJyYXNpbCI7fX1pOjI0O2E6MTp7czo4OiJDYXRlZ29yeSI7YTo1OntzOjI6ImlkIjtzOjI6IjUxIjtzOjY6Im5vbWJyZSI7czo3OiJNw7pzaWNhIjtzOjQ6ImlkbWwiO3M6NzoiTUxCMTE2OCI7czo0OiJzbHVnIjtzOjc6Im3DunNpY2EiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319aToyNTthOjE6e3M6ODoiQ2F0ZWdvcnkiO2E6NTp7czoyOiJpZCI7czoyOiI1MiI7czo2OiJub21icmUiO3M6MTU6IlNhw7pkZSBlIEJlbGV6YSI7czo0OiJpZG1sIjtzOjc6Ik1MQjEyNDYiO3M6NDoic2x1ZyI7czoxNToic2HDumRlLWUtYmVsZXphIjtzOjQ6InNpdGUiO3M6NjoiYnJhc2lsIjt9fWk6MjY7YToxOntzOjg6IkNhdGVnb3J5IjthOjU6e3M6MjoiaWQiO3M6MjoiNTMiO3M6Njoibm9tYnJlIjtzOjk6IlNlcnZpw6dvcyI7czo0OiJpZG1sIjtzOjc6Ik1MQjE1NDAiO3M6NDoic2x1ZyI7czo5OiJzZXJ2acOnb3MiO3M6NDoic2l0ZSI7czo2OiJicmFzaWwiO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czoxNzI5OiI8aDEgY2xhc3M9InRpdGxlIj5MZWdvIFN0YXIgV2FycyA5NDk0IEFuYWtpbidzIEplZGkgSW50ZXJjZXB0b3IsIE5vdm8hISE8L2gxPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogY295IDQ2OHgxNSAoIGFydGljdWxvcyApICovDQpnb29nbGVfYWRfc2xvdCA9ICI1Njg2NDE5ODIxIjsNCmdvb2dsZV9hZF93aWR0aCA9IDQ2ODsNCmdvb2dsZV9hZF9oZWlnaHQgPSAxNTsNCi8vLS0+DQo8L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ig0Kc3JjPSJodHRwOi8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL3Nob3dfYWRzLmpzIj4NCjwvc2NyaXB0Pg0KDQo8ZGl2IGNsYXNzPSJwb3N0X2JveCIgYWxpZ249Imp1c3RpZnkiPg0KPGRpdiBjbGFzcz0icG9zdF90aXRsZSI+PGEgaHJlZj0iaHR0cDovL2JyYXNpbC5jb21wcmFyLW9ubGluZS15YS5jb20vYXJ0aWN1bG9zL2xlZ28tc3Rhci13YXJzLTk0OTQtYW5ha2luLXMtamVkaS1pbnRlcmNlcHRvci1ub3ZvLS80NDUxMSI+TGVnbyBTdGFyIFdhcnMgOTQ5NCBBbmFraW4ncyBKZWRpIEludGVyY2VwdG9yLCBOb3ZvISEhPC9hPjwvZGl2Pg0KPGRpdiBjbGFzcz0icG9zdF90ZXh0X2FyZWEiPg0KPGEgaHJlZj0iIyI+PGltZyBzcmM9Imh0dHA6Ly9pbWcyLm1sc3RhdGljLmNvbS9zX01MQl92X0lfZl8yNjg2NjMyMjk4XzA1MjAxMi5qcGciIGFsdD0iTGVnbyBTdGFyIFdhcnMgOTQ5NCBBbmFraW4ncyBKZWRpIEludGVyY2VwdG9yLCBOb3ZvISEhIiBjbGFzcz0idGVtcGxhdGVtb19waWMiIHRpdGxlPSJMZWdvIFN0YXIgV2FycyA5NDk0IEFuYWtpbidzIEplZGkgSW50ZXJjZXB0b3IsIE5vdm8hISEiIC8+PC9hPg0KPGgzPlByb250YSBFbnRyZWdhLCBOb3ZvLCBFbnZpbyBJbWVkaWF0byAtIFRoZV9icmlja3NfaW1wb3J0czwvaDM+DQoNCjxkaXYgc3R5bGU9IndpZHRoOiAyNTBweDsiPlByZWNpbzogPHN0cm9uZz5CUkwgJDE5OS45OTwvc3Ryb25nPjwvZGl2Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPjwhLS0NCmdvb2dsZV9hZF9jbGllbnQgPSAiY2EtcHViLTc2Mjk3NzAxMjg1MzI1ODkiOw0KLyogYW51bmNpbyBiYWpvIHRpdHVsbyAqLw0KZ29vZ2xlX2FkX3Nsb3QgPSAiOTE5MDc4OTMxNSI7DQpnb29nbGVfYWRfd2lkdGggPSA0Njg7DQpnb29nbGVfYWRfaGVpZ2h0ID0gMTU7DQovLy0tPg0KPC9zY3JpcHQ+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCINCnNyYz0iaHR0cDovL3BhZ2VhZDIuZ29vZ2xlc3luZGljYXRpb24uY29tL3BhZ2VhZC9zaG93X2Fkcy5qcyI+DQo8L3NjcmlwdD4NCjxiciAvPg0KDQo8YSBjbGFzcz0iYnV5X21sIiByZWw9Im5vZm9sbG93IiBocmVmPSJodHRwOi8vcHJvZHV0by5tZXJjYWRvbGl2cmUuY29tLmJyL01MQi00MzA4MjYyNjMtbGVnby1zdGFyLXdhcnMtOTQ5NC1hbmFraW5zLWplZGktaW50ZXJjZXB0b3Itbm92by1fSk0iIHRhcmdldD0iX2JsYW5rIj5WZXIvQ29tcHJhcjwvYT4NCjwvZGl2Pg0KPGRpdiBjbGFzcz0icHVibGlzaF9kYXRlIj4gQ2F0ZWdvciZpYWN1dGU7YTogPGEgaHJlZj0iaHR0cDovL2JyYXNpbC5jb21wcmFyLW9ubGluZS15YS5jb20vY2F0ZWdvcmlhcy9icmlucXVlZG9zLWUtaG9iYmllcyI+QnJpbnF1ZWRvcyBlIEhvYmJpZXM8L2E+PC9kaXY+DQo8L2Rpdj4NCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjg6IlByb2R1Y3RzIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comprar en mercadolibre Lego Star Wars 9494 Anakin's Jedi Interceptor, Novo!!! en brasil - brasil.comprar-online-ya.com</title>
<meta name="keywords" content="mercadolibre,comprar,online,mercadopago,Pronta,Entrega,Novo,Envio,Imediato,The_bricks_imports,Lego,Star,Wars,9494,Anakin,Jedi,Interceptor,Novo!!!,brasil" />
<meta name="description" content="Comprar en mercadolibre Lego Star Wars 9494 Anakin's Jedi Interceptor, Novo!!! en brasil. comprar Lego Star Wars 9494 Anakin's Jedi Interceptor, Novo!!! online en brasil. comprar online en brasil. comprar Lego Star Wars 9494 Anakin's Jedi Interceptor, Novo!!! en brasil" />
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
        <h1 class="title">Lego Star Wars 9494 Anakin's Jedi Interceptor, Novo!!!</h1>
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
<div class="post_title"><a href="http://brasil.comprar-online-ya.com/articulos/lego-star-wars-9494-anakin-s-jedi-interceptor-novo-/44511">Lego Star Wars 9494 Anakin's Jedi Interceptor, Novo!!!</a></div>
<div class="post_text_area">
<a href="#"><img src="http://img2.mlstatic.com/s_MLB_v_I_f_2686632298_052012.jpg" alt="Lego Star Wars 9494 Anakin's Jedi Interceptor, Novo!!!" class="templatemo_pic" title="Lego Star Wars 9494 Anakin's Jedi Interceptor, Novo!!!" /></a>
<h3>Pronta Entrega, Novo, Envio Imediato - The_bricks_imports</h3>

<div style="width: 250px;">Precio: <strong>BRL $199.99</strong></div>
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

<a class="buy_ml" rel="nofollow" href="http://produto.mercadolivre.com.br/MLB-430826263-lego-star-wars-9494-anakins-jedi-interceptor-novo-_JM" target="_blank">Ver/Comprar</a>
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