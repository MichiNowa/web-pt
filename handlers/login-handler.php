<?php
require_once 'session-file.php';

$error_array_login = array();

if (isset($_POST['submit'])) {
    $email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL);

    $_SESSION['log_email'] = $email;
    $password = $_POST['login_pswd'];

    // check from db
    $check_database_query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND pswd='$password'");
    $check_login_query = mysqli_num_rows($check_database_query);

    if ($check_login_query == 1) {
        $row = mysqli_fetch_array($check_database_query);
        $username = $row['username'];

        // $user_closed_query = mysqli_query($con, "select * from users where email='$email' and user_closed='yes'");
        // if (mysqli_num_rows($user_closed_query) == 1) {
        //     $reopen_acc = mysqli_query($con, "update users set user_closed='no' where email='$email'");
        // }

        $_SESSION['username'] = $username;
        header("Location: ../view/home.php");
        exit();
    } else {
        array_push($error_array_login, "Email or Password was incorrect");
    }
}

?>