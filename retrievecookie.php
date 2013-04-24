<?php
//setcookie("user", "Noman Budhani", time()+3600);
//setcookie("user", "", time()+3600);
?>

<html>
<body>
<?php	
if (isset($_COOKIE["user"]))
  echo "Welcome " . $_COOKIE["user"] . "!<br>";
else
  echo "Welcome guest!<br>";
?>
</body>
</html>