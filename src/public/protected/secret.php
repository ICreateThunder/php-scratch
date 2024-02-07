<?php 

    require "../../defines.php";

    require "../../utils/auth.php";

    // Function to check authentication status
    require_auth();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP Application - Protected</title>
  </head>

  <body>
    <h1>Welcome, <?php echo ((isset($_SESSION['username']) ? $_SESSION['username'] : "user") . "!") ?></h1>
    <p>This is a protected resource, and you have the correct permission!</p>
  </body>
</html>
