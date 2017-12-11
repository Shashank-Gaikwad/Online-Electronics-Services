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
			$bno=$_GET['q'];
		}
		
		if($_GET['q2'])
		{
			$desc=$_GET['q2'];
		}
	}
	$query1="insert into grant_service(cbno,description) values($bno,'$desc')";
	//$query2="delete from customer where cno=$delete_id";
	if($con->query($query1))
	{
		echo"<script>window.location='adminService.php?msg=success'</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}
?>
