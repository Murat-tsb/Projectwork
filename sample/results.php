

<?php
$mysqli = new mysqli("localhost", "root", "", "onfor");

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
   <label class="tab" title="Registration">Add a student</label>
<form class="tab-form active" method="POST"  action="result_process.php" >
  <input type="hidden" name="id" value="<?=$row['id']?>">
<div class="box-input">
    <input class="input" method="text" name="name"   required>
    <label>Name</label>
    </div>
<div class="box-input">
    <input class="input" method="text" name="surname"  required>
    <label>Surname</label>
    </div>
    <div class="box-input">
        <input class="input"  method="text" name="grade"  required>
        <label>Grade</label>
        <div class="box-input">
            <input class="input" method="text" name="birth"  required>
            <label>Date of birth</label>
            </div>
        </div>
<div class="box-input">
    <input class="input" method="text" name="email" v required>
    <label>Email</label>
    </div>
    <div class="box-input">
        <input class="input" method="text" name="topic"  required>
        <label>Topic</label>
        </div>
    <div class="box-input">
        <input class="input" method="text" name="result"  required>
        <label>Result</label>
        </div>


<input class="button" name="submit" type="submit" value="Add">
</form>




</div>

  </form>
    </div>
    </div>

    </body>
</html>
