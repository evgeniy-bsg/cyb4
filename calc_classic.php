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

</head>

<body>
	<a href="index1.html">Back to Index page</a>
	<h1>Calculator on pure PHP</h1>
	<?php
	if (isset($_REQUEST["txt1"])) {
		$x = $_REQUEST["txt1"];
		$y = $_REQUEST["txt2"];
		$z = $x + $y;
	} else {
		$x = "";
		$y = "";
		$z = "";
	}
	?>
	<form>
		<input type="text" name="txt1" autocomplete="off" value="<?= $x ?>" /><br />
		<input type="text" name="txt2" autocomplete="off" value="<?= $y ?>" /><br />
		<button>+</button><br />
		<input type="text" readonly="on" value="<?= $z ?>" />
	</form>
	<textarea></textarea>
</body>

</html>