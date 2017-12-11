<?php
	session_start();
?>

<html>
<head>
  <title>Online Electronics Services</title>
<style>
th,td
{
	color:black;
}
</style>
<script>
function myFunction() {
    window.print();
}
</script>

</head>
<body>
	<?php include 'header.php'; ?>
	<br>

	<br><br>
<div class="container">
	<?php
	if($_GET)
	{
		if($_GET['q'])
		{
			$cid=$_GET['q'];
		}
	}
	include'database_connection.php';

	//$image_count=0;
	//$image_array=array();
	$query="select * from cart where cartId=$cid";
	$result=$con->query($query);

	while($row=$result->fetch_assoc())
	{
		$pno=$row['pno'];
		$price=$row['price'];
		$quantity=$row['quantity'];
		$amount=$row['amount'];
		$cno=$row['cno'];
	}

  $query2="select * from product where pno=$pno";
  $result2=$con->query($query2);

	while($row2=$result2->fetch_assoc())
	{
    $name=$row2['name'];
		$category=$row2['category'];
		$subcategory=$row2['subcategory'];
		$image=$row2['image'];
		$warranty=$row2['warranty'];
	}

  echo "<center><h1>Online Electronics Services</h1></center>";
  echo "<center><h1>Bill</h1></center>";

	echo"<div class='row'>
  <div class='col-md-4'>
  </div>
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
			        <td>Product Price</td>
			        <td>Rs. $price</td>
			      </tr>
            <tr>
 			        <td>Quantity</td>
 			        <td>$quantity</td>
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

			  <center><h4>Total Amount:<font color='red'> Rs. $amount</font></h4></center>
        <br>
        <center><button type='button' class='btn btn-info btn-lg' onclick='myFunction()'>Print</button></center>
			</div>
		</div>";
    echo"
    <div class='col-md-4'>
    </div>";
/*
    echo"
		<div class='col-md-8'>
		<center>
			<img alt='img' src='$image' height='417' width='417'><br>

		</center>
		</div>
	</div>";
*/
?>
</div>

</body>
</html>
<br>
<?php include 'footer.php'; ?>
