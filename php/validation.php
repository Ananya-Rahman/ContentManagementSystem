<?php
session_start();
include_once('conn.php');

$email = $_POST['email'];
$password = $_POST['pass'];

// $q = " SELECT * FROM `register` WHERE email = '$email' && password = '$password' ";

$q = "SELECT * FROM `user` WHERE email = '$email' && password = '$password'";

$result = mysqli_query($conn,$q); //mysqli_query<- (wil execute the go button)
//   id name pass wmail type
//   row 1 : df dfdf df dsdfds === thakbe
//   row 2 : df dfdf df dsdfds 
$num = mysqli_num_rows($result);  // return number of rows // 1



if($num == 1){
    $_SESSION['email'] = $email;
    
  while ($arr = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
       if($arr['user_type']==1){
        header('location:../Admin_page.html');
       }else if($arr['user_type']==0){
        header('location:../content.html');;
       }
  }
    
}
else{
    header('location:../regis.html');
}






?>