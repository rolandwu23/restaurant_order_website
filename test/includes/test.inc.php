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


$n="";
$p="";
$e="";
$a="";
$i="";
$q="";

$nameErr=$phnoErr=$emailErr=$ageErr=$itemErr=$quantityErr="";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(empty($_POST["name"])){
    $nameErr="Name is required";
  }
  else{
    $n=test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z]*$/",$n)){
      $nameErr="Only letters and white space allowed";
    }
  }
  if(empty($_POST["phno"])){
    $phnoErr="Ph No is required";
  }
  else{
    $p=test_input($_POST["phno"]);
    if(!is_numeric($p)){
      $phnoErr="Only numbers allowed";
    }
  }
  if(empty($_POST["email"])){
    $emailErr="Email is required";
  }
  else{
  $e=test_input($_POST["email"]);
    if(!filter_var($e,FILTER_VALIDATE_EMAIL)){
      $emailErr="Invalid email format";
    }
  }
  if(empty($_POST["age"])){
    $ageErr="Age is required";
  }
  else{
    $a=test_input($_POST["age"]);
    if(!is_numeric($a)){
      $ageErr="Only numbers allowed";
    }
  }

  if(empty($_POST["quantity"])){
    $quantityErr="Ph No is required";
  }
  else{
    $q=test_input($_POST["quantity"]);
    if(!is_numeric($q)){
      $quantityErr="Only numbers allowed";
    }
  }
  if(empty($_POST["item"])){
    $itemErr="Ph No is required";
  }
  else{
    $i=test_input($_POST["item"]);

  }


}

$sql="INSERT INTO assign_order (name,phno,email,age,item,quantity) VALUES ('$n','$p','$e','$a','$i','$q') ";
if(mysqli_query($conn,$sql))
{
  echo("order successfully");
}



//header("Location: ../index.php?insert=success");


$conn->close();

?>

<html>
<head>
<meta http-equiv="refresh" content="3;url=order.php">
</head>
</html>
