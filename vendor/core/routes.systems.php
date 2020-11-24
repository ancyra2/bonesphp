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
            $this->takeController($controller);
        }else{
            header("Location:http://localhost/Bonesphp/".$view);
        }

    }
    /* web.php route motoruna istenilen görüntü get metodu ile gönderilmeden önce controller dosyası istenilen işlemleri yapmalı
    ve sonra duruma göre route motoruna istenilen görüntü yönlendirilebilmeli. */
    public  function takeController($controller)
    {



        //include_once("app/controllers/$controller.controllers.php");
        //header("Location:http://localhost/Bonesphp/".$this->view);
        header("Refresh:0.2;url=http://localhost/Bonesphp/app/controllers/$controller.controllers.php");
    }

    //Rout yönlendirmede web.php route motoruna istenilen rout linkini get methodu ile gönderilmesini sağlar.
    public function web($link){
        echo "http://localhost/Bonesphp/routes/web.php?routes=".$link;

    }



}


