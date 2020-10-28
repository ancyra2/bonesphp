<?php
require_once ("C:/xampp/htdocs/bonesphp/config/settings.php");
require_once ("vendor/core/basic.systems.php");
require_once ("../models/basic.models.php");
echo "Controller çağırıldı.";

$person = new PersonModel(1,"Salih","Duran");
$person2 = new PersonModel(2,"Samet","Duran");

$dataSource = array(
    array(
        "id"=>$person->id,
        "ad"=>$person->ad,
        "soyad"=>$person->soyad
    ),
    array(
        "id"=>$person2->id,
        "ad"=>$person2->ad,
        "soyad"=>$person2->soyad
    )
);
echo "<br>";
echo "1 numaralı personelin id değeri :".$dataSource[0]["id"];
echo "<br>";
echo "2 numaralı personelin id değeri :".$dataSource[1]["id"];





