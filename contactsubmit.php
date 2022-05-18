<?php require("phpConnect.php");
$contactname = isset($_GET['name'])?$_GET['name']:"";
$contactemail = isset($_GET['email'])?$_GET['email']:"";
$contactsubject = isset($_GET['subject'])?$_GET['subject']:"";
$contactmessage = isset($_GET['message'])?$_GET['message']:"";
$submitquery = sprintf("INSERT INTO contact (contactname, contactemail, contactsubject, contactmessage)
VALUES ('$contactname', '$contactemail', '$contactsubject', '$contactmessage')");
$submitqueryresult = mysqli_query($phpConnect, $submitquery);


header('location:contact.php');
echo '<script>alert("Message Successfuly Sent!")</script>';?>