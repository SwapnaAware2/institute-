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

	
	  <main class="app-content">
        <div class="app-title">
        <div>
          <h1 style="margin-top:10px;"><i class="fa fa-file-image-o"></i>   Manage Gallery</h1>
         
        </div>
       
      </div>
      <div class="row">

       
       
        <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="tile">
            <!--<h3 class="tile-title">Subscribe</h3>-->
            <div class="tile-body">
              <form class="row" action="add_gallery.php" method="POST" enctype="multipart/form-data">
                <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Upload Image <span style="color:#f00;">*</span></b></label>
                  <input class="form-control" type="file" name="file" autofocus required tabindex="1">
                </div>
                <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b> Name <span style="color:#f00;">*</span></b></label>
                  <input class="form-control" type="text"  name="cate" placeholder="Ex. Exersice" required tabindex="2">
                </div> 
				<!--<div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Post Name</b></label>
                  <input class="form-control" type="text" placeholder="eg.Founder" required tabindex="3">
                </div>--> 
                <div class="form-group col-md-12 col-xs-12 col-sm-12 align-self-end">
                  <center><button class="btn btn-primary" type="submit" name="submit" tabindex="4"><i class="fa fa-lg fa-check-plus"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" tabindex="5">Clear</a>
                </center></div>
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
                    <th>Image</th>
                    <th>Category Name</th>
                    
					<th>Date</th>
                    <th>Time</th>
                 
                  </tr>
                </thead>
				<?php
				include("db_config.php");
				$sql="SELECT * FROM manage_gallery";
				$res=mysqli_query($conn,$sql);
				$sr=1;
				while($row=mysqli_fetch_assoc($res))
				{
					extract($row)
				
				?>
                <tbody>
                  <tr>
                   <td><input type="checkbox" class="checkAll">
                      <span class="checkmark"><?php echo $sr; ?></td>
                  <td><a href="edit_gallery.php?id=<?php echo $id; ?>"><button class="btn btn-primary" style="width:60px;"> Edit <!--<i class="fa fa-edit" style="color:green" title="Edit"></i>--></button></a>&nbsp;
                  <a href="delete_gallery.php?id=<?php echo $id; ?>"><button button class="btn btn-danger" style="width:60px;padding-left:7px;"> Delete<!--<i class="fa fa-trash" style="color:red" title="Delete"></i>--></button></a></button>
					 <!--<a href="#"><i class="fa fa-eye" style="color:blue" title="View"></i></a>-->
                  </td>
                    <td><img src="<?php echo $image; ?>" style="height:40px; width=40px"></td>
                    <td><?php echo $category; ?></td>
				
                    <td><?php echo $date; ?></td>
                    <td><?php echo $time; ?></td>
                  </tr>
                 <?php
				 $sr++;
				}
				 ?>
                </tbody>
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
