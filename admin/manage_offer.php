<?php 
include("includes/header.php");

?>

<?php 
include("includes/left-panel.php");

?>
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
	$ms=$_GET['msg'];
	
					
					
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


	
	  <main class="app-content">
        <div class="app-title">
        <div>
          <h1 style="margin-top:10px;"><i class="fa fa-edit"></i>   Manage Offer</h1>
         
        </div>
       
      </div>
      <div class="row">
 <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
       
       
        <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="tile">
            <!--<h3 class="tile-title">Subscribe</h3>-->
            <div class="tile-body">
              <form class="row" action="add_offer.php" method="POST" enctype="multipart/form-data">
               <!--  <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Tagline <span style="color:#f00;">*</span></b></label>
                  <input class="form-control" type="text" name="tag" placeholder="Ex. Start Living the Healthy Lifestyle" autofocus required tabindex="1">
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
      <div class="row">
	  
        <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="tile">
		  
		  
	    <div class="box box-danger">
            <a id='selectcheckbox'  class='btn btn-success' style="margin-top:-10px;cursor:pointer;margin-left:10px;" data-toggle="tooltip" title="Select All"><i class="fa fa-check"></i><a/>
								<a id='deselectcheckbox' class='btn btn-warning' style='margin-top:-10px;cursor:pointer;' data-toggle="tooltip" title="Deselect All"><i class="fa fa-square-o"></i><a/>
								<button type='submit' name='submit'  class='btn btn-danger' style='margin-top:-10px;cursor:pointer;' data-toggle="tooltip" title="Delete All">
									<i class="fa fa-trash-o"></i>
								</button>
              </div>
			  <br>
            <div class="tile-body">
			<div class="horizontal">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
				    <th>Sr.</th>
                    <th>Action</th>
                   <!--  <th>Tagline</th> -->
                    <th>Image</th>
                     <th>Name</th>
                     <th>DESCRIPTION</th>
                     <!-- <th>Feature 1</th>
                     <th>Feature 2</th>
                     <th>Feature 3</th>
                     <th>Feature 4</th> -->
                    <th>Date</th>
                    <th>Time</th>
                 
                  </tr>
                </thead>
				<?php
				include("db_config.php");
				$sql="SELECT * FROM manage_offer";
				$res=mysqli_query($conn,$sql);
				$sr=1;
				while($row=mysqli_fetch_assoc($res))
				{
					extract($row);
				
				?>
                <tbody>
                  <tr>
                   <td><input type="checkbox" class="checkAll">
                      <span class="checkmark"><?php echo $sr; ?></td>
                    <td><a href="edit_offer.php?id=<?php echo $id; ?>"><button class="btn btn-primary" style="width:60px;"> Edit <!-- <i class="fa fa-edit" style="color:green" title="Edit"></i> --></button></a>&nbsp;
                  <a href="delete_offer.php?id=<?php echo $id; ?>""><button button class="btn btn-danger" style="width:60px;padding-left:7px;"> Delete<!-- <i class="fa fa-trash" style="color:red" title="Delete"></i> --></button></a></button>
					 <!-- <a href="#"><i class="fa fa-eye" style="color:blue" title="View"></i></a> -->
                  </td>
                    <!-- <td><?php echo $tagline; ?></td> -->
                    <td><img src="<?php echo $image; ?>" style="height:40px; width=40px"></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $des; ?></td>
                    <!-- <td><?php echo $feature1; ?></td>
                    <td><?php echo $feature2; ?></td>
                    <td><?php echo $feature3; ?></td>
                    <td><?php echo $feature4; ?></td>
                     -->
                    <td><?php echo $date; ?></td>
                    <td><?php echo $time; ?></td>
                  </tr>
                 </tbody>
				 <?php 
				 $sr++;
				}
				 ?>
              </table>
			  </div>
            </div>
          </div>
        </div>
      </div>
    </main>
   
  <script src="js/jquery-3.2.1.min.js"></script>
   <script type="text/javascript">

	$(document).ready(function(){
		$("#Clear").click(function(){
			$('#title').val("");
			$('#link').val("");
			
			
		});
		$('#selectcheckbox').click(function(){
				$(".checkAll").prop('checked', true);
			});
			
			$('#deselectcheckbox').click(function(){
				$(".checkAll").prop('checked', false);
			});
		
	});  
	 var aler = $("#alertmsg");
			aler.animate({width: '350px', opacity: '0.9'}, "slow");
			aler.animate({fontSize: '1.5em'}, "slow");
			aler.fadeToggle(9000);
	</script>

	<?php 
include("includes/footer.php");

?>
