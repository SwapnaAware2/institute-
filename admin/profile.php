    <?php 
include("includes/header.php");

?>

<?php 
include("includes/left-panel.php");

?>
<?php
include("db_config.php");
session_start();
$id=$_SESSION['aid'];
$sql="SELECT * FROM x_admin WHERE admin_id='$id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
extract($row);
?>
	
	<main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="<?php echo $profile; ?>">
              <h4>Mr.<?php echo $name;?></h4>
              <p>Admin</p>
            </div>
            <div class="cover-image">
			<img src="images/gallery.jpg" style="height:300px;width:100%;" class="img-responsive">
			
			</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Change Password</a></li>
              <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Settings</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="user-timeline">
			<div class="tile user-settings">
                <h4 class="line-head">Change Password</h4>
                 <form action="changepass.php" method="POST">
                  <div class="row mb-4">
				 
                    <div class="col-md-3">
                      <label style="color:#000;"><b>Current Password</b></label>
                       <input id="password" name="curpass" placeholder="Current Password" class="form-control" required autofocus tabindex="1">
                    </div>
                    <div class="col-md-3">
                      <label style="color:#000;"><b>New Password</b></label>
                     <input id="password" name="newpass" placeholder="New Password" class="form-control" required tabindex="2">
                    </div>
					
					<div class="col-md-3">
                      <label style="color:#000;"><b>Confirm Password</b></label>
                       <input id="password" name="confpass" placeholder="Confirm Password" class="form-control" required tabindex="3">
                    </div>
					
                  </div>
                  <div class="row">
                    
                    
                     <div class="col-md-12">
                      <center><button class="btn btn-primary" type="submit" tabindex="4"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a></center>
                    </div>
                    <input type="hidden" class="hide" name="token" id="token" value=""> 
                  </div>
                  
                </form>
				</div>
            </div>
            <div class="tab-pane fade" id="user-settings">
              <div class="tile user-settings">
                <h4 class="line-head">Settings</h4>
                <form action="updateadmin.php" method="POST" enctype="multipart/form-data">
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <label style="color:#000;"><b>First Name</b></label>
                      <input class="form-control" name="name" type="text" placeholder="eg.Kshitij" autofocus tabindex="1">
					  	<br>
                    </div>
				
                    <div class="col-md-4">
                      <label style="color:#000;"><b>Last Name</b></label>
                      <input class="form-control" name="lname" placeholder="eg.Pande" type="text" tabindex="2">
                    </div>
                  </div>
                 
				  <div class="row">
				   <div class="col-md-8 mb-4">
                      <label style="color:#000;"><b>Upload Image</b></label>
                      <input class="form-control" name="file" type="file" tabindex="5">
                    </div>
				  
				  
				  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="submit" tabindex="6"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#" tabindex="7"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
	
	<?php 
include("includes/footer.php");

?>
