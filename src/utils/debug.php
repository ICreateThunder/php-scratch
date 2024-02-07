<?php 

/**
 * @brief A simple helper function to return relevant debugging information
 * 
 * @returns - String with information about where function called from
 */
function debug_info() {
    return (string) sprintf("
    <div style='background-color:black; color:white;'>
        <p>
            Script Called: %s <br> Script Name: %s <br> Server Name: %s <br> User Agent: %s <br> Cookies Enabled: %s
        </p>
    </div>",
    $_SERVER['PHP_SELF'],
    $_SERVER['SCRIPT_NAME'],
    $_SERVER['SERVER_NAME'],
    $_SERVER['HTTP_USER_AGENT'],
    are_cookies_enabled());
}

/**
 * @brief Function to return true/false if cookies are enabled
 * 
 * @return True if cookies are enabled; false otherwise
 */
function are_cookies_enabled() {
    setcookie("test", "test", time() + 3600, '/');

    $result = (count($_COOKIE) > 0) ? TRUE : FALSE;

    setcookie("test", "", time() - 3600);

    return $result;
}

?>