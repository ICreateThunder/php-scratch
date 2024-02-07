<?php

function login_redirect() {
    header("Location: " . "http://localhost:3000/auth/login.php");
    die();
}

/**
 * @brief Function checks if cookie access token set
 * 
 * @attention Function MUST be called AFTER defines.php included
 */
function require_auth() {
    if (!isset($_COOKIE['access-token'])) login_redirect();

    // TODO: Implement database validation
    if ($_COOKIE['access-token'] != '6f948335-fac8-45ba-9e71-5b791e025d1f') login_redirect();
}

/**
 * @brief Function checks to see if login details are correct
 * 
 * @returns TRUE if credentials valid; false otherwise
 */
function attempt_login($username, $password) {

    if (!is_string($username) || !is_string($password)) return false;

    // TODO: Implement database check
    if ($username == 'admin' && $password == 'password') { 
        $_SESSION['username'] = 'admin';
        setcookie('access-token', '6f948335-fac8-45ba-9e71-5b791e025d1f', time() + 3600, '/');
        return true;
    }

    return false;
}
?>