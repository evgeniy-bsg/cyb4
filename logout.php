<?php
header('Refresh: 3; url=/index1.html');
session_start();
unset($_SESSION["user"]);
die("You logout now! You will be redirected to Homepage in 3 seconds...");
