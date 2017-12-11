<?php
	session_start();
?>

<?php
	include'database_connection.php';

  if($_GET)
  {
    if($_GET['product'])
    {
      $pno=$_GET['product'];
    }
    if($_GET['price'])
    {
      $price=$_GET['price'];
    }
  }

	$email=$_SESSION['username'];
  $q="select cno from customer where email='$email'";
  $r=$con->query($q);
  while($row=$r->fetch_assoc())
  {
    $cno=$row['cno'];
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
    					<h1 class='text-center fancy-title'><span>Select Quantity</span></h1>
    				</div>
    			</div>
					<div class="col-md-6">
						<div class="panel" style="background: url(images/wood.jpg)">
							<div class="panel-body" style="background: url(images/wood.jpg)">
								<br><br>
								<center>
								<!--<span class="glyphicon glyphicon-edit" height=300 width=300></span>-->
								<img src="images/selectq.png" height="200" width="200">
								<h1></h1>
								</center>
								<br><br>

							</div>
						</div>
					</div>
					<br><br><br>
				<div class='panel-body col-md-4' style="background: url(images/wood.jpg)">
          <?php
          echo "
					<form action='insertCart2.php' method='post'>
            <div class='input-group form-group'>
              <span class='input-group-addon' id='quantity'>&nbsp Quantity* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
              <select class='form-control' aria-describedby='quantity' name='quantity' required>
                <option value=''>Select</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
              </select>
            </div>

            <input type='hidden' name='pno' value='$pno'>
            <input type='hidden' name='price' value='$price'>
            <input type='hidden' name='cno' value='$cno'>
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
