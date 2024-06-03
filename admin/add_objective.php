<?php
include("db_config.php");
if(isset($_POST['submit']))
{
	date_default_timezone_set('Asia/Kolkata');
	$time = date('h:i:s');	
	$date = date('y-m-d');
	$objective=$_POST['objective'];
	
	
		$sql="INSERT INTO manage_objective(objective,date,time) VALUES ('$objective','$date','$time')";
		$res=mysqli_query($conn,$sql);
// 		if($res)
// {
// 	echo"Success";
// }
// else{
// 	echo mysqli_error($conn);
// }     
		if($res)
		{
			$msg="Testimonial Added Successfully!";
			header("location:manage_objective.php?msg=$msg");
			// echo "yes";
		}
		else
		{
//echo mysqli_error($conn);
			
$msgs="Error in Adding Testimonial";
			header("location:manage_objective.php?msgs=$msgs");
			// echo "yes";
		}
	
	
}
?>