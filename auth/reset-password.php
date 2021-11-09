<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../assets/css/styles.css">
    
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Responsive Login Form Sign In Sign Up</title>
    </head>
    <body>
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="../assets/img/img-login.svg" alt="">
                </div>

                <div class="login__forms">
                    <form action="../include/reset-password.php" class="login__registre" id="resetform" method="POST">
                        <h1 class="login__title">Reset Password</h1>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="New Password" name="new_password" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Confirm Password" name="confirm_password" class="login__input">
                        </div>

                        <a onclick="myFunction()" class="login__button">Reset Password</a> 

                        <div>
                            <span class="login__account">Already have an Account ?</span>
                            <a href="login.php" class="login__signup" id="sign-in">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--===== MAIN JS =====-->
        <script src="../assets/js/main.js"></script>

        <script>
            function myFunction() {
                document.getElementById("resetform").submit();
            }
        </script>
    </body>
</html>