
<?php
    require('../config/config.php');
    require('../config/db.php');
?>
<?php include('../inc/header.php'); ?>

<?php 

$ifunique = true;
$flag_pass = false;

$emailErr = "";
$nameErr = "";
$email = "";
$tlfErr = "";
$passErr = "";

if(isset($_POST['submit'])){
    //print_r($_POST);

    //Mysqli_real_escape_string... renser for karakterer som kan bruges til SQL angreb
   
    $email = mysqli_real_escape_string ($conn, $_POST['email']);
    $userName = mysqli_real_escape_string ($conn, $_POST['gamertag']);
    $tlfNumber = mysqli_real_escape_string ($conn, $_POST['tlf']);
    //password1 = første gang man indtaster password
    $pass1 = mysqli_real_escape_string ($conn, $_POST['password']);
    //password2 = gentag password
    $pass2 = mysqli_real_escape_string ($conn, $_POST['password2']);
    $message = "Email is already in use!";

   
    $sql = "SELECT * FROM users WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql) or die ("Query virker overhovedet ikke!");


    //Stemmer de 2 passwords overens med hinanden
    if ($pass1 == $pass2){
        $flag_pass = true;
    }else{
       $passErr = "Password doesn't match!";
    }
    
    //Er emailen unique
    if (mysqli_num_rows($result)){
        $ifunique = false;
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
     
     


    if($flag_pass &&  $ifunique == true){
        $salt = "uwehpwaibhøepr" . $pass1 . "dhxtjcfyulhbiænjkoøm";
        $hashed = hash('sha512', $salt);
        $sql = "INSERT INTO users(user_email, game_tag, tlf, user_password) VALUES('$email', '$userName', '$tlfNumber', '$hashed')";
        $result = mysqli_query($conn, $sql) or die ("Query virker overhovedet ikke!");
        /*header("Location: login.php");*/

        session_start();
        $_SESSION['adgang'] = 'adgang';
        $_SESSION['username'] = $email;
        $_SESSION['game_tag'] = $userName;

        // And then you will me logged in and redirected to your profile
        echo "<script>window.location.href='../index.php';</script>";
    } 
     
}

?>



<div class="container">
<div class="wrapper loginBox">
    <div class="col-12">
        <h1>Registrer:</h1>
    </div>
    <div class="col-6">
    <!-- onSubmit="return checkForm()" -->
        <form action="registrer.php" method="POST"  id="checkForm">
            <div class="form-group">
                <label for="gamertag">Username</label>
                <input type="text" class="form-control" placeholder="Enter username" name="gamertag" id="gametag" required>
                <span class = "error">* <?php echo $nameErr;?></span>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="Enter Email" name="email" id="usernames" required>
                <span class="error">* <?php echo $emailErr;?></span>
                <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="tlf">Phone number</label>
                <input type="number" class="form-control" placeholder="Indtast brugernavn" name="tlf" id="tlfNumber"  required> 
                <span id="tlfError">* <?php echo $tlfErr;?></span>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password"  name="password" id="pass1"
                pattern= "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" title="Use at least on capital letter, a number with the minimum length of 8." required>
                <span class = "error">* <?php echo $passErr;?></span>
            </div>
            <div class="form-group">
                <label for="password2">Gentag password</label>
                <input type="password" class="form-control" placeholder="Password"  name="password2" id="pass2"
                pattern= "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" title="Use at least on capital letter, a number with the minimum length of 8." required>
                <span class = "error">* <?php echo $passErr;?></span>
            </div>
            <button class="btn btn-primary" name="submit">Submit</button>
        </form> 
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
  
  

<?php include('../inc/footer.php'); ?> 