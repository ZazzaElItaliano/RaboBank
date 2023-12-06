<?php 
session_start();
include("conexion.php");


if (!isset($_SESSION['dni'])) {
    header("location:../login.php");
    exit;
}

$dni = $_SESSION['dni'];
?>