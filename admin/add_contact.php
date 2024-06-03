<?php
include("db_config.php");
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];

	date_default_timezone_set('Asia/Kolkata');
	$time = date('h:i:s');	
	$date = date('y-m-d');
	
		$sql="INSERT INTO manage_contact(address,email,mobile,date,time)VALUES
		 ('$address','$email','$mobile','$date','$time')";
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
			$msg="Contact Added Successfully!";
			header("location:manage_contact.php?msg=$msg");
			//echo "yes";
			
		}
		else
		{
			// echo mysqli_error($conn);
			$msgs="Error in Adding Contact";
			header("location:manage_contact.php?msgs=$msgs");
			//echo "no";
		}
	
	
}
?>