<?php
   setcookie('user', $user['name'], time() - (10 * 365 * 24 * 60 * 60), "/");

   header('Location: /index.php')
?>