<?php
include("db_config.php");
$id=$_GET['id'];
$sql="DELETE FROM manage_gallery WHERE id='$id' ";
$res=mysqli_query($conn,$sql);
if($res)
{
		$msg="Photo Deleted Successfully!";
			header("location:manage_gallery.php?msg=$msg");
			// echo "yes";
}
else
{
			$msg="Error In Deleting Gallery";
			header("location:manage_gallery.php?msgs=$msg");
	// echo "no";
}
?>