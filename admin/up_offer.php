<?php
include("db_config.php");
$name=$_POST['name'];
$id=$_POST['upid'];
$dec=$_POST['description1'];
	$fea1=$_POST['fea1'];
	$fea2=$_POST['fea2'];
	$fea3=$_POST['fea3'];
	$fea4=$_POST['fea4'];
@ $temp=$_FILES['file']['tmp_name'];
@ $file_error=$_FILES['file']['error'];
$ran=rand();
$path="images/".$ran.".png";
if(move_uploaded_file($temp,$path))
{
		$sql="UPDATE manage_offer SET image='$path',name='$name',des='$dec', feature1='$fea1',feature2='$fea2',feature3='$fea3',feature4='$fea4' WHERE id='$id' ";
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
			// echo"<script> alert('Offer Updated Successfully!');
			// window.location.href='manage_offer.php';
			// </script>";
			 echo "yes";
		}
		else
		{
			// echo"<script> alert('Error In Updating Offer');
			// window.location.href='manage_offer.php';
			// </script>";
			 echo "no";
		}
}
else
{
	$sql="UPDATE manage_offer SET image='$path',name='$name',des='$dec', feature1='$fea1',feature2='$fea2',feature3='$fea3',feature4='$fea4' WHERE id='$id' ";
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
			window.location.href='manage_offer.php';
			</script>";
			// echo "yes";
		}
		else
		{
			echo"<script> alert('Error In Updating Slider');
			window.location.href='manage_offer.php';
			</script>";
			// echo "no";
		}
}


?>