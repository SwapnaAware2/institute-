<?php
include("db_config.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$msg=$_POST['meassage'];

		$sql="INSERT INTO `resume1`(`id`, `name`, `email`, `subject`, `meassage`)
									VALUES ('','$name','$email','$subject','$msg')";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			$msg="Event Added Successfully!";
			header("location:get_touch.php?msg=$msg");
			
		}
		else
		{
			echo mysqli_error($conn);
			//$msgs="Error in Adding Event";
			//header("location:manage-event.php?msgs=$msgs");
		}
	
	}
}
?>