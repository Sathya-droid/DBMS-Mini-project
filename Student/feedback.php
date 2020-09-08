<?php
session_start();
include "config.php";
if(!isset($_SESSION["id"]))
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
				<h1> </h1></center>
				<?php
						include "config.php";
						$sql = "SELECT * FROM student;";
						$res = $db->query($sql);
						if($res->num_rows>0)
						{
							
							echo "<table>
							<tr>
								<th>USN</th>
								<th>NAME</th>
								<th>SEM</th>
								<th>BRANCH</th>
								<th>MAIL_ID</th>
								<th>FEEDBACK REPORT</th>
								
							</tr>
";
							$i=0;
							while($rows=$res->fetch_assoc())
							{
								echo "<tr>";
								echo "<form action='fd_view.php' method='POST'>";
								echo "<td>{$rows["st_usn"]}</td>";
								echo "<td>{$rows["st_name"]}</td>";
								echo "<td>{$rows["st_sem"]}</td>";
								echo "<td>{$rows["Branch"]}</td>";
								echo "<td>{$rows["st_mail"]}</td>";
								echo '<input type="hidden" name="st_usn" value="'.$rows["st_usn"].'">';
								echo '<td><input type="submit" name="add" VALUE="VIEW REPORT" class="buttonup"></td>';
								
					?>
					<?php
							
								
								echo "</form>";
								echo "</tr>";
							}
								echo "</table>";
							
						}
							
					?>
				</div>
				<div id = "navi">
					<?php 
						include "adminback.php";
					?>
				</div>
			
<body>