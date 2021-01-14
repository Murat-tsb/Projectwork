<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Physics</title>
	<link rel="stylesheet" href="css/style_ph12.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Physics</h2>
        <ul>
            <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Official NIS site</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
            <li><a href="index.php"><<i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Welcome! Choose your test.</div>

				<?php
				$mysqli = new mysqli("localhost", "root", "", "onfor");

				$result=$mysqli->query("select * from subjects where subject='Physics'");
				?>


				<table class="table " border="1" id="myTable">
				    <tr>
							<th>Subject</th>
				        <th>Grade</th>
				        <th>Term</th>
				        <th>Chapter</th>
				        <th>Topic</th>


				  </tr>





				<?php

				while ($row=mysqli_fetch_array($result)){
					echo "<tr><td>$row[subject]</td>";
				echo "<td>$row[grade]</td>";
				echo "<td>$row[term]</td>";
				echo "<td>$row[chapter]</td>";
				    echo "<td>$row[topic]</td>";
						echo "<td><a href='$row[id_sub]physics.php'>test</a></td></tr>";

				}

				?>

					</div>
					      <button class="button" type="button" name="button"><a href='results.php'>Write a reslult</a></button>
								<br>
								<br>

</body>
</html>
