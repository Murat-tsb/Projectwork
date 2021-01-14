

<?php
$mysqli = new mysqli("localhost", "root", "", "onfor");
$user_id=$_GET['user_id'];
$strSQL ="select * from users WHERE user_id = '$user_id'";
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
   <label class="tab" title="Registration">Edit</label>
<form class="tab-form active" method="POST"  action="edit_userprocess.php" >
  <input type="hidden" name="user_id" value="<?=$row['user_id']?>">
<div class="box-input">
    <input class="input" method="text" name="firstname" value="<?=$row['firstname']?>"  required>
    <label>Firstname</label>
    </div>
<div class="box-input">
    <input class="input" method="text" name="surname" value="<?=$row['surname']?>"  required>
    <label>Surname</label>
    </div>
<div class="box-input">
    <input class="input" method="text" name="birth" value="<?=$row['birth']?>" required>
    <label>Date of Birth</label>
    </div>
<div class="box-input">
    <input class="input" method="text" name="email" value="<?=$row['email']?>" required>
    <label>Email</label>
    </div>
    <div class="box-input">
        <input class="input"  method="text" name="username" value="<?=$row['username']?>" required>
        <label>Username</label>
        </div>

<input class="button" name="submit" type="submit" value="Edit">
</form>




</div>

  </form>
    </div>
    </div>

    </body>
</html>
