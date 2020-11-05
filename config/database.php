<?php
class Database{
    //Database bağlantıları
public $host = "localhost";
public $username = "root";
public $password = "";


    public function connectDB(){
    $host=$this->host;
    $username=$this->username;
    $password=$this->password;
    try {
        $connect = new PDO("mysql:host=$host;dbname=blogcategory",$username,$password);
    }catch (PDOException $e){
        echo "Baglanti hatasi :".$e->getMessage();
    }
    return $connect;
}
}

