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


			$billno=$_POST['bno'];
			//$st=$_POST['serviceType'];
			$des=$_POST['description'];
			//$username=$_SESSION['username']
			//$billQuery="select bill.bno from customer,service,bill where email=".$username." and "

	$query="insert into service(description,date,bno) values('$des',CURDATE(),$billno)";


		if($con->query($query))
	{
		echo"<script>alert('Services Has been Requested');</script>";
		echo"<script>window.location='customerProfile.php'</script>";

	}

	else
	{
		echo "Error : " . $con->error;
	}


	?>
	</body>
	</html>
