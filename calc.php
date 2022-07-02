<?php
session_start();
if (!isset($_SESSION["user"])) {
	echo '<meta http-equiv="refresh" content="2; url=login.php" />';
	die("Need login to use! Redirecting to login page...");
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="refresh" content="2; url=login.php" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
	<style type="text/css">
		input,
		button {
			width: 150px;
			margin: 5px;
			text-align: center;
		}
	</style>
	<script type="text/javascript">
		function plus() {
			var x, y, z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			z = x + y;
			document.getElementById("txt3").value = z;
		}
	</script>
	<script type="text/javascript">
		function minus() {
			var x, y, z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			z = x - y;
			document.getElementById("txt3").value = z;
		}
	</script>
</head>

<body>
	<a href="index1.html">Back to Index page</a>
	<h1>Calculator on pure JS</h1>
	<input type="text" id="txt1" autocomplete="off" /><br />
	<input type="text" id="txt2" autocomplete="off" /><br />
	<button onclick="plus();">+</button><br />
	<button onclick="minus();">-</button><br />
	<input type="text" id="txt3" readonly="on" />
</body>

</html>