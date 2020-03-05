<?php
$connection=mysqli_connect('localhost','root','password');
if(!$connection){
  die("Database Connection failed!" . mysqli_error($connection));
}

$select_db=mysqli_select_db($connection,'login');
if(!$select_db){
  die("Database coonection failed!" . mysqli_error($connection));
}














 ?>
