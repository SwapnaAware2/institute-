<?php
include("db_config.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	
	$temp=$_FILES['file']['tmp_name'];
	$file_error=$_FILES['file']['error'];
	$ran=rand();
	$path="images1/".$ran.".jpg";
	if(move_uploaded_file($temp,$path))
	{
		$sql="INSERT INTO `about1`(`id`,`name`,`image`) VALUES ('','$name','$path')";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			$msg="Testimonial Added Successfully!";
			header("location:about.php?msg=$msg");
		}
		else
		{
//echo mysqli_error($conn);
			
$msgs="Error in Adding Testimonial";
			header("location:about.php?msgs=$msgs");
		}
	
	}
}
?>