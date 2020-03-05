<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Quiz Results</title>
</head>
<body>
  <div id="page-wrap">

    <h1>Here are your results:</h1>
    <?php
    $answer1=$_POST['question-1-answer'];
    $answer2=$_POST['question-2-answer'];
    $answer3=$_POST['question-3-answer'];
    $answer4=$_POST['question-4-answer'];


    $totalResult=0;

    if($answer1=="C")
    $totalResult++;
    if($answer2=="A")
    $totalResult++;
    if($answer3=="B")
    $totalResult++;
    if($answer4=="D")
    $totalResult++;
    $totalPercentage=($totalResult/4)*100;

    echo"<div id='results'>$totalResult/4 correct</div>";
    echo"<div id='results'>$totalPercentage % </div>";

    ?>
    <img src="congrats.jpg" alt="congrats pic">
