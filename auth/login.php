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
                    <img src="../assets/img/Mobile login-amico.svg" alt="">
                </div>

                <div class="login__forms">
                    <form action="../include/login.php" class="login__registre" id="loginform" method="POST">
                        <h1 class="login__title">Sign In</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Username" name="username" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Password" name="password" class="login__input">
                        </div>

                        <a onclick="myFunction()" class="login__button">Sign In</a> 

                        <div>
                            <span class="login__account">Don't have an Account ?</span>
                            <a href="register.php" class="login__signin" id="sign-up">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--===== MAIN JS =====-->
        <script src="../assets/js/main.js"></script>

        <script>
            function myFunction() {
                document.getElementById("loginform").submit();
            }
        </script>
    </body>
</html>