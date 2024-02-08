<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "db";

    $con = new mysqli($servername,$username,$password,$db_name);
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
        
    $query = "INSERT INTO contact (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    
    mysqli_query($con, $query);
    header('location:contact.php');
    
?>