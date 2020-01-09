<?php
session_start();

include_once('conn.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$retypePassword = $_POST['re-password'];
$address = $_POST['address'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$about = $_POST['about'];
$user_type = $_POST['user_type'];


if ($password == $retypePassword){
    $query = "INSERT INTO `user`( `full_name`,`email`, `password`, `user_type`, `address`, `country`, `phone`, `about`) 
    VALUES ('$name','$email','$password','$address','$country', '$phone','$about', '$user_type')";
   
    $result = mysqli_query($conn,$query);
   
   
   
   
    if($result >= 1){
        $_SESSION['save'];
        header('location:../signin.html');
    }
    else {
        echo " Registration error";
    }
    
}
else {
    echo " <center>  <h1 style=\"color: aqua; padding:2px;\">Password does not match</h1> </center>";
}






?>