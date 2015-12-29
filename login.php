<?php

require_once 'database_connection.php';
 ?>

<html>
<head>
<title>Doctors Suggestion Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vGallery.js Small Demo</title>
    <script src="assets/jquery.js"></script>
    <script src="assets/vgallery.js"></script>
    <script src="assets/shuvo.js" type="text/javascript"></script>
    <link href="assets/style.css" rel="stylesheet"/>
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

<center>
<h1 style="color: #d279a6"><strong>Welcome to Doctor's Suggestion System</strong></h1>
</center>
<center>
<p>You can get suggetion from our highly quallified Doctor to get rid from your illness. 
Just register to our website and submit your problem and see the magic within a short time.</p>
</center>
      <div id="wrapper">
        <div id="gallery"></div>
        <div id="indicators_wrapper">
            <div id="indicators"></div>
        </div>
        <div id="text"></div>
    </div>
<form method="post" action="checklogin.php">
<table width="250" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
  <!--  <td height="30" colspan="2" bgcolor="#CCCCCC"><center><b>Log in here</b></center></td>
  </tr>-->
  <p>&nbsp;</p>
  <tr>
    <td height="30" colspan="2" bgcolor="#CCCCCC"><center><b>Patient Log In here</b></center></td>
  </tr>
  <tr>
    <td>User Name </td>
    <td><input type="text" name="admin_name" placeholder="User Name" required="required"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="admin_password" placeholder="Password" required="required"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="patient_login" value="Submit"></td>
  </tr>

</table>
</form>

<!--From 2-->
<form method="get" action="">
    <table width="250" border="0" align="center" cellpadding="0" cellspacing="5">
    <tr>
      <td height="30" colspan="2" bgcolor="#CCCCCC"><center><b>Doctor Log In here</b></center></td>
    </tr>
  <tr>
    <td>User Name </td>
    <td><input type="text" name="doctor_name" placeholder="Doctors name" required="required"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="doctor_password" placeholder="Password" required="required"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="doctor_login" value="Submit"></td>
  </tr>

</table>
</form>

<center><a href="register.php">New User Registration Here</a><center>

<center><a href="help.php">Contuct us</a><center>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
Developed by:<br />
<center><a href="help.php">WEBER-007</a><center><br />

</body>
</html> 


<?php
if(isset($_REQUEST['doctor_login'])){
  $doctor_name = $_REQUEST['doctor_name'];
  $doctor_password = $_REQUEST['doctor_password'];

  $query = "select *from doctor where d_name='".$doctor_name."' and d_password ='".$doctor_password."'";
  echo $query = mysql_query($query) or die(mysql_error());
  if($query){
    echo 'Login success';    
    $_SESSION['doctor_login'] = true;
    header('location: doctor.php');
  }
  else{
    echo 'Failed to login';
  }

}

 ?>