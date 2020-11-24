<?php

require_once("C:/xampp/htdocs/bonesphp/config/settings.php");
require_once ("config/database.php");
require_once("vendor/core/basic.systems.php");


$db = new Database();
$authDBName ="blogcategory";
$conn = $db->connectDB($authDBName);
$q = $conn->prepare("UPDATE user SET authenticate = 1 WHERE id =1");
$q->execute();
