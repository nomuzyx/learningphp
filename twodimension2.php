<!DOCTYPE html>
<html>
<body>

<?php
// A two-dimensional array
$families = array
  (
  "Griffin"=>array
  (
  "Peter",
  "Lois",
  "Megan"
  ),
  "Quagmire"=>array
  (
  "Glenn"
  ),
  "Brown"=>array
  (
  "Cleveland",
  "Loretta",
  "Junior"
  )
  );
echo "Is " . $families['Griffin'][0] . 
" a part of the Griffin family?";

?>

</body>
</html>