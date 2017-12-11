<?php
	session_start();
?>
<html>
<?php
  include'header.php';
  include 'database_connection.php';

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
	echo "<br><br><br><br>";
  echo "<div class='container'>";
  for($i=0;$i<$productCount;$i++)
  {
    echo "
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
  echo "</div>";
?>
</html>
<?php include'footer.php';?>
