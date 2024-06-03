<?php
include("db_config.php");
$name=$_POST['name'];
$id=$_POST['id'];
@ $temp=$_FILES['file']['tmp_name'];
@ $file_error=$_FILES['file']['error'];
$ran=rand();
$path="images1/".$ran.".jpg";
if(move_uploaded_file($temp,$path))
{
		$sql="UPDATE `about1` SET `image`='$path',`name`='$name' WHERE id='$id' ";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			echo"<script> alert('Event Updated Successfully!');
			window.location.href='about.php';
			</script>";
		}
		else
		{
			echo"<script> alert('Error In Updating Event');
			window.location.href='about.php';
			</script>";
		}
}
else
{
	$sql="UPDATE `about1` SET `image`='$path',`name`='$name' WHERE id='$id' ";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			
			 echo"<script> alert('Event Updated8 Successfully!');
			 window.location.href='about.php';
			script>";
		}
		else
		{
			//echo mysqli_error($conn);
			 echo"<script> alert('Error In Updating Event');
			 window.location.href='about.php';
			 </script>";
		}
}


?>