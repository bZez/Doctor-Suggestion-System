<html>
<head>
<title>New User Registration</title>
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

<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" action="">
<table width="250" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td height="30" colspan="2" bgcolor="#99ccff"><center><b>New User Registration</b></center></td>
    </tr>
  <tr>
    <td>Your Name </td>
    <td><input type="text" name="admin_name" placeholder="Name" required="required"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="admin_password" placeholder="Password" required="required"></td>
  </tr>
  <tr>
    <td>Your Email </td>
    <td><input type="email" name="admin_email" placeholder="ex:abcd@gmail.com" required="required" ></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Register"></td>
  </tr>
</table>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
<center>Developed by:<br />
<a href="help.php">WEBER-007</a><center><br />

</body>
</html>

<?php
  
require_once "database_connection.php";

if(isset($_POST['Submit'])){
  $admin = $_POST['admin_name'];
  $password = $_POST['admin_password'];
  $admin_email=$_POST['admin_email'];
  $query = mysql_query("insert into admin (admin_id,admin_name,admin_password,admin_email) values (NULL,'".$admin."','".$password."','".$admin_email."')");
  if($query){
    
    echo "<center>You Have Successfully Registered<br/>";
    echo "<a href='login.php'>Login Now !</a></center>";


      }

}

 ?>