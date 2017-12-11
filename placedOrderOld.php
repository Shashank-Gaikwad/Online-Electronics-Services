<?php
	session_start();
?>
<html>
  <body>
    <!--<br><br>-->
  <?php
   include 'header.php';
   include 'customerHeader.php';
   include 'database_connection.php';
  ?>

    <center><h1>Placed Orders</h1></center>
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

		$email=$_SESSION['username'];
    $q="select * from customer where email='$email'";
    $r=$con->query($q);
    while($row=$r->fetch_assoc())
    {
      $cno=$row['cno'];
    }
		//echo "$cno";
  	$productQuery="select product.pno,name,category,subcategory,image,feature,price,warranty from product,bill_product where product.pno=bill_product.pno and bill_product.order=1";
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
            echo"<th>Product Name</th>";
            echo"<th>Product Image</th>";
            echo"<th>Category</th>";
            echo"<th>Price</th>";
            echo"<th>Edit Order</th>";
            echo"<th>Cancel Order</th>";
          echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
          for($i=0;$i<$productCount;$i++)
          {
            echo"<tr>";
              echo"<td>".$name_array[$i]."</td>";
              echo"<td>"."<img src='$image_array[$i]' height=100 width=100 />"."</td>";
              echo"<td>".$category_array[$i]."</td>";
              echo"<td>".$price_array[$i]."</td>";
              echo"<td>"."<a href='updateProduct.php?product=$pno_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-edit'></span>Edit</a>"."</td>";
              echo"<td>"."<a href='deleteProduct.php?product=$pno_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-trash'></span>Delete</a>"."</td>";
            echo"</tr>";
          }
        echo"</tbody>";
      echo"</table>";
    ?>
  </body>
</html>
