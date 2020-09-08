<?php
session_start();
include "config.php";
if(!isset($_SESSION["stid"]))
{
	header("location:mainpage.php");
}

$st_usn = $_SESSION["stid"];
$sql1= "SELECT * FROM student WHERE st_usn = $st_usn";
$recent1 = mysqli_query($db, $sql1);
 while($row = mysqli_fetch_assoc($recent1)){
	 $st_usn = $row['st_usn'];
	 $sem = $row['st_sem'];
	 $st_name = $row['st_name'];
	 
 }
 if(isset($_POST["submit"]))
{
	$staff_name = $_POST["staff_name"];
	$sub_name= $_POST["sub_name"];
	$sql = "SELECT * FROM fd_class WHERE st_usn = '$st_usn' AND sem = '$sem' AND st_name= '$st_name' AND staff_name= '{$_POST["staff_name"]}' AND sub_name= '{$_POST["sub_name"]}'";
	$res = $db->query($sql);
}
	if($res->num_rows>0)
	{
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
				<ALIGN = "LEFT">
				<h3>STUDENT USN : <?PHP ECHO "$st_usn";?></h3>  <h3>SEM : <?PHP ECHO "$sem";?></h3>
				<h3>STUDENT NAME : <?PHP ECHO "$st_name";?></h3>
				<h3>STAFF NAME : <?PHP ECHO "$staff_name";?></</h3>
				<h3>SUBJECT : <?PHP ECHO "$sub_name";?></</h3>
				<CENTER><H2>Feedback Already Subbmitted</H2><a href="sfeedback.php"><button class="buttonup">BACK</button></a></center></div>
				</align>
<?php		
	}
	else
	{
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
				<ALIGN = "LEFT">
				<h3>STUDENT USN : <?PHP ECHO "$st_usn";?></h3>  <h3>SEM : <?PHP ECHO "$sem";?></h3>
				<h3>STUDENT NAME : <?PHP ECHO "$st_name";?></h3>
				<h3>STAFF NAME : <?PHP ECHO "$staff_name";?></</h3>
				<h3>SUBJECT : <?PHP ECHO "$sub_name";?></</h3>
				<CENTER><H2>FEEDBACK FORM</H2>
				</align>
				<?php				
					if(isset($_POST["add"]))
							{
								$sql2 = "insert into fd_class (st_usn, sem, st_name, staff_name, sub_name, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11) VALUES ('$st_usn', '$sem','$st_name', '{$_POST["staff_name"]}','{$_POST["sub_name"]}', '{$_POST["point1"]}','{$_POST["point2"]}','{$_POST["point3"]}','{$_POST["point4"]}','{$_POST["point5"]}','{$_POST["point6"]}','{$_POST["point7"]}','{$_POST["point8"]}','{$_POST["point9"]}','{$_POST["point10"]}','{$_POST["point11"]}')";
							    $res2 = $db->query($sql2);
								if($res2){
									echo "<script type='text/javascript'>window.top.location='fd_suc.php';</script>"; exit;
								}
								else{
								echo "<div class = 'error'><center><h1>try again</h1><center></div>";
								}
							}	
							
							echo "<table>
							<tr>
								<th>FEEDBACK QUESTIONS</th>
								<th>POOR</th>
								<th>GOOD</th>
								<th>AVERAGE</th>
								<th>VERY GOOD</th>
								<th>EXCELENT</th>							
							</tr>
";
							
		
								
								echo "<form action='fbupdate.php' method='POST'>";
								echo "<tr ><center>";
								echo "<td><p><center>Oral Communication</p></center</td>";
								echo "<td><center><input type='radio' name='point1' value='POOR' checked>POOR</center</td>";
								echo "<td><center><input type='radio' name='point1' value='GOOD'>GOOD</center</td>";
								echo "<td><center><input type='radio' name='point1' value='AVERAGE'>AVERAGE</center</td>";
								echo "<td><center><input type='radio' name='point1' value='VERY_GOOD'>VERY_GOOD</center</td>";
								echo "<td><center><input type='radio' name='point1' value='EXCELENT'>EXCELENT</center</td>";
								echo "</tr ></center>";
								
								echo "<tr ><center>";
								echo "<td><p><center>Effectiveness of the Slides</p></center</td>";
								echo "<td><center><input type='radio' name='point2'  value='POOR' checked>POOR</center</td>";
								echo "<td><center><input type='radio' name='point2' value='GOOD' >GOOD</center</td>";
								echo "<td><center><input type='radio' name='point2' value='AVERAGE'>AVERAGE</center</td>";
								echo "<td><center><input type='radio' name='point2' value='VERY_GOOD'>VERY_GOOD</center</td>";
								echo "<td><center><input type='radio' name='point2' value='EXCELENT'>EXCELENT</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Teaching Methodology</p></center</td>";
								echo "<td><center><input type='radio' name='point3' value='POOR' checked>POOR</center</td>";
								echo "<td><center><input type='radio' name='point3' value='GOOD'>GOOD</center</td>";
								echo "<td><center><input type='radio' name='point3' value='AVERAGE'>AVERAGE</center</td>";
								echo "<td><center><input type='radio' name='point3' value='VERY_GOOD'>VERY_GOOD</center</td>";
								echo "<td><center><input type='radio' name='point3' value='EXCELENT'>EXCELENT</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Creating interest in the subject</p></center</td>";
								echo "<td><center><input type='radio' name='point4'  value='POOR' checked>POOR</center</td>";
								echo "<td><center><input type='radio' name='point4' value='GOOD'>GOOD</center</td>";
								echo "<td><center><input type='radio' name='point4' value='AVERAGE'>AVERAGE</center</td>";
								echo "<td><center><input type='radio' name='point4' value='VERY_GOOD'>VERY_GOOD</center</td>";
								echo "<td><center><input type='radio' name='point4' value='EXCELENT'>EXCELENT</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Pace (speed) of teaching</p></center</td>";
								echo "<td><center><input type='radio' name='point5'  value='POOR'checked>POOR</center</td>";
								echo "<td><center><input type='radio' name='point5' value='GOOD'>GOOD</center</td>";
								echo "<td><center><input type='radio' name='point5' value='AVERAGE'>AVERAGE</center</td>";
								echo "<td><center><input type='radio' name='point5' value='VERY_GOOD'>VERY_GOOD</center</td>";
								echo "<td><center><input type='radio' name='point5' value='EXCELENT'>EXCELENT</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Examples to understand the concepts</p></center</td>";
								echo "<td><center><input type='radio' name='point6'  value='POOR'checked>POOR</center</td>";
								echo "<td><center><input type='radio' name='point6' value='GOOD'>GOOD</center</td>";
								echo "<td><center><input type='radio' name='point6' value='AVERAGE'>AVERAGE</center</td>";
								echo "<td><center><input type='radio' name='point6'  value='VERY_GOOD'>VERY_GOOD</center</td>";
								echo "<td><center><input type='radio' name='point6' value='EXCELENT'>EXCELENT</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Problem solving</p></center</td>";
								echo "<td><center><input type='radio' name='point7'  value='POOR'checked>POOR</center</td>";
								echo "<td><center><input type='radio' name='point7' value='GOOD'>GOOD</center</td>";
								echo "<td><center><input type='radio' name='point7' value='AVERAGE'>AVERAGE</center</td>";
								echo "<td><center><input type='radio' name='point7' value='VERY_GOOD'>VERY_GOOD</center</td>";
								echo "<td><center><input type='radio' name='point7' value='EXCELENT'>EXCELENT</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Overall effectiveness </p></center</td>";
								echo "<td><center><input type='radio' name='point8'  value='POOR'checked>POOR</center</td>";
								echo "<td><center><input type='radio' name='point8' value='GOOD'>GOOD</center</td>";
								echo "<td><center><input type='radio' name='point8' value='AVERAGE'>AVERAGE</center</td>";
								echo "<td><center><input type='radio' name='point8' value='VERY_GOOD'>VERY_GOOD</center</td>";
								echo "<td><center><input type='radio' name='point8' value='EXCELENT'>EXCELENT</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Quality of Video</p></center</td>";
								echo "<td><center><input type='radio' name='point9'  value='POOR'checked>POOR</center</td>";
								echo "<td><center><input type='radio' name='point9'  value='GOOD'>GOOD</center</td>";
								echo "<td><center><input type='radio' name='point9' value='AVERAGE'>AVERAGE</center</td>";
								echo "<td><center><input type='radio' name='point9' value='VERY_GOOD'>VERY_GOOD</center</td>";
								echo "<td><center><input type='radio' name='point9' value='EXCELENT'>EXCELENT</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Quality of Audio</p></center</td>";
								echo "<td><center><input type='radio' name='point10'  value='POOR'checked>POOR</center</td>";
								echo "<td><center><input type='radio' name='point10' value='GOOD'>GOOD</center</td>";
								echo "<td><center><input type='radio' name='point10' value='AVERAGE'>AVERAGE</center</td>";
								echo "<td><center><input type='radio' name='point10' value='VERY_GOOD'>VERY_GOOD</center</td>";
								echo "<td><center><input type='radio' name='point10' value='EXCELENT'>EXCELENT</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Overall use of EDUSAT Program</p></center</td>";
								echo "<td><center><input type='radio' name='point11'  value='POOR'checked>POOR</center</td>";
								echo "<td><center><input type='radio' name='point11' value='GOOD'>GOOD</center</td>";
								echo "<td><center><input type='radio' name='point11' value='AVERAGE'>AVERAGE</center</td>";
								echo "<td><center><input type='radio' name='point11' value='VERY_GOOD'>VERY_GOOD</center</td>";
								echo "<td><center><input type='radio' name='point11' value='EXCELENT'>EXCELENT</center</td>";
								echo "</tr ></center>";
								echo "</table>";
								echo '<input type="hidden" name="staff_name" value="'.$staff_name.'">';
								echo '<input type="hidden" name="sub_name" value="'.$sub_name.'">';
								echo '<center><input type="submit" name="add" VALUE="submit" class="buttonup"></center>';
								
								
				
								
					?>
					<?php
							
								
								echo "</form>";
								
							
								
							
						
							
					?>
				</div>
				<?php
				
	}
	
?>
				<div id = "navi">
					<?php 
						include "fbback.php";
					?>
				</div>
			
<body>