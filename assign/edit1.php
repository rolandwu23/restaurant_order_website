<html>
<head>
 <title>View Database Record</title>
</head>
<body>
<p>Main Screen</p>
<hr>
<p><a href=view.php>View Database Record</a></p>
<p><a href=add.php>Add New Database Record</a></p>
<p>Edit Database Record</p>
<p><a href=delete.php>Delete Database Record</a></p>
<p><a href="logout.php">Log Out</a></p>
<hr>
<p>Edit Database Record</p>
<hr>
<?php

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'assign';
$table_name = 'assign_order';
$conn = mysqli_connect($host,$user,$passwd,$database);

$id = $_POST["id"];

$query = "SELECT * FROM $table_name WHERE id='".$id."'";
mysqli_select_db($conn,$database);
$result = mysqli_query($conn,$query);
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);
$id=$myrow['id'];
$name=$myrow['name'];
$phno=$myrow['phno'];
$email=$myrow['email'];
$age=$myrow['age'];
$item=$myrow['item'];
$quantity=$myrow['quantity'];

if (!$myrow){
 print "<p>No such record</p>";
}
else {

print" <form name='editform' action ='edit2.php' method='post'>
 <table>
 <tr><td> ID</td><td><input type='text' name='aid' value='$id'></td></tr>
 <tr><td>Name</td><td><input type='text' name='aname' value='$name'></td></tr>
 <tr><td>Phno</td><td><input type='text' name='aphno' value='$phno'></td></tr>
 <tr><td>Email</td><td><input type='text' name='aemail' value='$email'></td></tr>
 <tr><td>Age</td><td><input type='text' name='aage' value='$age'></td></tr>
  <tr><td>Item</td><td><input type='text' name='aitem' value='$item'></td></tr>
   <tr><td>Quantity</td><td><input type='text' name='aquantity' value='$quantity'></td></tr>
 <tr><td><input type='submit' value='submit' />
 <input type='reset' value='Reset Form'/></td>
 </tr>
 </table>
 </form>";
}
mysqli_close($conn);

 ?>
</body>
</html>
