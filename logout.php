<?php
	session_start();
	session_destroy();
?>

<html>

<head>
	<title>Loging out</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
       <?php


	echo "
				<p align=center><b>You have been logged out successfully.</b></p>
				<p align=center>Please wait for a moment.....</p>
		";
	echo ("<META HTTP-EQUIV=Refresh CONTENT=\"1; URL=./\">");


?>

</body>
</html>