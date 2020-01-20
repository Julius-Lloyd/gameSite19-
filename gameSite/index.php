<?php
    require('config/config.php');
    require('config/db.php');
?>
 
<?php include('inc/header.php'); ?>
<?php include('inc/loggedIn.php'); ?>

<div class="container">
    <div class="row my-5">
 
        <div class="col-12"><h1 class="text-center">Games</h1>
        <p  class="text-center">Welcome, <?php echo $_SESSION['username']; ?>.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-dark text-black">

            <!-- Add new title, ass new description. Add actual image. -->
                <a href="pages/games/penguinGame.php">
                    <img src="img/cute.jpg" class="card-img" height="250px" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Pingvin spil</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-black">

            <!-- Add new title, ass new description. Add actual image. -->
                <a href="pages/games/pingMaze.php">
                    <img src="img/pingvinMaze.jpg" class="card-img" height="250px" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Pingvin labyrint spillet</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-black">

            <!-- Add new title, ass new description. Add actual image. -->
                <a href="pages/games/pingviner.php">
                    <img src="img/pingvinFacts.jpeg" class="card-img" height="250px" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Pingviner facts!</h5>
                    </div>
                </a>
            </div>
        </div>
    </div> <!-- row -->
</div> <!-- container -->

<!-- Denne del er footeren, efter du har designet den færdig, så kopierer du den og smider den ind i et nyt PHP fil. 
og derefter inc. den på alle de sider du vil have en footer.  -->
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
  
<?php include('inc/footer.php'); ?> 