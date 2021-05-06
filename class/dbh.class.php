<?php
class Dbh{
    private $dbServerName = "localhost";
    private $dbUserName = "root";
    private $dbPassword = "";
    private $dbName = "keshmoon";
    protected function  connect(){
        $conn = mysqli_connect($this->dbServerName, $this->dbUserName, $this->dbPassword , $this->dbName);
        if (!$conn){
            die("به دلیل مشکل زیر، اتصال برقرار نشد : <br />" . mysqli_connect_error());
        }else{
            return $conn;
        }
    }
}