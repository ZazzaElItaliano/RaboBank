<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chat con Bootstrap</title>
  <!-- Agrega los enlaces a las hojas de estilo de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Tu propia hoja de estilo personalizada, si es necesario -->
  <style>
    /* Estilos personalizados aquí */
    #chat-box {
      height: 300px;
      overflow-y: scroll;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header">
          Chat en Bootstrap
        </div>
        <div class="card-body" id="chat-box">
          <!-- Aquí se mostrarán los mensajes del chat -->
        </div>
        <div class="card-footer">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Escribe tu mensaje...">
            <div class="input-group-append">
              <button class="btn btn-primary">Enviar</button>
            </div>
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
