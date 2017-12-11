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

	$query1="delete from enquiry where eno=$delete_id";
	if($con->query($query1))
	{
		echo"<script>window.location='adminEnquiry.php?id=success';</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}
?>
