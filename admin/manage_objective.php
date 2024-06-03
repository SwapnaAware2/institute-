<?php 
include("includes/header.php");

?>

<?php 
include("includes/left-panel.php");

?>


	
	  <main class="app-content">
        <div class="app-title">
        <div>
          <h1 style="margin-top:10px;"><i class="fa fa-users"></i>Objective</h1>
         
        </div>
       
      </div>
      <div class="row">

       
       
        <div class="col-md-12 col-xs-12 col-sm-12">
		
          <div class="tile">
            <!--<h3 class="tile-title">Subscribe</h3>-->
            <div class="tile-body">
              <form class="row" action="add_objective.php" method="POST" enctype="multipart/form-data">
			
                <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Objective</b></label>
                  <textarea class="form-control" name="objective" placeholder="Ex.Thank you very much ." required tabindex="2"></textarea>
                </div>
               
                <div class="form-group col-md-12 col-xs-12 col-sm-12 align-self-end">
                  <center><button class="btn btn-primary" type="submit" name="submit" tabindex="4"><i class="fa fa-lg fa-check-plus"></i>Submit</button>&nbsp;&nbsp;&nbsp;
				  <a class="btn btn-danger" href="#" tabindex="5">Clear</a>
                </center></div>
              </form>
            </div>
          </div>
        </div>
      </div>
            <div class="box box-danger">
            <a id='selectcheckbox'  class='btn btn-success' style="margin-top:-10px;cursor:pointer;margin-left:10px;" data-toggle="tooltip" title="Select All"><i class="fa fa-check"></i><a/>
								<a id='deselectcheckbox' class='btn btn-warning' style='margin-top:-10px;cursor:pointer;' data-toggle="tooltip" title="Deselect All"><i class="fa fa-square-o"></i><a/>
								<button type='submit' name='submit1'  class='btn btn-danger' style='margin-top:-10px;cursor:pointer;' data-toggle="tooltip" title="Delete All">
									<i class="fa fa-trash-o"></i>
								</button>
              </div>
			  <br>
	  
			  <br>
            <div class="tile-body">
			
			<div class="horizontal">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
				     <th>Sr.</th>
                    <th>Action</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Time</th>
					</tr>
                </thead>
				<?php
				include("db_config.php");
				$sql="SELECT * FROM manage_objective";
				$res=mysqli_query($conn,$sql);
				$sr=1;
				while($row=mysqli_fetch_assoc($res))
				{
					extract($row)
				
				?>
                <tbody>
                  
                  <tr>
                   <td><input type="checkbox" class="checkAll" name="num[]" value="<?php echo $row["id"]; ?>">
                      <span class="checkmark"><?php echo $sr; ?></td>
                     <td><a href="edit_objective.php?id=<?php echo $id; ?>"><button class="btn btn-primary" style="width:60px;"> Edit <!--<i class="fa fa-edit" style="color:green" title="Edit"></i>--></button></a>&nbsp;
                  <a href="delete_objective.php?id=<?php echo $id; ?>"><button button class="btn btn-danger" style="width:60px;padding-left:7px;"> Delete<!--<i class="fa fa-trash" style="color:red" title="Delete"></i>--></button></a></button>
					 <!--<a href="#"><i class="fa fa-eye" style="color:blue" title="View"></i></a>-->
                  </td>
                   
                    <td><?php echo $objective; ?></td>
					<td><?php echo $date; ?></td>
                    <td><?php echo $time; ?></td>
					
                    
                  </tr>
                  
                 
                  <tr>
				  <?php 
				  $sr++;
				}
				  ?>
                
                    <th>Sr.</th>
                    <th>Action</th>
                    <th>Description</th>
					<th>Date</th>
                    <th>Time</th>
                 
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
