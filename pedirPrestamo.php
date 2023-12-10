
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil de Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <!-- Menú lateral -->
            <div class="card">
                <div class="card-header">
                    Menú
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="estadoPrestamos.php">Estado Prestamos</a></li>
                    <!-- Agrega el enlace para la sección de préstamos -->
                    <li class="list-group-item"><a href="pedirPrestamos.php">Pedir Préstamo</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <!-- Contenido principal -->
         
            
            <!-- Sección de Préstamos -->
            <div class="card mt-3">
                <div class="card-header">
                    <h4>Solicitud de Préstamo</h4>
                </div>
                <div class="card-body">
                    <form action="Consultas/solicitudPrestamo.php" method="post">
                        <!-- Formulario de Préstamo -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="asunto">Asunto del Préstamo:</label>
                                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Ej. Compra de automóvil" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cantidad">Cantidad del Préstamo:</label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ej. 10000" required>
                            </div>
                        </div>

                        <!-- Botones de Pedir Préstamo y Requisitos Préstamo -->
                        <div class="form-row mt-3">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">Pedir Préstamo</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#requisitosModal">Requisitos Préstamo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Requisitos -->
<div class="modal fade" id="requisitosModal" tabindex="-1" role="dialog" aria-labelledby="requisitosModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="requisitosModalLabel">Requisitos para el Préstamo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
          <li>No tener un préstamo pendiente de aprobar/rechazar por parte del administrador</li>
          <li>Ser mayor de edad (18 años o más)</li>
          <li>Tener al menos el 15% de la cantidad que se quiere pedir en el saldo de la cuenta</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

