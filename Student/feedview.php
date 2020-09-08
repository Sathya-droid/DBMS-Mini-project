<?php
session_start();
include "config.php";
if(!isset($_SESSION["id"]))
{
	header("location:mainpage.php");
}



 if(isset($_POST["submit"]))
 {
$st_usn = $_POST["st_usn"];
	$sql1= "SELECT * FROM student WHERE st_usn = $st_usn";
	$recent1 = mysqli_query($db, $sql1);
	while($row = mysqli_fetch_assoc($recent1)){
	 $st_usn = $row['st_usn'];
	 $sem = $row['st_sem'];
	 $st_name = $row['st_name'];
	 
 }
	
	$staff_name = $_POST["staff_name"];
	$sub_name= $_POST["sub_name"];
	$sql = "SELECT * FROM fd_class WHERE st_usn = '$st_usn' AND sem = '$sem' AND st_name= '$st_name' AND staff_name= '{$_POST["staff_name"]}' AND sub_name= '{$_POST["sub_name"]}'";
	$res = $db->query($sql);
while($row1 = mysqli_fetch_assoc($res))
	{
		$q1 = $row1["q1"];
		$q2 = $row1["q2"];
		$q3 = $row1["q3"];
		$q4 = $row1["q4"];
		$q5 = $row1["q5"];
		$q6 = $row1["q6"];
		$q7 = $row1["q7"];
		$q8 = $row1["q8"];
		$q9 = $row1["q9"];
		$q10 = $row1["q10"];
		$q11 = $row1["q11"];
		
	}
?>

<html>
<body>
	<title> SMS</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script language="javascript">
				function printdiv(printpage)
				{
				var headstr = "<html><head><title></title></head><body>";
				var footstr = "</body>";
				var newstr = document.all.item(printpage).innerHTML;
				var oldstr = document.body.innerHTML;
				document.body.innerHTML = headstr+newstr+footstr;
				window.print();
				document.body.innerHTML = oldstr;
				return false;
				}
</script>
		</head>
		<body>
			<div id = "container">
				<div id = "header">
					<h1>Student Management System</h1>
				</div><div id="div_print">
				<div id = "wrapper">
				<ALIGN = "LEFT">
				<h3>STUDENT USN : <?PHP ECHO "$st_usn";?></h3>  <h3>SEM : <?PHP ECHO "$sem";?></h3>
				<h3>STUDENT NAME : <?PHP ECHO "$st_name";?></h3>
				<h3>STAFF NAME : <?PHP ECHO "$staff_name";?></</h3>
				<h3>SUBJECT : <?PHP ECHO "$sub_name";?></</h3>
				<H2>FEEDBACK FORM</H2>
				</align>
				<?php				
							echo "<table>
							<tr>
								<th>FEEDBACK QUESTIONS</th>
								<th>FEEDBACK</th>							
							</tr>
";
							
		
								
								echo "<form action='fbupdate.php' method='POST'>";
								echo "<tr ><center>";
								echo "<td><p><center>Oral Communication</p></center</td>";
								echo "<td><center>$q1</center</td>";
								echo "</tr ></center>";
								
								echo "<tr ><center>";
								echo "<td><p><center>Effectiveness of the Slides</p></center</td>";
								echo "<td><center>$q2</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Teaching Methodology</p></center</td>";
								echo "<td><center>$q3</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Creating interest in the subject</p></center</td>";
								echo "<td><center>$q4</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Pace (speed) of teaching</p></center</td>";
							echo "<td><center>$q5</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Examples to understand the concepts</p></center</td>";
								echo "<td><center>$q6</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Problem solving</p></center</td>";
								echo "<td><center>$q7</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Overall effectiveness </p></center</td>";
								echo "<td><center>$q8</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Quality of Video</p></center</td>";
								echo "<td><center>$q9</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Quality of Audio</p></center</td>";
								echo "<td><center>$q10</center</td>";
								echo "</tr ></center>";
																
								echo "<tr ><center>";
								echo "<td><p><center>Overall use of EDUSAT Program</p></center</td>";
								echo "<td><center>$q11</center</td>";
								echo "</tr ></center>";
								echo "</table>";
								echo '<input type="hidden" name="staff_name" value="'.$staff_name.'">';
								echo '<input type="hidden" name="sub_name" value="'.$sub_name.'">';			
				
?><center><input type="submit" name="b_print" VALUE="Print" onClick="printdiv('div_print');" class="buttonup"></center>
					<?php
							
								
								echo "</form>";
								
							
								;
							
						
							
					?>
				</div>
				<?php
				
	}
 
?>
				</div><div id = "navi">
					<?php 
						include "fbbackadmin.php";
					?>
				</div>
			
<body>