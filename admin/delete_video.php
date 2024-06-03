<?php
include("db_config.php");
$id=$_GET['id'];
$sql="DELETE FROM video_lab WHERE id='$id' ";
$res=mysqli_query($conn,$sql);
if($res)
{
				$msg="Testimonial Deleted Successfully!";
			header("location:manage-video.php?msg=$msg");
			
}
else
{
			$msg="Error In Deleting Testimonial";
			header("location:manage-video.php?msgs=$msg");
	
}
?>