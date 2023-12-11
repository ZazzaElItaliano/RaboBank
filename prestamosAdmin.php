<?php include("Consultas/mostrarPrestamosAdmin.php")   ?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
                                    <a class="nav-link active text-white" aria-current="page" href="index.html">Datos usuarios
                                    </a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link text-white" href="gallery.html">Préstamos</a>
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
    <main>
        <section class="mt-5">
            <h1 class="mt-5 mb-5 text-center"> PRÉSTAMOS PENDIENTES DE REVISIÓN</h1>

            <div class="container table table-hover row mx-auto">
                <table class="mx-auto align-middle border table-responsive-sm table-responsive-lg">
                    <thead class="bg-light">
                        <tr>
                            <th class="p-2">ESTADO</th>
                            <th>CONCEPTO</th>
                            <th>CANTIDAD</th>
                            <th>CUENTA SOLICITANTE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($prestamoObtenido = mysqli_fetch_assoc($sacarPrestamos)) { ?>
                            <tr>
                                <td class="p-2"><?php echo $prestamoObtenido['estado']; ?></td>
                                <td><?php echo $prestamoObtenido['concepto']; ?></td>
                                <td><?php echo $prestamoObtenido['cantidad']; ?></td>
                                <td><?php echo $prestamoObtenido['id_cuenta']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <section class="mt-5">
                <div class="container">
                    <h1 class="text-center">Préstamos Pendientes de Revisión</h1>

                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="Consultas/decisionPrestamos.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Campos del primer formulario -->
                                       

                                        <div class="mb-3">
                                            <label class="form-label">Cantidad Mensual </label>
                                            <input type="number" step="0.01" class="form-control" name="cantidadMensual">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Estado</label>
                                            <select class="form-select" name="estado">
                                                <option value="aceptado">Aceptado</option>
                                                <option value="denegado">Denegado</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="mb-3">
                                            <label class="form-label">Plazo (Fecha)</label>
                                            <input type="date" class="form-control" name="plazo">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">ID Cuenta</label>
                                            <input type="text" class="form-control" name="idCuenta">
                                        </div>
                                    </div>
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-sm btn-primary">Enviar Comprobación</button>
                                    <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modalModificarEstado">¿Cómo Modifico el Estado?</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal para modificar estado -->
                <div class="modal fade" id="modalModificarEstado" tabindex="-1" aria-labelledby="modalModificarEstadoLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalModificarEstadoLabel">Modificar Estado</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Para denegar un préstamo, cambia el estado a 'Denegado' e introduce la cuenta a la que se deniega el préstamo. Para aceptar un préstamo, introduce los detalles y cambia el estado a 'Aceptado'.</p>
                                <!-- Agrega aquí los campos adicionales necesarios para aceptar un préstamo -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>


            </section>




    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>