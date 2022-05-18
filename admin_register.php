<?php require("phpConnect.php");
$username = $_GET['username'];
$email = $_GET['email'];

$options = [
    'cost' => 12,
];
$hashed_password = password_hash($_GET['password'], PASSWORD_BCRYPT, $options);
$submitquery = sprintf("INSERT INTO admin_user (username, email, password)
VALUES ('$username', '$email', '$hashed_password')");
$submitqueryresult = mysqli_query($phpConnect, $submitquery);


//header('location:contact.php');
echo $submitqueryresult;
echo '<script>alert("Message Successfuly Sent!")</script>';?>