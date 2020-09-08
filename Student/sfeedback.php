<?php
session_start();
include "config.php";
if(!isset($_SESSION["stid"]))
{
	header("location:mainpage.php");
}
$st_usn = $_SESSION["stid"];
$sql1= "SELECT st_usn,st_sem,st_name FROM student WHERE st_usn = $st_usn";
$recent1 = mysqli_query($db, $sql1);
 while($row = mysqli_fetch_assoc($recent1)){
	 $sem = $row['st_sem'];
	 $st_name = $row['st_name'];
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
				<h1> FEEDBACK FORM</h1>
				<?php
						include "config.php";
						
						$sql = "SELECT * FROM ia_marks WHERE student_usn = $st_usn ;";
						$res = $db->query($sql);
						if($res->num_rows>0)
						{
							
							echo "<table>
							<tr>
								<th>SUBJECT</th>
								<th>STAFF NAME</th>
								<th>FEEDBACK</th>								
							</tr>
";
							$i=0;
							while($rows=$res->fetch_assoc())
							{
								echo "<tr>";
								echo "<form action='fbupdate.php' method='POST'>";
								echo "";
								echo "<td>{$rows["sub_name"]}</td>";								
								echo "<td>{$rows["staff_name"]}</td>";
								echo '<input type="hidden" name="st_usn" value="'.$st_usn.'">';
								echo '<input type="hidden" name="staff_name" value="'.$rows['staff_name'].'">';
								echo '<input type="hidden" name="sub_name" value="'.$rows['sub_name'].'">';
								echo '<td><input type="submit" name="submit" VALUE="submit" class="buttonup"></td>';
								
					?>
					<?php
							
								
								echo "</form>";
								echo "</tr>";
							}
								echo "</table>";
							
						}
						else
						{
							echo "<h2>FEEDBACK FORMS NOT ENABLED FOR NOW </H2>";
						}
							
					?></center>
				</div>
				<div id = "navi">
					<?php 
						include "stUDENTback.php";
					?>
				</div>
			
<body>