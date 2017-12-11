<?php
	session_start();
?>

<html>
	<head>

        <title>Online Electronics Services</title>

				<script>
				function validatePassword()
	{
		var password=document.forms["Form"]["newPassword"].value;
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
	<body background="images/wood.jpg">
	<?php
		include'header.php';
    include'customerHeader.php';

		if($_GET)
			{
				if(isset($_GET['id']))
				{
					if($_GET['id']=="success")
					{
						echo "
						<div class='alert alert-success text-center'>
							<strong>Success!</strong> Your password updated successfully.
						</div>
						";
					}
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

		<div class="container" style="background: url(images/wood.jpg)">

			<div class="container container-content" style="padding-top: 0em;">
			<br>
			<div class="panel" style="background: url(images/wood.jpg)">
                <div class="row">
    				<div class="col-md-12">
    					<h1 class="text-center fancy-title"><span>Reset Password</span></h1>
    				</div>
    			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="panel" style="background: url(images/wood.jpg)">
								<div class="panel-body" style="background: url(images/wood.jpg)">
									<br><br>
									<center>
									<!--<span class="glyphicon glyphicon-edit" height=300 width=300></span>-->
									<img src="images/edit_user.png" height="200" width="200">
									<h1>Edit Password<h1>
									</center>
									<br><br>

								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="panel panel-primary">
								<div class="panel-body" style="background: url(images/wood.jpg)">
									<form action="resetPassword1.php" name="Form" method=POST onsubmit="return validatePassword()">

										<div class="input-group form-group">
											<span class="input-group-addon" id="newPassword">&nbsp&nbsp&nbsp&nbsp New Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="password" name="newPassword" id="newPassword" class="form-control" aria-describedby="name" placeholder="New Password" required>
										</div>

                    <div class="input-group form-group">
											<span class="input-group-addon" id="confirmPassword">&nbsp&nbsp&nbsp&nbsp Confirm Password &nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="password" name="confirmPassword" id="confirmPassword" class="form-control" aria-describedby="name" placeholder="New Password" required>
										</div>



										<div class="col-md-6">
											<button type="submit" class="btn btn-primary btn-block" style='background-color:#404040;' id="btnSubmit">Submit</button>
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
