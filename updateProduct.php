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
    include'database_connection.php';


	?>

  <?php
  if($_GET)
    {
      if(isset($_GET['id']))
      {
        if($_GET['id']=="success")
        {
          //echo"<h4><center>product updated successfully</center></h4>";
					echo "
					<div class='alert alert-success'>
	  				<strong>Success!</strong> Your product details updated successfully.
					</div>
					";
        }
      }

      if(isset($_GET['q']))
      {
        $p=$_GET['q'];
      }
    }
  ?>

  <?php
  $query="select * from product where pno=$p";
    $result=$con->query($query);
    //$result=mysqli_query($con,$query);
    //while($row=mysqli_fetch_array($result))
    while($row=$result->fetch_assoc())
    {
      $pno=$row['pno'];
      $name=$row['name'];
      $category=$row['category'];
      $subcategory=$row['subcategory'];
      $image=$row['image'];
      $feature=$row['feature'];
      $price=$row['price'];
      $warranty=$row['warranty'];
    }

  ?>
	<br><br><br>
		<div class='container' style="background: url(images/wood.jpg)">

			<div class='container container-content' style='padding-top: 0em;'>
			<br>
			<div class='panel' style="background: url(images/wood.jpg)">
                <div class='row'>
    				<div class='col-md-12'>
    					<h1 class='text-center fancy-title'><span>Update Product</span></h1>
    				</div>
    			</div>
				<div class='panel-body' style="background: url(images/wood.jpg)">
					<div class='row'>
            <div class='col-md-3'>
            </div>
						<div class='col-md-6'>
							<div class='panel panel-primary'>
								<div class='panel-body' style="background: url(images/wood.jpg)">
                  <?php
                  echo"
									<form action='updateProduct1.php' method=POST enctype='multipart/form-data'>
                  ";
                  echo"
										<div class='input-group form-group'>
											<span class='input-group-addon' id='productName'>&nbsp&nbsp&nbsp&nbsp Name* &nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type='text' name='productName' pattern='[a-zA-Z\ ]+' class='form-control' aria-describedby='productName' placeholder='Product Name' value='$name' required>
										</div>
                    ";

                    echo"
                    <div class='input-group form-group'>
											<span class='input-group-addon' id='productType'>&nbsp&nbsp&nbsp Type* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<select class='form-control' aria-describedby='productType' name='productType' placeholder='Product Type' required>
                        <option value=''>Select</option>
												";
											if($category=='Televisions')
											{
												echo"<option value='Televisions' selected>Televisions</option>";
											}
											else
											{
												echo"<option value='Televisions'>Televisions</option>";
											}

											if($category=='Home Entertainment Systems')
											{
												echo"<option value='Home Entertainment Systems' selected>Home Entertainment Systems</option>";
											}
											else
											{
												echo"<option value='Home Entertainment Systems'>Home Entertainment Systems</option>";
											}

											if($category=='Headphones')
											{
												echo"<option value='Headphones' selected>Headphones</option>";
											}
											else
											{
												echo"<option value='Headphones'>Headphones</option>";
											}

											if($category=='Cameras')
											{
												echo"<option value='Cameras' selected>Cameras</option>";
											}
											else
											{
												echo"<option value='Cameras'>Cameras</option>";
											}

											if($category=='Heating and Cooling')
											{
												echo"<option value='Heating and Cooling'>Heating and Cooling</option>";
											}
											else
											{
												echo"<option value='Heating and Cooling'>Heating and Cooling</option>";
											}

											if($category=='Computers')
											{
												echo"<option value='Computers' selected>Computers</option>";
											}
											else
											{
												echo"<option value='Computers'>Computers</option>";
											}

											if($category=='Kitchen and Home Appliances')
											{
												echo"<option value='Kitchen and Home Appliances' selected>Kitchen and Home Appliances</option>";
											}
											else
											{
												echo"<option value='Kitchen and Home Appliances'>Kitchen and Home Appliances</option>";
											}

											if($category=='Other')
											{
												echo"<option value='Other' selected>Other</option>";
											}
											else
											{
												echo"<option value='Other'>Other</option>";
											}
											echo"
                      </select>
										</div>
                    ";

                    echo"
										<div class='input-group form-group'>
											<span class='input-group-addon' id='productSubType'>&nbsp&nbsp SubType* &nbsp&nbsp</span>
											<select class='form-control' aria-describedby='productSubType' name='productSubType' placeholder='Product SubType' required>
                        <option value=''>Select</option>
												";

											echo "<option value='Televisions' disabled>Televisions</option>";
											if($subcategory=='LCD TVs')
											{
												echo "<option value='LCD TVs' selected>LCD TVs</option>";
											}
											else
											{
												echo "<option value='LCD TVs'>LCD TVs</option>";
											}

											if($subcategory=='LED TVs')
											{
												echo "<option value='LED TVs'>LED TVs</option>";
											}
											else
											{
												echo "<option value='LED TVs'>LED TVs</option>";
											}

											if($subcategory=='3D TVs')
											{
											  echo "<option value='3D TVs' selected>3D TVs</option>";
											}
											else
											{
											  echo "<option value='3D TVs'>3D TVs</option>";
											}

											if($subcategory=='Smart TVs')
											{
											  echo "<option value='Smart TVs' selected>Smart TVs</option>";
											}
											else
											{
											  echo "<option value='Smart TVs'>Smart TVs</option>";
											}

												echo "<option value='' disabled></option>";
												echo "<option value='Home Entertainment Systems' disabled>Home Entertainment Systems</option>";

												if($subcategory=='Home Theater Systems')
												{
												  echo "<option value='Home Theater Systems' selected>Home Theater Systems</option>";
												}
												else
												{
												  echo "<option value='Home Theater Systems'>Home Theater Systems</option>";
												}

												if($subcategory=='Projectors')
												{
												  echo "<option value='Projectors' selected>Projectors</option>";
												}
												else
												{
												  echo "<option value='Projectors'>Projectors</option>";
												}

												if($subcategory=='Speakers')
												{
												  echo "<option value='Speakers' selected>Speakers</option>";
												}
												else
												{
												  echo "<option value='Speakers'>Speakers</option>";
												}

												if($subcategory=='Streaming Media Players')
												{
												  echo "<option value='Streaming Media Players' selected>Streaming Media Players</option>";
												}
												else
												{
												  echo "<option value='Streaming Media Players'>Streaming Media Players</option>";
												}

												echo "<option value='' disabled></option>";
												echo "<option value='Headphones' disabled>Headphones</option>";

												if($subcategory=='In Ear')
												{
												  echo "<option value='In Ear' selected>In Ear</option>";
												}
												else
												{
												  echo "<option value='In Ear'>In Ear</option>";
												}

												if($subcategory=='On Ear')
												{
												  echo "<option value='On Ear' selected>On Ear</option>";
												}
												else
												{
												  echo "<option value='On Ear'>On Ear</option>";
												}

												if($subcategory=='Over Ear')
												{
												  echo "<option value='Over Ear' selected>Over Ear</option>";
												}
												else
												{
												  echo "<option value='Over Ear'>Over Ear</option>";
												}

												if($subcategory=='With Microphone')
												{
												  echo "<option value='With Microphone' selected>With Microphone</option>";
												}
												else
												{
												  echo "<option value='With Microphone'>With Microphone</option>";
												}

												if($subcategory=='Without Microphone')
												{
												  echo "<option value='Without Microphone'>Without Microphone</option>";
												}
												else
												{
												  echo "<option value='Without Microphone'>Without Microphone</option>";
												}

												echo "<option value='' disabled></option>";
												echo "<option value='Cameras' disabled>Cameras</option>";

												if($subcategory=='DSLR')
												{
												  echo "<option value='DSLR' selected>DSLR</option>";
												}
												else
												{
												  echo "<option value='DSLR'>DSLR</option>";
												}

												if($subcategory=='Point and Shoot')
												{
												  echo "<option value='Point and Shoot' selected>Point and Shoot</option>";
												}
												else
												{
												  echo "<option value='Point and Shoot'>Point and Shoot</option>";
												}

												if($subcategory=='Mirrorless Cameras')
												{
												  echo "<option value='Mirrorless Cameras' selected>Mirrorless Cameras</option>";
												}
												else
												{
												  echo "<option value='Mirrorless Cameras'>Mirrorless Cameras</option>";
												}

												if($subcategory=='CCTV Cameras')
												{
												  echo "<option value='CCTV Cameras' selected>CCTV Cameras</option>";
												}
												else
												{
												  echo "<option value='CCTV Cameras'>CCTV Cameras</option>";
												}

												if($subcategory=='Camera Accessories')
												{
												  echo "<option value='Camera Accessories' selected>Camera Accessories</option>";
												}
												else
												{
												  echo "<option value='Camera Accessories'>Camera Accessories</option>";
												}

												echo "<option value='' disabled></option>";
												echo "<option value='Heating and Cooling' disabled>Heating and Cooling</option>";

												if($subcategory=='Room Heaters')
												{
												  echo "<option value='Room Heaters' selected>Room Heaters</option>";
												}
												else
												{
												  echo "<option value='Room Heaters'>Room Heaters</option>";
												}

												if($subcategory=='Water Heaters')
												{
												  echo "<option value='Water Heaters' selected>Water Heaters</option>";
												}
												else
												{
												  echo "<option value='Water Heaters'>Water Heaters</option>";
												}

												if($subcategory=='Air Conditioners')
												{
												  echo "<option value='Air Conditioners' selected>Air Conditioners</option>";
												}
												else
												{
												  echo "<option value='Air Conditioners'>Air Conditioners</option>";
												}

												if($subcategory=='Fan')
												{
												  echo "<option value='Fan' selected>Fan</option>";
												}
												else
												{
												  echo "<option value='Fan'>Fan</option>";
												}

												echo "<option value='' disabled></option>";
                        echo "<option value='Computers' disabled>Computers</option>";

												if($subcategory=='Desktops')
												{
												  echo "<option value='Desktops' selected>Desktops</option>";
												}
												else
												{
												  echo "<option value='Desktops'>Desktops</option>";
												}

												if($subcategory=='Laptops')
												{
												  echo "<option value='Laptops' selected>Laptops</option>";
												}
												else
												{
												  echo "<option value='Laptops'>Laptops</option>";
												}

												if($subcategory=='Printers')
												{
												  echo "<option value='Printers' selected>Printers</option>";
												}
												else
												{
												  echo "<option value='Printers'>Printers</option>";
												}

												if($subcategory=='Routers')
												{
												  echo "<option value='Routers' selected>Routers</option>";
												}
												else
												{
												  echo "<option value='Routers'>Routers</option>";
												}

												if($subcategory=='Computer Accessories')
												{
												  echo "<option value='Computer Accessories' selected>Computer Accessories</option>";
												}
												else
												{
												  echo "<option value='Computer Accessories'>Computer Accessories</option>";
												}

												echo "<option value='' disabled></option>";
                        echo "<option value='Kitchen and Home Appliances' disabled>Kitchen and Home Appliances</option>";

												if($subcategory=='Refrigerators')
												{
												  echo "<option value='Refrigerators' selected>Refrigerators</option>";
												}
												else
												{
												  echo "<option value='Refrigerators'>Refrigerators</option>";
												}

												if($subcategory=='Washing Machines')
												{
												  echo "<option value='Washing Machines' selected>Washing Machines</option>";
												}
												else
												{
												  echo "<option value='Washing Machines'>Washing Machines</option>";
												}

												if($subcategory=='Irons')
												{
												  echo "<option value='Irons' selected>Irons</option>";
												}
												else
												{
												  echo "<option value='Irons'>Irons</option>";
												}

												if($subcategory=='Water Purifiers')
												{
												  echo "<option value='Water Purifiers' selected>Water Purifiers</option>";
												}
												else
												{
												  echo "<option value='Water Purifiers'>Water Purifiers</option>";
												}

												if($subcategory=='Vacuum Cleaners')
												{
												  echo "<option value='Vacuum Cleaners' selected>Vacuum Cleaners</option>";
												}
												else
												{
												  echo "<option value='Vacuum Cleaners'>Vacuum Cleaners</option>";
												}

												echo "<option value='' disabled></option>";
                        echo "<option value='Other' disabled>Other</option>";

												if($subcategory=='Mobile Phones')
												{
												  echo "<option value='Mobile Phones' selected>Mobile Phones</option>";
												}
												else
												{
												  echo "<option value='Mobile Phones'>Mobile Phones</option>";
												}

												if($subcategory=='Gaming Consoles')
												{
												  echo "<option value='Gaming Consoles' selected>Gaming Consoles</option>";
												}
												else
												{
												  echo "<option value='Gaming Consoles'>Gaming Consoles</option>";
												}

												echo"
                      </select>
										</div>
                    ";

                    echo"
                    <div class='input-group form-group'>
											<span class='input-group-addon' id='image'>&nbsp&nbsp Image* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type='file' name='image' class='form-control' aria-describedby='image' placeholder='Image' disabled>
										</div>
                    ";



                    echo"
										<div class='input-group form-group'>
											<span class='input-group-addon' id='feature'>&nbsp&nbsp Features* &nbsp&nbsp</span>
											<textarea rows='5' name='feature' class='form-control' aria-describedby='feature' placeholder='Features' value='$feature' required>$feature</textarea>
										</div>
                    ";

                    echo"
										<div class='input-group form-group'>
											<span class='input-group-addon' id='price'>&nbsp&nbsp Price* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
											<input type='price' name='price' class='form-control' aria-describedby='price' placeholder='Price' value='$price' required>
										</div>
                    ";

                    echo"
                    <div class='input-group form-group'>
											<span class='input-group-addon' id='warranty'>&nbsp Warranty* &nbsp&nbsp&nbsp</span>
											<input type='text' name='warranty' class='form-control' aria-describedby='warranty' placeholder='Warranty' value='$warranty' required>
										</div>
                    ";

										echo "<input type='hidden' name='productNumber' value='$p'>";

                    echo"
										<div class='col-md-6'>
											<button type='submit' class='btn btn-primary btn-block' style='background-color:#404040;'>Update</button>
										</div>
                    ";

                    echo"
										<div class='col-md-6'>
											<button type='reset' class='btn btn-primary btn-block' style='background-color:#404040;'>Cancel</button>
										</div>
                    ";

                    echo"
									</form>
                  ";
                  ?>
								</div>
							</div>
						</div>
            <div class='col-md-3'>
            </div>
					</div>
				</div>
			</div>
		</div>
		<div id='map-canvas' class='col-md-12 map-container'>

										</div>
		</div>
		<footer style='width=100%;'>
    <div class='row'>
        <div class='col-lg-12'>
            <?php include 'footer.php'; ?>
        </div>
    </div>
</footer>
	</body>
</html>
