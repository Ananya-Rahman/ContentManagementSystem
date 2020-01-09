<?php
session_start();

include_once('conn.php');

$category =$_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
// $submit_by = ['id'];
// $publish_by = ['id'];
$user_id = 3;


$sql = "INSERT INTO `content`( `category`, `title`, `description`,  `user_id`)
 VALUES ('$category', '$title', '$description','$user_id')";

// $result = mysqli_query($conn,$q);

$run = mysqli_query($conn,$sql);
if($run == TRUE){
    echo "data insert successfully";
}
else{
    echo "Error";
}




?>