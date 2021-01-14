<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/admin.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Admin Page</title>
</head>
<body>
  <center>


<div id='cssmenu'>
<ul>
   <li><a href='index.html'>Home</a></li>
   <li class='active'><a href='#'>Subjects</a>
      <ul>
         <li><a href='physics12.php'>Physics</a></li>
         <li><a href="chemistry.php">Chemistry</a></li>
         <li><a href='#'>ICT</a></li>
        <li><a href='#'>Biology</a></li>
         <li><a href='#'>Math</a></li>
          <li><a href='#'>Geography</a></li>
     </ul>
   </li>
   <li><a href='admin_page.php'>Admin Page</a></li>
   <li><a href='students.php'>Students</a></li>
   <li><a href='index.php'>Logout</a></li>
</ul>
</div>
<h1 style="color: #ffffff;"> Admin User page</h1>
<h2 style="color: #fff">Registrated users</h2>



<?php
$mysqli = new mysqli("localhost", "root", "", "onfor");

$result=$mysqli->query("select * from users");
?>


<table class="table" border="1" id="myTable">
    <tr>
        <th onclick="sortTable(0)">ID</th>
        <th>Firstname</th>
        <th onclick="sortTable(1)">Surname</th>
        <th onclick="sortTable(2)">Date of birth</th>
        <th onclick="sortTable(3)">Email</th>
        <th onclick="sortTable(4)">Username</th>

  </tr>
<?php

while ($row=mysqli_fetch_array($result)){
  echo "<tr><td>$row[user_id]</td>";
echo "<td>$row[firstname]</td>";
echo "<td>$row[surname]</td>";
echo "<td>$row[birth]</td>";
echo "<td>$row[email]</td>";
    echo "<td>$row[username]</td>";
echo "<td><a href='edit_users.php?user_id=$row[user_id]'>Edit</a></td>";
echo "<td><a href='delete_users.php?user_id=$row[user_id]'>Delete</a></td><tr>";
}

?>
    </table>
    <br><br>
  </center >
    </body>

    </html>
