<?php
	session_start();
?>
<html>
  <body background="images/wood.jpg">
    <!--<br><br>-->
  <?php
   include 'header.php';
   include 'adminHeader.php';
   include 'database_connection.php';

	 if($_GET)
	 {
		 if(isset($_GET['id']))
		 {
			 if($_GET['id']=="add")
			 {
				 echo "
				 <div class='alert alert-success text-center'>
					 <strong>Success!</strong> Your product added successfully.
				 </div>
				 ";
			 }
			 if($_GET['id']=="update")
			 {
				 echo "
				 <div class='alert alert-success text-center'>
					 <strong>Success!</strong> Your product details updated successfully.
				 </div>
				 ";
			 }
			 if($_GET['id']=="delete")
			 {
				 echo "
				 <div class='alert alert-success text-center'>
					 <strong>Success!</strong> Your product deleted successfully.
				 </div>
				 ";
			 }
		 }
	 }
  ?>

    <center><h1>Products</h1></center>
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
      echo"<table class='table table-hover'>";
        echo"<thead>";
          echo"<tr>";
          echo"<th>Product No</th>";
            echo"<th>Product Name</th>";
            echo"<th>Product Image</th>";
            echo"<th>Category</th>";
            echo"<th>Price</th>";
            echo"<th>Edit</th>";
            echo"<th>Delete</th>";
          echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
          for($i=0;$i<$productCount;$i++)
          {
            echo"<tr>";
              echo"<td>".$pno_array[$i]."</td>";
              echo"<td>".$name_array[$i]."</td>";
              echo"<td>"."<img src='$image_array[$i]' height=100 width=100 />"."</td>";
              echo"<td>".$category_array[$i]."</td>";
              echo"<td>".$price_array[$i]."</td>";
              echo"<td>"."<a href='updateProduct.php?q=$pno_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-edit'></span>Edit</a>"."</td>";
              echo"<td>"."<a href='deleteProduct.php?q=$pno_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-trash'></span>Delete</a>"."</td>";
            echo"</tr>";
          }
        echo"</tbody>";
      echo"</table>";
    ?>
  </body>
</html>
