<?php

$mysqli = new mysqli("localhost", "root", "", "onfor");
$id_sub=$_POST['id_sub'];
$subject=$_POST['subject'];
$grade=$_POST['grade'];
$term=$_POST['term'];
$chapter=$_POST['chapter'];
$topic=$_POST['topic'];

$result=$mysqli-> query("update subjects set subject='$subject', grade='$grade', term='$term', chapter='$chapter', topic='$topic' where id_sub='$id_sub'");

IF(!$result){

	echo "Something has gone wrong";
	echo mysql_error();

} ELSE {

	echo "The table has been updated";
	echo "<br><br><a href=\"admin_ph.php\">Back to main page</a>";

}

?>
