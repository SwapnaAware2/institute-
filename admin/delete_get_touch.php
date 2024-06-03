<?php
include("db_config.php");
$id=$_GET['id'];
$sql="DELETE FROM resume1 WHERE id='$id' ";
$res=mysqli_query($conn,$sql);
if($res)
{
		$msg="Testimonial Deleted Successfully!";
			header("location:get_touch.php?msg=$msg");
			
}
else
{
			$msg="Error In Deleting Testimonial";
			header("location:get_touch.php?msgs=$msg");
	
}
?>