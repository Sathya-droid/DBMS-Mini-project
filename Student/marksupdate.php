<?php
session_start();
include "config.php";
if(!isset($_SESSION["sid"]))
{
	header("location:mainpage.php");
}
 
if(isset ($_POST['insert'])){
		$marksia = "INSERT INTO ia_marks (student_usn, student_name, sem, sub_name, staff_name, TEST1, TEST2,FINALIA) VALUES ('{$_POST["student_usn"]}','{$_POST["Student_name"]}','{$_POST["Student_sem"]}','{$_POST["student_subject"]}','{$_POST["sutdent_staff"]}','{$_POST["b1"]}','{$_POST["b2"]}','{$_POST["fa"]}')";
		$db->query($marksia);
			{
				header("location:cm.php");
			}
			
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
				<form action="marksupdate.php" method="post">
							<table border="0" align="center">
							<tbody>
							<?php
							?>
							<tr>
							<center><h1>Marks Entry</h1></center>
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
							<tr>
							<td><label for="ia1">Best IA 1:</label></td>
							<td><input maxlength="50" name="b1" id="ia1" type="text" required /></td>
							</tr>
							<tr>
							<td><label for="ia2">Best IA 2:</label></td>
							<td><input maxlength="50" name="b2" id="ia2" type="text" required /></td>
							</tr>
							<tr>
							<td><label for="ia3">Calculate AVG  :</label></td>
							<td><input type ="button" onclick="average()"value="average" class="buttonup"></td>
							<script type"text/javascript">
							function average(){
								var a=parseInt(document.getElementById("ia1").value);
								var b=parseInt(document.getElementById("ia2").value);
								var afinal=((a+b)/2);
									document.getElementById('fia').value=afinal;
								}
							</script>   
							</tr>
							<td><label for="fia">Final_IA:</label></td>
							<td><input maxlength="50" name="fa" id="fia" type="text" /></td>
							</tr>
							
							</tbody>
							</table><center>
							
							<input type="submit" name="insert" value="insert marks" class="buttonup"></center>
				</div>
				
				<div id = "navi">
					<?php 
						include "marksback.php";
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
	$st = $_POST['sutdent_staff'];
	$ia1 = $_POST['b1'];
	$ia2 = $_POST['b2'];
	$fa = $_POST['fa'];
		$marksia = "UPDATE ia_marks SET TEST1='{$_POST["b1"]}',TEST2='{$_POST["b2"]}',FINALIA='{$_POST["fa"]}' WHERE student_usn = '{$_POST["student_usn"]}' AND sub_name= '{$_POST["student_subject"]}'";
		$updated = $db->query($marksia);
			header("location:cm.php");
		
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
				<form action="marksupdate.php" method="post">
							<table border="0" align="center">
							<tbody>
							<?php
							?>
							<tr>
							<center><h1>Marks Update</h1></center>
							<td><label for="student_usn">Student Usn: </label></td>
							<td><select name="student_usn" >
							<option value="<?php
							echo $st_usn;
							?>"> 
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
							<tr>
							<td><label for="ia1">Best IA 1:</label></td>
							<td><input maxlength="50" name="b1" id="ia1" type="text" required /></td>
							</tr>
							<tr>
							<td><label for="ia2">Best IA 2:</label></td>
							<td><input maxlength="50" name="b2" id="ia2" type="text" required /></td>
							</tr>
							<tr>
							<td><label for="ia3">Calculate AVG  :</label></td>
							<td><input type ="button" onclick="average()"value="average" class="buttonup"></td>
							<script type"text/javascript">
							function average(){
								var a=parseInt(document.getElementById("ia1").value);
								var b=parseInt(document.getElementById("ia2").value);
								var afinal=((a+b)/2);
									document.getElementById('fia').value=afinal;
								}
							</script>   
							</tr>
							<td><label for="fia">Final_IA:</label></td>
							<td><input maxlength="50" name="fa" id="fia" type="text" /></td>
							</tr>
							
							</tbody>
							</table><center>
							
							<input type="submit" name="updatemarks" value="Update marks" class="buttonup"></center>
				</div>
				
				<div id = "navi">
					<?php 
						include "marksback.php";
					?>
				</div>
			
<body>
<?php 
}
?>
