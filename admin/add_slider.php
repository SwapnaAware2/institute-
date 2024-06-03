<?php
include("db_config.php");
if(isset($_POST['submit']))
{
	
	date_default_timezone_set('Asia/Kolkata');
	$time = date('h:i:s');	
	$date = date('y-m-d');
	$temp=$_FILES['file']['tmp_name'];
	$file_error=$_FILES['file']['error'];
	$ran=rand();
	$path="images/".$ran.".jpg";
	if(move_uploaded_file($temp,$path))
	{
		$sql="INSERT INTO manage_slider(image,date,time) VALUES ('$path','$date','$time')";
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
			$msg="Slider Added Successfully!";
			header("location:manage_slider.php?msg=$msg");
			// echo "yes";
		}
		else
		{
			$msgs="Error in Adding Slider";
			header("location:manage_slider.php?msgs=$msgs");
			// echo "no";
		}
	
	}
}
?>