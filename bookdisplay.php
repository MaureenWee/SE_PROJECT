<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ReeCooling Services</title>
	<link rel="stylesheet" type="text/css" href="css/book.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	 <header class="header">
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
	 				<li><a class="active" href="index.php" >Home</a></li>
	 				<li><a href="about.php">About</a></li>
	 				<li><a href="contact.php">Contact Us</a></li>
	 				<li><a href="login.php">Login</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 	</nav>
	 	<div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Book Your Slot Now and Save your time</h1>
                        <p>Reecooling Services provides the best service available. One of the services they provide is cleaning, check-ups, and even auto air conditioning.</p>
                        <h2>For Help Call : (062) 308 3541 / 0926-821-2507</h2>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Schedule</h2>
                        
                        <?php require("phpConnect.php");?>
                        <h3><br>Booked Successfully!</h3>

                    </div>
                </div>
            </div>
          </div>
      </div>
      
    </body>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>

   
	 </header>
</body>
</html>