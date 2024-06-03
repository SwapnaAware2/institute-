 
 
 
 <?php
include("db_config.php");
//session_start();
$id=$_SESSION['aid'];
$sql="SELECT * FROM x_admin WHERE admin_id='$id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
extract($row);
?>

 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo $profile; ?>" alt="User Image" style="height:40px;width:40px;">
        <div>
          <p class="app-sidebar__user-name"> Mr. <?php echo $name; ?></p>
          <p class="app-sidebar__user-designation">Admin</p>
        </div>
      </div>
        <ul class="app-menu">
        <li><a class="app-menu__item active" href="home.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="manage-slider.php" data-toggle="treeview"><i class="app-menu__icon fa fa-image"></i>    <span class="app-menu__label">Manage Slider</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="manage_slider.php"><i class="icon fa fa-circle-o"></i>Manage Slider</a></li>
            <li><a class="treeview-item" href="manage_offer.php"><i class="icon fa fa-circle-o"></i>Manage Offer</a></li>
         </ul>
        </li>
    
   <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-image-o"></i><span class="app-menu__label">ABOUT US</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="manage_objective.php"><i class="icon fa fa-circle-o"></i>Manage Objective</a></li>
            <li><a class="treeview-item" href="manage_mission.php"><i class="icon fa fa-circle-o"></i>Manage Mission</a></li>
            <li><a class="treeview-item" href="manage_vision.php"><i class="icon fa fa-circle-o"></i>Manage Vision</a></li>
              <li><a class="treeview-item" href="manage-video.php"><i class="icon fa fa-circle-o"></i>Manage News/Updates</a></li>
              <!-- <li><a class="treeview-item" href="manage-video.php"><i class="icon fa fa-circle-o"></i> Manage Video Library</a></li> -->
          </ul>
        </li>
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-calendar" "></i><span class="app-menu__label">Courses</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <li><a class="treeview-item" href="swapna_resume.php"><i class="icon fa fa-circle-o"></i>Swapna Resume</a></li>
			 <li><a class="treeview-item" href="exper.php"><i class="icon fa fa-circle-o"></i>Manage Expert</a></li>
			
        
        
          </ul>
      </li> -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-video-camera"></i><span class="app-menu__label">Product</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <!-- <li><a class="treeview-item" href="manage-video.php"><i class="icon fa fa-circle-o"></i> Manage Video Library</a></li>
          -->
            <li><a class="treeview-item" href="manage_technology.php"><i class="icon fa fa-circle-o"></i>Manage Technology</a></li>
          </ul>
        </li>
		<!--  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Test</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <li><a class="treeview-item" href="manage_apptitude.php"><i class="icon fa fa-circle-o"></i> Manage Apptitude</a></li>
           
          <li><a class="treeview-item" href="manage_technical.php"><i class="icon fa fa-circle-o"></i> Manage Technical</a></li>
          <li><a class="treeview-item" href="manage_pro.php"><i class="icon fa fa-circle-o"></i> Manage Programming</a></li>
            <li><a class="treeview-item" href="manage_hr.php"><i class="icon fa fa-circle-o"></i>Manage HR</a></li>
          </ul>
        </li>
		 -->
		<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-image-o"></i><span class="app-menu__label">Gallery</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="manage_gallery.php"><i class="icon fa fa-circle-o"></i>Manage Gallery</a></li>
            
          </ul>
        </li>
		<!--<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Manage Meet</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="manage-meet.php"><i class="icon fa fa-circle-o"></i> Manage Meet</a></li>
           
          
          </ul>
        </li>-->
		
		<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-phone"></i><span class="app-menu__label">CONTACT</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <li><a class="treeview-item" href="manage_contact.php"><i class="icon fa fa-circle-o"></i>Manage Contact</a></li> 
           <li><a class="treeview-item" href="manage_feedback.php"><i class="icon fa fa-circle-o"></i>Manage Get Touch Form</a></li>
          
          </ul>
        </li>

          <!--<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-ticket"></i><span class="app-menu__label">Manage Event Booking</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="manage-book.php"><i class="icon fa fa-circle-o"></i> Manage Event Booking</a></li>
           
          
          </ul>
        </li>-->
      </ul>
    </aside>