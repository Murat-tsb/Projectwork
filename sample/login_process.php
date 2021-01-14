<?

SESSION_START();
function myFunction() {

$mysqli = new mysqli("localhost", "root", "", "onfor");
//include 'security.php';
$pass=md5($_POST['password']);
$strSQL ="select * from users WHERE username='$_POST[username]' AND password='$pass'";
$result=$mysqli->query($strSQL);
  $row_cnt = mysqli_num_rows($result);
echo $row_cnt;

IF ($row_cnt>0){
	$_SESSION['username']=$_POST['username'];
} ELSE {

	echo("The username and password entered are incorrect");
  echo "";
	exit();
}

header('Location: home.html');
}
?>
