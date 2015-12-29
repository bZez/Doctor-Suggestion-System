<h2 style="text-align: center">Problem Lists</h2>


<body text="black" background="back.jpg">
</body>
<?php
//delete records
if(isset($_GET["id"])){
$id	=	$_GET['id'];	//getting student_id from address bar
$query	=	mysql_query("DELETE FROM students WHERE id=$id");
if($query){echo "<center>Records deleted successfully</center>";}else{echo "Sorry! Failed";}
}


?>




<table border="1" cellpadding="2" style="margin: 20px auto">
<tr><td>Name</td><td>Age</td><td>Sex</td><td>Phone</td><td> Problem in details</td><td><center>Actions</center></td><td>Solution</td></tr>

<?php

//getting records from students table
if(!isset($_SESSION['doctor_login'])){
	@$s_id = $_SESSION['student_id'];
	$query	=	mysql_query("SELECT * FROM students where id='".$s_id."'");
}
else{
	$query	=	mysql_query("SELECT * FROM students");
}

while($result=mysql_fetch_array($query)){
?>

<tr><td><?php echo $result["name"]; ?></td><td><?php echo $result["age"]; ?></td><td><?php echo $result["sex"]; ?></td>
<td><?php echo $result["phone"]; ?></td><td><?php echo $result["problem"]; ?>
<td><a href="index.php?s=3&id=<?php echo $result["id"]; ?>">Edit</a> / <a href="index.php?s=2&id=<?php echo $result["id"]; ?>">Delete</a></td>
</td><td><?php echo $result["solution"]; ?></td></tr>
<?php
}//end while loop
?>