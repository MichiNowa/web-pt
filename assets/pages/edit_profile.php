<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #1f1f1f;">
<?php global $user; ?>
<div class="container col-md-9 col-sm-12 rounded-0 d-flex justify-content-between">
    <div class="col-12   p-4 mt-4 shadow-sm" style="background-color:black
; border-radius:25px;">
        <form method="post" action="assets/php/actions.php?updateprofile" enctype="multipart/form-data">
            <div class="d-flex justify-content-center">


            </div>
            <h1 class="h5 mb-3 fw-normal" style="color:#ff5500;"><b>Edit Profile</b></h1>
            <?php
            if (isset($_GET['success'])) {
                ?>
                <p class="text-success text-success" >Profile is updated !</p>

                <?php
            }
            ?>
            <div class="form-floating mt-1 col-md-6 col-sm-12">
                <img src="assets/images/profile/<?= $user['profile_pic'] ?>" class="img-thumbnail my-3 rounded-circle border-0"
                    style="height:150px;width:150px" alt="...">
                    <div class="mb-3">
                    <label for="formFile" class="form-label" style="color: #ff5500;"><b>Change Profile Picture</b></label>
                    <input class="form-control bg-dark text-light border-0" type="file" name="profile_pic" id="formFile">
                </div>
            </div>
            <?= showError('profile_pic') ?>

            <div class="d-flex">
                <div class="form-floating mt-1 col-6 ">
                    <input type="text" name="first_name" value="<?= $user['first_name'] ?>" class="form-control rounded-5 text-light bg-dark border-0"
                        placeholder="username/email">
                    <label for="floatingInput" class="text-light">First Name</label>
                </div>
                
                <div class="form-floating mt-1 col-6">
                    <input type="text" name="last_name" value="<?= $user['last_name'] ?>" class="form-control rounded-5 text-light bg-dark border-0"
                        placeholder="username/email">
                    <label for="floatingInput" class="text-light">Last Name</label>
                </div>



            </div>
            <?= showError('first_name') ?>
            <?= showError('last_name') ?>
            <div class="form-floating mt-1">
                <input type="email" value="<?= $user['email'] ?>" class="form-control rounded-5 text-light bg-dark border-0 text-muted" placeholder="email"
                    disabled>
                <label for="floatingInput" class="text-muted">Email</label>
            </div>
            <div class="form-floating mt-1">
                <input type="text" value="<?= $user['username'] ?>" name="username" class="form-control rounded-5 text-light bg-dark border-0"
                    placeholder="username/email">
                <label for="floatingInput" class="text-light">Username</label>
            </div>
            <?= showError('username') ?>
        
            <div class="text-end mt-2">
                <input type="checkbox"  name="pswd_show" id="pswd_show" onclick="pswd_toggle()"><small style="color:#ff5500;"> Show
                    Password</small>
            </div>
            <div class="form-floating mt-1">
                <input type="password"  name="password" class="form-control rounded-5 bg-dark text-light border-0"  id="floatingPassword"
                    placeholder="Password">

                <label for="floatingPassword" class="text-light">New Password</label>
            </div>

            <div class="mt-3 d-flex justify-content-between align-items-center">
                <button class="btn btn text-light" style="background-color: #ff5500;border-radius:15px;" type="submit">Update Profile</button>



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
</body>
</html>