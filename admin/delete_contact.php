<?php
include("db_config.php");
$id=$_GET['id'];
$sql="DELETE FROM manage_contact WHERE id='$id' ";
$res=mysqli_query($conn,$sql);
if($res)
{
		$msg="Contact Deleted Successfully!";
			header("location:manage_contact.php?msg=$msg");
			
}
else
{
			$msg="Error In Deleting Contact";
			header("location:manage_contact.php?msgs=$msg");
	
}
?>