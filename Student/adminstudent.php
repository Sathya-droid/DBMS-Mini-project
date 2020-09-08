<?php
session_start();
if(!isset($_SESSION["id"]))
{
	header("location:mainpage.php");
}
?>
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
				<center> <h1>Admin Student Section</h1></center>
				</div>
				<div id = "navi">
					<?php 
						include "adminstudentsidebar.php";
					?>
				</div>
			</div>
		<body>


