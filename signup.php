<?php
	session_start();
?>
<html>
	<head>

        <title>Electronics Shop</title>

				<script>
				function validatePassword()
	{
		var password=document.forms["Form"]["password"].value;
		var confirmPassword=document.forms["Form"]["confirmPassword"].value;

		if(password!=confirmPassword)
			{
				alert("password does not match");
				return false;
			}
			return true;
	}
				</script>

	</head>
	<body>
	<?php
		include'header.php';

		if($_GET)
			{
				if(isset($_GET['id']))
				{
					if($_GET['id']=="failure")
					{
						echo "
						<div class='alert alert-danger text-center'>
							<strong>Fail!</strong> Password and Confirm Password does not match.
						</div>
						";
					}
				}
			}
	?>
	<br><br><br>
		<div class="container">

			<div class="container container-content" style="padding-top: 0em;">
			<br>
			<div class="panel">
                <div class="row">
    				<div class="col-md-12">
    					<h1 class="text-center fancy-title"><span>Sign Up</span></h1>
    				</div>
    			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-primary">
								<div class="panel-body">
									<div class="col-md-6"><img src="images/shopping.jpg" height=200 width=200></div>
									<div class="col-md-6"><h3>Electronics Shop</h3></div>
									<div class="row">

											Address :  <br>
											Mobile :  1234567890<br>
											Email : abc@gmail.com <br>

									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-body">
										<div id="map-canvas" class="col-md-12 map-container">

										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-primary">
								<div class="panel-body">
									<form action="signup1.php" name="Form" method=POST enctype="multipart/form-data" onsubmit="return validatePassword()">

										<div class="input-group form-group">
											<span class="input-group-addon" id="name">&nbsp&nbsp&nbsp&nbsp Name* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="text" name="name" pattern="[a-zA-Z\ ]+" class="form-control" aria-describedby="name" placeholder="Name" required>
										</div>

                    <div class="input-group form-group">
											<span class="input-group-addon" id="gender">&nbsp Gender* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<select class="form-control" aria-describedby="gender" name="gender" required>
                        <option value="">Select</option>
                        <option value="male">Male</option>
                        <option value="Female">Female</option>
                      </select>
										</div>

                    <div class="input-group form-group">
											<span class="input-group-addon" id="birthdate">&nbsp Birthdate* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="date" name="birthdate" class="form-control" aria-describedby="birthdate" placeholder="Birth Date" required>
										</div>

										<div class="input-group form-group">
											<span class="input-group-addon" id="mobile">&nbsp Mobile Number* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="text" name="mobile" pattern="[0-9]{10}" class="form-control" aria-describedby="mobile" placeholder="Mobile No" required>
										</div>

										<div class="input-group form-group">
											<span class="input-group-addon" id="email">&nbsp&nbsp Email ID* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="email" name="email" class="form-control" aria-describedby="email" placeholder="Email ID" required>
										</div>

										<div class="input-group form-group">
											<span class="input-group-addon" id="address">&nbsp Address* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<textarea rows="5" name="address" class="form-control" aria-describedby="address" placeholder="Address" required></textarea>
										</div>

                    <div class="input-group form-group">
											<span class="input-group-addon" id="password">&nbsp Password* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="password" name="password" class="form-control" aria-describedby="password" placeholder="Password" required>
										</div>

                    <div class="input-group form-group">
											<span class="input-group-addon" id="confirmPassword">&nbsp Confirm Password* &nbsp</span>
											<input type="password" name="confirmPassword" class="form-control" aria-describedby="confirmPassword" placeholder="Confirm Password" required>
										</div>

										<div class="col-md-6">
											<button type="submit" class="btn btn-primary btn-block" style='background-color:#404040;'>Submit</button>
										</div>

										<div class="col-md-6">
											<button type="reset" class="btn btn-primary btn-block" style='background-color:#404040;'>Cancel</button>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="map-canvas" class="col-md-12 map-container">

										</div>
		</div>
		<footer style="width=100%;">
    <div class="row">
        <div class="col-lg-12">
            <?php include 'footer.php'; ?>
        </div>
    </div>
</footer>
	</body>
</html>
