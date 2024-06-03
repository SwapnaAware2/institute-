<?php
include("db_config.php");

$name=$_POST['name'];
session_start();
$id=$_SESSION['aid'];

$temp=$_FILES['file']['tmp_name'];
$file_error=$_FILES['file']['error'];
$ran=rand();
$path="images/".$ran.".jpg";
if(move_uploaded_file($temp,$path))
{
		$sql="UPDATE `x_admin` SET `name`='$name',`profile`='$path' WHERE admin_id='$id'";

		$res=mysqli_query($conn,$sql);
		if($res){
			$msg="Profile Updated Successfully!";
			header("location:home.php?msg=$msg");
		}
		else
		{
		echo mysqli_error($conn);
			//$msg="Error In Updation";
			//header("location:home.php?msg=$msg");
		}
}
else
{
$sql="UPDATE `x_admin` SET `name`='$name' WHERE admin_id='$id'";

		$res=mysqli_query($conn,$sql);
		if($res){
			$msg="Profile Updated Successfully!";
			header("location:home.php?msg=$msg");
		}
		else
		{
		echo mysqli_error($conn);
			//$msg="Error In Updation";
			//header("location:home.php?msg=$msg");
		}

}
?>