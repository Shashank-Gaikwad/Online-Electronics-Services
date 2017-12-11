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
      /*
      if($_GET)
      {
        if($_GET['q'])
        {
          $cartId=$_GET['q'];
        }
      }*/
      $cartId=$_POST['cartId'];

      //echo "$cartId";
		echo"<h4 class='text-center'>Transaction processed successfully</h4>";
		echo "<center><a href='placeOrder.php?q=$cartId' class='btn btn-info' role='button'>Go Back</a></center>";
		?>
	</body>
</html>
