<?php
session_start();
	include "config.php";
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
				<center><h1>Welcome To SMS</h2><h1>Student login </h2></center>
				<div id= "up">
				<?php
				
					if(isset($_POST["submit"]))
					{
						$sql = "SELECT * FROM student WHERE st_mail = '{$_POST["staff_mail"]}' AND st_password = '{$_POST["password"]}'";
						$res = $db->query($sql);
						echo $sql;
						if($res->num_rows>0)
						{
							$con = $res->fetch_assoc();
							$_SESSION["stid"] = $con["st_usn"];
							$_SESSION["st_name"] = $con["st_name"];
							$_SESSION["stmail"] = $con["st_mail"];
							$_SESSION["stsem"] = $con["st_sem"];
							header("location:sstudent.php");
						}
						else
						{
							echo "<div class= 'error'>invalid user details</div>";
						}
					}
				?>
				<form action="student.php" method="POST"><center>
				<tr>
					<td><label>Mail Id</label></td>
					<td><input name="staff_mail" type="email" required></td>
					<td><label>Password </label></td>
					<td><input name="password" type="password"></td>
					<td><input type="submit" name="submit"></td></div></center>
				</tr>
				</form>
				</div>
				<div id = "navi">
					<?php 
						include "sidebar.php";
					?>
				</div>
			
		<body>


