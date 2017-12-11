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
			 if($_GET['id']=="success")
			 {

			 }
		 }
	 }
  ?>

    <center><h1>Sales</h1></center>
    <?php
    $count=0;
  	$cname_array=array();
  	$pname_array=array();
  	$image_array=array();
  	$quantity_array=array();
  	$price_array=array();
    $total_array=array();
    $date_array=array();


  	$productQuery="select DISTINCT customer.name as cname,product.name,image,bill.date,quantity,product.price,bill.amount as amount from customer,product,cart,bill where customer.cno=cart.cno and customer.cno=bill.cno and product.pno=cart.pno order by date desc";
  	$productResult=$con->query($productQuery);

  	while($row=$productResult->fetch_assoc())
  	{
  		$cname_array[$count]=$row['cname'];
      $pname_array[$count]=$row['name'];
  		$image_array[$count]=$row['image'];
      $date_array[$count]=$row['date'];
  		$quantity_array[$count]=$row['quantity'];
      $price_array[$count]=$row['price'];
      $total_array[$count]=$row['amount'];

  		$count++;
  	}
      echo"<table class='table table-hover'>";
        echo"<thead>";
          echo"<tr>";
            echo"<th>Date</th>";
            echo"<th>Customer</th>";
            echo"<th>Product</th>";
            echo"<th>Image</th>";
            echo"<th>Price</th>";
            echo"<th>Quantity</th>";
            //echo"<th>Total</th>";
          echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
          for($i=0;$i<$count;$i++)
          {
            echo"<tr>";
              echo"<td>".$date_array[$i]."</td>";
              echo"<td>".$cname_array[$i]."</td>";
              echo"<td>".$pname_array[$i]."</td>";
              echo"<td>"."<img src='$image_array[$i]' height=100 width=100 />"."</td>";
              echo"<td>".$price_array[$i]."</td>";
              echo"<td>".$quantity_array[$i]."</td>";
              //echo"<td>".$total_array[$i]."</td>";
              //echo"<td>"."<a href='replyQuery.php?q=$eno_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-edit'></span>Reply</a>"."</td>";
              //echo"<td>"."<a href='deleteQuery.php?q=$eno_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-trash'></span>Delete</a>"."</td>";
            echo"</tr>";
          }
        echo"</tbody>";
      echo"</table>";
    ?>
  </body>
</html>
