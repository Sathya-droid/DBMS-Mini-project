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
								<th>INSERT ATTENDANCE </th>
								<th>UPDATE ATTENDANCE </th>
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
								echo "<td>{$rows["st_sem"]}</td>";
								echo "<td>{$rows["Branch"]}</td>";
								echo "<td>{$rows["st_mail"]}</td>";
								echo '<input type="hidden" name="st_usn" value="'.$rows["st_usn"].'">';
								echo '<td><center><input type="submit" name="add" VALUE="add" class="buttonup"></center></td>';
								echo '<td><center><input type="submit" name="update" VALUE="update" class="buttonup"></center></td>';
								
					?>
					<?php
							
								
								echo "</form>";
								echo "</tr>";
							}
								echo "</table>";
							
						}
						else{
							echo "no records found";
						}
							
					?></center>
				</div>
				<div id = "navi">
					<?php 
						include "staffback.php";
					?>
				</div>
			
<body>