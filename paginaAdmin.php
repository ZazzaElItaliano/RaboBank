<?php
include("Consultas/noEvadirLogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header class="bg-warning">
    
    <div class="container">
        <div class="row">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid ">
          
            <img src="fotos/LOGODEF.svg" alt="logo" height="130">
       
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0  me-2">
              <li class="nav-item me-4">
                <a class="nav-link active text-white" aria-current="page" href="index.html">Datos usuarios
                </a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link text-white" href="prestamosAdmin.php">Préstamos</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link text-white " aria-current="page" href="us.html" aria-expanded="false">
                  Chat
                </a>

              </li>
              
            </ul>

          </div>
        </div>
      </nav>
    </div>
    </div>
  </header>


    <h1>hola admin</h1>
    <?php  include("Consultas/datosUsuarios.php") ?>
</body>
</html>