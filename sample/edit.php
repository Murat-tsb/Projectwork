<?php
$mysqli = new mysqli("localhost", "root", "", "onfor");
$id=$_GET['id'];
$strSQL ="select * from students WHERE id = '$id'";
$result=$mysqli->query($strSQL);
$row=mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <title>Edit page</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css" type="text/css">

    <script src="js/java.js"></script>

</head>
<body>
<div class="dws-wrapper">
<div class="dws-form">
   <label class="tab "  title="Registration">Edit Form</label>
<form class="tab-form active" method="POST"  action="edit_process.php" >
  <input type="hidden" name="id" value="<?=$row['id']?>">
<div class="box-input">
    <input class="input" method="text" name="name" value="<?=$row['name']?>"  required>
    <label>Name</label>
    </div>
<div class="box-input">
    <input class="input" method="text" name="surname" value="<?=$row['surname']?>"  required>
    <label>Surname</label>
    </div>
<div class="box-input">
    <input class="input" method="text" name="grade" value="<?=$row['grade']?>" required>
    <label>Grade</label>
    </div>
<div class="box-input">
    <input class="input" method="text" name="birth" value="<?=$row['birth']?>" required>
    <label>Date of birth</label>
    </div>
    <div class="box-input">
        <input class="input"  method="text" name="email" value="<?=$row['email']?>" required>
        <label>Email</label>
        </div>

<input class="button" name="submit" type="submit" value="Edit">
</form>




</div>

  </form>
    </div>
    </div>

    </body>
</html>
