<?php
session_start();
include "config.php";
if(!isset($_SESSION["id"]))
{
	header("location:mainpage.php");
}
function countRecord($sql,$db)
{
	$res = $db->query($sql);
	return $res->num_rows;
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
				<center> <h1>Admin Section</h1></center>
				 <H3>
				<ul>
					<li>TOTAL STUDENTS IN FRIST SEM : <?php echo countRecord("select * from student where st_sem = 1",$db);?></li></br>
					<li>TOTAL STUDENTS IN SECOND SEM : <?php echo countRecord("select * from student where st_sem = 2",$db);?></li></br>
					<li>TOTAL NUMBER OF STAFF : <?php echo countRecord("select * from staff",$db);?></li></br>
				</ul></h3>
				</div>
				<div id = "navi">
					<?php 
						include "adminsidebar.php";
					?>
				</div>
			</div>
		<body>


