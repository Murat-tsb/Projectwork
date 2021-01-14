<?
$mysqli = new mysqli("localhost", "root", "", "onfor");


?>

<html>

<form method="post" action="dvd_insert.php">
Name: <input method="text" name="name">
<br>
Surname: <input method="text" name="surname">
<br>
Grade: <input method="text" name="grade">
<br>
    Subject: <select name="subject">
  <option value="Chemistry">Chemistry</option>
  <option value="Physics">Physics</option>
  <option value="Mathematics">Mathematics</option>
    <option value="Geography">Geography</option>
    <option value="ICT">ICT</option>
    </select>
    <br>
Topic: <input method="text" name="topic">
<br><br>

<input type="submit">

</form>
