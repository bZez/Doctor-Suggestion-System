<?php

require_once ("database_connection.php");

// getting admin_name and admin_password from login.php
if(isset($_REQUEST['doctor_login'])){
	@$d_name = $_REQUEST['doctor_name'];
	@$d_password = $_REQUEST['doctor_password'];


	//checking database for admin info
$sql		=	mysql_query("SELECT * FROM doctor WHERE d_name='".$doctor_name."' AND d_password='".$doctor_password."'") or die(mysql_error());
$result		=	mysql_fetch_array($sql) or die(mysql_error());

//store admin info
$id			=	$result["id"];
$name		=	$result["d_name"];
$password	=	$result["d_password"];

if($d_name==$name && $d_password==$password){
	session_start();
	$_SESSION['d_id']			=		$id;
	header("location:index.php");
	}
else
	{
	header("location:login.php");
	}
}




?>