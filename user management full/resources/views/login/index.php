<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post">
	<table>
		<tr>
			<td>Name</td> <?php echo $name ?>
			<td><input type="text" name="uname" value ="<?= $name ?> "></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="submit"></td>
		</tr>
	</table>
	</form>
	<a href="/register"> Signup</a>
</body>
</html>