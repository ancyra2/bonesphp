<?php
class Database{
    //Database bağlantıları
public $host = "localhost";
public $username = "root";
public $password = "";


    public function connectDB($db){
    $host=$this->host;
    $username=$this->username;
    $password=$this->password;
    $dbname=$db;
    try {
        $connect = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    }catch (PDOException $e){
        echo "Baglanti hatasi :".$e->getMessage();
    }
    return $connect;
}
}

