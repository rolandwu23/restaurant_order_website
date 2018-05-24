<html>
<head>
 <title>View Database Record</title>
</head>
<body>
<p>Main Screen</p>
<hr>
<p><a href=view.php>View Database Record</a></p>
<p>Add New Database Record</p>
<p><a href=edit.php>Edit Database Record</a></p>
<p><a href=delete.php>Delete Database Record</a></p>
<hr>
<p>Add Database Record</p>
<hr>
<?php

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'assign';
$table_name = 'assign_order';
$conn= mysqli_connect($host,$user,$passwd,$database);
if($conn->connect_error){
  die("connection failed");
}
else{
  echo("connected successfully");
}

$name="";
$phno="";
$email="";
$age="";
$item="";
$quantity="";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=test_input($_POST["aname"]);
$phno=test_input($_POST["aphno"]);
$email=test_input($_POST["aemail"]);
$age=test_input($_POST["aage"]);
$item=test_input($_POST["aitem"]);
$quantity=test_input($_POST["aquantity"]);
}

$sql="UPDATE $table_name SET phno='$phno', email='$email', age='$age', item='$item', quantity='$quantity' WHERE name = '".$name."'";
mysqli_query($conn,$sql);


$conn->close();
?>
</body>
</html>
