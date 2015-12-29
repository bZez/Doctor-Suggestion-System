<h2 style="text-align: center">Suggetion</h2>

<body text="black" background="back.jpg">
</body>

<?php

$id		=	$_GET["id"]; //getting students id from address bar

$query	=	mysql_query("SELECT * FROM students WHERE id=$id");
$result	=	mysql_fetch_array($query);
?>


<!-- Edit form -->
<center>
<form name="form1" method="post" action="">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Name</td>
      <td><input name="name" type="text" value="<?php echo $result["name"]; ?>"></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input name="age" type="text"  value="<?php echo $result["age"]; ?>"></td>
    </tr>
    <tr>
      <td>Sex</td>
      <td><input name="sex" type="text"  value="<?php echo $result["sex"]; ?>"></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><input name="phone" type="text" value="<?php echo $result["phone"]; ?>"></td>
    </tr>
    <tr>
      <td>Problem</td>
      <td><input name="problem" type="text"  value="<?php echo $result["problem"]; ?>"></td>
    </tr><tr>
      <td>Solution</td>
      <td><input name="solution" type="text" placeholder="Solution" required="required"  value="<?php echo $result["solution"]; ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Edit" value="Done"></td>
    </tr>
  </table>
</form>

</center>
<p>&nbsp;</p>
<center>Developed by:<br />
<a href="help.php">WEBER-007</a><center><br />

<?php
if(isset($_POST["Edit"])){
  $id   = $_GET["id"]; //getting students id from address bar
  
  
  $name = $_POST["name"];
  $age  = $_POST["age"];
  $sex = $_POST["sex"];
  $phone  = $_POST["phone"];
  $problem  = $_POST["problem"];
  $solution  = $_POST["solution"];
  
  $query=mysql_query("UPDATE students SET name='$name',age='$age',sex='$sex',phone='$phone',problem='$problem',solution='$solution' WHERE id=$id");
  if($query){echo "<center>Suggetion Given Successfully</center>";}else{echo "Sorry! Failed!";}

}
?>
