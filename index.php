<?php

// this page serves as the initial page

require_once 'assets/php/functions.php';
if (isset($_GET['newfp'])) {
    unset($_SESSION['auth_temp']);
}
if (isset($_SESSION['Auth'])) {
    $user = getUser($_SESSION['userdata']['id']);
    $posts = filterPosts();
    $follow_suggestions = filterFollowSuggestion();
}

$pagecount = count($_GET);


//display pages from funcion
if (isset($_SESSION['Auth']) && !$pagecount) {
    showPage('header', ['page_title' => 'Home']);
    showPage('navbar');
    showPage('wall');
} elseif (isset($_SESSION['Auth']) && isset($_GET['editprofile'])) {
    showPage('header', ['page_title' => 'Edit Profile']);
    showPage('navbar');
    showPage('edit_profile');
} elseif (isset($_SESSION['Auth']) && isset($_GET['u'])) {
    $profile = getUserByUsername($_GET['u']);
    if (!$profile) {
        showPage('header', ['page_title' => 'User Not Found']);
        showPage('navbar');
        showPage('user_not_found');

    } else {
        $profile_post = getPostById($profile['id']);
        $profile['followers'] = getFollowers($profile['id']);
        $profile['following'] = getFollowing($profile['id']);
        showPage('header', ['page_title' => $profile['first_name'] . ' ' . $profile['last_name']]);
        showPage('navbar');
        showPage('profile');
    }

} elseif (isset($_GET['signup'])) {
    showPage('header', ['page_title' => 'CodeSphere - SignUp']);
    showPage('signup');
} elseif (isset($_GET['login'])) {

    showPage('header', ['page_title' => 'CodeSphere - Login']);
    showPage('login');
} elseif (isset($_GET['forgotpassword'])) {

    showPage('header', ['page_title' => 'CodeSphere - Forgot Password']);
    showPage('forgot_password');
} else {
    if (isset($_SESSION['Auth'])) {
        showPage('header', ['page_title' => 'CodeSphere - Home']);
        showPage('navbar');
        showPage('wall');
    } else {
        showPage('header', ['page_title' => 'CodeSphere - Login']);
        showPage('login');
    }

}

//footer for pages
showPage('footer');
unset($_SESSION['error']);
unset($_SESSION['formdata']);







