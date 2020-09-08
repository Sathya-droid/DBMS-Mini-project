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
				<center><h1>Welcome To SMS</h2><h1>Staff login </h2></center>
				<div id= "up">
				<?php
				
					if(isset($_POST["submit"]))
					{
						$sql = "SELECT * FROM staff WHERE staff_mail = '{$_POST["staff_mail"]}' AND staff_pass = '{$_POST["password"]}'";
						$res = $db->query($sql);
						if($res->num_rows>0)
						{
							$con = $res->fetch_assoc();
							$_SESSION["sid"] = $con["staff_id"];
							$_SESSION["staff_name"] = $con["staff_name"];
							$_SESSION["smail"] = $con["staff_mail"];
							header("location:sstaff.php");
						}
						else
						{
							echo "<div class= 'error'>invalid user details</div>";
						}
					}
				?>
				<form action="staff.php" method="POST"><center>
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


