<?php
//aqui llamo a la consulta hecha en el formulario de chat admin
include("Consultas/verMensajesUsuarios.php");

?>
<!doctype html>
<html lang="en">

<head>
<link rel="icon" href="fotos\LOGODEF.svg" type="image/x-icon">
    <title>BancoRabo-login</title>
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
                            <a class="nav-link text-white" href="prestamosAdmin.php">Préstamos</a>
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
<h1 class="mt-5 display-2 text-center"> BANCORABO CHAT</h1>
 <div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header bg-warning">
          Chat con usuario: 
        </div>
        <div class="card-body " id="chat-box">
<?php
foreach($mensajes as $mensaje){
    echo "<p class='text-center'>$mensaje</p>";
}
?>
 </div>
        <div class="card-footer bg-warning">
          <div class="input-group">
          <form  action="Consultas\guardarMensaje.php" method="post">
              <div class="input-group">
                <input type="text" class="form-control" name="mensaje" placeholder="Escribe tu mensaje..." required>
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>