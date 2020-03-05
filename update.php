<?php

$conn= mysqli_connect("localhost","root", "","phplessons" );

$name=$_POST["name2"];
$pass=$_POST["pass"];
$grade="";
if ($pass==1)
$grade="pass";
else
$grade="fail";


 $sql = "UPDATE activity1 SET map='$grade' WHERE name='$name'";

$send = mysqli_query($conn,$sql);
header("Location: activity1.html?signup=success");

?>