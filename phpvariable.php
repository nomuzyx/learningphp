<!DOCTYPE html>
<html>
<body>

<?php
$x=5; // global scope

  
function myTest()
{
	$y=6;
    echo $y; // local scope
} 

myTest();
?>

</body>
</html>