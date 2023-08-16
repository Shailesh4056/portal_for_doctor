<?php 
  require('ppp.php');
  session_start();
 
  $query = "SELECT `id`, `name`, `date`, `Mobile_no`, `gmail`, `city`, `slotsani`, `pin`, `address`, `gender`, `image`, `permasion` FROM `profil` WHERE id='".$_SESSION['id']."'";

  $result = mysqli_query($con, $query);

  mysqli_close($con);
  ?>
 
		<?php 
		while($rows = mysqli_fetch_assoc($result)) 
			{
		?>
		<a href="add.php?id=<?php echo $rows['id'];?>"><input type="submit" value="add pic"></a>
				   
		<p>id:&nbsp&nbsp <?php echo $rows['id']; ?></p>
	<p>USERNAME: &nbsp&nbsp<?php echo $rows['username']; ?></p>
	<p>CONTACT: &nbsp&nbsp<?php echo $rows['mobile_no']; ?></p>
		<p>ADDRESS:&nbsp&nbsp<?php echo $rows['address']; ?></p>
	<p> GENDER :&nbsp&nbsp<?php echo $rows['gender']; ?></p>

	<?php 
               } 
          ?>
</div>
</body>
</html>