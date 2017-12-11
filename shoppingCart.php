<?php
	session_start();
?>
<html>
  <body background="images/wood.jpg">
    <!--<br><br>-->
  <?php
   include 'header.php';
   include 'customerHeader.php';
   include 'database_connection.php';

	 if($_GET)
	 {
		 if(isset($_GET['id']))
		 {
			 if($_GET['id']=="success")
			 {
				 echo "
				 <div class='alert alert-success text-center'>
					 <strong>Success!</strong> product added to cart successfully.
				 </div>
				 ";
			 }
			 if($_GET['id']=="delete")
			 {
				 echo "
				 <div class='alert alert-success text-center'>
					 <strong>Success!</strong> product deleted from cart successfully.
				 </div>
				 ";
			 }
			 if($_GET['id']=="place")
			 {
				 echo "
				 <div class='alert alert-success text-center'>
					 <strong>Success!</strong>Your order placed successfully.
				 </div>
				 ";
			 }
		 }
	 }
  ?>

    <center><h1>Products in Cart</h1></center>
    <?php
    $productCount=0;
		$cartCount=0;
  	$pno_array=array();
		$name_array=array();
		$image_array=array();
		$price_array=array();
  	$amount_array=array();
  	$quantity_array=array();
		$cartId_array=array();

    $email=$_SESSION['username'];
    $q="select * from customer where email='$email'";
    $r=$con->query($q);
    while($row=$r->fetch_assoc())
    {
      $cno=$row['cno'];
    }

  	//$cartQuery="select product.pno,name,image,price,quantity from product,bill_product,bill where bill.cno=$cno and product.pno=bill_product.pno and bill_product.order='0'";
		$cartQuery="select product.pno,product.name,image,product.price,quantity,amount,cartId from product,cart,customer where product.pno=cart.pno and customer.cno=cart.cno and order_status=0 and customer.cno=$cno";
		$cartResult=$con->query($cartQuery);

  	while($row=$cartResult->fetch_assoc())
  	{
  		$pno_array[$cartCount]=$row['pno'];
			$name_array[$cartCount]=$row['name'];
			$image_array[$cartCount]=$row['image'];
      $quantity_array[$cartCount]=$row['quantity'];
  		$price_array[$cartCount]=$row['price'];
			$amount_array[$cartCount]=$row['amount'];
			$cartId_array[$cartCount]=$row['cartId'];

  		$cartCount++;
  	}
		//echo "$cartCount";
      echo"<table class='table table-hover'>";
        echo"<thead>";
          echo"<tr>";
            echo"<th>Name</th>";
            echo"<th>Image</th>";
            echo"<th>Price</th>";
            echo"<th>Quantity</th>";
						echo"<th>Amount</th>";
            echo"<th>Place Order</th>";
            echo"<th>Delete from Cart</th>";
          echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
          for($i=0;$i<$cartCount;$i++)
          {
            echo"<tr>";
              echo"<td>".$name_array[$i]."</td>";
              echo"<td>"."<img src='$image_array[$i]' height=100 width=100 />"."</td>";
              echo"<td>".$price_array[$i]."</td>";
              echo"<td>".$quantity_array[$i]."</td>";
							echo"<td>".$amount_array[$i]."</td>";
              echo"<td>"."<a href='selectPaymentMethod.php?q=$cartId_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-edit'></span>Place</a>"."</td>";
              echo"<td>"."<a href='deleteCart.php?q=$cartId_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-trash'></span>Delete</a>"."</td>";
            echo"</tr>";
          }
        echo"</tbody>";
      echo"</table>";
    ?>
  </body>
</html>
