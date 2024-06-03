<?php
include("db_config.php");
$category=$_POST['cate'];
$id=$_POST['id'];
@ $temp=$_FILES['file']['tmp_name'];
@ $file_error=$_FILES['file']['error'];
$ran=rand();
$path="images/".$ran.".jpg";
if(move_uploaded_file($temp,$path))
{
		$sql="UPDATE `manage_gallery` SET `category`='$category',`image`='$path' WHERE id='$id' ";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			echo"<script> alert('Gallery Updated Successfully!');
			window.location.href='manage_gallery.php';
			</script>";
		}
		else
		{
			echo"<script> alert('Error In Updating gallery');
			window.location.href='manage_gallery.php';
			</script>";
		}
}
else
{
	$sql="UPDATE `manage_gallery` SET `category`='$category' WHERE id='$id' ";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			echo"<script> alert('Slider Gallery Successfully!');
			window.location.href='manage-gallery.php';
			</script>";
		}
		else
		{
			//echo mysqli_error($conn);
			 echo"<script> alert('Error In Updating Gallery');
			 window.location.href='manage-gallery.php';
			 </script>";
		}
}


?>