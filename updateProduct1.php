<?php
	session_start();
?>

<?php
	include'database_connection.php';

  $pno=$_POST['productNumber'];
  $name=$_POST['productName'];
  $type=$_POST['productType'];
  $subtype=$_POST['productSubType'];
  $feature=$_POST['feature'];
  $price=$_POST['price'];
  $warranty=$_POST['warranty'];

  //echo "$pno<br>$name<br>$type<br>$subtype<br>$feature<br>$price<br>$warranty";

  $query1="update product set name='$name', category='$type', subcategory='$subtype', feature='$feature', price=$price, warranty=$warranty where pno=$pno";
	if($con->query($query1))
	{
		echo"<script>window.location='adminpage.php?id=update';</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}

?>
