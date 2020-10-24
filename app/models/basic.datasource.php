<?php
require_once ("basic.models.php");
$person=new PersonModel(1,"Salih","Duran");
$person2 = new PersonModel(2,"Samet","Duran");
function getData(){
    $personelData=[];
    global $person;
    array_push($personelData,$person->id,$person->ad,$person->soyad);

    return $personelData;
}
function getDataAll(){
    global $person,$person2;
    $personelData = array(
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
    return $personelData;

}
