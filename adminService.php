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
		if($_GET['msg']=='success')
		{
				echo"<div class='alert alert-success text-center'>
  <strong>Success!</strong> Services Has been Granted.
</div>";
		}

	}
  ?>

    <center><h1>Requests</h1></center>
    <?php
    $productCount=0;
  	$sno_array=array();
  //	$type_array=array();
  	$description_array=array();
  	//$date_array=array();
  	$bno_array=array();


  	$productQuery="select * from service";
  	$productResult=$con->query($productQuery);

  	while($row=$productResult->fetch_assoc())
  	{

		//$sno_array[$productCount]=$row['sno'];
		//$type_array[$productCount]=$row['type'];
		$description_array[$productCount]=$row['description'];
		//$date_array=array();
		$bno_array[$productCount]=$row['bno'];
  		$productCount++;
  	}
      echo"<table class='table table-hover'>";
        echo"<thead>";
          echo"<tr>";
          echo"<th>Bill NUmber</th>";
		 // echo"<th>Service No</th>";
          //  echo"<th>Service Type</th>";

            echo"<th>Description</th>";


          echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
          for($i=0;$i<$productCount;$i++)
          {
			  //echo"<td>".$bno_array[$i]."</td>";
			 echo"<td><input type='text' name='bno' value='$bno_array[$i]'></td>";
			//echo"<td><input type='text' name='sno' value='$sno_array[$i]'></td>";
			//echo"<td><input type='text' name='type' value='$type_array[$i]'></td>";
			echo"<td><input type='text' name='type' value='$description_array[$i]'></td>";
             // echo"<td>".$sno_array[$i]."</td>";
              //echo"<td>".$type_array[$i]."</td>";
              //echo"<td>".$description_array[$i]."</td>";

              echo"<td>"."<a href='insertservice.php?q=$bno_array[$i]&q2=$description_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-edit'></span>Grant Service</a>"."</td>";

            echo"</tr>";
          }
        echo"</tbody>";
      echo"</table>";
    ?>
  </body>
</html>
