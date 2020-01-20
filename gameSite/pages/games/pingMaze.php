<?php
    require('../../config/config.php');
    require('../../config/db.php');
?>
 
<?php include('../../inc/header.php'); ?>
<?php include('../../inc/loggedIn.php'); ?>

    <div class="container">  
    <div class="row my-5">
        <!-- lav en mixin til knapper, og include denne mixin til back-btn classen i dit scss fil. -->
        <div class="col-2 back-btn btn btn-dark "><a href="<?php echo ROOT_URL; ?>index.php">BACK</a></div>
    </div>
        <div class="row">
            <div class="col-4 offset-col-3">
                <h1>Pingvin maze Game</h1>
                <ol>
                    <li>Find vej igennem labyrinten!</li>
                    <li>Fang 3 fisk og snebolde undervejs til din rede</li>
                    <li>Pas på der gemmer sig en søleopard bag ved en af fiskene!</li>
                </ol>
                <h1 id="congrats" style="display: none;">Fedt man! du har vundet! tillykke!</h1>
                <p>Antal fisk spist: <span id="fishdisplay"></span></p>
                <p>Antal snebolde fundet: <span id="pointdisplay"></span></p>
            </div>
            <div class="col-8 offset-col-2">
                <canvas id="canvas" width="600" height="800" style="background-color: #dcf3ff;"></canvas>
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
      </div>
      
</footer>
  
  
    <script src="<?php echo ROOT_URL; ?>js/maze.js"></script>
<?php include('../../inc/footer.php'); ?>