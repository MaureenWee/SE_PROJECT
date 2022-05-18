<?php
$username = "root";
$db = "db";
$server = "localhost";
$phpConnect = mysqli_connect($server, $username);
$dbSelection = mysqli_select_db($phpConnect, $db);
if (!$phpConnect) die(mysqli_connect_error());
?>