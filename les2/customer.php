<?php

require("DBconnect.php");




class Customer extends Database{

   public $customerName;
   public  $address;
   public $phoneNumber;


   function __constructor($customerName, $address, $phoneNumber){
    $this->customerName = $customerName;
    $this->address = $address;
    $this->phoneNumber = $phoneNumber;
   }
    function AddCustomer($customerName, $address, $phoneNumber){
        $this->connect();
        $stmt = $this->conn->prepare("INSERT INTO customer (customerName, addres, phoneNumber) VALUES (:customerName, :addres, :phoneNumber)");
        $stmt->bindParam(':customerName', $customerName);
        $stmt->bindParam(':addres', $address);
        $stmt->bindParam(':phoneNumber', $phoneNumber);
        $stmt->execute();
    } 
    function EditCustomer($customerName, $address, $phoneNumber){

    }


}