<?php
session_start();

if(!isset($_SESSION["id"]))
{
	header("location:mainpage.php");
}
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
	<title> SMS</title>
		<link rel="stylesheet" type="text/css" href="css/style_add.css">
		</head>
		<body>
			<div id = "container">
				<div id = "header">
					<h1>Student Management System</h1>
				</div>
				<div id = "wrapper">
				<center> <h1>Admin Section</h1></center>
						<h2 ALIGN="CENTER">Student Adding Form</h2>
						<?php
						include "config.php";
							if(isset($_POST["Submit"]))
							{
								$sql = "insert into student (st_usn, st_name, st_mail, st_password, st_father, st_mother, st_parentsmail, st_dob, phone, st_sem, Branch, gender) VALUES (NULL, '{$_POST["st_name"]}', '{$_POST["st_mail"]}', '{$_POST["st_password"]}', '{$_POST["st_father"]}', '{$_POST["st_mother"]}', '{$_POST["st_parentsmail"]}', '{$_POST["st_dob"]}', '{$_POST["st_phone"]}', '{$_POST["st_sem"]}', '{$_POST["branch"]}', '{$_POST["gender"]}')";
							    $res = $db->query($sql);
								if($res)
								{
								echo "<div class = 'success'><center><h1>Student Added Successfully</h1><center></div>";
								}
								else
								{
									echo "<div class = 'error'><center><h1>ERROR TRY AGIN WITH DIFFERENT VALUES</h1><center></div>";
								}
							
							}
							
						?>
						<form action="student_add.php" method="post">
							<table border="0" align="center">
							<tbody>

							<tr>
							<td><label for="name">Name: </label></td>
							<td><input  maxlength="50" name="st_name" type="text" required /></td>
							</tr>

							<tr>
							<td><label for="st_mail">Student_Email_Address: </label></td>
							<td><input  maxlength="50" name="st_mail" type="email"required  /></td>
							</tr>
							<tr>
							<td><label for="st_password">Password:</label></td>
							<td><input maxlength="50" name="st_password" type="password" required /></td>
							</tr>
							<tr>
							<td><label for="st_father">Father_name: </label></td>
							<td><input maxlength="50" name="st_father" type="text"required /></td>
							</tr>

							<tr>
							<td><label for="st_mother">Mother_Name: </label></td>
							<td><input  maxlength="50" name="st_mother" type="text"required /></td>
							</tr>

							<tr>
							<td><label for="st_parentsmail">Parents_Email_Address:</label></td>
							<td><input  maxlength="50" name="st_parentsmail" type="email" required /></td>
							</tr>

							<tr>
							<td><label for="st_dob">DOB:</label></td>
							<td><input  maxlength="50" name="st_dob" type="date"required /></td>
							</tr>
							<tr>
							<td><label for="st_phone">Phone:</label></td>
							<td><input  maxlength="10" name="st_phone" type="number"required /></td>
							</tr>		
							<tr>
							<td><label for="st_sem">Sem: </label></td>
							<td><select name="st_sem">
							<option>1</option>
							<option>2</option>
</td>
							</tr>
							<tr>
							<td><label for="branch">Branch: </label></td>
							<td><input  maxlength="50" name="branch" type="text"required /></td>
							</tr>
							<tr>
							<td><label for="Gender">Gender: </label></td>
							<td><input type="radio" name="gender" value="male" checked required> Male<br></td>
							<td><input type="radio" name="gender" value="female"> Female<br></td>
							</tr>
							<tr>
							<td align="right"><input name="Submit" type="Submit" value="Add" /></td>
							</tr>
							</body>
							</table>
						</form>
				</div>
				<div id = "navi">
					<?php 
						include "adminBack.php";
					?>
				</div>
		
		<body>


