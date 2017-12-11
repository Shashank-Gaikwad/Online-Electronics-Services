<?php
	session_start();
?>

<?php
	include'database_connection.php';

  if($_GET)
  {
    if($_GET['q'])
    {
      $cartId=$_GET['q'];
    }
  }

?>
<html>
	<head>
		<title>Electronics Shop</title>
	</head>
	<body background="images/wood.jpg">
	<?php include'header.php';?>
	<br><br><br>
		<div class='container' style="background: url(images/wood.jpg)">

			<div class='container container-content' style='padding-top: 0em;'>
			<br>
			<div class='panel' style="background: url(images/wood.jpg)">
                <div class='row'>
    				<div class='col-md-12'>
    					<h1 class='text-center fancy-title'><span>Select Payment Method</span></h1>
    				</div>
    			</div>
					<div class="col-md-6">
						<div class="panel" style="background: url(images/wood.jpg)">
							<div class="panel-body" style="background: url(images/wood.jpg)">
								<br><br>
								<center>
								<!--<span class="glyphicon glyphicon-edit" height=300 width=300></span>-->
								<img src="images/epayment1.png" height="200" width="200">
								<h1></h1>
								</center>
								<br><br>

							</div>
						</div>
					</div>
					<br><br><br>
				<div class='panel-body col-md-6' style="background: url(images/wood.jpg)">
          <?php
          echo "
					<form action='selectPaymentMethod1.php' method='post'>
            <div class='input-group form-group'>
              <span class='input-group-addon' id='payment'>&nbsp Payment Method* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
              <select class='form-control' aria-describedby='payment' name='payment' required>
                <option value=''>Select</option>
                <option value='Cash On Delivery'>Cash On Delivery</option>
                <option value='Credit/Debit Card'>Credit/Debit Card</option>
              </select>
            </div>

            <input type='hidden' name='cartId' value='$cartId'>

            <div class='col-md-4'>
            </div>
            <div class='col-md-4'>
              <button type='submit' class='btn btn-primary btn-block' style='background-color:#404040;'>Submit</button>
            </div>
            <div class='col-md-4'>
            </div>
          </form>
          ";
          ?>
				</div>
			</div>
		</div>
		</div>
		<footer style='width=100%;'>
    <div class='row'>
        <div class='col-lg-12'>
            <?php include 'footer.php'; ?>
        </div>
    </div>
</footer>
	</body>
</html>
