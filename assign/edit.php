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
<p>Please enter the Order ID you want to edit</p>
<form name="editform" action ="edit1.php" method="post">
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
