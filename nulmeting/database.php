<?php
class Database{
    public $servername = "localhost";
    public $username = "tylervds";
    public $password = "Nevoneets2004!";

    public function connect() {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=nulmeting periode 3", $this->username, $this->password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e){
            echo "connection failed: " . $e->getMessage();
        }
        return $conn;
    }
}
?>