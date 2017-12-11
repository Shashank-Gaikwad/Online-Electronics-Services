<?php
	session_start();
?>

<?php
if (isset($_SESSION['username']))
{
//echo 'Welcome'.$_SESSION['username'];
}
else
{
		header('Location: index.php');
}
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

	$query1="delete from customer where cno=$delete_id";
	if($con->query($query1))
	{
		echo"<script>window.location='adminAccounts.php?id=success';</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}
?>
