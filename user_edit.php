<?php
	include "connect.php";
	include "session.php";
	$un = $_SESSION['uname'];
	$name =	$_POST["name"];
	$uname =	$_POST["uname"];
	$password =	$_POST["upwd"];
	$dob =	$_POST["dob"];
	$bld_grp = $_POST["bld_grp"];
	$gender =	$_POST["gender"];
	$weight =	$_POST["weight"];
	$r_phn =	$_POST["r_phn"];
	$o_phn =	$_POST["o_phn"];
	$m_phn =	$_POST["m_phn"];
	$email =	$_POST["email"];
	$address =	$_POST["address"];
	$city =	$_POST["city"];
	
	mysql_query("UPDATE project.users SET name='$name',uname='$uname',password='$password',dob='$dob',bld_grp='$bld_grp',gender='$gender',weight='$weight',r_phn='$r_phn',o_phn='$o_phn',m_phn='$m_phn',email='$email',address='$address' WHERE uname='$un'") or die(mysql_error());
	header("Location:profile.php");
?>