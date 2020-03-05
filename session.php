<?php
$connect=mysqli_connect("localhost","root","password") or die ("could not connect");
mysqli_select_db($connect,"usrlogin") or die ("could not find database");
session_start();

$user_check=$_SESSION['user'];
$ses_sql=mysqli_query($connect,"select usrname from usrlogin where usrname='$user_check'");
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['usrname'];
mysqli_close($connect);
?>
