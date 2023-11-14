<?php

 

class Database {

 

    public $conn;

 

    public function connect(){

        $servername = "localhost";

        $username = "tylervds";

        $password = "Nevoneets2004!";

        $dbname = "les2";

       

        try {

            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {

            echo "Verbindingsfout: " . $e->getMessage();

        }

       

        return $this->conn;

    }

 

}