<?php
$color="blue";
setcookie('color', $color, time() + (86400 * 1)); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Quiz</title>
<meta charset ="utf-8"/>
<style>
    body{background-color: <?php echo $color?> }
    </style>
<link rel="stylesheet" type="text/css" href="quiz.css">
<link rel="stylesheet" type="text/css" href="navigation.css">
</head>
<body>
  <ul>
    <li class="main"> The Mechanical Engineering Website </li>
    <li class="main2">for young engineers</li>
  </ul>
  <ul>
    <li><a href="Welcome.html"  >Welcome</a></li>
    <li><a href="FunFacts.html"> Fun Facts</a></li>
    <li><a href="activity1.html"> Activities</a></li>
    <li><a href="Quiz.html"class="active"> Quiz</a></li>
    <li><a href="login.html">Login</a></li>
    <li><a href="register.html">Sign Up</a></li>
     <li class="about" ><a href="about.html">about us</a></li>
    </ul>
`
<form id="color" method="POST" action="">
    Type color for webpage background:
    <input type="textbox" name="newcolor"> </input>
    <input type="submit"></input>
</form>
<?php
$color=$_POST['newcolor'];
//header("Location: main.php?signup=success");
?>

<div id="page-wrap">
  <form id="start-quiz" method="post" action="test.php">
    <div class="overlay index">
      <div class="quiz-overlay"></div>
    <h1>Quiz:</h1>
    <input type="submit" id="submit" class="review-quiz" value="Take the Quiz"/>
  </div>
</form>
</div>


</br></br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>


<ul>
  <li > <b>Web Technology Class Fall 2019</b> </li>
  <li class="right"><b>Carlos Sanchez</b></li>
  <li class="right"><b>Lizbeth Diaz</b></li>



</ul>
</body>
</html>
