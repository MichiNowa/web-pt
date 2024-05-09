<?php


$username = "";
$email = "";
$password = "";
$error_array = array();

if (isset($_POST['reg_user'])) {

    //Username
    $username = strip_tags($_POST['username']);
    $username = str_replace(' ', '', $username);
    $username = ucfirst(strtolower($username));
    $_SESSION['username'] = $username;

    //Email
    $email = strip_tags($_POST['reg_email']);
    $email = str_replace(' ', '', $email);
    // $email = ucfirst(strtolower($email));
    $_SESSION['reg_email'] = $email;

    //Password
    $password = strip_tags($_POST['reg_password']);
    $_SESSION['reg_password'] = $password;



    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        $e_check = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");

        $num_rows = mysqli_num_rows($e_check);

        if ($num_rows > 0) {
            array_push($error_array, "Email already in use<br>");
        }
    } else {
        array_push($error_array, "Email is invalid format<br>");
    }


    $user_check = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");

    $num_rows = mysqli_num_rows($user_check);

    if ($num_rows > 0) {
        array_push($error_array, "Username already exists");
    }

    if (strlen($username) > 20 || strlen($username) < 2) {
        array_push($error_array, "Username must be between 2 and 20");
    } else if (preg_match('/[^A-Za-z0-9]/', $username)) {
        array_push($error_array, "You username can only contain english characters or numbers");
    }

    if (strlen($fname) > 25 || strlen($fname) < 2) {
        array_push($error_array, "Your first name must be between 2 and 25 characters");
    }

    if (strlen($lname) > 25 || strlen($lname) < 2) {
        array_push($error_array, "Your last name must be between 2 and 25 characters");
    }

    if ($password != $password2) {
        array_push($error_array, "Your passwords doesn't match");
    }
    // else{ 
    //     if(preg_match('/[^A-Za-z0-9]/', $password)){
    //         array_push($error_array, "Your password can only contain english characters or numbers");
    //     }
    // }

    if (strlen(strlen($password) < 4)) {
        array_push($error_array, "Your password must be between 5 and 30 characters or numbers");
    }

    // once form is okay and ready to kuan in the database
    if (empty($error_array)) {
        // echo $password;

        // $password = $password;

        // set a default profpic and banner color
        $imageid = "assets/images/profile_pics/defaults/male.png";
        $colors = "black";

        $query = "INSERT INTO users (username, email, password, imageid, bio, skills, hobbies, colors) VALUES ( '$username', '$email', '$password', '$imageid', 'This person is too lazy to add a bio', 'This person is hiding their skills', 'This person is hiding their hobbies', '$cover_pic', '$colors')";
        if (mysqli_query($con, $query)) {
            $_SESSION['username'] = $username;
            header('location: index.php');
            // echo "success :)";
        } else {
            echo "fail" . mysqli_connect_errno();
        }

    }
}

?>