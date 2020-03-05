<?php

$conn= mysqli_connect("localhost","root", "","phplessons" );

$aiP=$_POST['ai'];
$flyP=$_POST['fly'];
$walkP=$_POST['walk'];
$intP=$_POST['int'];
 $name=$_POST['name'];
 $nTry=$_POST['count'];



 $T1=($aiP*0.01)/(0.001225*0.38)+25;
 $T2=($flyP*0.01)/(0.001225*0.4)+25;
 $T3=($walkP*0.008)/(0.000784*0.5)+25;
 $T4=($intP*0.006)/(0.000484*0.45)+25;



 $date = $t=time();
 $dateFormat= date("Y-m-d H:i:s",$t);
 $sql = "INSERT INTO activity1(name,number_of_tries,T1,T2,T3,T4)
        VALUES ('$name', '$nTry', '$T1','$T2','$T3','$T4')";
$send = mysqli_query($conn,$sql);
header("Location: activity1.html?signup=success");

?>