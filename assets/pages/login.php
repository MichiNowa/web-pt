<div class="login">
    <div class="col-sm-12 col-md-4 bg-white border rounded p-4 shadow-sm">
        <form method="post" action="assets/php/actions.php?login">
            <div class="d-flex justify-content-center">

                <img class="mb-4" src="assets/images/logo.png" alt="" height="45">
            </div>
            <h1 class="h5 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" name="username_email" value="<?= showFormData('username_email') ?>"
                    class="form-control rounded-0" placeholder="username/email">
                <label for="floatingInput">Username or Email</label>
            </div>
            <?= showError('username_email') ?>
            <div class="text-end mt-2">
                <input type="checkbox" name="pswd_show" id="pswd_show" onclick="pswd_toggle()"><small> Show
                    Password</small>
            </div>
            <div class="form-floating mt-1">
                <input type="password" name="password" class="form-control rounded-0" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <?= showError('password') ?>
            <?= showError('checkuser') ?>


            <div class="mt-3 d-flex justify-content-between align-items-center">
                <button class="btn btn-primary" type="submit">Sign in</button>
                <a href="?signup" class="text-decoration-none">Create New Account</a>


            </div>
        </form>
    </div>
</div>

 <!-- see password -->
<script>
    function pswd_toggle() {
        var x = document.getElementById("floatingPassword");
        var box = document.getElementById("pswd_show");
        if (box.checked == 1) {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>