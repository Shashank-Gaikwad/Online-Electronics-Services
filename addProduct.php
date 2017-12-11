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
	?>
	<br><br><br>
		<div class="container" style="background: url(images/wood.jpg)">

			<div class="container container-content" style="padding-top: 0em;">
			<br>
			<div class="panel" style="background: url(images/wood.jpg)">
                <div class="row">
    				<div class="col-md-12">
    					<h1 class="text-center fancy-title"><span>Add Product</span></h1>
    				</div>
    			</div>
				<div class="panel-body" style="background: url(images/wood.jpg)">
					<div class="row">
            <div class="col-md-3">
            </div>
						<div class="col-md-6">
							<div class="panel panel-primary">
								<div class="panel-body" style="background: url(images/wood.jpg)">
									<form action="addProduct1.php" method=POST enctype="multipart/form-data">

										<div class="input-group form-group">
											<span class="input-group-addon" id="productName">&nbsp&nbsp Name* &nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="text" name="productName" pattern="[a-zA-Z\ ]+" class="form-control" aria-describedby="productName" placeholder="Product Name" required>
										</div>

                    <div class="input-group form-group">
											<span class="input-group-addon" id="productType">&nbsp&nbsp&nbsp&nbsp Type* &nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<select class="form-control" aria-describedby="productType" name="productType" placeholder="Product Type" required>
                        <option value="">Select</option>
                        <option value="Televisions">Televisions</option>
                        <option value="Home Entertainment Systems">Home Entertainment Systems</option>
                        <option value="Headphones">Headphones</option>
                        <option value="Cameras">Cameras</option>
                        <option value="Heating and Cooling">Heating and Cooling</option>
                        <option value="Computers">Computers</option>
                        <option value="Kitchen and Home Appliances">Kitchen and Home Appliances</option>
                        <option value="Other">Other</option>
                      </select>
										</div>

										<div class="input-group form-group">
											<span class="input-group-addon" id="productSubType">&nbsp SubType* &nbsp&nbsp</span>
											<select class="form-control" aria-describedby="productSubType" name="productSubType" placeholder="Product SubType" required>
                        <option value="">Select</option>
                        <option value="Televisions" disabled>Televisions</option>
												<option value="LCD TVs">LCD TVs</option>
												<option value="LED TVs">LED TVs</option>
												<option value="3D TVs">3D TVs</option>
												<option value="Smart TVs">Smart TVs</option>
												<option value="" disabled></option>
                        <option value="Home Entertainment Systems" disabled>Home Entertainment Systems</option>
												<option value="Home Theater Systems">Home Theater Systems</option>
												<option value="Projectors">Projectors</option>
												<option value="Speakers">Speakers</option>
												<option value="Streaming Media Players">Streaming Media Players</option>
												<option value="" disabled></option>
                        <option value="Headphones" disabled>Headphones</option>
												<option value="In Ear">In Ear</option>
												<option value="On Ear">On Ear</option>
												<option value="Over Ear">Over Ear</option>
												<option value="With Microphone">With Microphone</option>
												<option value="Without Microphone">Without Microphone</option>
												<option value="" disabled></option>
                        <option value="Cameras" disabled>Cameras</option>
												<option value="DSLR">DSLR</option>
												<option value="Point and Shoot">Point and Shoot</option>
												<option value="Mirrorless Cameras">Mirrorless Cameras</option>
												<option value="CCTV Cameras">CCTV Cameras</option>
												<option value="Camera Accessories">Camera Accessories</option>
												<option value="" disabled></option>
                        <option value="Heating and Cooling" disabled>Heating and Cooling</option>
												<option value="Room Heaters">Room Heaters</option>
												<option value="Water Heaters">Water Heaters</option>
												<option value="Air Conditioners">Air Conditioners</option>
												<option value="Fan">Fan</option>
												<option value="" disabled></option>
                        <option value="Computers" disabled>Computers</option>
												<option value="Desktops">Desktops</option>
												<option value="Laptops">Laptops</option>
												<option value="Printers">Printers</option>
												<option value="Routers">Routers</option>
												<option value="Computer Accessories">Computer Accessories</option>
												<option value="" disabled></option>
                        <option value="Kitchen and Home Appliances" disabled>Kitchen and Home Appliances</option>
												<option value="Refrigerators">Refrigerators</option>
												<option value="Washing Machines">Washing Machines</option>
												<option value="Irons">Irons</option>
												<option value="Water Purifiers">Water Purifiers</option>
												<option value="Vacuum Cleaners">Vacuum Cleaners</option>
												<option value="" disabled></option>
                        <option value="Other" disabled>Other</option>
												<option value="Mobile Phones">Mobile Phones</option>
												<option value="Gaming Consoles">Gaming Consoles</option>
                      </select>
										</div>

                    <div class="input-group form-group">
											<span class="input-group-addon" id="image">&nbsp Image* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="file" name="image" class="form-control" aria-describedby="image" placeholder="Image" required>
										</div>

									<!--	<div class="input-group form-group">
											<span class="input-group-addon" id="feature">&nbsp Feature* &nbsp</span>
											<input type="text" name="feature" class="form-control" aria-describedby="feature" placeholder="Mobile No" required>
										</div>-->

										<div class="input-group form-group">
											<span class="input-group-addon" id="feature">&nbsp Features* &nbsp&nbsp</span>
											<textarea rows="5" name="feature" class="form-control" aria-describedby="feature" placeholder="Features" required></textarea>
										</div>

										<div class="input-group form-group">
											<span class="input-group-addon" id="price">&nbsp&nbsp Price* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type="price" name="price" class="form-control" aria-describedby="price" placeholder="Price" required>
										</div>



                    <div class="input-group form-group">
											<span class="input-group-addon" id="warranty">&nbsp Warranty* &nbsp&nbsp</span>
											<input type="text" name="warranty" class="form-control" aria-describedby="warranty" placeholder="Warranty" required>
										</div>

										<div class="col-md-6">
											<button type="submit" class="btn btn-primary btn-block" style='background-color:#404040;'>Add</button>
										</div>

										<div class="col-md-6">
											<button type="reset" class="btn btn-primary btn-block" style='background-color:#404040;'>Cancel</button>
										</div>

									</form>
								</div>
							</div>
						</div>
            <div class="col-md-3">
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
