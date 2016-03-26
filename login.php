<?php
	include "connect.php";
	include "session.php";
	session_start();
	$uname = $_POST["uname"];
	$upwd = $_POST["upwd"];
	$un = mysql_query("SELECT * FROM project.users WHERE uname='$uname' AND password='$upwd'") or die(mysql_error());
	$u_num = mysql_num_rows($un);
	if($u_num==0 || $uname=="")
	{
		header("Location:index1.php");
	}
	else
	{
			$_SESSION["uname"] = $uname;
			header("Location:profile.php");
	}
	
?>