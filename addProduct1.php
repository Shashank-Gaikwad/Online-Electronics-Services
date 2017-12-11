<?php
  session_start();
?>

<?php
  include'database_connection.php';


  $pname=$_POST['productName'];
  $type=$_POST['productType'];
  $subtype=$_POST['productSubType'];
  $feature=$_POST['feature'];
  $price=$_POST['price'];
  $warranty=$_POST['warranty'];

  if($_FILES['image']['error']>0)
			{
				echo "Error:".$_FILES['image']['error']."<br>";
				//print_r($_FILES['image']['error']);
			}
			else
			{
				$name=$_FILES['image']['name'];
				$fileData = pathinfo(basename($_FILES["image"]["name"]));
				//echo"filename=$fileData";
				print_r($fileData);
				 $fileName = uniqid() . '.' . $fileData['extension'];
				 echo"<br><br>$fileName";
				$target_dir = "images/";
				$target_file = $target_dir . $fileName;
				//echo"$target_file";
				if(file_exists($target_file))
				{
					echo "<script>alert('file with this name already exists in target directory');</script>";
				}
				else
				{
					move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
				}
			}

      $query="insert into product(name,category,subcategory,image,feature,price,warranty) values('$pname','$type','$subtype','$target_file','$feature',$price,$warranty)";

      if($con->query($query))
    	{
    		echo"<script>window.location='adminpage.php?id=add';</script>";
    	}
    	else
    	{
    		echo "Error: " . $query . "<br>" . $con->error;
    	}
?>
