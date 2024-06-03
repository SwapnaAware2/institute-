<?php
include("db_config.php");
$email=$_POST['email'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$id=$_POST['id'];
		$sql="UPDATE manage_contact SET `email`='$email',`address`='$address',`mobile`='$mobile' WHERE id='$id' ";
		$res=mysqli_query($conn,$sql);
		if($res)
 {
 	echo"Success";
  }
else{
	echo mysqli_error($conn);
}     
		if($res)
		{
			echo"<script> alert('Event Updated Successfully!');
			window.location.href='manage_contact.php';
			</script>";
			// echo "yes";
		}
		else
		{
			echo"<script> alert('Error In Updating Event');
			window.location.href='manage_contact.php';
			</script>";
		// echo "no";
}



?>