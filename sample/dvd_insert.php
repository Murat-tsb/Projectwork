<?php

$link = mysqli_connect('localhost', 'root', '', 'onfor');
$name=mysqli_real_escape_string($link, $_POST['name']);
$surname=mysqli_real_escape_string($link,$_POST['surname']);
$grade=mysqli_real_escape_string($link, $_POST['grade']);
$subject=mysqli_real_escape_string($link,$_POST['subject']);
$topic=mysqli_real_escape_string($link,$_POST['topic']);
$mysqli = new mysqli("localhost", "root", "", "onfor");
$qq="INSERT INTO students (name, surname, grade, subject, topic) VALUES ('".$name."','".$surname."','".$grade."','".$subject."','".$topic."')";
$result=$mysqli->query($qq);




mysqli_close($mysqli);



IF(!$result){
	echo "Data insert failed <br><br>";
	echo mysql_error();
	
} ELSE {

	echo "Data inserted";
	echo "<br><br><a href=\"admin_page.php\">Back to main page</a>";
	
}

?>





