<?php
	session_start();
?>

<?php
	include'database_connection.php';

	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$description=$_POST['queryText'];


		$query="insert into enquiry(name,contact,email,description) values('$name','$mobile','$email','$description')";


	if($con->query($query))
	{
		echo"<script>window.location='contactus.php?id=success';</script>";
	}
	else
	{
		echo "Error: " . $query . "<br>" . $con->error;
	}
?>
