<?php
$con=mysqli_connect("localhost","root","");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create database
$sql="CREATE DATABASE testdb2";
if (mysqli_query($con,$sql))
  {
  echo "Database testdb2 created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error();
  }
?>