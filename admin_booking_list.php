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
    <link href="assets/css/minimal.css" rel="stylesheet">
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
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"><br><br>
				<h1>Bookings</h1>
                

                <div><br>
                    <h3>Pendings</h3>
                </div>
				<table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Date</th>
                            <th scope="col">Services</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Aircon type</th>
                            <th scope="col">Warranty</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php require("phpConnect.php");?>
                        <?php  
                        $selectQuery = sprintf("SELECT * FROM book WHERE booking_status = 0 ORDER BY adate DESC");
                        
                        $selectResult = mysqli_query($phpConnect, $selectQuery);
                        $rows = mysqli_fetch_all($selectResult, MYSQLI_ASSOC)
    
                        ?>
                        <?php foreach ($rows as $row) { ?>
                            <tr>
                                <th scope="row"><?= $row['book_id'] ?></th>
                                <td><?= ucfirst($row['fullname']) ?></td>
                                <td><?= $row['telnumber'] ?></td>
                                <td><?= $row['baddress'] ?></td>
                                <td><?= $row['adate'] ?></td>
                                <td><?= $row['services'] ?></td>
                                <td><?= $row['brand'] ?></td>
                                <td><?= $row['aircontype'] ?></td>
                                <td><?= $row['warranty'] ?></td>
                                <td>
                                    <a href="booking/accept.php?status=1&book_id=<?= $row['book_id'] ?>" class="btn btn-success">Accept</a>
                                    <a href="booking/accept.php?status=3&book_id=<?= $row['book_id'] ?>" class="btn btn-danger">Decline</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <hr>
                <div><br>
                    <h3>Accepted</h3>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Date</th>
                            <th scope="col">Services</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Aircon type</th>
                            <th scope="col">Warranty</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php require("phpConnect.php");?>
                        <?php  
                        $selectQuery = sprintf("SELECT * FROM book WHERE booking_status = 1 ORDER BY adate DESC");
                        
                        $selectResult = mysqli_query($phpConnect, $selectQuery);
                        $rows = mysqli_fetch_all($selectResult, MYSQLI_ASSOC)
    
                        ?>

                        <?php foreach ($rows as $row) { ?>
                            <tr>
                                <th scope="row"><?= $row['book_id'] ?></th>
                                <td><?= ucfirst($row['fullname']) ?></td>
                                <td><?= $row['telnumber'] ?></td>
                                <td><?= $row['baddress'] ?></td>
                                <td><?= $row['adate'] ?></td>
                                <td><?= $row['services'] ?></td>
                                <td><?= $row['brand'] ?></td>
                                <td><?= $row['aircontype'] ?></td>
                                <td><?= $row['warranty'] ?></td>
                                <td>
                                    <a href="booking/accept.php?status=2&book_id=<?= $row['book_id'] ?>" class="btn btn-primary">Done</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</main>
		</div>
	</div>
</body>
</html>