<!DOCTYPE html>
<?php
if(isset($_GET['status']))
{
	$ms=$_GET['msg'];
	
					
					
					?>
					 <div class="alert alert-success alert-dismissible" id="alertmsg" style="width:0px;margin-left: 150px;position: absolute;right: -7px;z-index: 999;top:300px;background-color: #bf0808;padding: 8px;border-radius: 11px;color:white;">
					  <!--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>-->
					   <h4><i class="icon fa fa-check"></i> Alert!</h4>
					   <?php echo $ms;?>
					   </div>
					   <?php
					//echo"<script>alert('You Can Add Only Six Neighbourhood Per Area')</script>";	
				
				
}


?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - I am Programmer Admin</title>
  </head>
  <body>
  
  
  <?php
if(isset($_GET['msg']))
{
	$ms=$_GET['msg'];
	
					
					
					?>
					 <div class="alert alert-success alert-dismissible" id="alertmsg" style="width:3px;margin-left: 150px;position: absolute;right: -7px;z-index: 999;top:300px;background-color: #005baa;padding: 8px;border-radius: 11px;color:white;">
					  <!--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>-->
					   <h4><i class="icon fa fa-check"></i> Alert!</h4>
					   <?php echo $ms;?>
					   </div>
					   <?php
					//echo"<script>alert('You Can Add Only Six Neighbourhood Per Area')</script>";	
			
				
}


?>
<?php
if(isset($_GET['msgs']))
{
	$ms=$_GET['msgs'];
	
					
					
					?>
					 <div class="alert alert-success alert-dismissible" id="alertmsg" style="width:3px;margin-left: 150px;position: absolute;right: -7px;z-index: 999;top:300px;background-color: red;padding: 8px;border-radius: 11px;color:white;">
					  <!--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>-->
					   <h4><i class="icon fa fa-check"></i> Alert!</h4>
					   <?php echo $ms;?>
					   </div>
					   <?php
					//echo"<script>alert('You Can Add Only Six Neighbourhood Per Area')</script>";	
			
				
}


?>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>SIGN IN</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="login.inc.php" method="POST">
         <center><img src="555.png" style="width:120px;height:60px;margin-top:-20px;" class="img-responsive"></center>
          <div class="form-group" style="margin-top:20px;">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" name="user" placeholder="Email" autofocus required tabindex="1">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="pass" placeholder="Password" required tabindex="2">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <!--<label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>-->
              </div>
              <p class="semibold-text mb-2" style="margin-right:150px;"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit" name="saveForm" style="background-color:#39a42b;border:2px solid #005baa;" tabindex="3"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
        <form class="forget-form" action="forget.php" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" name="mail" placeholder="Email" autofocus required tabindex="1">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" tabindex="2" style="background-color:#39a42b;"><i class="fa fa-unlock fa-lg fa-fw"></i>SUBMIT</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
	  var aler = $("#alertmsg");
			aler.animate({width: '350px', opacity: '0.9'}, "slow");
			aler.animate({fontSize: '1.5em'}, "slow");
			aler.fadeToggle(9000);
    </script>
  </body>
</html>