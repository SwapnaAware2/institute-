<?php 
include("includes/header.php");

?>

<?php 
include("includes/left-panel.php");

?>


	
	  <main class="app-content">
        <div class="app-title">
        <div>
            <h1><i class="fa fa-calendar" aria-hidden="true"></i>   Manage Events</h1>
         
        </div>
       
      </div>
      <div class="row">

       <?php
				include("db_config.php");
				$id=$_GET['id'];
				echo $id;
				$sql="SELECT * FROM resume1 WHERE id='$id' ";
				$res=mysqli_query($conn,$sql);
				
				$row=mysqli_fetch_assoc($res);
				
					extract($row)
				
				?>
       
       <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="tile">
            <!--<h3 class="tile-title">Subscribe</h3>-->
            <div class="tile-body">
              <form class="row" action="up_get_touch.php" method="POST" enctype="multipart/form-data">
              <!--  <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Event Image</b></label>
                  <input class="form-control" name="file" type="file" autofocus tabindex="1">
                </div>-->
				 <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="form-group col-md-3 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Name</b> </label>
				  <input type="hidden" name="upid" value="<?php echo $id; ?>">
                  <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" placeholder="Ex. Yoga" required tabindex="2">
                </div> 
				<div class="form-group col-md-3 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Email</b></label>
                  <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" placeholder="Ex. abc@gmail.com" required tabindex="2">
                </div> 
				 <div class="form-group col-md-3 col-xs-8 col-sm-8">
                  <label class="control-label"><b> Subject</b> </label>
                  <input class="form-control" type="text" name="subject" value="<?php echo $subject; ?>" placeholder="Ex. Subject" required tabindex="4">
                </div> 
				 <div class="form-group col-md-3 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Meassage</b></label>
                  <input class="form-control" type="text" name="meassage" value="<?php echo $meassage; ?>" placeholder="Ex. Meassage" required tabindex="5">
                </div> 
				
                <div class="form-group col-md-12 col-xs-12 col-sm-12 align-self-end">
                  <center><button class="btn btn-primary" type="submit"  tabindex="7"><i class="fa fa-lg fa-check-plus"></i>Update</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" tabindex="8">Clear</a>
                </center></div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </main>
   
  
	<?php 
include("includes/footer.php");

?>
