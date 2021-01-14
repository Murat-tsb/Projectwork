<?php
$mysqli = new mysqli("localhost", "root", "", "onfor");
$id_sub=$_GET['id_sub'];
$strSQL ="select * from subjects WHERE id_sub = '$id_sub'";
$result=$mysqli->query($strSQL);
$row=mysqli_fetch_array($result);
?>




<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <title>Online Formative Assessment</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css" type="text/css">

    <script src="js/java.js"></script>

</head>
<body>
<div class="dws-wrapper">
<div class="dws-form">
   <label class="tab"  title="Registration">Edit</label>
<form class="tab-form active" method="POST"  action="edit_subjectprocess.php" >
  <input type="hidden" name="id_sub" value="<?=$row['id_sub']?>">
<div class="box-input">
    <input class="input" method="text" name="subject" value="<?=$row['subject']?>"  required>
    <label>Subject</label>
    </div>
<div class="box-input">
    <input class="input" method="text" name="grade" value="<?=$row['grade']?>"  required>
    <label>Grade</label>
    </div>
<div class="box-input">
    <input class="input" method="text" name="term" value="<?=$row['term']?>" required>
    <label>Term</label>
    </div>
<div class="box-input">
    <input class="input" method="text" name="chapter" value="<?=$row['chapter']?>" required>
    <label>Chapter</label>
    </div>
    <div class="box-input">
        <input class="input"  method="text" name="topic" value="<?=$row['topic']?>" required>
        <label>Topic</label>
        </div>

<input class="button" name="submit" type="submit" value="Edit">
</form>




</div>

  </form>
    </div>
    </div>

    </body>
</html>
