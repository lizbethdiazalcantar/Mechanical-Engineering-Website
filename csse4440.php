<?php

$colors = array("Blue", "red", "green",
                 "yellow");
   $color = current($colors);
   print("$color <br />");
   while ($color = next($colors))
      print ("$color <br />");     
	  phpinfo();

?>