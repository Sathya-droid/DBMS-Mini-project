<?php
session_start();
include "config.php";
if(!isset($_SESSION["sid"]))
{
	header("location:mainpage.php");
}
 
if(isset ($_POST['insert'])){
		$marksia = "INSERT INTO class_announcement (staff_name, sem, acc_notes, time) VALUES ('{$_POST["sutdent_staff"]}','{$_POST["Student_sem"]}','{$_POST["annc_text"]}','{$_POST["startdate"]}')";
		$db->query($marksia);
			{
				header("location:ann_c.php");
			}
			
}


$sql= "SELECT staff_name FROM staff ORDER BY staff_name ";
$recent = mysqli_query($db, $sql);

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
				<h1> </h1></center>
				<form action="studentannouncement.php" method="post">
							<table border="0" align="center">
							<tbody>
							<?php
							?>
							<tr>
							<center><h1>Staff Announcement</h1></center>
							<td><label for="sutdent_staff">Staff:</label></td>
							<td><select name="sutdent_staff" required><option>---Select Staff---</option>
							<?php
								 while($row = mysqli_fetch_assoc($recent)){?>
									<option value="<?php echo $row['staff_name']; ?>"><?php echo $row['staff_name']; ?></option>
							<?php } ?>
							</select>
							</td>
							</tr>
			
							<td><label for="Student_sem">Sem:</label></td>
							<td>
							<select name="Student_sem">
							<option>---Select sem---</option>
							<option>1</option>
							<option>2</option></select>
							</td>
							</tr>
							<tr>
							<td><label for="annc_text">Announcement :</label></td>
							<td> <textarea name="annc_text" placeholder="Describe yourself here..."> </textarea> </td>
							</tr>
							

							
							<input type="hidden" name="startdate" id="todayDate"/>
										<script type="text/javascript">
										function getDate()
										{
											var today = new Date();
											var dd = today.getDate();
											var mm = today.getMonth()+1; //January is 0!
											var yyyy = today.getFullYear();
											if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm}
											today = yyyy+""+mm+""+dd;

											document.getElementById("todayDate").value = today;
										}

										//call getDate() when loading the page
										getDate();
										</script>


							</tbody>
							</table><center>
							
							<input type="submit" name="insert" value="Submit" class="buttonup"></center>
				</div>
				
				<div id = "navi">
					<?php 
						include "staffback.php";
					?>
				</div>
			
<body>