<?php
session_start();
include "config.php";

if(!isset($_SESSION["stid"]))
{
	header("location:mainpage.php");
}
$st_usnid = $_SESSION["stid"];
$sql1= "SELECT st_usn,st_sem,st_name FROM student WHERE st_usn = $st_usnid";
$recent1 = mysqli_query($db, $sql1);
 while($rows = mysqli_fetch_assoc($recent1)){
	 $sem = $rows['st_sem'];
	 $st_name = $rows['st_name'];
 }
if(isset ($_POST['insert'])){
	
		$marksia = "INSERT INTO st_comp (st_usn, st_name, staff_name, sub_name, sem, date , Comp_notes) VALUES ('{$_POST["student_usn"]}','{$_POST["Student_name"]}','{$_POST["sutdent_staff"]}','{$_POST["student_subject"]}','{$_POST["Student_sem"]}','{$_POST["startdate"]}','{$_POST["annc_text"]}')";
		$db->query($marksia);
			header('location:scs.php');
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
				<form action="scomplaint.php" method="post">
							<table border="0" align="center">
							<tbody>
							<?php
							?>
							<tr>
							<center><h1>Class Feedback</h1></center>
							<tr>
							<td><label for="student_usn">Student Usn: </label></td>
							<td><select name="student_usn">
							<option>
							<?php
							echo $st_usnid;
							?>
							</option>
							</select></td>
							</tr>
							<tr>
							<td><label for="Student_name">Student Name:</label></td>
							<td><input maxlength="50" name="Student_name" type="text" required value="<?php echo $st_name; ?>"/></td>
							</tr>
							<tr>
							<td><label for="Student_sem">Sem:</label></td>
							<td><input maxlength="50" name="Student_sem" type="text" required value="<?php echo $sem; ?>"/>
							</td>
							</tr>
							<td><label for="sutdent_staff">Staff:</label></td>
							<td><select name="sutdent_staff" required><option>---Select Staff---</option>
							<?php
								 while($row = mysqli_fetch_assoc($recent)){?>
									<option value="<?php echo $row['staff_name']; ?>"><?php echo $row['staff_name']; ?></option>
							<?php } ?>
							</select>
							</td>
							</tr>
						<tr>
							<td><label for="student_subject">Subject:</label></td>
							<td><select name="student_subject" required>
							<option>---Select Subjects---</option>
							<?php
							if($sem == '2')
							{
							$m = "SELECT * FROM sem2";
							$semi = mysqli_query($db, $m);
							while($s = mysqli_fetch_array($semi)){	
							?>
									<option value="<?php echo $s['sub_name']; ?>"><?php echo $s['sub_name']; ?></option>
							<?php }
							}
								else{
							$m = "SELECT * FROM sem1";
							$semi = mysqli_query($db, $m);
							while($s = mysqli_fetch_array($semi)){	
							?>
									<option value="<?php echo $s['sub_name']; ?>"><?php echo $s['sub_name']; ?></option>
								<?php }}?>
							</select>
							</td>
							</tr>
							<tr>
							<td><label for="annc_text">Feedback Notes :</label></td>
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
						include "studentback.php";
					?>
				</div>
			
<body>