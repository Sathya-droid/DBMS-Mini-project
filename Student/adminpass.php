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
				<center><h1>Welcome To SMS</h2><h1>Change Password Of Admin </h2></center>
				<div id= "up">
				<?php
				
					if(isset($_POST["submit"]))
					{
						$sql = "SELECT * FROM admin WHERE password = '{$_POST["opass"]}' AND id = '{$_SESSION["id"]}'";
						$res = $db->query($sql);
						if($res->num_rows>0)
						{
							$s = "update admin set password = '{$_POST["npass"]}' where id = '{$_SESSION["id"]}'";
							$db->query($s);
							echo "<div class= 'sucess'>Password Changed Successfully</div>";
						}
						else
						{
							echo "<div class= 'error'>invalid Password</div>";
						}
					}
				?>
				<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"><center>
				<tr>
					<td><label>Old password</label></td>
					<td><input name="opass" type="password" required></td>
					<td><label>New Password </label></td>
					<td><input name="npass" type="password"></td>
					<td><input type="submit" name="submit"></td></div></center>
				</tr>
				</form>
				</div>
				<div id = "navi">
					<?php 
						include "adminsidebar.php";
					?>
				</div>
			
		<body>


