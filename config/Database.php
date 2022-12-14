<?php

class Database 
{
    private $host = 'localhost';
    private $db_name = 'api_dbsport';
    private $username = 'root';
    private $password = '';
    private $conn;

    //db connection

    public function getConnection()
    {
        $this->conn = null;

        try{
            $this->conn = new PDO('mysql:host=' .$this->host . ';dbname=' .$this->db_name. ';charset=utf8',
            $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'Error connection:' .$e->getMessage();
        }

        return $this->conn;
    }
}