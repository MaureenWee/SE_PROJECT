<?php 
require("phpConnect.php");
$username = $_POST['username'];

$password = $_POST['password'];
$submitquery = sprintf("SELECT * FROM admin_user WHERE username = '$username'");

$submitqueryresult = mysqli_query($phpConnect, $submitquery);

$row = mysqli_fetch_assoc($submitqueryresult);
if (password_verify($password, $row['password']) === true) {
    header('location:admin.php');

} else {
    header('location:login.php?error=wrong_credentials');
}
