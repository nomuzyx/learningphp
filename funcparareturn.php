<html>
<body>

<?php
function add($x,$y)
{
$total=$x+$y;
return $total;
}

echo $_GET["x"] ."+". $_GET["y"] ."=" . add($_GET["x"],$_GET["y"]);
?>

</body>
</html