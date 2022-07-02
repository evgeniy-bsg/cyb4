<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Addition result</title>
</head>
<body>
	<h1>Answer of your requst</h1>
<?php
	$x = $_REQUEST['data1'];
	$y = $_REQUEST['data2'];
	$result =  $x + $y;
	echo "Addition result is $result";
?>
</body>
</html>