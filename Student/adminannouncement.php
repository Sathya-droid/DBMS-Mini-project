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
						$sql = "SELECT * FROM admin_ann;";
						$res = $db->query($sql);
						if($res->num_rows>0)
						{
							
							echo "<table>
							<tr>
								<th>ANNOUNCEMENT</th>
								<th>SEM</th>
								<th>DATE</th>								
							</tr>
";
							$i=0;
							while($rows=$res->fetch_assoc())
							{
								echo "<tr>";
								echo "<form action='attu.php' method='POST'>";
								echo "";
								echo "<td>{$rows["ann_notes"]}</td>";
								echo "<td>{$rows["sem"]}</td>";								
								echo "<td>{$rows["date"]}</td>";
								
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