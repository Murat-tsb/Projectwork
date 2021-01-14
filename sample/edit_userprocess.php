<?php

$mysqli = new mysqli("localhost", "root", "", "onfor");
$user_id=$_POST['user_id'];
$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$birth=$_POST['birth'];
$email=$_POST['email'];
$username=$_POST['username'];

$result=$mysqli-> query("update users set firstname='$firstname', surname='$surname', birth='$birth', email='$email', username='$username' where user_id='$user_id'");

IF(!$result){

	echo "Something has gone wrong";
	echo mysql_error();

} ELSE {

	echo "The table has been updated";
	echo "<br><br><a href=\"admin.php\">Back to main page</a>";

}

?>
