<?php
	session_start();
?>
<html>
  <body background="images/wood.jpg">
    <!--<br><br>-->
  <?php
   include 'header.php';
   include 'adminHeader.php';
   include 'database_connection.php';

	 if($_GET)
	{
		if(isset($_GET['id']))
		{
			if($_GET['id']=="success")
			{
				echo "
				<div class='alert alert-success text-center'>
					<strong>Success!</strong> Customer account deleted successfully.
				</div>
				";
			}
		}
	}
  ?>

    <center><h1>Accounts</h1></center>
    <?php
    $customerCount=0;
  	$cno_array=array();
  	$name_array=array();
  	$password_array=array();

  	$customerQuery="select * from customer";
  	$customerResult=$con->query($customerQuery);

  	while($row=$customerResult->fetch_assoc())
  	{
  		$cno_array[$customerCount]=$row['cno'];
  		$name_array[$customerCount]=$row['name'];
  		$password_array[$customerCount]=$row['password'];

  		$customerCount++;
  	}
      echo"<table class='table table-hover'>";
        echo"<thead>";
          echo"<tr>";
          echo"<th>Customer No</th>";
            echo"<th>Customer Name</th>";
            echo"<th>Customer Password</th>";
            echo"<th>Delete</th>";
          echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
          for($i=0;$i<$customerCount;$i++)
          {
            echo"<tr>";
              echo"<td>".$cno_array[$i]."</td>";
              echo"<td>".$name_array[$i]."</td>";
              echo"<td>".$password_array[$i]."</td>";
              echo"<td>"."<a href='deleteCustomer.php?q=$cno_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-trash'></span>Delete</a>"."</td>";
            echo"</tr>";
          }
        echo"</tbody>";
      echo"</table>";
    ?>
  </body>
</html>
