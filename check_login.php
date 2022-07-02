<?php
session_start();

$user = $_REQUEST['txtUser'];
$pwd = $_REQUEST['txtPwd'];
$hash = hash("sha256", $pwd);

/*
if ($hash == "8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92") {	
echo "<h1>Hello $user</h1>";
}
else {
	echo "<h2> Wrong password!</h2>";
}
*/

// 1.Слабый пароль (пустой)
// 2.Нарушен принцип наименьших привилегий (от имено root)
// 3.Секрет в коде (пароль в открытом виде)
// $conn = mysqli_connect("localhost:3306", "root", "", "cyb4");

// // 4.Уязвимость для SQL Injection (можно передать параметры любые и сервер SQL их выполнит)
// $sql = "SELECT * FROM users WHERE Login='$user' AND PwdHash='$hash'";
// //echo $sql;
// $query = mysqli_query($conn, $sql);
// $result = mysqli_fetch_all($query);
// //var_dump($result);
// $numRows = count($result);
// //echo $numRows

// Устраняем проблему секрета в коде
// И этим решением проблемы 1 и 2 выше делегируются администратору производственного сервера
$server = getenv("cyb4_db_server");
$login = getenv("cyb4_db_user");
$pwd = trim(getenv("cyb4_db_pwd"));
$conn = mysqli_connect($server, $login, $pwd, "cyb4");

// Устраняем проблему SQL Injection (выше) параметрической передачей
$sql = "SELECT * FROM users WHERE Login=? AND PwdHash=?";
$stat = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stat, "ss", $user, $hash);
mysqli_stmt_execute($stat);
$result = mysqli_stmt_get_result($stat);
$numRows = mysqli_num_rows($result);

if ($numRows == 0) {
	echo "<h2>Wrong login or password!</h2>";
} else {
	echo "<h1>Hello $user!</h1>";
	echo "<h2><a href=/index1.html>Go to homepage</a></h2>";
	echo "<div align=right>(c) Evgeniy Ustinskiy / ustinskiy@gmail.com</div>";
	$_SESSION["user"] = $user;
}
mysqli_close($conn);
