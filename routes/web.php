<?php
require_once ("C:/xampp/htdocs/bonesphp/config/settings.php");
require_once ("vendor/core/basic.systems.php");
//Route sistemi oluşturur.
require_once("vendor/core/routes.systems.php");

//Yeni bir route nesnesi oluşturur.
/*$homeRoutes=new Routes("home","home",null,null);
$homeRoutes->getView($homeRoutes->link,$homeRoutes->view);
*/
$basicRoutes = new Routes("/","basic","basic",null);
$basicRoutes->getController("/",$basicRoutes->controller);
$basicRoutes->getView($basicRoutes->link,$basicRoutes->view);

/*$secondRoutes =new Routes("second","second",null,null);
$secondRoutes->getView($secondRoutes->link,$secondRoutes->view);
*/

