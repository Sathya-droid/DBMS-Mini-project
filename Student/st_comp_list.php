<?php
session_start();
include "config.php";
if(!isset($_SESSION["sid"]))
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

						$sql = "SELECT * FROM st_comp;";
						$res = $db->query($sql);
						if($res->num_rows>0)
						{
							
							echo "<table>
							<tr>
								<th>STUDENT USN</th>
								<th>STUDENT NAME</th>
								<th>STAFF NAME</th>
								<th>SUBJECT</th>
								<th>SEM</th>
								<th>DATE</th>
								<th>COMPLAINT NOTES</th>
							</tr>
";
							$i=0;
							while($rows=$res->fetch_assoc())
							{
								echo "<tr>";
								echo "<form action='attu.php' method='POST'>";
								echo "";
								echo "<td>{$rows["st_usn"]}</td>";
								echo "<td>{$rows["st_name"]}</td>";
								echo "<td>{$rows["staff_name"]}</td>";
								echo "<td>{$rows["sub_name"]}</td>";
								echo "<td>{$rows["sem"]}</td>";
								echo "<td>{$rows["date"]}</td>";
								echo "<td>{$rows["Comp_notes"]}</td>";
								
								
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
						include "staffback.php";
					?>
				</div>
			
<body>