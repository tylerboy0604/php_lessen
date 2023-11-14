


<?php
include("customer.php");


if(isset($_POST["submit"])){
$customerName = $_POST['name'];
$phoneNumber = $_POST['phone'];
$addres = $_POST['address'];
$customer = new Customer();
$customer->AddCustomer($name,$phone,$addres);
}



?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
</head>
<body>
    <h1>Add Customer</h1>
    <form  method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
     
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br><br>
        
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>
        
        <input type="submit" value="Submit" name='submit'>
    </form>
</body>
</html>