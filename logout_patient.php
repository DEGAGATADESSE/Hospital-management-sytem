<?php
session_start();
unset($_SESSION['login_patient']);
session_destroy();
header("location:login_patient.php");
?>