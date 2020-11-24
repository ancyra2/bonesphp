<?php

require_once("C:/xampp/htdocs/bonesphp/config/settings.php");
require_once ("config/database.php");
require_once("vendor/core/basic.systems.php");
require_once("vendor/core/routes.systems.php");
require_once ("vendor/core/controllers.system.php");

class HomeController extends Controllers{


}

/*$controller = new HomeController();

$data = $controller->getAll("blogcategory");
echo "<pre>";
print_r($data);
global $username;
$username = array();
for ($i=0;$i<count($data);$i++){

    array_push($username,$data[$i]["username"]);

}

print_r($username);

echo "<br>";
echo "</pre>";

global $querry;

for ($i=0; $i<count($username); $i++){
    $querry = "username=".$username[0];
    if($i>0){
        $querry = $querry."&username".$i."=".$username[$i];
    }
}


echo $querry;
header("Location:http://localhost/Bonesphp/home?".$querry);
*/

?>


