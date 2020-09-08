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
						<h2 ALIGN="CENTER">Staff Adding Form</h2>
						<?php
						include "config.php";
							if(isset($_POST["Submit"]))
							{
								$sql = "insert into staff (staff_id, staff_name, staff_mail, staff_phone, staff_pass, staff_dob, staff_gender) VALUES (NULL, '{$_POST["Staff_Name"]}', '{$_POST["Staff_mail"]}', '{$_POST["Staff_phone"]}', '{$_POST["password"]}', '{$_POST["DOB"]}', '{$_POST["gender"]}')";
							    $res = $db->query($sql);
								if($res)
								{
								echo "<div class = 'success'><center><h1>Staff Added Successfully</h1><center></div>";
								}
								else
								{
								echo "<div class = 'error'><center><h1>ERROR TRY AGIN WITH DIFFERENT VALUES</h1><center></div>";
								}	
							
							}
							
						?>
						<form action="addstaff.php" method="post">
							<table border="0" align="center">
							<tbody>

							<tr>
							<td><label for="name">Staff_Name: </label></td>
							<td><input maxlength="50" name="Staff_Name" type="text" /></td>
							</tr>


							<tr>
							<td><label for="email">Staff_Email_Address:</label></td>
							<td><input maxlength="50" name="Staff_mail" type="email" /></td>
							</tr>
							<tr>
							<td><label for="phone">Staff_Phone:</label></td>
							<td><input maxlength="10" name="Staff_phone" type="number" /></td>
							</tr>
							
							<tr>
							<td><label for="password">Staff_Password:</label></td>
							<td><input  maxlength="50" name="password" type="password" /></td>
							</tr>
							
							<tr>
							<td><label for="DOB">DOB:</label></td>
							<td><input maxlength="50" name="DOB" type="date" /></td>
							</tr>
							<tr>
							<td><label for="gender">Staff_Gender:</label></td>
							<td><input type="radio" name="gender" value="male" checked required> Male<br>
							<input type="radio" name="gender" value="female"> Female<br></td>
							</tr>

							

							</tbody>
							</table>
							<center><input name="Submit" type="Submit" value="Add" /></center>
						</form>
				</div>
				<div id = "navi">
					<?php 
						include "adminBack.php";
					?>
				</div>
			</div>
		<body>


