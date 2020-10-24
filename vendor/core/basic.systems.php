<?php


function main_dir(){
    /*
 Dizin Belirleme İşlevi
 Bu fonksiyon projemin merkez dizinini gösterir.
*/  $directory = __DIR__;
    $pattern = "/(.*)(bonesphp)/";
    preg_match_all($pattern,$directory,$newDirectory);
    $new_Dir = $newDirectory[2][0]."/";
    echo $new_Dir;
}

