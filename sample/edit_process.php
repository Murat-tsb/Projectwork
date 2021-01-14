<?php

$mysqli = new mysqli("localhost", "root", "", "onfor");
$id=$_POST['id'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$grade=$_POST['grade'];
$birth=$_POST['birth'];
$email=$_POST['email'];

$result=$mysqli-> query("update students set name='$name', surname='$surname', grade='$grade', birth='$birth', email='$email' where id='$id'");

IF(!$result){

	echo "Something has gone wrong";
	echo mysql_error();

} ELSE {

	echo "The table has been updated";
	echo "<br><br><a href=\"students.php\">Back to main page</a>";

}

?>
