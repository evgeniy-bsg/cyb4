<?php

// Получаем учетные данные, введенные на странице registration.php
$email = $_REQUEST['txtEmail'];
$user = $_REQUEST['txtUser'];
$pwd = $_REQUEST['txtPwd'];
$hash = hash("sha256", $pwd);

// Подключаемся к БД, получая данные для доступа  из переменных окружения
$server = getenv("cyb4_db_server");
$login = getenv("cyb4_db_user");
$pwd = trim(getenv("cyb4_db_pwd"));
$conn = mysqli_connect($server, $login, $pwd, "cyb4");

// Заносим нового пользователя в БД, испольуем параметричесую форму для предотвращения sql-inj
$sql = "INSERT INTO users(Login,PwdHash,Email) VALUES(?,?,?)";
$stat = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stat, "sss", $user, $hash, $email);
mysqli_stmt_execute($stat);

// Закрываем сессию доcтупа к MySQL
mysqli_close($conn);

// Выводим сообщение и делаем редирект
echo "<h2>Thanks for registering! You will be redirected to login page in 3 seconds...</h2>";
header('Refresh: 3; url=/login.php');
