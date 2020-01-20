<?php
    require('../../config/config.php');
    require('../../config/db.php');
?>
 
<?php include('../../inc/header.php'); ?>
<?php include('../../inc/loggedIn.php'); ?>



<div class="container">  
    <div class="row my-5">
        <!-- lav en mixin til knapper, og include denne mixin til back-btn classen i dit scss fil. -->
        <div class="col-2  back-btn btn btn-dark"><a href="<?php echo ROOT_URL; ?>index.php">BACK</a></div>
    </div>
    <div class="row">
        <div class="col-4">
            <h1>Pingvin spillet</h1>
            <ol>
                <li>Grib så mange faldende objekter som muligt</li>
                <li>Du har 1 minut :</li><p id="tid">5:00</p>
                
            </ol>
        </div>
        <div class="col-8">
            <canvas id="canvas" width="800" height="800">
                <img src="smiley.png" id="smiley" width="32" height="32">
                <img id="skat" src="../../img/pingvin.png" width="100%" height="100%">
                <img id="fisk" src="../../img/fishy.png" width="100%" height="100%">
            </canvas>
        </div>  
    </div>
</div>

<div class="container-fluid">
    <div class="row">
    <footer class="page-footer">
      <div class="col-12 text-center">
        <i class="fas fa-at contact_icon footer-text"></i>
        <a href="mailto: julius.schultzlloyd@gmail.com" class="footer-text">polargame@test.com</a>
        <i class="fas fa-phone-alt contact_icon footer-text"></i>
        <a href="tel:+4520214825" class="footer-text">12345678</a>
      </div>
    </div>
    <div class=" footer-text text-center">© 2019 Copyright:
      <a>Julius Schultz-Lloyd</a>
      </div>
      </div>
      
</footer>
  

<script src="<?php echo ROOT_URL; ?>js/pingGame.js"></script>
<?php include('../../inc/footer.php'); ?>