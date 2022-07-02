<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Registration page</title>
	<style type="">
		input, button{
		width: 150px;
		margin: 5px;
		text-align: center;
		}
</style>
	<script>
		var check = function() {
			if (document.getElementById('txtPwd').value == document.getElementById('txtPwdCnf').value) {
				document.getElementById('message').style.color = 'green';
				document.getElementById('message').innerHTML = 'Passwords matching';
			} else {
				document.getElementById('message').style.color = 'red';
				document.getElementById('message').innerHTML = 'Passwords not matching';
			}
		}
	</script>
</head>

<body>
	<a href="index1.html">Back to Homepage</a>
	<h1>Registration</h1>
	<form method="POST" action="registration_done.php">
		<div> Enter your email: </div>
		<input type="email" name='txtEmail' required>
		<div> Enter your username: </div>
		<input type="text" name='txtUser' required>
		<div> Enter your password: </div>
		<input type="password" id='txtPwd' name='txtPwd' required onkeyup='check();'>
		<div> Confirm your password: </div>
		<input type="password" id='txtPwdCnf' name='txtPwdCnf' required onkeyup='check();'><span id='message'></span></br>
		<button>Registration</button><br />
	</form>
	<br />
	<div align="right">&copy;Evgeniy Ustinskiy / ustinskiy@gmail.com</div>
</body>

</html>