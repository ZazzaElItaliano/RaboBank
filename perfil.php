<?php include("Consultas/sesionPerfil.php")?>
<?php include("Consultas/mostrarDatosUsuario.php")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
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
                  
                    <li class="list-group-item"><a href="editarPerfil.php">Editar Datos</a></li> <!-- Enlace a la página de edición -->
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <!-- Contenido principal -->
            <div class="card">
                <div class="card-header">
                    <h4>Datos Personales</h4>
                </div>
                <div class="card-body">
    

                    <div class="row">
                        <div class="col-md-3 img-fluid rounded-circle">
                              <?php include("Consultas/foto_defecto.php") ?>
                        </div>
                        <div class="col-md-9">
                            <p><strong>Nombre:</strong> <?php echo $nombre?></p>
                            <p><strong>Apellido:</strong> <?php echo $apellido ?></p>
                            <p><strong>Email:</strong> <?php echo $email; ?></p>
                            <p><strong>DNI:</strong> <?php echo $dni; ?></p>
                            <p><strong>Fecha de nacimiento:</strong> <?php echo  $fechaNac; ?></p>
                            <p><strong>Dirección:</strong> <?php echo $direccion; ?></p>
                            <p><strong>Provincia:</strong> <?php echo $provincia; ?></p>
                            <p><strong>País:</strong> <?php echo $pais; ?></p>
                            <p><strong>Ciudad:</strong> <?php echo $ciudad; ?></p>
                            <p><strong>Código postal:</strong> <?php echo $cp; ?></p>
                            <!-- Puedes agregar más información según sea necesario -->
                            <div class="py-4 align-items-center ">
                            <button  class="  btn btn-warning"><a href="home.php">Volver al inicio</a></button>
                        </div>
                        </div>
                       
                    </div>
                   
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
