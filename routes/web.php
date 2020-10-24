<?php
require_once ("C:/xampp/htdocs/bonesphp/config/settings.php");
require_once ("vendor/core/basic.systems.php");
//Route sistemi oluşturur.
require_once ("vendor/routes.systems.php");

//Yeni bir route nesnesi oluşturur.
$basicRoutes = new Routes("/","basic.views.php","basic.controllers.php",null);

$basicRoutes->getView($basicRoutes->link,$basicRoutes->view);
//$basicRoutes->getController($basicRoutes->link,$basicRoutes->controller);

