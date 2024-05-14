<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="login" style="background-color: #1f1f1f;">
    <div class="col-lg-4 col-md-8 col-sm-12 bg-dark border rounded p-4 shadow-sm">
        <form method="post" action="assets/php/actions.php?signup">
            <div class="d-flex justify-content-center">

                <img class="mb-4" src="assets/images/logo.png" alt="" height="45">
            </div>
            <h1 class="h5 mb-3 fw-normal">Create new account</h1>
            <div class="d-flex">
                <div class="form-floating mt-1 col-6 ">
                    <input type="text" name="first_name" value="<?= showFormData('first_name') ?>"
                        class="form-control rounded-0 bg-dark text-light" placeholder="username/email">
                    <label for="floatingInput" style="color: white;">First Name</label>
                </div>
                <div class="form-floating mt-1 col-6">
                    <input type="text" name="last_name" value="<?= showFormData('last_name') ?>"
                        class="form-control rounded-0 bg-dark text-light" placeholder="username/email">
                    <label for="floatingInput" class="text-light">Last Name</label>
                </div>
            </div>
            <?= showError('first_name') ?>
            <?= showError('last_name') ?>

            <div class="d-flex gap-3 my-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="1"
                        <?= isset($_SESSION['formdata']) ? '' : 'checked' ?><?= showFormData('gender') == 1 ? 'checked' : '' ?>>
                    <label class="form-check-label text-light" for="exampleRadios1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input custom radio" type="radio" name="gender" id="exampleRadios3" value="2"
                        <?= showFormData('gender') == 2 ? 'checked' : '' ?>>
                    <label class="form-check-label text-light" for="exampleRadios3">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="0"
                        <?= showFormData('gender') == 0 ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios2">
                        Other
                    </label>
                </div>
            </div>
            <div class="form-floating mt-1">
                <input type="email" name="email" value="<?= showFormData('email') ?>" class="form-control rounded-0 bg-dark text-light"
                    placeholder="username/email">
                <label for="floatingInput" style="color:white;">Email Address</label>
            </div>
            <?= showError('email') ?>

            <div class="form-floating mt-1">
                <input type="text" name="username" value="<?= showFormData('username') ?>"
                    class="form-control rounded-0 bg-dark text-light" placeholder="username/email">
                <label for="floatingInput" class="text-light">Username</label>
            </div>
            <?= showError('username') ?>

            <div class="text-end mt-2">
                <input type="checkbox" name="pswd_show" id="pswd_show" onclick="pswd_toggle()"><small class="text-light"> Show
                    Password</small>
            </div>
            <div class="form-floating mt-1">
                <input type="password" name="password" class="form-control rounded-0 bg-dark text-light" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword" class="text-light">Password</label>
            </div>
            <?= showError('password') ?>


            <div class="mt-3 d-flex justify-content-between align-items-center">
                <button class="btn btn-primary" type="submit">Sign Up</button>
                <a href="?login" class="text-decoration-none text-light">Already have an account ?</a>


            </div>

        </form>
    </div>
</div>

<script>
    // see passweord
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
</body>
</html>
