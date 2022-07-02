<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login page</title>
	<style type="">
		input, button{
		width: 150px;
		margin: 5px;
		text-align: center;
	}
</style>
</head>

<body>
	<a href="index1.html">Back to Homepage</a>
	<h1>Login and password</h1>
	<form method="POST" action="check_login.php">
		<input type="text" name='txtUser'><br />
		<input type="password" name='txtPwd'><br />
		<button>Go!</button><br />
	</form>
	<br />
	<div align="right">&copy;Evgeniy Ustinskiy / ustinskiy@gmail.com</div>
</body>


</html>