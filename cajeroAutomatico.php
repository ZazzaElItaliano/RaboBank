

<?php include("Consultas/mostrarSaldo.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/css/styles.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <!-- Menú lateral -->
        <div class="col-md-3">
    <div class="list-group">
        <a href="mostrarMov.php" class="list-group-item list-group-item-action">Ver Movimientos</a>
        <a href="home.php" class="list-group-item list-group-item-action">Volver al Menú principal</a>
    </div>
</div>
    
        <!-- Contenido principal -->
        <div class="col-md-9">
            <div class="saldo-container">
                <h2 class="titulo-saldo">Resumen del Saldo</h2>
                <div class="saldo-text"> <?php echo number_format($saldoUsuario, 2);   ?>$</div>
            </div>

            <div class="botones-container">
                <button class="btn btn-primary" data-toggle="modal" data-target="#ingresoModal">Ingresar Dinero</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#retiroModal"> Retirar Dinero</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal para ingresar dinero -->
<div class="modal" id="ingresoModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ingresar Dinero</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="Consultas/meterDinero.php" method="post">
                   
                    <div class="form-group">
                        <label for="asunto">Asunto:</label>
                        <input type="text" class="form-control" name="asunto" placeholder="Ingrese el asunto" required>
                    </div> 
                    
                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad"   step="0.01" placeholder="Ingrese la cantidad" required>
                    </div>


                    
                    <button type="submit" class="btn btn-primary">Ingresar dinero</button>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>
<!-- Modal para retirar dinero -->
<div class="modal" id="retiroModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Cabecera del Modal -->
            <div class="modal-header">
                <h4 class="modal-title">Retirar Dinero</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Cuerpo del Modal -->
            <div class="modal-body">
                <form action="Consultas/sacarDinero.php" method="post">
                    
                    <div class="form-group">
                        <label for="asuntoRetiro">Asunto:</label>
                        <input type="text" class="form-control" id="asuntoRetiro" name="asuntoRetiro" required>
                    </div>
                    <div class="form-group">
                        <label for="cantidadRetiro">Cantidad a Retirar:</label>
                        <input type="number" class="form-control" id="cantidadRetiro" name="cantidadRetiro" step="0.01" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Retirar Dinero</button>
                </form>
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
