<?php  include("Consultas/mostrarDNIMnesaje.php") ?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
<header class="bg-warning">

<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid ">

                <img src="fotos/LOGODEF.svg" alt="logo" height="130">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0  me-2">
                        <li class="nav-item me-4">
                            <a class="nav-link active text-white" aria-current="page" href="paginaAdmin.php">Datos usuarios
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link text-white" href="gallery.html">Préstamos</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link text-white " aria-current="page" href="chatAdmin.php" aria-expanded="false">
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
<main>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <!-- Menú lateral -->
            <div class="card">
                <div class="card-header">
                    Menú
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="chatAdmin.php">NOTIFIACCIONES MENSAJE</a></li>
                    
                    <li class="list-group-item"><a href="verMensajesAdmin.php">VER MENSAJE USUARIO </a></li>
                   
                </ul>
            </div>
        </div>
        <div class="col-md-9">
  <div class="container mt-5">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <h2 class="mb-0">HOLA ADMIN, ESTOS USUARIOS TE HAN HABLADO</h2>
      </div>
      <div class="card-body">
        <ul class="list-group">
          <?php
            while ($fila = mysqli_fetch_assoc($ejecutarConsulta)) {
              $dni = $fila['dni'];
              echo '<li class="list-group-item">' . $dni . '</li>';
            }
          ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="card mt-4">
      <div class="card-header bg-success text-white">
        <h2 class="mb-0">Ver Mensajes de Usuario</h2>
      </div>
      <div class="card-body">
        <form action="visualizarMensajes.php" method="post">
          <div class="mb-3">
            <label  class="form-label">Introduce el DNI del usuario:</label>
            <input type="text" class="form-control"  name="dniUsuario" required>
          </div>
          <button type="submit" class="btn btn-primary">Ver Mensajes</button>
        </form>
      </div>
    </div>
  </div>
</main>
  <footer>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>