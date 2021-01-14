<html><head><title>DVDs</title></head>
<body>

<?php
$mysqli = new mysqli("localhost", "root", "", "onfor");
$id=$_GET['id'];
$strSQL ="delete from students WHERE id = '$id'";
$result=$mysqli->query($strSQL);


IF($result){

	echo "Deleted";
	echo "<br><br><a href=\"admin_page.php\">Back to main page</a>";

} ELSE {

	echo "Something went wrong";
	echo mysql_error();

}

?>
