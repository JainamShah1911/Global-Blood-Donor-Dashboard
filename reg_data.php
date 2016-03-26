<?php
	include "connect.php";
	
	$name =	$_POST["name"];
	$uname =	$_POST["uname"];
	$password =	$_POST["password"];
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
	
	mysql_query("INSERT INTO project.users (name, uname, password, dob, bld_grp, gender, weight, r_phn, o_phn, m_phn, email, address, city) VALUES ('$name', '$uname', '$password', '$dob', '$bld_grp', '$gender', '$weight', '$r_phn', '$o_phn', '$m_phn', '$email', '$address', '$city')") or die(mysql_error());
	header("Location:index.php");
?>