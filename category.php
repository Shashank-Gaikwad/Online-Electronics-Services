<?php
	session_start();
?>
<html>
	<head>
		<title>Online Electronics Services</title>
	</head>
	<body>
		<?php include'header.php';?>
		<?php
			if($_GET)
			{
				if($_GET['category'])
				{
					$cat=$_GET['category'];
				}
				if($_GET['subcategory'])
				{
					$sub=$_GET['subcategory'];
				}
			}
		?>

		<?php
		include'database_connection.php';

		//echo "category=$cat<br>";
		//echo "subcategory=$sub<br>";
		$count=0;
				$id_array=array();
				$name_array=array();
        $type_array=array();
				$subtype_array=array();
        $image_array=array();
	      $feature_array=array();
				$price_array=array();
				$warranty_array=array();

				if($sub=="none")
				{

						$query="select * from product where category='$cat'";
				}
				else
				{
					$query="select * from product where category='$cat' and subcategory='$sub'";
				}


				$result=$con->query($query);
				//$result=mysqli_query($con,$query);
				//while($row=mysqli_fetch_array($result))
				while($row=$result->fetch_assoc())
				{
					$id_array[$count]=$row['pno'];
					$name_array[$count]=$row['name'];
					$type_array[$count]=$row['category'];
					$subtype_array[$count]=$row['subcategory'];
					$image_array[$count]=$row['image'];
					$feature_array[$count]=$row['feature'];
					$price_array[$count]=$row['price'];
					$warranty_array[$count]=$row['warranty'];

					$count++;
				}


			for($i=0;$i<$count;$i++)
			{
				$pid=$id_array[$i];
							echo"
              <div class='col-md-4 col-sm-6 highlight  hero-feature'>
                          <center><img src='$image_array[$i]' alt='' height='300' width='300'></center>
                          <div class='caption'>

                              <center><p>Rs. $price_array[$i]</p></center>
                              <p>
                                 <center> <a href='details.php?product=$id_array[$i]' class='btn btn-primary'>View Now!</a></center>
                              </p>
                          </div>
              <h4 class='text-center'>$name_array[$i]</h4>
              </div>
              ";


			}

		?>

	</body>
</html>
