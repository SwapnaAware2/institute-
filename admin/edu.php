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
          <h1 style="margin-top:10px;"><i class="fa fa-users"></i>Education</h1>
         
        </div>
       
      </div>
      <div class="row">

       
       
        <div class="col-md-12 col-xs-12 col-sm-12">
		
          <div class="tile">
            <!--<h3 class="tile-title">Subscribe</h3>-->
            <div class="tile-body">
              <form class="row" action="add_edu.php" method="POST" enctype="multipart/form-data">
			
				<div class="form-group col-md-3 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Name</b></label>
                  <input class="form-control" name="name" type="text" placeholder="Ex.Kshitij" required tabindex="3">
                </div>
				<div class="form-group col-md-3 col-xs-8 col-sm-8">
                  <label class="control-label"><b>University</b></label>
                  <input class="form-control" name="university" type="text" placeholder="Ex.Kshitij" required tabindex="3">
                </div>
				<div class="form-group col-md-3 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Passing Year</b></label>
                  <input class="form-control" name="year" type="text" placeholder="Ex.Kshitij" required tabindex="3">
                </div>
				<div class="form-group col-md-3 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Mark</b></label>
                  <input class="form-control" name="mark" type="text" placeholder="Ex.Kshitij" required tabindex="3">
                </div>
            
                <div class="form-group col-md-12 col-xs-12 col-sm-12 align-self-end">
                  <center><button class="btn btn-primary" type="submit" name="submit" tabindex="4"><i class="fa fa-lg fa-check-plus"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" tabindex="5">Clear</a>
                </center></div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
	  
        <div class="col-md-12 col-sm-12 col-xs-12">
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
					<th>Name</th>
                    <th>University</th>
                    <th>Passing Year</th>
                    <th>Mark</th>
                    
                  </tr>
                </thead>
				<?php
				include("db_config.php");
				$sql="SELECT * FROM education";
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
                     <td><a href="edit_edu.php?id=<?php echo $id; ?>"><button class="btn btn-primary" style="width:60px;"> Edit <!--<i class="fa fa-edit" style="color:green" title="Edit"></i>--></button></a>&nbsp;
                  <a href="delete_edu.php?id=<?php echo $id; ?>"><button button class="btn btn-danger" style="width:60px;padding-left:7px;"> Delete<!--<i class="fa fa-trash" style="color:red" title="Delete"></i>--></button></a></button>
					 <!--<a href="#"><i class="fa fa-eye" style="color:blue" title="View"></i></a>-->
                  </td>
	
                    <td><?php echo $name; ?></td>
                    <td><?php echo $university; ?></td>
                    <td><?php echo $year; ?></td>
                    <td><?php echo $mark; ?></td>
                  </tr>
				  <?php 
				  $sr++;
				}
				  ?>
                 
                  <tr>
                    <th>Sr.</th>
                    <th>Action</th>
					<th>Name</th>
                    <th>University</th>
                    <th>Passing Year</th>
                    <th>Mark</th>
                 
                  </tr>
                </tbody>
              </table>
			  </div>
            </div>
          </div>
        </div>
      </div>
    </main>
	 <script src="js/jquery-3.2.1.min.js"></script>
<script>   	 
	 var aler = $("#alertmsg");
			aler.animate({width: '350px', opacity: '0.9'}, "slow");
			aler.animate({fontSize: '1.5em'}, "slow");
			aler.fadeToggle(9000);
   
  
   

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
	</script>

	<?php 
include("includes/footer.php");

?>
