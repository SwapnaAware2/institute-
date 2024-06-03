	<?php 

include("db_config.php");
	

		$user = $_POST['user'];
		$pass = $_POST['pass'];		
	
		$query = mysqli_query($conn, "SELECT * FROM `x_admin` WHERE username= '".$user."' AND password= '".$pass."'");
		$numrows= mysqli_num_rows($query);
		
		if($numrows)
		{
		
			$row= mysqli_fetch_assoc($query);
			
			extract($row);	
			
			
				session_start();
				
				$_SESSION['aid']  = $admin_id;
				
				//include("session.inc.php");
				// $_SESSION["username"] = $_POST['user'];
				// $_SESSION["password"] = $_POST['pass'];
				// $_SESSION['last_time'] = time();
				
				header("location:home.php");
				
			
		}
		else
		{
			//echo mysqli_error($conn);
			header("Location: index.php?status=error&msg=Incorrect login details");
		}
	
?>
