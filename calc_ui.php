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
			document.getElementById("txt3").value = "Waiting...";
			var x, y, z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			var url = "api/plus.php?x=" + x + "&y=" + y;
			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);
			xhr.onload = function() {
				z = xhr.responseText;
				document.getElementById("txt3").value = z;
			};
			xhr.send();
		};
	</script>
	<script type="text/javascript">
		function minus() {
			document.getElementById("txt3").value = "Waiting...";
			var x, y, z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			var url = "api/minus.php?x=" + x + "&y=" + y;
			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);
			xhr.onload = function() {
				z = xhr.responseText;
				document.getElementById("txt3").value = z;
			};
			xhr.send();
		};
	</script>
</head>

<body>
	<a href="index1.html">Back to Index page</a>
	<h1>Calculator on Web API</h1>
	<input type="text" id="txt1" autocomplete="off" /><br />
	<input type="text" id="txt2" autocomplete="off" /><br />
	<button onclick="plus();">+</button><br />
	<button onclick="minus();">-</button><br />
	<input type="text" id="txt3" readonly="on" />
	<br /><textarea></textarea>
</body>

</html>