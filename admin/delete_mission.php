<?php
include("db_config.php");
$id=$_GET['id'];
$sql="DELETE FROM manage_mission WHERE id='$id' ";
$res=mysqli_query($conn,$sql);
if($res)
{
		$msg="Testimonial Deleted Successfully!";
			header("location:manage_mission.php?msg=$msg");
			
}
else
{
			$msg="Error In Deleting Testimonial";
			header("location:manage_mission.php?msgs=$msg");
	
}
?>