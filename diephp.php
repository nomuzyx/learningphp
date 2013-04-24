<html>
<body>

<?php
if(!file_exists("welcom2.txt"))
  {
  die("File not found");
  }
else
  {
$file=fopen("welcom1.txt","r") or exit("Unable to open file!");

//some code to be executed

if (feof($file)) echo "End of file";
}
//while(!feof($file)) // checks whether file reached end of file
//  {
//  	echo fgetc($file); // prints characters
//    echo fgets($file). "<br>";// prints complete line
//  }

//fclose($file); // closes the file

?>

</body>
</html>