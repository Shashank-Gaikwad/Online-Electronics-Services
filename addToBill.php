<?php
	session_start();
?>

<?php
	include'database_connection.php';

  $email=$_SESSION['username'];
  $q="select cno from customer where email='$email'";
  $r=$con->query($q);
  while($row=$r->fetch_assoc())
  {
    $cno=$row['cno'];
  }
  echo"cno=$cno";
  $query="select bno from bill where cno=$cno and date='CURDATE()'";
  $result=$con->query($query);
  while($row=$result->fetch_assoc())
  {
    $bno=$row['bno'];
  }
  echo"bno=$bno";
?>
