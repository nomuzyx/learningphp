<?php
$con=mysqli_connect("localhost","root","","testdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  {
   echo "Connected";	
  }

mysqli_close($con);
?>