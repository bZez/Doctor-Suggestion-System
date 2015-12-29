<center>
<h2>Add Your Problem With Details</h2>
</center>

<body text="black" background="back.jpg">
</body>





<!-- Student Entry Form -->
<center>
<form name="form1" method="post" action="">
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Name</td>
      <td><input name="name" type="text" placeholder="Patient name"" " required="required" ></td> 
    </tr>
    <tr>
      <td>Age</td>
      <td><input name="age" type="text" placeholder="Age" required="required"></td>
    </tr>
    <tr>
      <td>Sex</td>
      <td><input name="sex" type="text" placeholder="Sex" required="required"></td>
    </tr>
    <tr>
      <td>Contact Number</td>
      <td><input name="phone" type="text" placeholder="Contact Number" required="required"></td>
    </tr>
    <tr>
      <td>Problem In details</td>
      <td><input name="problem" type="text" placeholder="Problem" required="required" ></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>


<?php
if(isset($_POST["Submit"])){

  $name = $_POST["name"];
  $age  = $_POST["age"];
  $sex = $_POST["sex"];
  $phone  = $_POST["phone"];
  $problem  = $_POST["problem"];
  $id = $_SESSION['student_id'];
  $query=mysql_query("INSERT INTO students(id,name,age,sex,phone,problem) VALUES('".$id."','".$name."','".$age."','".$sex."','".$phone."','".$problem."')") or die(mysql_error());
  if($query)
    {
      echo "<center>Records added Successfully. Please wait for some moments for your suggetions.</center>";
    
    }
    else
      {
        echo "Sorry! Failed!";
      }

}
?>

<p>&nbsp;</p>
Developed by:<br />
<center><a href="help.php">WEBER-007</a><center><br />

</center>