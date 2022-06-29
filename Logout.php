<?php
/*Logout code for logging out*/
session_start();

session_unset();
session_destroy();
header("location: Zurilogin.php");
?>