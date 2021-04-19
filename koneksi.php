<?php
class Db {
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=dbpegawai",$this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: ", $e->getMessage();
        }
    }

    public function __destruct(){
        $this->conn = null;
    }
}
