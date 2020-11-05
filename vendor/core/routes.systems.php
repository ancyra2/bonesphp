<?php
require_once("C:/xampp/htdocs/bonesphp/config/settings.php");
require_once("vendor/core/basic.systems.php");



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

        public function getView($view,$controller){

        $this->view=$view;
        $this->controller=$controller;
        //Eğer controller dosyası mevcut ise onunla ilgili kısımları hallet yoksa doğrudan istenilen view a yönlendir.
        if($controller!=null){
            $this->viewController($controller);
            exit();//****************************
        }else{
            header("Location:http://localhost/Bonesphp/".$view);
        }

    }

    public  function viewController($controller)
    {
        include_once("app/controllers/$controller.controllers.php");
    }

    public function web($link){
        return "http://localhost/Bonesphp/routes/web.php?routes=".$link;
    }


}


