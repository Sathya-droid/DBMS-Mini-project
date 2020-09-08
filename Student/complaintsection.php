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
						$sql = "SELECT * FROM class_announcement;";
						$res = $db->query($sql);
						if($res->num_rows>0)
						{
							
							echo "<table>
							<tr>
								<th>STUDENT USN</th>
								<th>STUDENT NAME</th>
								<th>SEM</th>
								<th>STAFF NAME</th>
								<th>SUBJECT</th>
								<th>DATE</th>								
							</tr>
";
							$i=0;
							while($rows=$res->fetch_assoc())
							{
								echo "<tr>";
								echo "<form action='attu.php' method='POST'>";
								echo "";
								echo "<td>{$rows["staff_name"]}</td>";
								echo "<td>{$rows["sem"]}</td>";
								echo "<td>{$rows["acc_notes"]}</td>";
								echo "<td>{$rows["time"]}</td>";
								
					?>
					<?php
							
								
								echo "</form>";
								echo "</tr>";
							}
								echo "</table>";
							
						}
							
					?></center>
				</div>
				<div id = "navi">
					<?php 
						include "stUDENTback.php";
					?>
				</div>
			
<body>