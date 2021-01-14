


<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <title>Online Formative Assessment</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css\style.css" type="text/css">

    <script src="js/script.js"></script>

</head>
<body>
<div class="dws-wrapper">

<?php
$link=mysqli_connect("localhost", "root", "", "onfor");
if(isset($_POST['submit']))
{
    $err = [];
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['username']))
    {
        $err[] = "Username should be entered only with english letters";
    }

if (strlen($_POST['username'])<3 or strlen($_POST['username'])>30)
    {
        $err[] = "Username should be more than 3 and less than 30 letters";
    }
    $query = mysqli_query($link, "SELECT * from users WHERE username='".mysqli_real_escape_string($link, $_POST['username'])."'");
    if (mysqli_num_rows($query)>0)
    {
        $err[] = "User already has been registered";
    }
    if(count($err) == 0)
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $birth = $_POST['birth'];
        $email = $_POST['email'];
        mysqli_query($link,"INSERT INTO users SET username='".$username."', password='".$password."', firstname='".$firstname."', surname='".$surname."',birth='".$birth."', email='".$email. "'");
        header('Location: index.html'); exit();
    }
    else
    {
        print "<b>Registration errors</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
?>
<script type="text/javascript">
function Input(){
login_ok = false;
username = document.forms["act"]["username"].value;
//password = "";
//username = prompt("Логин","");

password =  document.forms["act"]["password"].value;
if (username=="admin" && password=="01120") {
 login_ok = true;
 window.location = "admin_page.php";
}


if (login_ok==false)




 alert("Неверный логин или пароль!");
}
</script>

<div class="dws-form">
   <label class="tab"  title="Registration">Registration</label>
    <label class="tab active login" title="Login">Login</label>
<form class="tab-form" method="POST">
<div class="box-input">
    <input class="input" name="username" type="username" required>
    <label>Enter Username</label>
    </div>
<div class="box-input">
    <input class="input" name="password" type="password" required>
    <label>Enter Password</label>
    </div>
<div class="box-input">
    <input class="input" name="firstname" type="firstname"  required>
    <label>Enter Firstname</label>
    </div>
<div class="box-input">
    <input class="input" name="surname" type="surname" required>
    <label>Enter Surname</label>
    </div>
    <div class="box-input">
        <input class="input" name="birth" type="birth" required>
        <label>Enter Date of birth</label>
        </div>
        <div class="box-input">
            <input class="input" name="email" type="email" required>
            <label>Enter Email</label>
            </div>
<input class="button" name="submit" type="submit" value="Register">
</form>


<form class="tab-form active"  name="act" >

    <div class="box-input"><input class="input" type="text" name="username" required>
    <label>Enter Username</label>
    </div>
  <div class="box-input">
      <input class="input" type="password" name="password" required>
      <label>Enter Password</label> </div>
<input class="button"  name="submit"  type="button" value="Login" onClick="Input()">
<div align="center">


 </form>
</div>

  </form>
    </div>
    </div>

    </body>
</html>
