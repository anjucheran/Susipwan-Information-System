<?php

ob_start();
session_start();
unset($_SESSION['name']);
unset($_SESSION['uid']);
unset($_SESSION['username']);
echo '<script type="text/javascript">window.location="login1.php"; </script>';


?>
