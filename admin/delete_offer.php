<?php
include("db_config.php");
$id=$_GET['id'];
$sql="DELETE FROM manage_offer WHERE id='$id' ";
$res=mysqli_query($conn,$sql);
if($res)
{
		$msg="Offer Deleted Successfully!";
			header("location:manage_offer.php?msg=$msg");
			
}
else
{
			$msg="Error In Deleting Offer";
			header("location:manage_offer.php?msgs=$msg");
	
}
?>