<?php  include("Consultas/mostrarMensaje.php");    ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="fotos\LOGODEF.svg" type="image/x-icon">
    <title>BancoRabo-login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/seccionPerfil.css">
  <!-- Tu propia hoja de estilo personalizada, si es necesario -->
  
</head>
<body>


<h1 class="mt-5 display-2 text-center"> BANCORABO CHAT</h1>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
      <div class="card-header bg-warning">
          Chat con administrador
        </div>
        <div class="card-body" id="chat-box">
          
          <?php while ($mostrarMensaje = mysqli_fetch_assoc($ejecucion1)) { ?>
    <p><?php echo $mostrarMensaje['mensaje']; ?></p>
  <?php } ?>
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

<!-- Agrega los enlaces a los scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
