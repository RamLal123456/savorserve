<?php
ob_start();
include 'layout/header.php';
session_unset();
session_destroy();
header('Location:../login.php');
?>