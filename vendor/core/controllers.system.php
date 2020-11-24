<?php

Class Controllers{

    public $link;
    public $controller;
    public $view;
    public $model;

   /* public function __construct($link,$view,$controller,$model)
    {
        $this->link=$link;
        $this->view=$view;
        $this->controller=$controller;
        $this->model=$model;
    }
    */
    public function getAll($dbname){

        $db = new Database();
        $conn = $db->connectDB($dbname);

        $q = $conn->prepare("Select * From user");
        $q->execute();

        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $data;

    }
}
