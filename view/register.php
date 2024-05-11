<?php

include '../handlers/register-handler.php';
include '../handlers/login-handler.php';

require 'header1.php';

?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            Code Sphere
            <img src="../images/logo/logo-white.png" alt="" width="30px">
        </a>
        <a href="login.php" class="btn custom-btn d-lg-block d-none">Sign In</a>
</nav>

<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="register.php" method="POST" role="form">
                    <h2 class="text-center mb-4">Register here</h2>

                    <input type="text" name="username" id="username" class="form-control"
                        placeholder="Username" value="<?php if (isset($_SESSION['username'])) {
                            echo $_SESSION['username'];
                        } ?>" required>


                    <input type="email" name="ticket-form-email" id="ticket-form-email" pattern="[^ @]*@[^ @]*"
                        class="form-control" placeholder="Email address" value="<?php if (isset($_SESSION['reg_email'])) {
                            echo $_SESSION['reg_email'];
                        } ?>" required>

                    <div class="text-end mb-2">
                        <input type="checkbox" name="pswd_show" id="pswd_show" onclick="pswd_toggle()"><small> Show
                            Password</small>
                        <input type="password" class="form-control" name="ticket-form-phone" placeholder="Password"
                            id="pswd" required>
                    </div>

                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                        <button type="submit" name="submit" class="form-control">Register</button>
                    </div>

                    <br>

                    <div class="text-center mb-3">
                        Already have an account? <a href="login.php">Login here</a>
                    </div>


                </form>
            </div>
        </div>
    </div>
</section>
</main>

<script>
    function pswd_toggle() {
        var x = document.getElementById("pswd");
        var box = document.getElementById("pswd_show");
        if (box.checked == 1) {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<?php require 'footer1.php'; ?>