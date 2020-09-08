<?php

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
}
$sql = "SELECT * FROM 'admin' WHERE 'username'='$username' AND 'password'='$password'";
$result = mysql_query($sql)or die(mysql_error());
if(mysql_num_rows($result)){
	echo "login success";
}
else
{
	echo "login failure";
}
?>