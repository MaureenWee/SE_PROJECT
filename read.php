
<?php
require("phpConnect.php");

$submitquery = sprintf("UPDATE contact SET is_read = 1 WHERE contact_id = ". $_GET['contact_id']);
$submitqueryresult = mysqli_query($phpConnect, $submitquery);
echo $submitqueryresult;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ReeCooling Services</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.6/examples/dashboard/dashboard.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/pace.min.js"></script>
    <link href="assets/css/minimal.css" rel="stylesheet">ß
	<!-- dashboard -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">

	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

	  .bg-gradient {
		background-image: linear-gradient(to bottom, white, #c5edc6, #a1f0a3) !important
	  }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body>
	 <div class="container-fluid">
  		<div class="row">
	 		<?php  include('nav.php'); ?>
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <?php require("phpConnect.php");?>
                <?php  
                $selectQuery = sprintf("SELECT * FROM contact WHERE contact_id = ". $_GET['contact_id']);
                
                $selectResult = mysqli_query($phpConnect, $selectQuery);
                $row = mysqli_fetch_array($selectResult, MYSQLI_ASSOC)

                ?>
                <div class="jumbotron">
                    <h1 class="display-4"><?= $row['contactsubject'] ?></h1>
                    <p class="lead"><?= $row['contactemail'] ?></p>
                    <hr class="my-4">
                    <p><?= $row['contactmessage'] ?></p>
                    <a class="btn btn-primary btn-lg" href="inbox.php" role="button">Go back</a>
                </div>
			</main>
		</div>
	</div>
</body>
</html>

