<?php
include("db_config.php");
if(isset($_POST['submit']))
{
	$category=$_POST['cate'];
	date_default_timezone_set('Asia/Kolkata');
	$time = date('h:i:s');	
	$date = date('y-m-d');
	$temp=$_FILES['file']['tmp_name'];
	$file_error=$_FILES['file']['error'];
	$ran=rand();
	$path="images/".$ran.".jpg";
	if(move_uploaded_file($temp,$path))
	{
		$sql="INSERT INTO `manage_gallery`(`image`, `category`, `date`, `time`) VALUES ('$path','$category','$date','$time')";
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
			$msg="Gallery Added Successfully!";
			header("location:manage_gallery.php?msg=$msg");
			// echo "yes";
		}
		else
		{
		// echo mysqli_error($conn);
			$msgs="Error in Adding Gallery";
			header("location:manage_gallery.php?msgs=$msgs");
			// echo "no";
		}
	
	}
}
?>