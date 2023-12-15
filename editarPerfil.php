<?php include("Consultas/sesionPerfil.php")?>
<?php include("Consultas/mostrarDatosUsuario.php")?>

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
                    <li class="list-group-item"><a href="perfil.php">Ver Perfil</a></li>
                  
                </ul>
            </div>
        </div>
        <div class="col-md-9">
          
            <div class="card">
                <div class="card-header">
                    <h4>Editar Perfil de Usuario</h4>
                </div>
                <div class="card-body">
                    <form action="Consultas/editarDatos.php" method="post" enctype="multipart/form-data">
                        
                        <h5>Datos Personales</h5>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido; ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fechaNac" value="<?php echo $fechaNac; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="imagen">Subir Imagen:</label>
                                <input type="file" class="form-control-file" id="imagen" name="imagen">
                            </div>
                        </div>

                       
                      
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="direccion">Dirección:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $direccion; ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="codigo_postal">Código Postal:</label>
                                <input type="text" class="form-control" id="codigo_postal" name="cp" value="<?php echo $cp; ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="ciudad">Ciudad:</label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $ciudad; ?>">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="provincia">Provincia:</label>
                                <input type="text" class="form-control" id="provincia" name="provincia" value="<?php echo $provincia; ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pais">País:</label>
                                <input type="text" class="form-control" id="pais" name="pais" value="<?php echo $pais; ?>">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
