<?php global $user; ?>
<div class="container col-md-9 col-sm-12 rounded-0 d-flex justify-content-between">
    <div class="col-12 bg-white border rounded p-4 mt-4 shadow-sm">
        <form method="post" action="assets/php/actions.php?updateprofile" enctype="multipart/form-data">
            <div class="d-flex justify-content-center">


            </div>
            <h1 class="h5 mb-3 fw-normal">Edit Profile</h1>
            <?php
            if (isset($_GET['success'])) {
                ?>
                <p class="text-success">Profile is updated !</p>

                <?php
            }
            ?>
            <div class="form-floating mt-1 col-md-6 col-sm-12">
                <img src="assets/images/profile/<?= $user['profile_pic'] ?>" class="img-thumbnail my-3"
                    style="height:150px;width:150px" alt="...">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Change Profile Picture</label>
                    <input class="form-control" type="file" name="profile_pic" id="formFile">
                </div>
            </div>
            <?= showError('profile_pic') ?>

            <div class="d-flex">
                <div class="form-floating mt-1 col-6 ">
                    <input type="text" name="first_name" value="<?= $user['first_name'] ?>" class="form-control rounded-0"
                        placeholder="username/email">
                    <label for="floatingInput">First Name</label>
                </div>
                <div class="form-floating mt-1 col-6">
                    <input type="text" name="last_name" value="<?= $user['last_name'] ?>" class="form-control rounded-0"
                        placeholder="username/email">
                    <label for="floatingInput">Last Name</label>
                </div>



            </div>
            <?= showError('first_name') ?>
            <?= showError('last_name') ?>
            <div class="form-floating mt-1">
                <input type="email" value="<?= $user['email'] ?>" class="form-control rounded-0" placeholder="email"
                    disabled>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mt-1">
                <input type="text" value="<?= $user['username'] ?>" name="username" class="form-control rounded-0"
                    placeholder="username/email">
                <label for="floatingInput">Username</label>
            </div>
            <?= showError('username') ?>
        
            <div class="text-end mt-2">
                <input type="checkbox" name="pswd_show" id="pswd_show" onclick="pswd_toggle()"><small> Show
                    Password</small>
            </div>
            <div class="form-floating mt-1">
                <input type="password" name="password" class="form-control rounded-0" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">New Password</label>
            </div>

            <div class="mt-3 d-flex justify-content-between align-items-center">
                <button class="btn btn-primary" type="submit">Update Profile</button>



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