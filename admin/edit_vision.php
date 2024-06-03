<?php 
include("includes/header.php");

?>

<?php 
include("includes/left-panel.php");

?>


	
	  <main class="app-content">
        <div class="app-title">
        <div>
            <h1><i class="fa fa-calendar" aria-hidden="true"></i>   Manage Objective</h1>
         
        </div>
       
      </div>
      <div class="row">

       <?php
				include("db_config.php");
				$id=$_GET['id'];
				echo $id;
				$sql="SELECT * FROM manage_vission WHERE id='$id' ";
				$res=mysqli_query($conn,$sql);
				
				$row=mysqli_fetch_assoc($res);
				
					extract($row)
				
				?>
       
        <div class="row">

       
       
        <div class="col-md-12 col-xs-12 col-sm-12">
    
          <div class="tile">
            <!--<h3 class="tile-title">Subscribe</h3>-->
            <div class="tile-body">
              <form class="row" action="up_vision.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="upid" value="<?php echo $id;?>">
       <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Choose image</b></label>
                  <input class="form-control" type="file" name="file" required autofocus tabindex="1">
                </div>
                
                <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b> Description</b></label>
                  <input class="form-control" name="name" type="text" placeholder="Ex.Kshitij" required tabindex="3">
                </div>
        
                <div class="form-group col-md-12 col-xs-12 col-sm-12 align-self-end">
                  <center><button class="btn btn-primary" type="submit" name="submit" tabindex="4"><i class="fa fa-lg fa-check-plus"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" tabindex="5">Clear</a>
                </center></div>
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
