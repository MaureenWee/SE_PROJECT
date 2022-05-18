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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"><br><br><font size="10px">
				<h1>Dashboard</h1></font>
				<div class="dashboard-overview">

					<?php require("phpConnect.php");?>
					<?php  
					function getBookingCount($booking_status, $countName) {
						global $phpConnect;
						$bookingQuery = sprintf("SELECT COUNT(book_id) AS ". $countName." FROM book WHERE booking_status = ". $booking_status);  
                        $bookingResult = mysqli_query($phpConnect, $bookingQuery);
						$bookingResult = mysqli_fetch_array($bookingResult, MYSQLI_ASSOC);
						return $bookingResult[$countName];
					}
					function getAllBookingCount() {
						global $phpConnect;
						$allBookingQuery = sprintf("SELECT COUNT(book_id) AS booking_count FROM book");  
                        $allBookingResult = mysqli_query($phpConnect, $allBookingQuery);
						$allBookingResult = mysqli_fetch_array($allBookingResult, MYSQLI_ASSOC);
						return $allBookingResult['booking_count'];
					}

                    ?><br><br>
					<div class="card" style="width: 50rem;">
						<div class="card-body">
							<h5 class="card-title"><font size="4px">Bookings</font></h5>
							<h6 class="card-subtitle mb-2 text-muted"><font size="3px"><?= getAllBookingCount() ?> Bookings</h6>
							<p class="card-text">
							<span class="badge badge-sucess"><?= getBookingCount(1, 'approved_count') ?> Approved</span>
							<span class="badge badge-secondary"><?= getBookingCount(0, 'pending_count') ?> Pending</span>
							<span class="badge badge-primary"><?= getBookingCount(2, 'done_count') ?>  Done</span>
							<span class="badge badge-danger"><?= getBookingCount(3, 'declined_count') ?> Declined</span>
							</p>
							<a href="admin_booking_list.php" class="card-link">View</a>
						</div>
					</div>
					<br>
					<?php  
					function getMessageCount($message_status, $countName) {
						global $phpConnect;
						$messageQuery = sprintf("SELECT COUNT(contact_id) AS ". $countName." FROM contact WHERE is_read = ". $message_status);  
                        $messageResult = mysqli_query($phpConnect, $messageQuery);
						$messageResult = mysqli_fetch_array($messageResult, MYSQLI_ASSOC);
						return $messageResult[$countName];
					}
					function getAllMessagesCount() {
						global $phpConnect;
						$allMessageQuery = sprintf("SELECT COUNT(contact_id) AS contact_count FROM contact");  
                        $allMessageResult = mysqli_query($phpConnect, $allMessageQuery);
						$allMessageResult = mysqli_fetch_array($allMessageResult, MYSQLI_ASSOC);
						return $allMessageResult['contact_count'];
					}

                    ?> <br><br>
					<div class="card" style="width: 50rem;">
						<div class="card-body">
							<h5 class="card-title"><font size="4px">Messages</font></h5>
							<h6 class="card-subtitle mb-2 text-muted"><font size="3px"><?= getAllMessagesCount() ?> messages</h6>
							<p class="card-text">
							<span class="badge badge-sucess"><?= getMessageCount(1, 'read_count') ?> Read</span>
							<span class="badge badge-secondary"><?= getMessageCount(0, 'unread_count') ?> Unread</span>
							</p>
							<a href="inbox" class="card-link">View</a>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>
</body>
</html>