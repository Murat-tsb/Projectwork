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
<h2 style="color: #fff"> Student Sorting</h2>



<?php
$mysqli = new mysqli("localhost", "root", "", "onfor");

$result=$mysqli->query("select * from students");
?>


<table class="table" border="1" id="myTable">
    <tr>
        <th onclick="sortTable(0)">Name</th>
        <th onclick="sortTable(1)">Surname</th>
        <th onclick="sortTable(4)">Grade</th>
        <th onclick="sortTable(2)">Date of birth</th>
        <th onclick="sortTable(3)">Email</th>
        <th onclick="sortTable(3)">Topic</th>
        <th onclick="sortTable(3)">Results</th>


  </tr>
  <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>

                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[6];?></td>
                    <td><?php echo $row[7];?></td>



                </tr>
                <?php endwhile;?>
<?php

while ($row=mysqli_fetch_array($result)){;
echo "<tr><td>$row[name]</td>";
echo "<td>$row[surname]</td>";
echo "<td>$row[grade]</td>";
echo "<td>$row[birth]</td>";
echo "<td>$row[email]</td>";
echo "<td>$row[topic]</td>";
echo "<td>$row[result]</td></tr>";

}

?>
  </table>
  <script>
  function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("myTable");
    switching = true;
    //Set the sorting direction to ascending:
    dir = "asc";
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
        /*check if the two rows should switch place,
        based on the direction, asc or desc:*/
        if (dir == "asc") {
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch= true;
            break;
          }
        } else if (dir == "desc") {
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        //Each time a switch is done, increase this count by 1:
        switchcount ++;
      } else {
        /*If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again.*/
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  }
  </script>

    <br>
    <button class="button" type="button" name="button"><a href='addstudent.php'>Add a Student</a></button>
      <button class="button" type="button" name="button"><a href='students.php'>Back to Students</a></button>

  </center >
    </body>

    </html>
