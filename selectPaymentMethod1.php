<?php
	session_start();
?>

<?php
	include'database_connection.php';
  $payment=$_POST['payment'];
  $cartId=$_POST['cartId'];
  if($payment=="Cash On Delivery")
  {
    echo"<script>window.location='placeOrder.php?q=$cartId';</script>";
  }
  else if($payment=="Credit/Debit Card")
  {
    echo"<script>window.location='makePayment.php?q=$cartId';</script>";
  }
?>
