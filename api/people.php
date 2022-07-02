<?php
// Симулияция - обычно здесь программный код который извлекает данные изз БД
$people = [
	array("firstName" => "Yury", "lastName" => "Andrienko", "salary" => 123456),
	array("firstName" => "Vasya", "lastName" => "Pupkin", "salary" => 77777),
	array("firstName" => "Yulia", "lastName" => "Yulkina", "salary" => 300000),
	array("firstName" => "Andrey", "lastName" => "Andreev", "salary" => 500000),

];

$letters = strtolower($_REQUEST["letters"]);

$results = [];
foreach ($people as $person) {
	if (str_starts_with(strtolower($person["lastName"]), $letters)) {
		array_push($results, $person);
	}
}

echo (json_encode($results));
