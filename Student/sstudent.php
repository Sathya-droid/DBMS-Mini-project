
<?php
session_start();
include "config.php";
if(!isset($_SESSION["stid"]))
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
				<h1>Welcome <?php echo $_SESSION["st_name"]; ?></h1></center>
				<iframe src="pro/pro2.php" width="500" height="400"></iframe>
				</div>
				<div id = "navi">
					<?php 
						include "studentsidebar.php";
					?>
				</div>
			
		<body>
















