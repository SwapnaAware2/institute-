<?php
include("db_config.php");
$cpass=$_POST['curpass'];
$npass=$_POST['newpass'];
$conpass=$_POST['confpass'];

session_start();
$id=$_SESSION['aid'];

$sql="UPDATE `x_admin` SET `password`='$npass' WHERE `admin_id`='$id'";

$res=mysqli_query($conn,$sql);
if($res){
	$msg="Password Change Successfully!";
	header("location:home.php?msg=$msg");
}
else
{
	$msg="Error IN Updation Successfully!";
	header("location:home.php?msg=$msg");
}
?>