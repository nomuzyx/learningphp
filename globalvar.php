<!DOCTYPE html>
<html>
<body>

<?php
$x=5; // global scope
$y=10; // global scope

function myTest()
{
global $x,$y;
$y=$x+$y;
} 

myTest(); // run function
echo $y; // output the new value for variable $y
?>

</body>
</html>