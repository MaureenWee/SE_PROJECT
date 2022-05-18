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
	 				<li><a class="active" href="index.html" >Home</a></li>
	 				<li><a href="about.html">About</a></li>
	 				<li><a href="contact.html">Contact Us</a></li>
	 				<li><a href="login.html">Login</a></li>
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
                        </div>
                        <?php require("phpConnect.php");?>
                        <form action="bookingsubmit.php" class="form-body">
                            <div class="row form-row">
                              <input type="text" name="fullname" placeholder="Enter Full name" class="form-control">
                            </div>
                            <div class="row form-row">
                              <input type="tel" name="telnumber" placeholder="Enter Mobile Number" class="form-control telnumber">
                            </div>
                             <div class="row form-row">
                              <input type="text" name="address" placeholder="Enter Full Address" class="form-control">
                            </div>
                           <div class="row form-row">
                               <input id="dat" type="text" name="adate" placeholder="Appointment Date" class="form-control">
                            </div>
                            
                            <h6>Service Details</h6>
                            <div class="row form-row">
                                <div class="col-sm-6">
                                <select name="services" id="services"  class="form-control">
                                <option selected="true" disabled="disabled">Services</option>
                                <option value="Aircon Cleaning">Aircon Cleaning</option>
                                <option value="Aircon Installation">Aircon Installation</option>
                                <option value="Car Aircon Cleaning">Car Aircon Cleaning</option>
                                <option value="Car Aircon Additional Freon">Car Aircon Additional Freon</option>
                                <option value="Car Aircon Installation">Car Aircon Installation</option>
                                
                              </select>
                                </div>
                                <div class="col-sm-6">
                                   <select name="brand" id="Brand"  class="form-control">
                                <option selected="true" disabled="disabled">Brands</option>
                                <option value="3D">3D</option>
                                <option value="Asahi">Asahi</option>
                                <option value="AUX">AUX</option>
                                <option value="Camel">Camel</option>
                                <option value="Carrier">Carrier</option>
                                <option value="Daikin">Daikin</option>
                                <option value="Fujidenzo">Fujidenzo</option>
                                <option value="Kolin">Kolin</option>
                                <option value="Koppel">Koppel</option>
                                <option value="O.X.">O.X.</option>
                                <option value="Philips">Philips</option>
                                <option value="Samsung">Samsung</option>
                                <option value="Skyworth">Skyworth</option>
                                <option value="TCL">TCL</option>
                                <option value="Toshiba">Toshiba</option>
                                <option value="Whirlpool">Whirlpool</option>
                                <option value="other">others</option>
                              </select>
                                </div>
                            </div>
                             <div class="row form-row">
                                <div class="col-sm-6">
                                <select name="aircontype" id="AirconType"  class="form-control">
                                <option selected="true" disabled="disabled">Aircon Type</option>
                                <option value="Window Type">Window Type</option>
                                <option value="Split Type">Split Type</option>
                                <option value="Floor Mounted Type 3tr">Floor Mounted Type 3tr</option>
                                <option value="Floor Mounted Type 5tr">Floor Mounted Type 5tr</option>
                                <option value="Ceiling Type">Ceiling Type</option>
                                <option value="other">others</option>
                              </select>
                                </div>
                                <div class="col-sm-6">
                                <select name="warranty" id="Warranty"  class="form-control">
                                <option selected="true" disabled="disabled">Warranty</option>
                                <option value="In-Warranty">In-Warranty</option>
                                <option value="Out-Warranty">Out-Warranty</option>
                              </select>
                                </div>
                            </div>
                             <div class="row form-row">
                               <button type="submit" class="btn btn-success btn-appointment">
                                 Book Schedule
                               </button>
                               
                            </div>

                        </form>
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

    <script>
      $(document).ready(function(){
          $("#dat").datepicker();

          /**
           * 2ez4me
           */
          $('.telnumber').on('input', function(e){
            var max_chars = 11;

            if(this.value.length > max_chars) {
                this.value = this.value.substr(0, max_chars);
            }
            this.value = this.value.replace(/[^0-9]/g, '');
          });
      })
    </script>
    
	 </header>
</body>
</html>