<?php
	session_start();
?>

<html>
	<head>

        <title>Online Electronics Services</title>



	</head>

	<body background="images/wood.jpg">
	<?php
		include'header.php';
    include'customerHeader.php';
	?>

		<div class="container">

			<div class="container container-content" style="padding-top: 0em;">
			<br>
			<div class="panel" style="background: url(images/wood.jpg)">
                <div class="row">
    				<div class="col-md-12">
    					<h1 class="text-center fancy-title"><span>Request Service</span></h1>
    				</div>
    			</div>
				<div class="panel-body" style="background: url(images/wood.jpg)">
					<div class="row">
						<div class="col-md-6">
							<div class="panel" style="background: url(images/wood.jpg)">
								<div class="panel-body" style="background: url(images/wood.jpg)">
									<center>
									<!--<span class="glyphicon glyphicon-edit" height=300 width=300></span>-->
									<img src="images/service.png" height="200" width="200">
									<h1>Request Service</h1>
									</center>

								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel">
								<div class="panel-body" style="background: url(images/wood.jpg)">
									<form action="requestservices1.php" method="POST">

										<div class="input-group form-group">
											<span class="input-group-addon" id="bno">&nbsp&nbsp&nbsp&nbsp Bill Number &nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="text" name="bno" class="form-control" aria-describedby="bno" placeholder="Bill Number" required>
										</div>


										<!--<div class="col-md-3">
											<button type="submit1" class="btn btn-primary btn-block" style='background-color:#404040;'>Warranty Check</button>
										<p></p>
									</div>-->

										<!--<br>
										<br>
										<br>-->

										<!--<div class="input-group form-group">
											<span class="input-group-addon" id="serviceType">&nbsp&nbsp&nbsp&nbsp Service Type &nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="text" name="serviceType" pattern="[a-zA-Z\ ]+" class="form-control" aria-describedby="serviceType" placeholder="Service Type" required>
										</div>-->



                    <div class="input-group form-group">
											<span class="input-group-addon" id="description">Description &nbsp&nbsp</span>
											<textarea rows="5" name="description" class="form-control" aria-describedby="description" placeholder="Description" required></textarea>
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
