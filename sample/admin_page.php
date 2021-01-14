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
         <li><a href='admin_ph.php'>Admin Physics</a></li>
         <li><a href="chemistry.php">Admin Chemistry</a></li>
         <li><a href='#'>ICT</a></li>
        <li><a href='#'>Biology</a></li>
         <li><a href='#'>Math</a></li>
          <li><a href='#'>Geography</a></li>
     </ul>
   </li>
   <li><a href='users.php'>Users</a></li>
      <li><a href='students.php'>Students</a></li>
   <li><a href='index.php'>Logout</a></li>
</ul>
</div>
<h1 style="color: #ffffff;"> Admin page</h1>
<h2 style="color: #fff">Reslults of testing</h2>



<?php
$mysqli = new mysqli("localhost", "root", "", "onfor");

$result=$mysqli->query("select * from students");
  $result1=$mysqli->query("select  students.name, students.surname, students.grade, students.result, subjects.subject, subjects.term, subjects.topic
  from students
  inner join subjects on students.topic = subjects.topic")
?>


<table class="table" border="1" id="myTable">
    <tr>
        <th onclick="sortTable(0)">Name</th>
        <th onclick="sort_table(1)">Surname</th>
        <th>Grade</th>
        <th>Results</th>
        <th>Subject</th>
        <th>Term</th>
        <th>topic</th>



  </tr>
<?php

while ($row=mysqli_fetch_array($result1)){
echo "<tr><td>$row[name]</td>";
echo "<td>$row[surname]</td>";
echo "<td>$row[grade]</td>";
echo "<td>$row[result]</td>";
echo "<td>$row[subject]</td>";
echo "<td>$row[term]</td>";
echo "<td>$row[topic]</td></tr>";

}

?>
    </table>

    <input class="searching"  type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">


    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>




<br><br>
</center>
</body>

</html>
