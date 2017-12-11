<?php
	session_start();
?>

<?php
	include'database_connection.php';
  //$payment=$_POST['payment'];
  //$cartId=$_POST['cartId'];
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
    					<h1 class='text-center fancy-title'><span>Enter Details</span></h1>
    				</div>
    			</div>
				<div class='panel-body' style="background: url(images/wood.jpg)">
          <?php
          echo"
					<form action='makePayment1.php' method='post'>
          ";
          echo"
            <div class='row'>
              <div class='col-md-3'>
                <input type='radio' name='comp' value='visa'><img src='images/visa.png' height=75 width=150 />
              </div>
              <div class='col-md-3'>
                <input type='radio' name='comp' value='mastercard'><img src='images/mastercard.png' height=75 width=150 />
              </div>
              <div class='col-md-3'>
                <input type='radio' name='comp' value='Maestro'><img src='images/maestro.png' height=75 width=150 />
              </div>
              <div class='col-md-3'>
                <input type='radio' name='comp' value='rupay'><img src='images/rupay.png' height=75 width=150 />
              </div>
            </div>
            <br><br>
            ";

            echo"
            <div class='input-group form-group'>
              <span class='input-group-addon' id='name'>&nbsp&nbsp&nbsp&nbsp Full Name* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
              <input type='text' name='name' pattern='[a-zA-Z\ ]+' class='form-control' aria-describedby='name' placeholder='Cardholder's Name' required>
            </div>
            ";

            echo"
            <div class='input-group form-group'>
              <span class='input-group-addon' id='card'>&nbsp Card Number* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
              <input type='text' name='card' pattern='[0-9]{16}' class='form-control' aria-describedby='card' placeholder='Card No' required>
            </div>
            ";

            echo"
            <div class='input-group form-group'>
              <span class='input-group-addon' id='month'>&nbsp Expires On (Month & Year)* </span>
              <select class='form-control' aria-describedby='month' name='month' required>
                <option value=''>Select (Month)</option>
                <option value='January'>January</option>
                <option value='February'>February</option>
                <option value='March'>March</option>
                <option value='April'>April</option>
                <option value='May'>May</option>
                <option value='June'>June</option>
                <option value='July'>July</option>
                <option value='Augest'>Augest</option>
                <option value='September'>September</option>
                <option value='October'>October</option>
                <option value='November'>November</option>
                <option value='December'>December</option>
              </select>
              <select class='form-control' aria-describedby='year' name='year' required>
                <option value=''>Select (Year)</option>
                <option value='2018'>2018</option>
                <option value='2019'>2019</option>
                <option value='2020'>2020</option>
                <option value='2021'>2021</option>
                <option value='2022'>2022</option>
                <option value='2023'>2023</option>
                <option value='2024'>2024</option>
                <option value='2025'>2025</option>
                <option value='2026'>2026</option>
                <option value='2027'>2027</option>
              </select>
            </div>
            ";

            echo"
            <div class='input-group form-group'>
              <span class='input-group-addon' id='cvv'>&nbsp CVV Code* &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
              <input type='password' name='cvv' pattern='[0-9]{3}' class='form-control' aria-describedby='cvv' placeholder='CVV Code' required>
            </div>
            ";

            echo"
            <input type='hidden' name='cartId' value='$cartId'>
            ";
            echo"
            <div class='col-md-4'>
            </div>
            <div class='col-md-4'>
              <button type='submit' class='btn btn-primary btn-block' style='background-color:#404040;'>Make Payment</button>
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
