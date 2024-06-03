<?php 
include("includes/header.php");

?>

<?php 
include("includes/left-panel.php");

?>


	
	  <main class="app-content">
        <div class="app-title">
        <div>
          <h1><i class="fa fa-image"></i>   Edit Offer</h1>
         
        </div>
       
      </div>
      <div class="row">

       
       <?php
				include("db_config.php");
				$id=$_GET['id'];
				echo $id;
				$sql="SELECT * FROM manage_offer WHERE id='$id' ";
				$res=mysqli_query($conn,$sql);
				
				$row=mysqli_fetch_assoc($res);
				
					extract($row)
				
				?>
        <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="tile">
             <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
            <!--<h3 class="tile-title">Subscribe</h3>-->
            <div class="tile-body">
              <form class="row" action="up_offer.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="upid" value="<?php echo $id;?>">
                <!-- <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Tagline</b></label>
                  <input class="form-control" type="text" name= "tag" value="<?php// echo $tagline; ?>" placeholder="Ex.Start Living the Healthy Lifestyle" autofocus required tabindex="1">
				  <input type="hidden" name="upid" value="<?php// echo $id; ?>">
                </div> -->
               <div class="form-group col-md-3 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Choose Image <span style="color:#f00;">*</span></b></label>
                  <input class="form-control" name="file" type="file" required tabindex="2">
                </div>
                 <div class="form-group col-md-3 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Technology Name</b></label>
                  <input class="form-control" name="name" type="text" placeholder="Ex.Kshitij" required tabindex="3">
                </div>
                  <div class="form-group col-md-6 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Description1</b></label>

                  <textarea class="form-control" name="description1" placeholder="Ex.Thank you very much ." required tabindex="2" >
      
</textarea>
                  <!-- <textarea class="form-control" name="description1" placeholder="Ex.Thank you very much ." required tabindex="2"></textarea> -->
                </div>

                <!--  <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Feature 1</b></label>
                  <input class="form-control" name="fea1" type="text" placeholder="Ex.Kshitij" required tabindex="3">
                </div>
                 <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Feature 2</b></label>
                  <input class="form-control" name="fea2" type="text" placeholder="Ex.Kshitij" required tabindex="3">
                </div>
                 <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Feature 3</b></label>
                  <input class="form-control" name="fea3" type="text" placeholder="Ex.Kshitij" required tabindex="3">
                </div>
                 <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Feature 4</b></label>
                  <input class="form-control" name="fea4" type="text" placeholder="Ex.Kshitij" required tabindex="3">
                </div> -->
                <div class="form-group col-md-4 col-xs-8 col-sm-8 align-self-end">
                  <button class="btn btn-primary" type="submit" name="submit" tabindex="3"><i class="fa fa-lg fa-check-plus"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" tabindex="4">Clear</a>
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
