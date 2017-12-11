<?php
	session_start();
?>
<html>
	<head>
		<title>Online Electronics Services</title>
	</head>
	<body>
		<?php
			include'header.php';
			include'database_connection.php';
$username=$_SESSION['username'];
$query="select * from customer where email='".$username."'";
$result=$con->query($query);
$row=$result->fetch_assoc();
			$name=$_POST['name'];
			$contact=$_POST['mobile1'];
			$email=$_POST['email'];
			$birthdate=$_POST['birthdate'];
			$address=$_POST['address'];
			$cno=$row['cno'];
		$query="update customer set name='".$name."', contact=".$contact.", email='".$email."', birthdate='".$birthdate."', address='".$address."' where cno='".$cno."'";
		
	$result=$con->query($query);
	//if(mysqli_query($con,$query))
		if($con->query($query))
	{
		echo"<h4 class='text-center'>Your account is updated successfully</h4>";
		echo "<center><a href='index.php' class='btn btn-info' role='button'>Go To Website</a></center>";
	}
	else
	{
		echo "Error : " . $con->error;
	}

		?>
	</body>
</html>
