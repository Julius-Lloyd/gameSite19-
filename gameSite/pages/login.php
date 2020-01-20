<?php
  
    require('../config/config.php');
    require('../config/db.php');
?>

<?php include('../inc/header.php'); 
?>
<?php 
if (isset($_SESSION['adgang'])){
    header("location:index.php");
}
?>
<?php
    $output = "";
    if(isset($_POST['submit'])){
        $userName = mysqli_real_escape_string ($conn, $_POST['email']);
        $pass = mysqli_real_escape_string ($conn, $_POST['password']);
        
       //salt mixes multiple characters so the password is unreadible.
        $salt = "uwehpwaibhøepr" . $pass . "dhxtjcfyulhbiænjkoøm";
        
        $hashed = hash('sha512', $salt);

        $sql = "SELECT * FROM users WHERE user_email = '$userName' AND user_password = '$hashed'";

        $result = mysqli_query($conn, $sql) or die("Query doesn't work!" . $sql);

        if(mysqli_num_rows($result) == 1){
            session_start();
            $_SESSION['adgang'] = "adgang";
            $_SESSION['username'] = $userName;
            header("location:../index.php");
        }else {
            $output = "Wrong login";
        }

    }
?>

<div class="container">
<div class="wrapper loginBox">

        <h1>Log ind:</h1>

        <form method="POST">
            <div class="form-group">
                <label for="email" method="POST">Brugernavn</label>
                <input type="text" class="form-control" placeholder="Indtast brugernavn" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password"  name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <h3><?php echo $output ?></h3>
            <p>Don't have an account? <a href="registrer.php">Sign up now</a>.</p>
            </div>
        </form>
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
  
<?php include('../inc/footer.php'); ?>    

