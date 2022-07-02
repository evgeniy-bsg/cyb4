<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Demo PHP</title>
</head>

<body>
	<a href="index1.html">Back to Index page</a>
	<h1>Hello from PHP</h1>
	<?php
	$x = 2;
	$y = 2;
	$z = $x + $y;
	echo "<h2> Result: $z</h2>";
	date_default_timezone_set("Europe/Moscow");
	$now = date("H:i:s");
	echo "<h1>Page open time is $now</h1>";
	?>
	<p>Input number and we x2 than:
	<form action="doubler.php">
		<input type="text" name="data" />
		<button>Send data to x2</button>
	</form>
	</p>
</body>

</html>