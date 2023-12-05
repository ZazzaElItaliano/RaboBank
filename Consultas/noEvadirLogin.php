<?php
session_start();

if(!isset($_SESSION['dni'])){
    echo 
    '<script>
    alert("Así no puedes acceder, debes iniciar sesion");
    </script>';

    header("location:login.php");
    session_destroy();
    die();
}
?>