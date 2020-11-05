<?php
require_once ("C:/xampp/htdocs/bonesphp/config/settings.php");
require_once ("vendor/core/basic.systems.php");
echo __FILE__;
echo "Controller çağırıldı.";
$auth = False;

if($auth == False){
    echo "Sisteme giriş yapınız...";
}
else{
    echo "Hos geldiniz...";
}





