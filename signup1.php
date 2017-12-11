<?php
	session_start();
?>
<html>
	<head>
		<title>Online Electronics Services</title>
	</head>
	<body background="images/wood.jpg">
		<?php
			include'header.php';
			include'database_connection.php';

			//$u=$_POST['username'];
			//$p=$_POST['password'];
			$name=$_POST['name'];
			$gender=$_POST['gender'];
			$birthdate=$_POST['birthdate'];
			$mobile=$_POST['mobile'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$password=$_POST['password'];
			$confirm=$_POST['confirmPassword'];

			//echo"$name<br>$gender<br>$birthdate<br>$mobile<br>$email<br>$address<br>$password<>";
if($password!==$confirm)
{
	echo"<script>window.location='signup.php?id=failure';</script>";
}
else{
	//$pass=md5($p);
	$query="insert into customer(name,gender,birthdate,contact,email,address,password) values('$name','$gender','$birthdate','$mobile','$email','$address','$password')";
	//$result=mysqli_query($con,$query) or die mysqli_error($con);
	//if(mysqli_query($con,$query))
	if($con->query($query))
	{
		echo"<h4 class='text-center'>Your account is created successfully</h4>";
		echo "<center><a href='index.php' class='btn btn-info' role='button'>Go To Website</a></center>";
	}
	else
	{
		echo "Error : " . $con->error;
	}
}
		?>
	</body>
</html>
