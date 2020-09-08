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
				<center><h1>Welcome To SMS</h2><h1>Change Password Of Staff </h2></center>
				<div id= "up">
				<?php
				
					if(isset($_POST["submit"]))
					{
						$sql = "SELECT * FROM staff WHERE staff_pass = '{$_POST["opass"]}' AND staff_id = '{$_SESSION["sid"]}'";
						$res = $db->query($sql);
						if($res->num_rows>0)
						{
							$s = "update staff set staff_pass = '{$_POST["npass"]}' where staff_id = '{$_SESSION["sid"]}'";
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
						include "staffsidebar.php";
					?>
				</div>
			
		<body>


