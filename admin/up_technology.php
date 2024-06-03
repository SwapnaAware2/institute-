<?php
include("db_config.php");
// $tag=$_POST['tag'];
$id=$_POST['upid'];
$name=$_POST['name'];
@ $temp=$_FILES['file']['tmp_name'];
@ $file_error=$_FILES['file']['error'];
$ran=rand();
$path="images/".$ran.".png";
if(move_uploaded_file($temp,$path))
{
		$sql="UPDATE manage_product SET image='$path',name='$name' WHERE id='$id' ";
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
			echo"<script> alert('Vision Updated Successfully!');
			window.location.href='manage_technology.php';
			</script>";
			// echo "yes";
		}
		else
		{
			echo"<script> alert('Error In Updating Vision');
			window.location.href='manage_technology.php';
			</script>";
			// echo "no";
		}
}

?>