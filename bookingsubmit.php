<?php require("phpConnect.php");
$fullname = isset($_GET['fullname'])?$_GET['fullname']:"";
$telnumber = isset($_GET['telnumber'])?$_GET['telnumber']:"";
$baddress = isset($_GET['address'])?$_GET['address']:"";
$adate = isset($_GET['adate'])?$_GET['adate']:"";
$services = isset($_GET['services'])?$_GET['services']:"";
$brand = isset($_GET['brand'])?$_GET['brand']:"";
$aircontype = isset($_GET['aircontype'])?$_GET['aircontype']:"";
$warranty = isset($_GET['warranty'])?$_GET['warranty']:"";
$submitquery = sprintf("INSERT INTO book (fullname, telnumber, baddress, adate, services, brand, aircontype, warranty)
VALUES ('$fullname', '$telnumber', '$baddress', '$adate', '$services', '$brand', '$aircontype', '$warranty')");
$submitqueryresult = mysqli_query($phpConnect, $submitquery);
echo '<script>alert("Booked Successfully!")</script>';
header('location:bookdisplay.php');
?>