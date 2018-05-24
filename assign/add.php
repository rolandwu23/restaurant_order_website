<html>
<head>
 <title>View Database Record</title>
 <style>.error {color: #FF0000;}</style>
</head>
<body>
<p>Main Screen</p>
<hr>
<p><a href=view.php>View Database Record</a></p>
<p>Add New Database Record</p>
<p><a href=edit.php>Edit Database Record</a></p>
<p><a href=delete.php>Delete Database Record</a></p>
<p><a href="logout.php">Log Out</a></p>
<hr>
<p>Add Database Record</p>
<hr>
<?php

//database connection
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

$n="";
$p="";
$e="";
$a="";
$i="";
$q="";
$nameErr=$phnoErr=$emailErr=$ageErr=$itemErr=$quantityErr="";
$nameTag=$phnoTag=$emailTag=$ageTag=$itemTag=$quantityTag="FALSE";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){

//tet for empty field
  if(empty($_POST["name"]))
  {
    $nameErr="Name is required";
    $nameTag="TRUE";
  }

  //test for only letters
elseif(!preg_match("/^[a-zA-Z]*$/",test_input($_POST["name"])))
{
      $nameErr="Only letters and white space allowed";
        $nameTag="TRUE";
    }
    else
    {
      $n=test_input($_POST["name"]);
      $nameTag="FALSE";
  }

  if(empty($_POST["phno"]))
  {
    $phnoErr="Ph No is required";
      $phnoTag="TRUE";
  }

//test for only numbers
  elseif(!is_numeric(test_input($_POST["phno"])))
  {
      $phnoErr="Only numbers allowed";
        $phnoTag="TRUE";
    }
    else
    {
      $p=test_input($_POST["phno"]);
      $phnoTag="FALSE";
  }

  if(empty($_POST["email"])){
    $emailErr="Email is required";
      $emailTag="TRUE";
  }
//test for email format
    elseif(!filter_var(test_input($_POST["email"]),FILTER_VALIDATE_EMAIL)){
      $emailErr="Invalid email format";
        $emailTag="TRUE";
    }
    else{
    $e=test_input($_POST["email"]);
    $emailTag="FALSE";
  }

  if(empty($_POST["age"])){
    $ageErr="Age is required";
      $ageTag="TRUE";
  }

    elseif(!is_numeric(test_input($_POST["age"]))){
      $ageErr="Only numbers allowed";
        $ageTag="TRUE";
    }
    else{
      $a=test_input($_POST["age"]);
      $ageTag="FALSE";
  }

  if(empty($_POST["quantity"]))
  {
    $quantityErr="Ph No is required";
    $quantityTag="TRUE";
  }

    elseif(!is_numeric(test_input($_POST["quantity"]))){
      $quantityErr="Only numbers allowed";
      $quantityTag="TRUE";
    }
    else{
      $q=test_input($_POST["quantity"]);
      $quantityTag="FALSE";
  }


$i=test_input($_POST["item"]);
if($nameTag=="FALSE" && $phnoTag=="FALSE" && $emailTag=="FALSE" && $ageTag=="FALSE"  && $quantityTag=="FALSE"){
$sql="INSERT INTO assign_order (name,phno,email,age,item,quantity) VALUES ('$n','$p','$e','$a','$i','$q') ";
if(mysqli_query($conn,$sql)==true){
echo ("<br>Inserted");
}
else {echo("<br>Not Inserted");}
}
else{
  echo("<br>Error occured");
}

}



$conn->close();
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       <p> <input type="text" name="name" placeholder="Name">
<span class="error">*<?php echo $nameErr;?></span>
       </p>
     <p>   <input type="text" name="phno" placeholder="Ph No.">
<span class="error">*<?php echo $phnoErr;?></span>
     </p>
   <p>     <input type="text" name="email" placeholder="Email">
<span class="error">*<?php echo $emailErr;?></span>
   </p>
   <p>     <input type="text" name="age" placeholder="Age">
<span class="error">*<?php echo $ageErr;?></span>
   </p>
   <p>     <select id="item" name="item"></p>
<option value="burger">Burger</option>
<option value="sandwich">Sandwich</option>
<option value="fries">French Fries</option>
</select>
<span class="error">*<?php echo $itemErr;?></span>
</p>
     <p>   <input type="text" name="quantity" placeholder="Quantity">
<span class="error">*<?php echo $quantityErr;?></span>
     </p>


 <p>    <input type="submit" name="submit"/>
     <input type="reset" value="Clear"/></p>
   </form>
</body>
</html>
