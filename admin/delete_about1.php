<?php
include("db_config.php");
$id=$_GET['id'];
$sql="DELETE FROM about1 WHERE id='$id' ";
$res=mysqli_query($conn,$sql);
if($res)
{
		$msg="Testimonial Deleted Successfully!";
			header("location:about.php?msg=$msg");
			
}
else
{
			$msg="Error In Deleting Testimonial";
			header("location:about.php?msgs=$msg");
	
}
?>