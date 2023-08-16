
  <?php

   $con = mysqli_connect('localhost','root');
   $db= mysqli_select_db($con,'accounts');
     $image= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
       $name=$_POST['name'];
	   $price=$_POST['price'];
	   $disc=$_POST['disc'];

			   $a = "select * from view";
			   $display = mysqli_query($con,$a);
			   $num = mysqli_num_rows($display);
				   if($num == 1)
		{
			header('ok');
		}
		else
		{
		  $q = "INSERT INTO `view`(`image`, `name`, `price`, `disc`) VALUES('$image','$name','$price','$disc')";
			   $p = mysqli_query($con,$qu);
		}

	  ?>
