<!DOCTYPE html>
<?php 
session_start();
if(isset($_SESSION['aid']))
{

?>
<html lang="en">
  <head>
    <meta name="description" content="">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="">
    <meta property="twitter:creator" content="">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <title>I am Programmer | Admin</title>
	<link rel="shortcut icon" href="download.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
  div.horizontal {
    width: 100%;
   
    overflow-x: auto;
}

<?php
include("db_config.php");
session_start();
$id=$_SESSION['aid'];
$sql="SELECT * FROM x_admin WHERE admin_id='$id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
extract($row);

?>

</style>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="home.php" style="background-color:#FFF;"><img src="555.png" style="width:130px;height:50px;"></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar" style="background-color:#005baa;"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <?php
						include("db_config.php");
						
						$sql="SELECT * FROM noti WHERE status='Active'";
						$res=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($res))
						{
						extract($row);
$tem = date("g:i a", strtotime("$time"));
						?>
              <a href="manage_contact.php"><li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message"> <?php echo $name." "; ?> sent you a mail</p>
                    <p class="app-notification__meta"><?php echo $tem; ?></p>
                  </div></a></li>
              <?php
						}
			  ?>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><img src="<?php echo $profile; ?> "style="width:40px;height:40px;    border-radius: 16px;   border-radius: 16px;"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
          
            <li><a class="dropdown-item" href="profile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <?php
    }
    else
    {
    echo "<h1>Page Not Found</h1>";
    }
    ?>