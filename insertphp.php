<?php
$con=mysqli_connect("localhost","root","","testdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Peter', 'Griffin',35)");

mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Glenn', 'Quagmire',33)");

mysqli_close($con);
?>