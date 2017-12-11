<?php
	session_start();
?>

<html>
<head>
<script type="text/javascript">
	function image_click(image_id){
		var small_image = document.getElementById(image_id);
		small_image.setAttribute("border", "2px");

		var child = document.getElementById("myid");
		document.getElementById("image_div").removeChild(child);
		var image = document.createElement("img");
		image.setAttribute("height", "570");
		image.setAttribute("width", "820");
		image.setAttribute("class", "img-responsive");
		image.setAttribute("src", image_id);
		image.setAttribute("id", "myid");
		document.getElementById("image_div").appendChild(image);
	}
</script>
<style>
th,td
{
	color:black;
}
</style>


</head>
<body background="images/wood.jpg">
	<?php include 'header.php'; ?>
	<br>

	<br><br>
<div class="container">
	<?php
	if($_GET)
	{
		if($_GET['product'])
		{
			$pid=$_GET['product'];
		}
	}
	include'database_connection.php';

	//$image_count=0;
	//$image_array=array();
	$query="select * from product where pno='$pid'";
	$result=$con->query($query);

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
/*
		if($productImage1!=NULL)
		{
			$image_array[$image_count]=$productImage1;
			$image_count++;
		}
		$productImage2=$row['productImage2'];
		if($productImage2!=NULL)
		{
			$image_array[$image_count]=$productImage2;
			$image_count++;
		}
		$productImage3=$row['productImage3'];
		if($productImage3!=NULL)
		{
			$image_array[$image_count]=$productImage3;
			$image_count++;
		}
		$productImage4=$row['productImage4'];
		if($productImage4!=NULL)
		{
			$image_array[$image_count]=$productImage4;
			$image_count++;
		}
*/

	echo"<div class='row'>
		<div class='col-md-4'>
			<h3 style='color:white;'>$name</h3>
			<div class='row'>
				<table class='table table-hover'>
			    <tbody>
			      <tr>
			        <td>Product Name</td>
			        <td>$name</td>
			      </tr>
				   <tr>
			        <td>Product Category</td>
			        <td>$category</td>
			      </tr>
			      <tr>
			        <td>Product Sub Category</td>
			        <td>$subcategory</td>
			      </tr>
				  <tr>
			        <td>Product Features</td>
			        <td>$feature</td>
			      </tr>
			      <tr>
			        <td>Product Price</td>
			        <td>Rs. $price</td>
			      </tr>
						<tr>
			        <td>Warranty</td>
			        <td>$warranty Year</td>
			      </tr>
						";

						echo"
			    </tbody>
			  </table>
			  <br>

			  <h4>Price:<font color='red'> Rs. $price</font></h4>
				";
				if (isset($_SESSION['username']) && (($_SESSION['account'])=="customer"))
				{
				echo "
				<a href='selectQuantity.php?product=$pid&price=$price' class='btn btn-info btn-lg' role='button'><span class='glyphicon glyphicon-cart'></span>Add To Cart</a>
				";
				}
				echo"
			</div>
		</div>
		<div class='col-md-8'>
		<center>
			<img alt='img' src='$image' height='417' width='417'><br>
			<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>View</button>
		</center>
		</div>
	</div>";
?>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gallery</h4>
        </div>
        <div class="modal-body">
          <div class="row">
          	<div class="col-md-12" id="image_div">
          	<img alt="img" src=<?php echo"$image";?> class="img-thumbnail" id="myid" height='570' width='820'>
          	</div>
          </div>

		<div class='row'>
          	<div class='col-md-12'>
			<?php
			/*
				for($i=0;$i<$image_count;$i++)
				{
					echo"<img id='$image_array[$i]' alt='img' src='$image_array[$i]' class='img-thumbnail' height='100px' width='100px' onclick='image_click(this.id)'>";
				}
			*/

			/*
			for($i=0;$i<3;$i++)
			{
				echo"<img id='$i' alt='img' src='$image' class='img-thumbnail' height='100px' width='100px' onclick='image_click(this.id)'>";
			}
			*/
			?>

          	</div>
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<br>
<?php include 'footer.php'; ?>
