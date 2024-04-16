<?php
session_start();

session_unset();
session_destroy();

header("location: https://dj.000.pe/index.php");
exit;
?>
