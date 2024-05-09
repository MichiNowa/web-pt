<?php

include '../server/session-file.php';
include '../handlers/register-handler.php';
include '../handlers/login-handler.php';

require 'header.php';

?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            Code Sphere
            <img src="../images/logo/logo-white.png" alt="" width="30px">
        </a>

        <a href="register.php" class="btn custom-btn d-lg-block d-none">Register</a>
</nav>

<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="POST" role="form">
                    <h2 class="text-center mb-4">Sign In here</h2>

                    <div class="text-end mb-2">
                        <input type="email" name="ticket-form-email" id="ticket-form-email" pattern="[^ @]*@[^ @]*"
                            class="form-control" placeholder="Email address" required value="<?php if (isset($SESSION['log_email'])) {
                                echo $_SESSION['log_email'];
                            } ?>">
                    </div>

                    <div class="text-end mb-2">
                        <input type="checkbox" name="pswd_show" id="pswd_show" onclick="pswd_toggle()"><small> Show Password</small>
                        <input type="password" class="form-control" name="login_pswd" id="login_pswd" placeholder="Password"
                            required>
                    </div>

                    <!-- check user liogn -->
                    <!-- <?php if (in_array("Email or Password was incorrect", $error_array_login))
                        echo "<p class='alert'>Email or Password was incorrect</p>"; ?> -->

                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                        <button type="submit" class="form-control">Sign In</button>
                    </div>

                    <br>

                    <div class="text-center mb-3">
                        Don't have an account? <a href="register.php">Register</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
</main>

<script>
        function pswd_toggle() {
            var x = document.getElementById("login_pswd");
            var box = document.getElementById("pswd_show");
            if (box.checked == 1) {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

<?php require 'footer.php'; ?>