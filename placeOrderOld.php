<?php
	session_start();
?>

<?php
	include'database_connection.php';

  if($_GET)
  {
    if($_GET['q'])
    {
      $pno=$_GET['q'];
    }
    if($_GET['q1'])
    {
      $cno=$_GET['q1'];
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

    $query1="update bill_product set bill_product.order=$flag where bill_product.pno=$pno";
    if($con->query($query1))
    {
      echo"<script>window.location='shoppingCart.php?msg=success';</script>";
    }
    else
  	{
  		echo "Error: " . $query1 . "<br>" . $con->error;
  	}



?>
