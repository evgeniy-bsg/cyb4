<?php

$x = $_REQUEST["x"];
$y = $_REQUEST["y"];
$z = $x + $y;
sleep(1); // Симуляция задержки
// 1.Слабый пароль (пустой)
// 2.Нарушен принцип наименьших привилегий (от имено root)
// 3.Секрет в коде (пароль в открытом виде)
$conn = mysqli_connect("localhost:3306", "root", "", "cyb4");

// 4.Уязвимость для SQL Injection (можно передать параметры любые и сервер SQL их выполнит)
$sql = "INSERT INTO Calcs(Num1,Num2,User) VALUES($x,$y,'Anonym')";
mysqli_query($conn, $sql);
mysqli_close($conn);
echo $z;
