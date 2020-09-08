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
												<?php echo $_SESSION["staff_name"]; ?>
											  </h1>

										<!-- and role or location -->
										<h2>
												College Staff
											  </h2>
										<h2>
												<?php echo $_SESSION["smail"]; ?>
											  </h2>
									  </header>

									  <!-- bit of a bio; who are you? -->
									  <div class="profile-bio">

										<p>
										  A university is just a group of buildings gathered around a library.
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