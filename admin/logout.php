<?php 
session_start();
$_SESSION['LOGIN'] = false;
					session_unset();
					session_destroy();
					header("location:index.php");?>