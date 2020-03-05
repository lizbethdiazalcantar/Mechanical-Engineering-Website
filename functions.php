<?php
session_start();

$db=mysqli_connect('localhost','root','password');

$username="";
$errors=array();


if (isset($_POST['reg_user'])){
  register();
}


function register(){
  global $db, $errors, $username;

  $username=e($_POST['username']);
  $password_1=e($_POST['password_1']);
  $password_2=e($_POST['password_2']);

  if(empty($username)){
    array_push($errors,"Username is required!");
  }

  if(empty($password_1)){
    array_push($errors,"Password is required!");
  }

  if(empty($password_2)){
    array_push($errors,"Passwords need to match!");
  }

  if(count($errors)==0){
    $password=md5($password_1);
    if(isset($_POST['user_type'])){
      $user_type=e($_POST['user_type']);
      $query ="INSERT INTO 'user_login'(username,password_1)
                VALUES ('$username','$password_1')";
      mysqli_query($db,$query);
      
    }
  }

}


























 ?>
