<?php 
    require "../../defines.php";

    require "../../utils/auth.php";

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $login_status = attempt_login($_POST['username'], $_POST['password']);
        echo (!$login_status) ? "Failed to login" : "Login successful";
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP Application - Login</title>
  </head>

  <body>
    <form action="#" method="POST" >
        <input type="input" placeholder="username" name="username" />
        <input type="password" placeholder="pasword" name="password" />
        <input type="submit" value="submit" />
    </form>
  </body>
</html>