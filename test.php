<?php
$con = mysql_connect("localhost:3306","root","hongmu1011");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// some code

mysql_close($con);
?>