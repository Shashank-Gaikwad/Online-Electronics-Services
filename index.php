<?php
	session_start();
?>
<html>
	<head>
		<title>Online Electronics Services</title>
	</head>
	<body>
		<?php include'header.php'; ?>
			<?php include'database_connection.php';?>
			<?php

	$productCount=0;
	$pno_array=array();
	$name_array=array();
	$category_array=array();
	$subcategory_array=array();
	$image_array=array();
	$feature_array=array();
	$price_array=array();
	$warranty_array=array();

	$productQuery="select * from product";
	$productResult=$con->query($productQuery);

	while($row=$productResult->fetch_assoc())
	{
		$pno_array[$productCount]=$row['pno'];
		$name_array[$productCount]=$row['name'];
		$category_array[$productCount]=$row['category'];
		$subcategory_array[$productCount]=$row['subcategory'];
		$image_array[$productCount]=$row['image'];
		$feature_array[$productCount]=$row['feature'];
		$price_array[$productCount]=$row['price'];
		$warranty_array[$productCount]=$row['warranty'];

		$productCount++;
	}

?>
		<!--<br><br><br>-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
		<?php
	for($i=0;$i<$productCount;$i++)
	{
		if($i==0)
		{
			/*echo"
	<li data-target='#myCarousel' data-slide-to='$i' class='active'></li>
		";*/
		}
		else
		{
			/*echo"<li data-target='#myCarousel' data-slide-to='$i'></li>";*/
		}
	}
  ?>

  </ol>



  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
		<?php
		for($i=0;$i<$productCount;$i++)
		{
			if($i==0)
			{
				echo"
				<div class='item active'>
      <center><img src='$image_array[$i]' alt='banana' height='300' width='500'></center>
      <div class='carousel-caption'>
       <a href='details.php?product=$pno_array[$i]' style='color:gold;'><h2>$name_array[$i]</h2></a>
       <p>Rs. $price_array[$i]</p>
      </div>
    </div>
				";
			}
			else
			{
				echo"
				<div class='item'>
      <center><img src='$image_array[$i]' alt='banana' height='300' width='500'></center>
      <div class='carousel-caption'>
       <a href='details.php?product=$pno_array[$i]' style='color:gold;'><h2>$name_array[$i]</h2></a>
       <p>Rs. $price_array[$i]</p>
      </div>
    </div>
				";
			}
		}
   ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--<div class="row">
	<center><a href="newsAll.php"><button class='btn btn-sm'>See All News</button></a></center>
</div>-->

<?php

$productCount=0;
$pno_array=array();
$name_array=array();
$category_array=array();
$subcategory_array=array();
$image_array=array();
$feature_array=array();
$price_array=array();
$warranty_array=array();

$query="select * from product";
$result=$con->query($query);

while($row=$result->fetch_assoc())
{
	$pno_array[$productCount]=$row['pno'];
	$name_array[$productCount]=$row['name'];
	$category_array[$productCount]=$row['category'];
	$subcategory_array[$productCount]=$row['subcategory'];
	$image_array[$productCount]=$row['image'];
	$feature_array[$productCount]=$row['feature'];
	$price_array[$productCount]=$row['price'];
	$warranty_array[$productCount]=$row['warranty'];
	$productCount++;
}

?>
<!-- Intro -->
	<div class="container text-center col-md-12" style="background: url(images/wood.jpg)">
		<br> <br>
		<h2 class="thin">Welcome to Online Electronics Services</h2>
		<p class="text-muted">
			Welcome to the world of online shopping.<br>
			Experience the change.
		</p>
	</div>
<!-- /Intro-->
<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space" style="background: url(images/wood.jpg)">
		<div class="container" style="background: url(images/wood.jpg)">

			<h3 class="text-center thin">New Products</h3>

			<?php
				for($i=$productCount-1;$i>($productCount-4);$i--)
				{
					echo"
					<div class='col-md-4 col-sm-6 highlight  hero-feature'>
											<img src='$image_array[$i]' alt='' height='300' width='300'>
											<div class='caption'>

													<p>Rs. $price_array[$i]</p>
													<p>
														 <center> <a href='details.php?product=$pno_array[$i]' class='btn btn-primary'>View Now!</a></center>
													</p>
											</div>
					<h4 class='text-center'>$name_array[$i]</h4>
					</div>
					";
				}
			?>

			<div class="row">
				<center> <a href='displayProducts.php' class='btn btn-primary'>See More</a></center>
			</div>

		</div>
	</div>
	<div class="jumbotron top-space" style="background: url(images/wood.jpg)">
		<div class="container" style="background: url(images/wood.jpg)">

			<h3 class="text-center thin">Trending Products</h3>

			<?php
				for($i=0;$i<3;$i++)
				{
					echo"
					<div class='col-md-4 col-sm-6 highlight  hero-feature'>
											<img src='$image_array[$i]' alt='' height='300' width='300'>
											<div class='caption'>

													<p>Rs. $price_array[$i]</p>
													<p>
														 <center> <a href='details.php?product=$pno_array[$i]' class='btn btn-primary'>View Now!</a></center>
													</p>
											</div>
					<h4 class='text-center'>$name_array[$i]</h4>
					</div>
					";
				}
			?>

			<div class="row">
				<center> <a href='displayProducts.php' class='btn btn-primary'>See More</a></center>
			</div>


		</div>
	</div>

	</body>

</html>

<?php include'footer.php'; ?>
