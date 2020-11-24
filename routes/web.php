<?php
require_once ("C:/xampp/htdocs/bonesphp/config/settings.php");
require_once ("vendor/core/basic.systems.php");
//Routes sistemi
require_once("vendor/core/routes.systems.php");



$homeRoutes = new Routes("home","home","home",null);
$secondRoutes = new Routes("second","second","second",null);

if(isset($_GET["routes"])) {
    $route = $_GET["routes"];


switch ($route){
    case "home":$homeRoutes->getView("home",null);
    break;
    case "second":$secondRoutes->getView("second",null);
    break;
}
}else{
    $homeRoutes->getView("home",null);
}




