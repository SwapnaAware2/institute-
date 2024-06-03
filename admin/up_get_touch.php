<?php
include("db_config.php");

	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$msg=$_POST['meassage'];
	$id=$_POST['id'];
		$sql="UPDATE `resume1` SET `name`='$name',`email`='$email',`subject`='$subject',`meassage`='$msg' WHERE id='$id'";
		$res=mysqli_query($conn,$sql);
		
	/*	if($res)
{
	echo"Success";
}
else{
	echo mysqli_error($conn);
}  */   
		if($res)
		{
			echo"<script> alert('Event Updated Successfully!');
			window.location.href='get_touch.php';
			</script>";
		}
		else
		{
			echo"<script> alert('Error In Updating Event');
			window.location.href='get_touch.php';
			</script>";
		}



?>