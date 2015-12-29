<?php

require_once ("database_connection.php");
	if(!isset($_SESSION['admin_id']))
		{			
			header("location:login.php");
		}
		
		


		
?>

<html>
<head>
<title>Doctors Suggetion</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
body{
  background-image:url('back.jpg');
  background-repeat: no-repeat;
  background-attachment:fixed;
  background-size: 1600px 675px;
  background-position: center top;
}
</style>
<body>

<h1 align="center">Doctor's Suggetion System</h1>

<center><a href="index.php">Home</a> / <a href="index.php?s=1">Add your Problem</a> / <a href="index.php?s=2">Problem List</a> / <a href="logout.php">Logout</a></center>

<br />

<hr>

<?php

	if(!isset($_GET['s'])) { $s	=	""; }
	else { $s	=	$_GET['s'];	}
	switch($s)	{

//Admin	1-10
					case "":
					include_once("welcome.php");
					break;

					case 1:
					include_once("student_add.php");
					break;

					case 2:
					include_once("patient_list.php");
					break;

					case 3:
					include_once("patient_edit.php");
					break;

					case 4:
					include_once("student_search.php");
					break;

					
					default:
					include_once("welcome.php");
					break;
}//end of switch
?>







</body>
</html>