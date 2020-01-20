<?php
    require('../../config/config.php');
    require('../../config/db.php');
?>
 
<?php include('../../inc/header.php'); ?>
<?php include('../../inc/loggedIn.php'); ?>



<div class="container pingvinGifs">  
    <div class="row my-5">
        <!-- lav en mixin til knapper, og include denne mixin til back-btn classen i dit scss fil. -->
        <div class="col-2 back-btn btn btn-dark"><a href="<?php echo ROOT_URL; ?>index.php">BACK</a></div>
    </div>
    <div class="row">
    <div class="col-12"><h1 class="text-center">Pingviner facts!</h1>
        <div class="col-12 d-flex justify-content-center">
          <p class="facts" >På land går pingviner opret og ubesværet, om end noget vraltende.
             I vand svømmer de vha. lufferne, mens ben og hale fungerer som ror.
              Ofte springer fuglen ud af vandet for hver vejrtrækning. 
              Kejserpingvinen kan dykke til i hvert fald 265 m, og de fleste andre arter til 100 m, 
              skønt typiske dykkedybder er betydelig mindre. 
              Føden er fisk, blæksprutter og krebsdyr (krill).</p>
            <img src="../../img/pingvin.gif" class="img-fluid" width="500px" height="250px" alt="Responsive image">
        </div>  
        <div class="col-12 d-flex justify-content-center ">
            <img src="../../img/pingvin2.gif" class="img-fluid" width="500px" height="250px"  alt="Responsive image">
            <p class="facts"> Pingviner forekommer kun på den sydlige halvkugle. De største bestande findes i subantarktiske og antarktiske farvande, men artsrigdommen er størst i koldt tempererede områder,
               ikke mindst omkring New Zealand. Sydaustralien og Sydafrika har hver én art, og Sydamerika tre, 
               hvoraf én udelukkende findes på Galápagos umiddelbart syd for ækvator. Næsten alle pingviner yngler i kolonier,
                som kan være af betydelig størrelse, i visse tilfælde flere end 100.000 par. 
                Ældre unger slutter sig gerne sammen i større eller mindre crèches..</p>

        </div>  
        <div class="col-12 d-flex justify-content-center">
        <p class="facts" >De største pingviner er de to arter i slægten Aptenodytes, kongepingvinen (A. patagonicus) og kejserpingvinen (A. fosteri), 
          begge med en cirkumpolar udbredelse; kongepingvinen yngler på subantarktiske og koldt tempererede øer, 
          kejserpingvinen på havisen ved Antarktis.</p>

            <img src="../../img/pingvin3.gif" class="img-fluid" width="500px" height="250px" alt="Responsive image">
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
  


<?php include('../../inc/footer.php'); ?>