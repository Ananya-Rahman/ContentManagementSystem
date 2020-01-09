<?php
$serever_name="localhost";
$user_name="root";
$password="";
$db_name="cms";
$conn=mysqli_connect($serever_name,$user_name,$password,$db_name);

    if(!$conn){
        echo"not connected" ;
    }



?>