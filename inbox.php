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
	 <!-- <header class="header">
	 	<nav class="navbar navbar-style">
	 		<div class="container">
	 			<div class="navbar-header">
	 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ree">
	 				<span class="icon-bar"></span>
	 				<span class="icon-bar"></span>
	 				<span class="icon-bar"></span>
	 				</button> 
	 				<a href=""><img class="logo" src="images/logo.png"></a>
	 			</div>
	 			<div class="collapse navbar-collapse" id="ree">
	 			<ul class="nav navbar-nav navbar-right">
	 				<li><a href="messages.php">Messages</a></li>
	 				<li><a href="bookdisplay.php">Bookings</a></li>
	 				<li><a href="login.php">Logout</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 	</nav>
	 	
	 </header> -->
    
	 <div class="container-fluid">
  		<div class="row">
	 		<?php  include('nav.php'); ?>
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
				<h1>Messages</h1>
				<table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Contact name</th>
                            <th scope="col">Contact email</th>
                            <th scope="col">Contact subject</th>
                            <th scope="col">Contact message</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php require("phpConnect.php");?>
                        <?php  
                        $selectQuery = sprintf("SELECT * FROM contact");
                        
                        $selectResult = mysqli_query($phpConnect, $selectQuery);
                        $rows = mysqli_fetch_all($selectResult, MYSQLI_ASSOC)
    
                        ?>
                        <?php foreach ($rows as $row) { ?>
                            <tr>
                                <th scope="row"><?= $row['contact_id'] ?></th>
                                <td><?= ucfirst($row['contactname']) ?></td>
                                <td><?= $row['contactemail'] ?></td>
                                <td><?= $row['contactsubject'] ?></td>
                                <td><?= $row['contactmessage'] ?></td>
                                <td><?= $row['is_read'] == 1 ? '<span class="badge badge-success">Read</span>' : '<span class="badge badge-danger">Unread</span>' ?></td>
                                <td>
                                    <a href="read.php?contact_id=<?= $row['contact_id'] ?>" class="btn btn-link">Read</a>
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