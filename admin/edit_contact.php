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
				$sql="SELECT * FROM manage_contact WHERE id='$id' ";
				$res=mysqli_query($conn,$sql);
				
				$row=mysqli_fetch_assoc($res);
				
					extract($row)
				
				?>
       
       <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="tile">
            <!--<h3 class="tile-title">Subscribe</h3>-->
            <div class="tile-body">
              <form class="row" action="up_contact.php" method="POST" enctype="multipart/form-data">
			   <input type="hidden" name="id" value="<?php echo $id;?>">
               
                <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Address</b></label>
                  <textarea class="form-control" name="address" required tabindex="2"> <?php echo $address; ?> </textarea>
                </div>
                 <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Email</b></label>
                  <input class="form-control" name="email" type="text" value="<?php echo $email; ?>" placeholder="Ex.abc@gmail.com" required tabindex="3">
                </div>
                <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Mobile</b></label>
                  <input class="form-control" name="mobile" type="text" value="<?php echo $mobile; ?>" placeholder="Ex.9878545621" required tabindex="3">
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
