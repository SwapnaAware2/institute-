<?php 
include("includes/header.php");

?>

<?php 
include("includes/left-panel.php");

?>


	
	  <main class="app-content">
        <div class="app-title">
        <div>
           <h1><i class="fa fa-video-camera"></i> Manage Video Library</h1>
        </div>
       
      </div>
      <div class="row">

       
       
         <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="tile">
            <!--<h3 class="tile-title">Subscribe</h3>-->
            <div class="tile-body">
              <form class="row">
                <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Choose Video File</b></label>
                  <input class="form-control" type="file" placeholder="Ex. English Trainer" accept="video/*" autofocus required tabindex="1">
				
                </div>
                <!--<div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Description</b></label>
                  <textarea class="form-control" placeholder="eg.Information of Post"  required tabindex="2"></textarea>
                </div>--> 
                <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <button class="btn btn-primary" type="button" tabindex="3" style="margin-top:28px;"><i class="fa fa-lg fa-check-plus"></i>Update</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" tabindex="4" style="margin-top:28px;">Clear</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </main>
   
  
	<?php 
include("includes/footer.php");

?>
