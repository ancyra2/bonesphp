<?php
require_once("C:/xampp/htdocs/bonesphp/config/settings.php");
require_once("vendor/core/basic.systems.php");


/*
    index.php sayfası buraya yönlendirir program ilk başladığında buradan da
routes klasöründeki web.php dosyasına gidilir.
*/

Class Routes{
    public $link;
    public $controller;
    public $view;
    public $model;

    public function __construct($link,$view,$controller,$model)
    {
        $this->link=$link;
        $this->view=$view;
        $this->controller=$controller;
        $this->model=$model;
    }

    public function getView($link,$view){
        $this->link=$link;
        $this->view=$view;
        header("Location:http://localhost/Bonesphp/".$view);
    }
    public function getController($link,$controller){
        $this->link=$link;
        $this->controller=$controller;
        header("Location:http://localhost/Bonesphp/".$controller);
    }



}


