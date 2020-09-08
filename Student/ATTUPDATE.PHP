<?php
session_start();
include "config.php";
if(!isset($_SESSION["sid"]))
{
	header("location:mainpage.php");
}
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
				<center><h1></br>Attendance Updated </h1>
				<a href="aupdate.php"><button class="buttonup">BACK</button></a></center></div>
				<div id = "navi">
					<?php 
						
					?>
				</div>
			
		<body>

