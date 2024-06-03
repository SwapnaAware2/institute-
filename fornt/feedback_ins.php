<?php

	 include("connect.php");
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	
	$mob=$_POST['subject'];
	$message=$_POST['message'];
	
	
	
	//echo $name,$email,$subject,$message;
	//$die;
	
	
	$str="INSERT INTO feedback(email,name,mobile,message)VALUES
	('$email','$name','$mob','$message')";
	
	
	
	$res=mysqli_query($conn,$str);
	if($res)
 {
 	echo"Success";
  }
else{
	echo mysqli_error($conn);
}     
	
	if($res)
	{
		
		//echo "success";
		 header("location:index.php?message=Record Added Succesfully");
	}
	else
		
		{
			//echo "not";
			echo mysqli_error($con);
		}



?>






