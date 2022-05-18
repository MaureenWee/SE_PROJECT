<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ReeCooling Services</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
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
	 				<li><a href="index.php" >Home</a></li>
	 				<li><a href="about.php">About</a></li>
	 				<li><a class="active" href="contact.php">Contact Us</a></li>
	 				<li><a href="login.php">Login</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 	</nav>
      <div class="wrapper">
        <h3 class="global-title text-center">Contact us</h3>
        <div class="d-grid contact-view">
          <div class="cont-details">


            <div class="cont-top">

              <div class="cont-left text-center">
                <span class="fa fa-phone text-primary"></span>
              </div>

              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="#">(062) 308 3541 <br>09268212507</a></p>
              </div>

            </div>


            <div class="cont-top margin-up">

              <div class="cont-left text-center">
                <span class="fa fa-envelope-o text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p>reecooling_services@yahoo.com</p>
              </div>
              
            </div>


            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Address</h6>
                <p>Lot 4A Zone 1<br>MCLL Highway<br>Barangay Divisoria, Zamboanga City<br>7000 Zamboanga del Sur<br>Philippines</p>
                <a class="btn btn-first" href="https://www.google.com/maps/dir//'6.9217158,122.078996'/@6.945072,122.0986351,98m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x0:0xb43b4ec7dcca6f32!2m2!1d122.0790909!2d6.9217374">Get Direction</a>
              </div>
            </div>
          </div>



          <div class="map-content">
          <?php require("phpConnect.php");?>
            <form action="contactSubmit.php">
              <div class="twice-two">
                <input type="text" class="form-control" name="name" id="w3lName" placeholder="Name" required="">
                <input type="email" class="form-control" name="email" id="w3lSender" placeholder="Email"
                  required="">
              </div>
              <div class="twice">
                <input type="text" class="form-control" name="subject" id="w3lSubject" placeholder="Subject"
                  required="">
              </div>
              <textarea name="message" class="form-control" id="w3lMessage" placeholder="Message"
                required=""></textarea>
              <button type="submit" class="btn btn-contact">Send Message</button>
            </form>
          </div>



        </div>
      </div>
	 </header>
</body>
</html>