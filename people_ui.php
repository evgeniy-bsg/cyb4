<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>People</title>
	<script>
		function getPeople() {
			var letters = document.getElementById("letters").value;
			// alert(letters);
			var url = "api/people.php?letters=" + letters;
			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);
			xhr.onload = function() {
				var text = xhr.responseText;
				//alert(text);
				//десериализация json
				var people = JSON.parse(text);
				//alert(people);
				//из десериализованнного объекта генерируем текст для вывода
				var out = "";
				for (var i = 0; i < people.length; i++) {
					var person = people[i];
					//alert(person);
					var firstName = person["firstName"];
					var lastName = person["lastName"];
					//alert(lastName);
					out += lastName + ", " + firstName + "<br/>";
					//alert(out);
					document.getElementById("display").innerHTML = out;

				}
			};
			xhr.send();
		}
	</script>
</head>

<body>
	<a href="index1.html">Back to Homepage</a>
	<h1>Cool employee search</h1>
	Put the first letters of employee last name:
	<input type="text" id="letters" oninput="getPeople();" />
	<div id="display"></div>
</body>

</html>

</html>