<?php
set_include_path("C:/xampp/htdocs/bonesphp/");
require_once("C:/xampp/htdocs/bonesphp/vendor/core/basic.systems.php");
class PersonModel{
    public  $id,$ad,$soyad;

    public function __construct($id,$ad,$soyad)
    {
       $this->id=$id;
       $this->ad=$ad;
       $this->soyad=$soyad;
    }
}


