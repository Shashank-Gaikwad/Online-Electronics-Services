<?php
	session_start();
?>
<html>
	<head>

        <title>Electronics Shop</title>

	</head>
	<body background="images/wood.jpg">
	<?php
		include'header.php';
		if($_GET)
		{
			if($_GET['id'])
			{
				echo "
				<div class='alert alert-success'>
  				<strong>Success!</strong> Your query submitted successfully.
				</div>
				";
			}
		}
	?>
	<br><br><br>
		<div class="container" style="background: url(images/wood.jpg)">

			<div class="container container-content" style="padding-top: 0em;">
			<br>
			<div class="panel" style="background: url(images/wood.jpg)">
                <div class="row">
    				<div class="col-md-12">
    					<h1 class="text-center fancy-title"><span>Contact Us</span></h1>
    				</div>
    			</div>
				<div class="panel-body" style="background: url(images/wood.jpg)">
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-primary">
								<div class="panel-body" style="background: url(images/wood.jpg)">
									<br><br>
									<div class="col-md-6"><img src="images/shopping.png" height=200 width=200></div>
									<div class="col-md-6"><h3>Electronics Shop</h3></div>
									<div class="row">

											Address :  <br>
											Mobile :  1234567890<br>
											Email : abc@gmail.com <br>

									</div>
									<br><br><br>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">

								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-primary">
								<div class="panel-body" style="background: url(images/wood.jpg)">
									<form action="insertEnquiry.php" method=POST enctype="multipart/form-data">

										<div class="input-group form-group">
											<span class="input-group-addon" id="name">&nbsp&nbsp&nbsp&nbsp Name* &nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="text" name="name" pattern="[a-zA-Z\ ]+" class="form-control" aria-describedby="name" placeholder="Name" required>
										</div>

										<div class="input-group form-group">
											<span class="input-group-addon" id="mobile">&nbsp Mobile No* &nbsp</span>
											<input type="text" name="mobile" pattern="[0-9]{10}" class="form-control" aria-describedby="mobile" placeholder="Mobile No" required>
										</div>

										<div class="input-group form-group">
											<span class="input-group-addon" id="email">&nbsp&nbsp Email ID* &nbsp&nbsp&nbsp</span>
											<input type="email" name="email" class="form-control" aria-describedby="email" placeholder="Email ID" required>
										</div>

										<div class="input-group form-group">
											<span class="input-group-addon" id="address">Query Text* &nbsp&nbsp</span>
											<textarea rows="5" name="queryText" class="form-control" aria-describedby="queryText" placeholder="Query" required></textarea>
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
