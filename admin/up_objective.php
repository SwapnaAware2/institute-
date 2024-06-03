<?php
include("db_config.php");
$objective=$_POST['objective'];
$id=$_POST['id'];
		$sql="UPDATE manage_objective SET objective='$objective' WHERE id='$id' ";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			
			echo"<script> alert('Event Updated Successfully!');
			window.location.href='manage_objective.php';
			</script>";
		}
		else
		{
			
			echo"<script> alert('Error In Updating Event');
			window.location.href='manage_objective.php';
			</script>";
		}


?>