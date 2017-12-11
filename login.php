<?php
	session_start();
?>

<?php
include'database_connection.php';
//$con=mysqli_connect('localhost','root','','rasik_jewellers') or die(mysqli_connect_error());
if(isset($_POST['bttLogin']))
{
	//$accountType=$_POST['accountType'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	//$password=md5($p);


		if($username=="admin@gmail.com" && $password=="admin")
		{
			$_SESSION['account']="admin";
			$_SESSION['username']=$_POST['username'];
			header('Location: adminpage.php');
		}
		else
		{
			echo "Invalid username or password. Try again <a href='index.php'>click here</a>";

		}


	$query="select * from customer where email='$username' and password='$password'";
	$result=$con->query($query);
	//$result=mysqli_query($con,'select * from login where username="'.$username.'" and password="'.$password.'"');
	//if(mysqli_num_rows($result)==1)
	if($result->num_rows==1)
	{
		$_SESSION['account']="customer";
		$_SESSION['username']=$_POST['username'];
		header('Location: customerProfile.php');
	}
	else
	{
		echo "Invalid username or password. Try again <a href='index.php'>click here</a>";

	}

    // }
}

if(isset($_GET['action']))
{
//	echo "testing";
	session_unset();
	session_destroy();
	header('Location: index.php');
}

?>
