<?php
include("db_config.php");
// $tag=$_POST['tag'];
$id=$_POST['upid'];
@ $temp=$_FILES['file']['tmp_name'];
@ $file_error=$_FILES['file']['error'];
$ran=rand();
$path="images/".$ran.".png";
if(move_uploaded_file($temp,$path))
{
		$sql="UPDATE manage_slider SET image='$path' WHERE id='$id' ";
		$res=mysqli_query($conn,$sql);
		if($res)
{
	echo"Success";
}
else{
	echo mysqli_error($conn);
}     
		if($res)
		{
			echo"<script> alert('Slider Updated Successfully!');
			window.location.href='manage_slider.php';
			</script>";
			// echo "yes";
		}
		else
		{
			echo"<script> alert('Error In Updating Slider');
			window.location.href='manage_slider.php';
			</script>";
			// echo "no";
		}
}
else
{
	$sql="UPDATE manage_slider SET image='$path' WHERE id='$id' ";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			echo"<script> alert('Slider Updated Successfully!');
			window.location.href='manage_slider.php';
			</script>";
		}
		else
		{
			echo"<script> alert('Error In Updating Slider');
			window.location.href='manage_slider.php';
			</script>";
		}
}


?>