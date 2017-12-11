<?php
	session_start();
?>

<?php
	include'database_connection.php';

  if($_GET)
  {
    if($_GET['q'])
    {
      $cid=$_GET['q'];
    }
  }
/*
	$email=$_SESSION['username'];
  $q="select cno from customer where email='$email'";
  $r=$con->query($q);
  while($row=$r->fetch_assoc())
  {
    $cno=$row['cno'];
  }
*/
$flag=1;
echo "$cid";
		$cartQuery="select * from cart where cartId=$cid";
		$cartResult=$con->query($cartQuery);
		while($row=$cartResult->fetch_assoc())
		{
			$pno=$row['pno'];
			$price=$row['price'];
			$quantity=$row['quantity'];
			$amount=$row['amount'];
			$cno=$row['cno'];
		}

		$billQuery="insert into bill(date,amount,cno) values(CURDATE(),$amount,$cno)";
		$billResult=$con->query($billQuery);

    $query1="update cart set order_status=$flag where cartId=$cid";
    if($con->query($query1))
    {
      echo"<script>window.location='shoppingCart.php?id=place';</script>";
    }
    else
  	{
  		echo "Error: " . $query1 . "<br>" . $con->error;
  	}



?>
