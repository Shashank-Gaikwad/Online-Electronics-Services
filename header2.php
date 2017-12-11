
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.css">



<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/npm.js"></script>

<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/heroic-features.css">
<link rel="stylesheet" href="assets/css/main.css">

<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>-->

	<!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->


	
	
		<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/heroic-features.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	
	<script>
	$(document).ready(function(){
    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
});
	</script>
</head>
<body style="background-color:white;">
<!--Navigation bar start-->
<nav class="navbar navbar-inverse" style="background-color:#393939;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <!--<a class="navbar-brand " href="index.php"  style="color:white;"><b>Online Electronics Services</b></a>-->
       <a class="navbar-brand " href="index.php"  style="color:white;"><b>Online Electronics Services</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" >

        <li><a href="index.php" style="color:white;">Home</a></li>
        <li><a href="aboutus.php" style="color:white;">About Us</a></li>
        <li><a href="contactus.php" style="color:white;">Contact Us</a></li>
		<!--<li><a href="enquiry.php" style="color:white;">Enquiry</a></li>-->
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">Products
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<div class="container">
					<div class="panel panel-primary">
						<div class='panel-body'>
							<div class="row">
								<div class="col-md-3">
									<li><a href="category.php?category=Televisions&subcategory=none"><h5>Televisions<h5></a></li>
									<li class="divider"></li>
									<li><a href="category.php?category=Televisions&subcategory=LCD TVs">LCD TVs</a></li>
									<li><a href="category.php?category=Televisions&subcategory=LED TVs">LED TVs</a></li>
									<li><a href="category.php?category=Televisions&subcategory=3D TVs">3D TVs</a></li>
									<li><a href="category.php?category=Televisions&subcategory=Smart TVs">Smart TVs</a></li>
								</div>
								<div class="col-md-3">
									<li><a href="category.php?category=Home Entertainment Systems&subcategory=none"><h5>Home Entertainment Systems<h5></a></li>
									<li class="divider"></li>
									<li><a href="category.php?category=Home Entertainment Systems&subcategory=Home Theater Systems">Home Theater Systems</a></li>
									<li><a href="category.php?category=Home Entertainment Systems&subcategory=Projectors">Projectors</a></li>
									<li><a href="category.php?category=Home Entertainment Systems&subcategory=Speakers">Speakers</a></li>
									<li><a href="category.php?category=Home Entertainment Systems&subcategory=Streaming Media Players">Streaming Media Players</a></li>
								</div>
								<div class="col-md-3">
									<li><a href="category.php?category=Headphones&subcategory=none"><h5>Headphones<h5></a></li>
									<li class="divider"></li>
									<li><a href="category.php?category=Headphones&subcategory=In Ear">In Ear</a></li>
									<li><a href="category.php?category=Headphones&subcategory=On Ear">On Ear</a></li>
									<li><a href="category.php?category=Headphones&subcategory=Over Ear">Over Ear</a></li>
									<li><a href="category.php?category=Headphones&subcategory=With Microphone">With Microphone</a></li>
                  <li><a href="category.php?category=Headphones&subcategory=Without Microphone">Without Microphone</a></li>
								</div>
								<div class="col-md-3">
									<li><a href="category.php?category=Cameras&subcategory=none"><h5>Cameras<h5></a></li>
									<li class="divider"></li>
									<li><a href="category.php?category=Cameras&subcategory=DSLR">DSLR</a></li>
									<li><a href="category.php?category=Cameras&subcategory=Point and Shoot">Point and Shoot</a></li>
									<li><a href="category.php?category=Cameras&subcategory=Mirrorless Cameras">Mirrorless Cameras</a></li>
									<li><a href="category.php?category=Cameras&subcategory=CCTV Cameras">CCTV Cameras</a></li>
									<li><a href="category.php?category=Cameras&subcategory=Camera Accessories">Camera Accessories</a></li>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<li><a href="category.php?category=Heating and Cooling&subcategory=none"><h5>Heating and Cooling<h5></a></li>
									<li class="divider"></li>
									<li><a href="category.php?category=Heating and Cooling&subcategory=Room Heaters">Room Heaters</a></li>
									<li><a href="category.php?category=Heating and Cooling&subcategory=Water Heaters">Water Heaters</a></li>
									<li><a href="category.php?category=Heating and Cooling&subcategory=Air Conditioners">Air Conditioners</a></li>
									<li><a href="category.php?category=Heating and Cooling&subcategory=Fan">Fan</a></li>
								</div>
								<div class="col-md-3">
									<li><a href="category.php?category=Computers&subcategory=none"><h5>Computers<h5></a></li>
									<li class="divider"></li>
									<li><a href="category.php?category=Computers&subcategory=Desktops">Desktops</a></li>
									<li><a href="category.php?category=Computers&subcategory=Laptops">Laptops</a></li>
                  <li><a href="category.php?category=Computers&subcategory=Printers">Printers</a></li>
    						  <li><a href="category.php?category=Computers&subcategory=Routers">Routers</a></li>
    						  <li><a href="category.php?category=Computers&subcategory=Computer Accessories">Computer Accessories</a></li>
								</div>
                <div class="col-md-3">
                  <li><a href="category.php?category=Other&subcategory=none"><h5>Kitchen and Home Appliances<h5></a></li>
                    <li class="divider"></li>
    								<li><a href="category.php?category=Kitchen and Home Appliances&subcategory=Refrigerators">Refrigerators</a></li>
    								<li><a href="category.php?category=Kitchen and Home Appliances&subcategory=Washing Machines">Washing Machines</a></li>
    								<li><a href="category.php?category=Kitchen and Home Appliances&subcategory=Irons">Irons</a></li>
    								<li><a href="category.php?category=Kitchen and Home Appliances&subcategory=Water Purifiers">Water Purifiers</a></li>
    								<li><a href="category.php?category=Kitchen and Home Appliances&subcategory=Vacuum Cleaners">Vacuum Cleaners</a></li>
    						</div>
                <div class="col-md-3">
                  <li><a href="category.php?category=Other&subcategory=none"><h5>Other<h5></a></li>
                  <li class="divider"></li>
                  <li><a href="category.php?category=Other&subcategory=Mobile Phones">Mobile Phones</a></li>
                  <li><a href="category.php?category=Other&subcategory=Gaming Consoles">Gaming Consoles</a></li>
                </div>
							</div>
						</div>
					</div>
				</div>
			</ul>
		</li>

        <!--<li><a href="#" style="color:white;" data-toggle="modal" data-target="#myLoginModal"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>-->


        <?php
    			if (isset($_SESSION['username']) && (($_SESSION['account'])=="customer"))
    			{
    				echo"<li><a href='customerProfile.php' style='color:white;'>Profile</a></li>";
    			}
    			else
    			{
    				//<a href="login.php?action=logout">Logout</a>
    				echo"<li><a href='signup.php' style='color:white;'>Sign Up</a></li>";
    			}
    		?>

		<?php
			if (!isset($_SESSION['username']))
			{
				echo"<li><a href='#' style='color:white;' data-toggle='modal' data-target='#myLoginModal'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
			}
			else
			{
				//<a href="login.php?action=logout">Logout</a>
				echo"<li><a href='login.php?action=logout' style='color:white;'><span class='glyphicon glyphicon-log-in'></span> Log Out</a></li>";
			}
		?>
      </ul>
    </div>
  </div>
</nav>
<div class="modal fade" id="myLoginModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="login.php">
          	<!--<div class="row">
              <div class="col-md-2">Account:</div>
          		<div class="col-md-6"><select name="accountType">
                <option value="">Select</option>
                <option value="admin">admin</option>
                <option value="customer">Customer</option>
              </select>
              </div>
          	</div><br>-->
            <div class="row">
          		<div class="col-md-2">UserName:</div>
          		<div class="col-md-6"><input type="text" name="username"></div>
          	</div><br>
          	<div class="row">
          		<div class="col-md-2">Password:</div>
          		<div class="col-md-6"><input type="password" name="password" /></div>
          	</div><br>
          	<!--<div class="row">
          		<div class="col-md-8"><div class="g-recaptcha" data-sitekey="6LflyxsTAAAAADDF1bDA8x7r6sQvMC8PUT3rPDKX"></div><br></div>
          	</div><br>-->
          	<div class="row">
          		<div class="col-md-4"><input type="submit" name="bttLogin" value="Login"></div>
          		<div class="col-md-4"><input type="reset" value="Clear"></div>
          	</div>


          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
