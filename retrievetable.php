<?php
$con=mysqli_connect("localhost","root","","testdb");

if (mysqli_connect_errno())
{
	echo"Failed to connect Mysql: " . mysqli_connect_errno();

}
$result= mysqli_query($con,"SELECT * FROM persons");

echo"<table border='1'>
<tr>
<th>First Name</th>
<th>Last Name</th>
</tr>";

while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['FirstName']. "</td>";
	echo"<td>".$row['LastName']. "</td>";
	echo"</tr>";
}
echo"</table>";
mysqli_close($con);


?>
