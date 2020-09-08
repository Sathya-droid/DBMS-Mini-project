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
				<h1>Welcome <?php echo $_SESSION["staff_name"]; ?></h1></center>
				<a href="iaupdate.php">
				<button  class="button button1">Internal Marks</button></a></br>
				<a href="aupdate.php">
				<button class="button button2">attendance</button></a>	
				</div>
				<div id = "navi">
					<?php 
						include "staffback.php";
					?>
				</div>
			
<body>
















