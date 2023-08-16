
   <?php
   $con = mysqli_connect('localhost','root');
   $db= mysqli_select_db($con,'accounts');
       $name=$_POST['name'];
	   $date=$_POST['date'];
	   $Mobile_no=$_POST['Mobile_no'];
	   $gmail=$_POST['gmail'];
	   $type=$_POST['type'];
	   $slotsani=$_POST['slotsani'];
	   $pin=$_POST['pin'];
	   $address=$_POST['address'];
	   $gender=$_POST['gender'];
	  $image= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $permasion=$_POST['permasion'];	  
			
		  $q = "INSERT INTO `profil`(`name`, `date`, `Mobile_no`, `gmail`, `type`, `slotsani`, `pin`, `address`, `gender`, `image`, `permasion`) VALUES ('$name', '$date', '$Mobile_no', '$gmail', '$type', '$slotsani', '$pin','$address', '$gender', '$image', '$permasion')";
			   $p = mysqli_query($con,$q);
	  ?> 
</tbody>
</div>
</table>
</div>
</body>
</html>
