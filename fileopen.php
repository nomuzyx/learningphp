<html>
<body>

<?php
$file=fopen("welcome.php","r") or exit("Unable to open file!");

//some code to be executed

if (feof($file)) echo "End of file";

while(!feof($file)) // checks whether file reached end of file
  {
  	echo fgetc($file); // prints characters
    echo fgets($file). "<br>";// prints complete line
  }

fclose($file); // closes the file

?>

</body>
</html>