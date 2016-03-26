<?php
	include "connect.php";
	include "session.php";
	$un = $_SESSION['uname'];

	
	mysql_query("DELETE FROM project.users WHERE uname='$un'") or die(mysql_error());
	header("Location:index.php");
?>