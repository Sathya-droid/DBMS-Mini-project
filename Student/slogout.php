<?php
session_start();
unset($_SESSION["stid"]);
session_destroy();
header("location:mainpage.php");

?>