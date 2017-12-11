<?php
	session_start();
?>

<?php
if (isset($_SESSION['username']))
{
//echo 'Welcome'.$_SESSION['username'];
  $customer_id=$_SESSION['username'];
}
else
{
		header('Location: index.php');
}

?>

<?php

	include'database_connection.php';

	$password=$_POST['newPassword'];
	$confirm=$_POST['confirmPassword'];

	if($password!==$confirm)
	{
		echo"<script>window.location='resetPassword.php?id=failure';</script>";
	}
	else{
	$query1="update customer set password='$password' where email='$customer_id'";
	if($con->query($query1))
	{
		echo"<script>window.location='resetPassword.php?id=success';</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}
}
?>
