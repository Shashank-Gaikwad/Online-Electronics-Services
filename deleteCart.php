<?php
	session_start();
?>

<?php

	include'database_connection.php';

	if($_GET)
	{
		if($_GET['q'])
		{
			$delete_id=$_GET['q'];
		}
	}

	$query1="delete from cart where cartId=$delete_id";
	if($con->query($query1))
	{
		echo"<script>window.location='shoppingCart.php?id=delete';</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}
?>
