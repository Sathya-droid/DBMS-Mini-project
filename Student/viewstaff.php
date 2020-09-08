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
				<center> <h1>Admin Section</h1></center>
						<h2 ALIGN="CENTER">View Staff</h2>
						<?php
						include "config.php";
						$sql = "SELECT * FROM staff;";
						$res = $db->query($sql);
						if($res->num_rows>0)
						{
							echo "<table>
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>MAIL_ID</th>
							</tr>
";
							$i=0;
							while($rows=$res->fetch_assoc())
							{
								$i++;
								echo "<tr>";
								echo "<td>{$i}</td>";
								echo "<td>{$rows["staff_name"]}</td>";
								echo "<td>{$rows["staff_mail"]}</td>";
								echo "</tr>";
							}
								echo "</table>";
							
						}
							
						?>
					
				</div>
				<div id = "navi">
					<?php 
						include "adminBack.php";
					?>
				</div>
			</div>
		<body>


