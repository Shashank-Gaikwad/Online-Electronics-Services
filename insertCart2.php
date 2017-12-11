<?php
	session_start();
?>

<?php
	include'database_connection.php';
/*
  if($_GET)
  {
    if($_GET['product'])
    {
      $pno=$_GET['product'];
    }
    if($_GET['price'])
    {
      $price=$_GET['price'];
    }
  }
*/
/*
	$email=$_SESSION['username'];
  $q="select cno from customer where email='$email'";
  $r=$con->query($q);
  while($row=$r->fetch_assoc())
  {
    $cno=$row['cno'];
  }
*/

    $quantity=$_POST['quantity'];
    $pno=$_POST['pno'];
    $price=$_POST['price'];
    $cno=$_POST['cno'];
    $amount=$price*$quantity;

    $query1="insert into cart(pno,price,quantity,amount,cno,order_status) values($pno,$price,$quantity,$amount,$cno,0)";
    if($con->query($query1))
    {
      //echo "query 1 executed successfully";
      echo"<script>window.location='shoppingCart.php?id=success';</script>";
    }
    else
  	{
  		echo "Error: " . $query1 . "<br>" . $con->error;
  	}




/*
	if($con->query($query3))
	{
		echo"<script>window.location='shoppingCart.php?id=success';</script>";
	}
	else
	{
		echo "Error: " . $query3 . "<br>" . $con->error;
	}
  */
?>
