<?php

$link = mysqli_connect('localhost', 'root', '', 'onfor');
$name=mysqli_real_escape_string($link, $_POST['name']);
$surname=mysqli_real_escape_string($link,$_POST['surname']);
$grade=mysqli_real_escape_string($link, $_POST['grade']);
$birth=mysqli_real_escape_string($link,$_POST['birth']);
$email=mysqli_real_escape_string($link,$_POST['email']);
$topic=mysqli_real_escape_string($link,$_POST['topic']);
$result=mysqli_real_escape_string($link,$_POST['result']);
$mysqli = new mysqli("localhost", "root", "", "onfor");
$qq="INSERT INTO students (name, surname, grade, birth,email,topic, result) VALUES ('".$name."','".$surname."','".$grade."','".$birth."','".$email."','".$topic."','".$result."')";
$result=$mysqli->query($qq);




mysqli_close($mysqli);



IF(!$result){
	echo "Data insert failed <br><br>";
	echo mysql_error();

} ELSE {

	echo "Data inserted";
	echo "<br><br><a href=\"physics12.php\">Back to main page</a>";

}

?>
