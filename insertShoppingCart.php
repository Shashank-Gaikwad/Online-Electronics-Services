<?php
	session_start();
?>

<?php
	include'database_connection.php';

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

	$email=$_SESSION['username'];
  $q="select cno from customer where email='$email'";
  $r=$con->query($q);
  while($row=$r->fetch_assoc())
  {
    $cno=$row['cno'];
  }


    $query1="insert into bill(date,amount,cno) values(CURDATE(),$price,$cno)";
    if($con->query($query1))
    {
      echo "query 1 executed successfully";
    }
    else
  	{
  		echo "Error: " . $query1 . "<br>" . $con->error;
  	}


    $query2="select bno from bill where cno=$cno";
    /*if($con->query($query2))
    {
      echo "query 2 executed successfully";
    }
    else
  	{
  		echo "Error: " . $query1 . "<br>" . $con->error;
  	}*/
    $result=$con->query($query2);
    while($row=$result->fetch_assoc())
    {
      $bno=$row['bno'];
    }

    if($bno!=NULL)
    {
		$query3="insert into bill_product(bno,pno,quantity,order) values($bno,$pno,1,0)";
    }
    else
    {
      echo "bno is null";
    }


	if($con->query($query3))
	{
		echo"<script>window.location='shoppingCart.php?id=success';</script>";
	}
	else
	{
		echo "Error: " . $query3 . "<br>" . $con->error;
	}
?>
