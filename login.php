<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ReeCooling Services</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
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
	 				<li><a href="index.php">Home</a></li>
	 				<li><a href="about.php">About</a></li>
	 				<li><a href="contact.php">Contact Us</a></li>
	 				<li><a class="active" href="login.php">Login</a></li>
	 			</ul>
	 		</div>
	 	</div>
	 	</nav>
	 	
	 		<div class="con">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="admin_login.php" method="POST">
			<?php if (isset($_GET['error']) && $_GET['error'] === 'wrong_credentials'): ?>
				<div class="alert alert-danger" role="alert">
					COLLAPSE
				</div>
			<?php endif; ?>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email or Phone" name="username" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          
        </form>
      </div>
    </div>

	 </header>
</body>
</html>