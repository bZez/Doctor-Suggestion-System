<?php

require_once ("database_connection.php");

// getting admin_name and admin_password from login.php
$admin_name		=		$_POST['admin_name'];
$admin_password	=		$_POST['admin_password'];



//checking database for admin info
$sql		=	mysql_query("SELECT * FROM admin WHERE admin_name='$admin_name' AND admin_password='$admin_password'");
$result		=	mysql_fetch_array($sql);

//store admin info
$id			=	$result["admin_id"];
$name		=	$result["admin_name"];
$password	=	$result["admin_password"];

if($admin_name==$name && $admin_password==$password){
	session_start();
	$_SESSION['admin_id'] = $id;
	$_SESSION['student_id'] = $id;
		header("location:index.php");
	}
else
	{
		header("location:login.php");
	}
?>



