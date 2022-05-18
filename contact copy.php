<?php require("phpConnect.php");
$sqlselectquery = "Select * from contact;";
$sqlresult = mysqli_query($phpConnect, $sqlselectquery);
while($data=mysqli_fetch_assoc($sqlresult)) {
  $contactname = $data['contactname'];
  $contactrmail = $data['contactemail'];
  $contactsubject = $data['contactsubject'];
  $contactmessage = $data['contactmessage'];
  ?>
  <?php echo "Name: ".$data["contactname"]; ?> <br>
  <?php echo "Email: ".$data["contactemail"]; ?> <br>
  <?php echo "Subject: ".$data["contactsubject"]; ?> <br>
  <?php echo "Message: ">$data["contactmessage"]; ?> <br> <br>
  <?php
  }
?>