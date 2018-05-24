<?php


$server="localhost";
$username="root";
$password="";
$dbname="assign";

$conn=mysqli_connect($server,$username,$password,$dbname);
if($conn->connect_error){
  die("connection failed");
}
else{
  echo("connected successfully");
}


$u="";
$p="";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $u=test_input($_POST["username"]);
  $p=test_input($_POST["password"]);

}

$sql="SELECT * FROM login where username='$u' and password='$p' ";
$result=mysqli_query($conn,$sql);
while($row=$result->fetch_assoc()){
if($row['username']==$u && $row['password']==$p){
  echo ("Log In success");
}
}



header("Location: ../assign/view.php");

$conn->close();

?>
