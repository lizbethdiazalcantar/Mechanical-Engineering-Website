<?php

$conn= mysqli_connect("localhost","root", "","phplessons" );

$name=$_POST["delete"];
 $sql = "DELETE FROM activity1 WHERE name='$name'";
$send = mysqli_query($conn,$sql);
header("Location: read.php?signup=success");

?>