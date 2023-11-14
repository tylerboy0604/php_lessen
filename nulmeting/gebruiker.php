<?php 
require_once "database.php";

class User {

    public $id;


    public function login($username, $password){
        $db = new Database();
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT 'ID', 'username', 'password' FROM Users WHERE 'username' = '$username'");
        if(!$stmt->execute){
            return false
        }

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if(!$row){
            return false;    
        }
        if(!password_verify()){

        }



    }
}
