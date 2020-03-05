<?php
session_start();

$username="";
$password="";
$errors=array();

$db=mysqli_connect('localhost','root','password','login');

//Sign up
if(isset($_POST['reg_user'])){
  $username=mysqli_real_escape_string($db,$_POST['username']);
  $password_1=mysqli_real_escape_string($db,$_POST['password_1']);
  $password_2=mysqli_real_escape_string($db,$_POST['password_2']);

  //Validation
  if(empty($username)){array_push($errors,"Username is required");}
  if(empty($password_1)){array_push($errors,"Password is required!");}
  if($password_1 !=$password_2){
    array_push($errors,"Passwords do not match!");
  }

  //Check user doesn't already exist
  $user_check_query="SELECT * FROM login WHERE username='$username'";
  $result=mysqli_query($db,$user_check_query);
  $user=mysqli_fetch_assoc($result);

  if ($user){
    if($user['username']===$username){
      array_push($errors,"Username already in use!");
    }


  }
if (count($errors)==0){
  $password=md5($password_1);
}
}

//Check for no errors in the form
$query="INSERT INTO login(username,password)
VALUES ('$username','$password')";

mysqli_query($db,$query);
$_SESSION['username']=$username;
$_SESSION['success']="You are logged in!";
header('Location: welcome.html');//once logged in redirect to welcome page


























 ?>
