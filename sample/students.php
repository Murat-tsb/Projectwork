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
   <li><a href='users.php'>Users</a></li>
   <li><a href='index.php'>Logout</a></li>
</ul>
</div>
<h1 style="color: #ffffff;"> Admin Student page</h1>
<h2 style="color: #fff">Registrated students</h2>



<?php
$mysqli = new mysqli("localhost", "root", "", "onfor");

$result=$mysqli->query("select * from students");
?>


<table class="table" border="1" id="myTable">
    <tr>
        <th>Name</th>
        <th onclick="sortTable(1)">Surname</th>
        <th onclick="sortTable(4)">Grade</th>
        <th onclick="sortTable(2)">Date of birth</th>
        <th onclick="sortTable(3)">Email</th>


  </tr>
<?php

while ($row=mysqli_fetch_array($result)){;
echo "<tr><td>$row[name]</td>";
echo "<td>$row[surname]</td>";
echo "<td>$row[grade]</td>";
echo "<td>$row[birth]</td>";
echo "<td>$row[email]</td>";
echo "<td><a href='edit.php?id=$row[id]'>Edit</a></td>";
echo "<td><a href='delete.php?id=$row[id]'>Delete</a></td><tr>";
}

?>
  </table>
    <br>
    <button class="button" type="button" name="button"><a href='addstudent.php'>Add a Student</a></button>
      <button class="button" type="button" name="button"><a href='sorting.php'>Student results</a></button>

  </center >
    </body>

    </html>
