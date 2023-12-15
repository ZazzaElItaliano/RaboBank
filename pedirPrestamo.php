
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fotos\LOGODEF.svg" type="image/x-icon">
    <title>BancoRabo-login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
          
            <div class="card">
                <div class="card-header">
                    Menú
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="estadoPrestamos.php">Estado prestamos</a></li>
                    <!-- Agrega el enlace para la sección de préstamos -->
                    <li class="list-group-item"><a href="pedirPrestamo.php">Pedir préstamo</a></li>
                    <li class="list-group-item"><a href="pagarPrestamos.php">Pagar préstamos</a></li>
                    <li class="list-group-item"><a href="home.php">Volver al menú principal</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            
            <div class="card mt-3">
                <div class="card-header">
                    <h4>Solicitud de préstamo</h4>
                </div>
                <div class="card-body">
                    <form action="Consultas/solicitudPrestamo.php" method="post">
                     
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="asunto">Asunto del préstamo:</label>
                                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Ej. Compra de automóvil" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cantidad">Cantidad del préstamo:</label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad" step="0.01" placeholder="Ej. 10000" required>
                            </div>
                        </div>

                       
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
        <h5 class="modal-title" id="requisitosModalLabel">Requisitos para el préstamo</h5>
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

