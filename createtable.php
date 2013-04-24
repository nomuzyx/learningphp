<?php
$con=mysqli_connect("localhost","root","","testdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
//$sql="CREATE TABLE persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";

$sql = "CREATE TABLE Persons 
(
PID INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(PID),
FirstName CHAR(15),
LastName CHAR(15),
Age INT
)";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error();
  }
?>