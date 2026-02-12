<?php
session_start();
unset($_SESSION['login_doctor']);
session_destroy();
header("location:login_doctor.php");
?>
