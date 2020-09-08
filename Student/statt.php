<?php
session_start();
include "config.php";
if(!isset($_SESSION["stid"]))
{
	header("location:mainpage.php");
}
?>

<html>
<body>
	<title> SMS</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		</head>
		<body>
			<div id = "container">
				<div id = "header">
					<h1>Student Management System</h1>
				</div>
				<div id = "wrapper">
				<center>
				<h1> </h1>
				<?php
						include "config.php";
						$st_usn = $_SESSION["stid"];
						$sql = "SELECT * FROM attendance WHERE st_usn = $st_usn ;";
						$res = $db->query($sql);
						if($res->num_rows>0)
						{
							
							echo "<table>
							<tr>
								<th>SUBJECT</th>
								<th>SEM</th>
								<th>STAFF NAME</th>
								<th>ATTENDANCE</th>
							</tr>
";
							$i=0;
							while($rows=$res->fetch_assoc())
							{
								echo "<tr>";
								echo "<form action='attu.php' method='POST'>";
								echo "";
								echo "<td>{$rows["sub_name"]}</td>";
								echo "<td>{$rows["sem"]}</td>";
								echo "<td>{$rows["staff_name"]}</td>";
								echo "<td>{$rows["att_persent"]}%</td>";
								
					?>
					<?php
							
								
								echo "</form>";
								echo "</tr>";
							}
								echo "</table>";
							
						}
						else
						{
							echo "<h2>ATTENDANCE NOT YET UPDATED</H2>";
						}
							
					?></center>
				</div>
				<div id = "navi">
					<?php 
						include "stUDENTback.php";
					?>
				</div>
			
<body>