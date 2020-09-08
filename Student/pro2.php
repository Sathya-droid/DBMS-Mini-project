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
	
				<div id = "wrapper">
				<center>
				
							<aside class="profile-card">
									  <header>
										<!-- hereâ€™s the avatar -->
										<a target="_blank" href="#">
										<link rel="stylesheet" type="text/css" href="css/style_profile.css">
										  <img src="avatar.png" class="hoverZoomLink">
										</a>

										<!-- the username -->
										<h1>
												<?php echo $_SESSION["st_name"]; ?>
											  </h1>

										<!-- and role or location -->
										<h2>
												College Student
											  </h2>
										<h2>
												<?php echo $_SESSION["stmail"]; ?>
											  </h2>
									  </header>

									  <!-- bit of a bio; who are you? -->
									  <div class="profile-bio">

										<p>
										 Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.
										</p>

									  </div>

									  <!-- some social links to show off -->
									  <ul class="profile-social-links">
										<li>
										  <a target="_blank" href="#">
											<i class="fa fa-facebook"></i>
										  </a>
										</li>
										<li>
										  <a target="_blank" href="#">
											<i class="fa fa-twitter"></i>
										  </a>
										</li>
										<li>
										  <a target="_blank" href="#">
											<i class="fa fa-github"></i>
										  </a>
										</li>
										<li>
										  <a target="_blank" href="#">
										   
											<i class="fa fa-behance"></i>
										  </a>
										</li>
									  </ul>
									</aside>
				</div>
				<div id = "navi">
	<body>