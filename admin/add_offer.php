<?php
include("db_config.php");
if(isset($_POST['submit']))
{ 
	$name=$_POST['name'];
	$dec=$_POST['description1'];
	// $fea1=$_POST['fea1'];
	// $fea2=$_POST['fea2'];
	// $fea3=$_POST['fea3'];
	// $fea4=$_POST['fea4'];
	date_default_timezone_set('Asia/Kolkata');
	$time = date('h:i:s');	
	$date = date('y-m-d');
	$temp=$_FILES['file']['tmp_name'];
	$file_error=$_FILES['file']['error'];
	$ran=rand();
	$path="images/".$ran.".png";
	if(move_uploaded_file($temp,$path))
	{
		$sql="INSERT INTO manage_offer(image,name,des,date,time) VALUES ('$path','$name','$dec','$date','$time')";
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
			// $msg="Offer Added Successfully!";
			// header("location:manage_offer.php?msg=$msg");
			 echo "yes";
		}
		else
		{
			// $msgs="Error in Adding Offer";
			// header("location:manage_offer.php?msgs=$msgs");
		echo "no";
		}
	
	}
}
?>