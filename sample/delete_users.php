<html><head><title>DVDs</title></head>
<body>

<?php
$mysqli = new mysqli("localhost", "root", "", "onfor");
$user_id=$_GET['user_id'];
$strSQL ="delete from users WHERE user_id = '$user_id'";
$result=$mysqli->query($strSQL);


IF($result){

	echo "Deleted";
	echo "<br><br><a href=\"users.php\">Back to main page</a>";

} ELSE {

	echo "Something went wrong";
	echo mysql_error();

}

?>
