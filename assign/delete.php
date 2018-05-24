<html>
<head>
 <title>View Database Record</title>
</head>
<body>
<p>Main Screen</p>
<hr>
<p><a href=view.php>View Database Record</a></p>
<p><a href=add.php>Add New Database Record</a></p>
<p><a href=edit.php>Edit Database Record</a></p>
<p>Delete Database Record</p>
<p><a href="logout.php">Log Out</a></p>
<hr>
<p>Delete Database Record</p>
<hr>


<p>Please enter the Product ID you want to delete</p>
<form name="deleteform" action ="delete1.php" method="post">
<table>
<tr>
 <td>Order ID</td>
 <td><input type="text" name="id" size="10"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="submit"/>
<input type="reset" value="Reset Form"/></td>
</tr>
</table>
</form>
</body>
</html>
