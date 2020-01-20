<?php
    require('../config/config.php');
    require('../config/db.php');
?>
<?php include('../inc/header.php'); ?>

<?php 
session_start();

    session_destroy();
    session_start();
   
    if(session_destroy()) {
       header("Location:../index.php");
    }

    header("location:login.php");
?>

<?php include('../inc/footer.php'); ?> 

<?php
  
?>