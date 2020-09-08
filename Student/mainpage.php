<?php
session_start();
	include "config.php";
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
				<center><h1>Welcome To SMS</h2><h1>Admin login </h2></center>
				<div id= "up">
				<?php
				
					if(isset($_POST["submit"]))
					{
						$sql = "SELECT * FROM admin WHERE username = '{$_POST["username"]}' AND password = '{$_POST["password"]}'";
						$res = $db->query($sql);
						if($res->num_rows>0)
						{
							$con = $res->fetch_assoc();
							$_SESSION["id"] = $con["id"];
							$_SESSION["username"] = $con["username"];
							header("location:admin.php");
						}
						else
						{
							echo "<div class= 'error'>invalid user details</div>";
						}
					}
				?>
				<form method ="post" action="mainpage.php"> <center>
				<tr>
					<td><label>User Name</label></td>
					<td><input name="username" type="text"></td>
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
















