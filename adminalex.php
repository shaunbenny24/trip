<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wayanad Resorts - List of Best Resorts in Wayanad in 2019</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="style.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="main.css">
    <style>
    	table{
	      border-collapse: collapse;
		  width: 100%;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(odd) {background-color: #DE1524;color:#fff;}
    </style>
    </head>
    <body>
		
        <h1 class="title">Admin</h1>
      
			<?php
				include("config.php");
				$sql = "SELECT * FROM tour ORDER BY date DESC, id DESC";
				$result = $db->query($sql);


					echo "<table class='table table-hover table-condensed'>
					<tr>
					<th scope='col'>ID</th>
					<th scope='col'>Name</th>
					<th scope='col'>Email-ID</th>
					<th scope='col'>Country code</th>
					<th scope='col'>Phone</th>
					<th scope='col'>Resort</th>
					<th scope='col'>Date</th>
					</tr>";

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	echo "<tr>";
				    	echo "<th>". $row["id"]. "</th>";
				        echo "<td>" . $row["name"]. "</td>";
				        echo "<td>" . $row["email"]. "</td>";
				        echo "<td>" . $row["ccode"]. "</td>";
				        echo "<td>" . $row["phone"]. "</td>";
				        echo "<td>" . $row["output"]. "</td>";
						echo "<td>" . $row["date"]. "</td>";
						echo "</tr>";
				    }
				}

				echo "</table>";
			?>


   </body>
</html>