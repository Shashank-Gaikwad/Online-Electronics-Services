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
  echo "Session is in active";
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

	$query3="select image from product where pno=$delete_id";
  //$result3=mysqli_query($con,$query3);
  $result3=$con->query($query3);
  while($row=$result3->fetch_assoc())
  {
    $image=$row['image'];
  }
  if($image)
    unlink($image);


	$query1="delete from product where pno=$delete_id";
	if($con->query($query1))
	{
		echo"<script>window.location='adminpage.php?id=delete';</script>";
	}
	else
	{
		echo "Error: " . $query1 . "<br>" . $con->error;
	}
?>
