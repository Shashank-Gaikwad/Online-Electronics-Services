<?php
	session_start();
?>
<?php
include'database_connection.php';
$username=$_SESSION['username'];
$query="select * from customer where email='".$username."'";
$result=$con->query($query);
$row=$result->fetch_assoc();
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

		<div class="container" style="background: url(images/wood.jpg)">

			<div class="container container-content" style="padding-top: 0em;">
			<br>
			<div class="panel" style="background: url(images/wood.jpg)">
                <div class="row">
    				<div class="col-md-12">
    					<h1 class="text-center fancy-title"><span>Edit Profile</span></h1>
    				</div>
    			</div>
				<div class="panel-body" style="background: url(images/wood.jpg)">
					<div class="row">
						<div class="col-md-6">
							<div class="panel" style='background-color:orange;'>
								<div class="panel-body" style='background-color:orange;'>
									<br><br>
									<center>
									<!--<span class="glyphicon glyphicon-edit" height=300 width=300></span>-->
									<img src="images/edit_user.png" height="200" width="200">
									<h1>Edit profile details<h1>
									</center>
									<br><br>

								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-primary">
								<div class="panel-body" style="background: url(images/wood.jpg)">
									<form action="updateProfile2.php" method=POST enctype="multipart/form-data">

										<div class="input-group form-group">
											<span class="input-group-addon" id="name">&nbsp&nbsp&nbsp&nbsp Name* &nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="text" name="name" pattern="[a-zA-Z\ ]+" class="form-control" aria-describedby="name" value="<?php echo $row['name'];?>" autofocus required>
										</div>

										<div class="input-group form-group">
											<span class="input-group-addon" id="phno">&nbsp Mobile No* &nbsp</span>
											<input type="text" name="mobile1" pattern="[0-9]{10}" class="form-control" aria-describedby="mobile" value="<?php echo $row['contact'];?>" maxlength="10" required>
										</div>

										<div class="input-group form-group">
											<span class="input-group-addon" id="email">&nbsp&nbsp Email ID* &nbsp&nbsp&nbsp</span>
											<input type="email" name="email" class="form-control" aria-describedby="email" value="<?php echo $row['email'];?>" required>
										</div>

                      									<div class="input-group form-group">
											<span class="input-group-addon" id="birthdate">&nbsp&nbsp Birthdate* &nbsp&nbsp&nbsp</span>
											<input type="date" name="birthdate" class="form-control" aria-describedby="bithdate" value="<?php echo $row['birthdate'];?>" required>
										</div>

										<div class="input-group form-group">
											<span class="input-group-addon" id="address">Address* &nbsp&nbsp</span>
											<textarea rows="5" name="address" class="form-control" aria-describedby="address"><?php echo $row['address'];?></textarea>
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
