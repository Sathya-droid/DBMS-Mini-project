<?php
session_start();
include "config.php";
if(!isset($_SESSION["sid"]))
{
	header("location:mainpage.php");
}
 
if(isset ($_POST['insert'])){
		$marksia = "INSERT INTO attendance (st_usn, st_name, sem, sub_name, staff_name,att_persent) VALUES ('{$_POST["student_usn"]}','{$_POST["Student_name"]}','{$_POST["Student_sem"]}','{$_POST["student_subject"]}','{$_POST["sutdent_staff"]}','{$_POST["att"]}')";
		$db->query($marksia);
		if($marksia == true)
			header("location:attupdate.php");
		else
			echo "error";
			
}

$inersetadd ="";
if(isset ($_POST['add'])){
	$inersetadd = $_POST['add'];
	$st_usn = $_POST['st_usn'];
	$sqli = "SELECT * FROM student where st_usn = $st_usn";
	$recent1 = mysqli_query($db, $sqli);
	while($rows = mysqli_fetch_array($recent1)){
		$id = $rows['st_usn'];
		$name = $rows['st_name'];
		$sem = $rows['st_sem'];
}
}	
$sql= "SELECT staff_name FROM staff ORDER BY staff_name ";
$recent = mysqli_query($db, $sql);

?>

<html>
<body>
<?php
if($inersetadd == 'add')
{
?>
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
				<form action="attu.php" method="post">
							<table border="0" align="center">
							<tbody>
							<?php
							?>
							<tr>
							<center><h1>INSERT ATTENDANCE </h1></center>
							<td><label for="student_usn">Student Usn: </label></td>
							<td><select name="student_usn">
							<option>
							<?php
							echo $st_usn;
							?>
							</option>
							</select></td>
							</tr>
							<tr>
							<td><label for="Student_name">Student Name:</label></td>
							<td><input maxlength="50" name="Student_name" type="text" required value="<?php echo $name; ?>"/></td>
							</tr>
							<tr>
							<td><label for="Student_sem">Sem:</label></td>
							<td><input maxlength="50" name="Student_sem" type="text" required value="<?php echo $sem; ?>"/>
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
							<td><label for="sutdent_staff">Staff:</label></td>
							<td><select name="sutdent_staff" required><option>---Select Staff---</option>
							<?php
								 while($row = mysqli_fetch_assoc($recent)){?>
									<option value="<?php echo $row['staff_name']; ?>"><?php echo $row['staff_name']; ?></option>
							<?php } ?>
							</select>
							</td>
							</tr>
							
							<td><label for="att">Attendence Persent:</label></td>
							<td><input maxlength="50" name="att" type="text" /></td>
							</tr>
							
							</tbody>
							</table><center>
							
							<input type="submit" name="insert" value="Insert Attendance" class="buttonup"></center>
				</div>
				
				<div id = "navi">
					<?php 
						include "attback.php";
					?>
				</div>
			
<body>
<?php
}
else
{
	
	
	if(isset ($_POST['update'])){
	$st_usn = $_POST['st_usn'];
	}
	if(isset ($_POST['updatemarks'])){
	
	$si = $_POST['student_usn'];
	$sn = $_POST['Student_name'];
	$ss = $_POST['Student_sem'];
	$sj = $_POST['student_subject'];
	$st = $_POST['att'];
		$marksia = "UPDATE attendance SET att_persent = '{$_POST["att"]}' WHERE st_usn = '{$_POST["student_usn"]}' AND sub_name= '{$_POST["student_subject"]}'";
		$updated = $db->query($marksia);
			header("location:am.php");
	}
	
	$sqli = "SELECT * FROM student where st_usn = $st_usn";
	$recent1 = mysqli_query($db, $sqli);
	while($rows = mysqli_fetch_array($recent1)){
		$id = $rows['st_usn'];
		$name = $rows['st_name'];
		$sem = $rows['st_sem'];
		
}
	
$sql= "SELECT staff_name FROM staff ORDER BY staff_name ";
$recent = mysqli_query($db, $sql);
?>
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
				<form action="attu.php" method="post">
							<table border="0" align="center">
							<tbody>
							<tr>
							<center><h1>ATTENDANCE UPDATE</h1></center>
							<td><label for="student_usn">Student Usn: </label></td>
							<td><select name="student_usn">
							<option>
							<?php
							echo $st_usn;
							?>
							</option>
							</select></td>
							</tr>
							<tr>
							<td><label for="Student_name">Student Name:</label></td>
							<td><input maxlength="50" name="Student_name" type="text" required value="<?php echo $name; ?>"/></td>
							</tr>
							<tr>
							<td><label for="Student_sem">Sem:</label></td>
							<td><input maxlength="50" name="Student_sem" type="text" required value="<?php echo $sem; ?>"/>
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
							<td><label for="sutdent_staff">Staff:</label></td>
							<td><select name="sutdent_staff" required><option>---Select Staff---</option>
							<?php
								 while($row = mysqli_fetch_assoc($recent)){?>
								 <option value="<?php echo $row['staff_name']; ?>"><?php echo $row['staff_name']; }?></option>
							
							</select>
							</td>
							</tr>
							
							<td><label for="att">Attendence Persent:</label></td>
							<td><input maxlength="50" name="att" type="text" /></td>
							</tr>
							
							</tbody>
							</table><center>
							
							<input type="submit" name="updatemarks" value="Update Attendance" class="buttonup"></center>
				</div>
				
				<div id = "navi">
					<?php 
						include "attback.php";
					?>
				</div>
			
<body>
<?php }?>