<?php
	session_start();
?>

<html>
	<head>

        <title>Online Electronics Services</title>

		<script>
		$(function() {

        $("#signup").validate();

        $("#signup").submit(function(e) {
            e.preventDefault();

            var display =

            $("#bno").val();

            $("#result").html(display);

        });

    });
    }
  </script>

	</head>
	<body>
	<?php
		include'header.php';
		include'database_connection.php';
    ?>

	<div class="container">

			<div class="container container-content" style="padding-top: 0em;">
			<br>
			<div class="panel">
                <div class="row">
    				<div class="col-md-12">
    					<h1 class="text-center fancy-title"><span>Grant Services</span></h1>
    				</div>
    			</div>


		<form id=signup>

					<input type="text" id="bno" name="bno" value="1234">



					<input type="submit" class="btn btn-primary btn-block" style='background-color:#404040;' >


				</form>



				<label>Your input: </label>
				<p id="result"></p>













	<footer style="width=100%;">
    <div class="row">
        <div class="col-lg-12">
            <?php include 'footer.php'; ?>
        </div>
    </div>
</footer>
	</body>
</html>
