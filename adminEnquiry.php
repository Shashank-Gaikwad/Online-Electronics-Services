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
					 <strong>Success!</strong> Query deleted successfully.
				 </div>
				 ";
			 }
		 }
	 }
  ?>

    <center><h1>Placed Orders</h1></center>
    <?php
    $enquiryCount=0;
  	$eno_array=array();
  	$name_array=array();
  	$mobile_array=array();
  	$email_array=array();
  	$description_array=array();


  	$productQuery="select * from enquiry";
  	$productResult=$con->query($productQuery);

  	while($row=$productResult->fetch_assoc())
  	{
  		$eno_array[$enquiryCount]=$row['eno'];
  		$name_array[$enquiryCount]=$row['name'];
  		$mobile_array[$enquiryCount]=$row['contact'];
  		$email_array[$enquiryCount]=$row['email'];
  		$description_array[$enquiryCount]=$row['description'];

  		$enquiryCount++;
  	}
      echo"<table class='table table-hover'>";
        echo"<thead>";
          echo"<tr>";
            echo"<th>Name</th>";
            echo"<th>Mobile</th>";
            echo"<th>Email</th>";
            echo"<th>Description</th>";
            //echo"<th>Reply</th>";
            echo"<th>Delete</th>";
          echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
          for($i=0;$i<$enquiryCount;$i++)
          {
            echo"<tr>";
              echo"<td>".$name_array[$i]."</td>";
              echo"<td>".$mobile_array[$i]."</td>";
              echo"<td>".$email_array[$i]."</td>";
              echo"<td>".$description_array[$i]."</td>";
              //echo"<td>"."<a href='replyQuery.php?q=$eno_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-edit'></span>Reply</a>"."</td>";
              echo"<td>"."<a href='deleteQuery.php?q=$eno_array[$i]' class='btn btn-default btn-lg' role='button'><span class='glyphicon glyphicon-trash'></span>Delete</a>"."</td>";
            echo"</tr>";
          }
        echo"</tbody>";
      echo"</table>";
    ?>
  </body>
</html>
