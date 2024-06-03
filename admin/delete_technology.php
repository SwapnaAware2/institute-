<?php
include("db_config.php");
$id=$_GET['id'];
$sql="DELETE FROM manage_product WHERE id='$id' ";
$res=mysqli_query($conn,$sql);
if($res)
{
		$msg="Testimonial Deleted Successfully!";
			header("location:manage_technology.php?msg=$msg");
			
}
else
{
			$msg="Error In Deleting Testimonial";
			header("location:manage_technology.php?msgs=$msg");
	
}
?>