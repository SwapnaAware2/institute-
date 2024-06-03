<?php
include("db_config.php");
$email=$_POST['mail'];
echo $email;
$sql="SELECT * FROM x_admin WHERE username='$email'";
$res=mysqli_query($conn,$sql);
if($res)
{
		$row=mysqli_fetch_assoc($res);
		extract($row);
		$to = $email;
		echo $to;
		$subject = "Fitconn Admin Credential's";
		$txt = "Hello ".$name." Login with this password :  ".$password;
		$headers = "From: sagar.quebeta@gmail.com" . "\r\n";

		if(mail($to,$subject,$txt,$headers))
		{
		$msg="Your Password Sent To Your Mail";
		header("location:index.php?msg=$msg");
		}
		else
		{
		$msg="User Not Exist!";
		header("location:index.php?msg=$msg");
		}
}
else
{
echo mysqli_error($conn);
//$msg="User Not Exist!";
//header("location:index.php?msg=$msg");
}
?>