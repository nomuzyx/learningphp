<?php
session_start();
// store session data
if(isset($_SESSION['views']))
{
	unset($_SESSION['views']);

	session_destroy();
}	
?>

<html>
<body>

<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>

</body>
</html>