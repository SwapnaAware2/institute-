<?php 
include("includes/header.php");

?>

<?php 
include("includes/left-panel.php");

?>


	
	  <main class="app-content">
        <div class="app-title">
        <div>
          <h1 style="margin-top:10px;"><i class="fa fa-users"></i>Contact</h1>
         
        </div>
       
      </div>
      <div class="row">

       
       
        <div class="col-md-12 col-xs-12 col-sm-12">
		
          <div class="tile">
            <!--<h3 class="tile-title">Subscribe</h3>-->
            <div class="tile-body">
              <form class="row" action="add_contact.php" method="POST" enctype="multipart/form-data">
			<!--  <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Choose image</b></label>
                  <input class="form-control" type="file" name="file" required autofocus tabindex="1">
                </div>-->
				
                <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Address</b></label>
                  <textarea class="form-control" name="address" placeholder="Ex.Thank you very much ." required tabindex="2"></textarea>
                </div>
                <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Email</b></label>
                  <input class="form-control" name="email" type="text" placeholder="Ex.abc@gmail.com" required tabindex="3">
                </div>
                <div class="form-group col-md-4 col-xs-8 col-sm-8">
                  <label class="control-label"><b>Mobile</b></label>
                  <input class="form-control" name="mobile" type="text" placeholder="Ex.9878545621" required tabindex="3">
                </div>
                <div class="form-group col-md-12 col-xs-12 col-sm-12 align-self-end">
                  <center><button class="btn btn-primary" type="submit" name="submit" tabindex="4"><i class="fa fa-lg fa-check-plus"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" tabindex="5">Clear</a>
                </center></div>
              </form>
            </div>
          </div>
        </div>
      </div>
            <div class="box box-danger">
            <a id='selectcheckbox'  class='btn btn-success' style="margin-top:-10px;cursor:pointer;margin-left:10px;" data-toggle="tooltip" title="Select All"><i class="fa fa-check"></i><a/>
								<a id='deselectcheckbox' class='btn btn-warning' style='margin-top:-10px;cursor:pointer;' data-toggle="tooltip" title="Deselect All"><i class="fa fa-square-o"></i><a/>
								<button type='submit' name='submit'  class='btn btn-danger' style='margin-top:-10px;cursor:pointer;' data-toggle="tooltip" title="Delete All">
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
                    <th>Address</th>
                    <th>Email</th>
					
                    <th>Mobile</th>
					
                   
					
                 
                  </tr>
                </thead>
				<?php
				include("db_config.php");
				$sql="SELECT * FROM manage_contact";
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
                     <td><a href="edit_contact.php?id=<?php echo $id; ?>"><button class="btn btn-primary" style="width:60px;"> Edit <!--<i class="fa fa-edit" style="color:green" title="Edit"></i>--></button></a>&nbsp;
                  <a href="delete_contact.php?id=<?php echo $id; ?>"><button button class="btn btn-danger" style="width:60px;padding-left:7px;"> Delete<!--<i class="fa fa-trash" style="color:red" title="Delete"></i>--></button></a></button>
					 <!--<a href="#"><i class="fa fa-eye" style="color:blue" title="View"></i></a>-->
                  </td>
                    <td><?php echo $address; ?></td>
                    <td><?php echo $email; ?></td>
				
					<td><?php echo $mobile; ?></td>
					
                    
                  </tr>
                  
                 
                  <tr>
				  <?php 
				  $id++;
				}
				  ?>
                <th>Sr.</th>
                    <th>Action</th>
                    <th>Address</th>
                    <th>Email</th>
					
                    <th>Mobile</th>
					
                 
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
