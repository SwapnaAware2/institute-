<?php 
include("includes/header.php");

?>

<?php 
include("includes/left-panel.php");

?>


	
	  <main class="app-content">
        <div class="app-title">
        <div>
          <h1 style="margin-top:10px;"><i class="fa fa-users"></i>Feedback
          </h1>
         
        </div>
       
      </div>
     
      <div class="row">
	  
        <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="tile">
		  
		    <div class="box box-danger">
           
              </div>
	    
			  <br>
            <div class="tile-body">
			
			<div class="horizontal">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
				    <th>Id</th>
                  
                    <th>Name</th>
                    <th>Email</th>
					<th>Mobile</th>
                    <th>Meassage </th>
				
					
                   
					
                 
                  </tr>
                </thead>
				<?php
				include("db_config.php");
				$sql="SELECT * FROM feedback";
				$res=mysqli_query($conn,$sql);
				$sr=1;
				while($row=mysqli_fetch_assoc($res))
				{
					extract($row)
				
				?>
                <tbody>
                  <tr>
                   <td>
                      <span class="checkmark"><?php echo $id; ?></td>
                  
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
					<td><?php echo $mobile; ?></td>
					<td><?php echo $message; ?></td>
				  
                  </tr>
                  
                 
                  <tr>
				  <?php 
				  $id++;
				}
				  ?>
                <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
					<th>Mobile</th>
                    <th>Meassage </th>
					
                 
                  </tr>
                </tbody>
              </table>
			  </div>
            </div>
          </div>
        </div>
      </div>
    </main>
   
  
	<?php 
include("includes/footer.php");

?>
