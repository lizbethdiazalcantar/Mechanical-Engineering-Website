<?php
require('db_connect.php');

if(isset($_POST['user_id']) and isset($_POST['user_pass'])){
  $username=$_POST['user_id'];
  $password=$_POST['user_pass'];


  $query="INSERT INTO `user_login` (username,password) VALUES ('$username','$password')";
  $result=mysqli_query($connection,$query) or die (mysqli_error($connection));
  if($result){
    $smsg="User created successfully!";
  }
  else{
    $fmsg="User creation failed!";
  }

}

 ?>
