<?php
session_start();
if(isset($_SESSION['user'])){
  header("location: welcome.php");
  exit;
}
$username=$password="";
$userpass_err='';


if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(!empty($_POST['usrname'])&& !empty($_POST['password'])){
    $username=$_POST['usrname'];
    $password=$_POST['password'];

    $connect = mysqli_connect("localhost","root","") or die("could not connect");
    mysqli_select_db($connect,"usrlogin") or die ("could not find database");

    $sql = "SELECT usrname, password from usrlogin where usrname=? AND password=? LIMIT 1";
    $result=mysqli_prepare($connect,$sql);
    mysqli_stmt_bind_param($result,"ss",$username,$password);
    mysqli_stmt_store_result($result);
	if(mysqli_stmt_fetch($result) == false)
	{
	  echo "Invalid Username or Password Check Again";
	}
  else{
    $_SESSION['user']=$username;
    header("location:welcome.php");
    exit();
  }

  mysqli_close($connect);
  mysqli_stmt_close($result);
}
else{
  $userpass_err="Enter username or password or both";
  echo "$userpass_err";
}
}
?>
