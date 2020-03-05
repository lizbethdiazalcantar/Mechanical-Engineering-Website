<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Scores</title>
        <link rel="stylesheet" type="text/css" href="navigation.css">
    <link rel="stylesheet" type="text/css" href="game1.css">
    <style>
        table{ position:absolute;left:540px;top:250px;font-family:verdana;font-size:12pt;}

th, td {
            padding: 4px;
            text-align: left;
            color:white;
          }
table#t th {
         background-color: rgb(71, 71, 71);
            color: white;
          }
    </style>
</head>
    <body>
    
    <ul>
    <li class="main"> The Mechanical Engineering Website </li>
    <li class="main2">for young engineers</li>
  </ul>
  <ul>
  <li><a href="Welcome.html" >Welcome</a></li>
  <li><a href="FunFacts.html"> Fun Facts</a></li>
  <li><a href="activity1.html" class="active"> Activities</a></li>
  <li><a href="Quiz.html"> Quiz</a></li>
  <li><a href="login.html">Login</a></li>
  <li><a href="register.html">Sign Up</a></li>
  <li class="about" ><a href="about.html">about us</a></li>
    </ul>

    <?php
$conn= mysqli_connect("localhost","root", "","phplessons" );
$sql = "SELECT * FROM activity1";         
$send = mysqli_query($conn,$sql);
print "<h3> List of favorite songs </h3>";
print "<table id=\"t\">";

print "<tr>
        <th>Name</th>
        <th>Number of Tries</th>
        <th>T1</th>
        <th>T2</th>
        <th>T3</th>
        <th>T4</th>
        <th>Assembly</th>
       </tr>";
while($row= mysqli_fetch_assoc($send))
{
 print "<tr>"."<td>".$row['name']."</td>".
              "<td>".$row['number_of_tries']."</td>".
              "<td>".$row['T1']."</td>".
              "<td>".$row['T2']."</td>".
              "<td>".$row['T3']."</td>".
              "<td>".$row['T4']."</td>".
              "<td>".$row['map']."</td>".
        "</tr>";
}

 print "<table>";

?>
Enter a name to delete row:
<form id="form3" method="post" action="delete.php">
<input type="text" name="delete"></input>

<input type="submit"></input>
</form>




    </body>
</html>
