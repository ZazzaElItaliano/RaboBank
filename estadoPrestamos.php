
<?php include("Consultas/obtenerPrestamos.php")   ?>
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
                    <li class="list-group-item"><a href="estadoPrestamos.php">Estado Prestamos</a></li>
                    <!-- Agrega el enlace para la sección de préstamos -->
                    <li class="list-group-item"><a href="pedirPrestamos.php">Pedir Préstamo</a></li>
                </ul>
            </div>
        </div>
    </div>
        <section class="mt-5">
            <h1 class="mt-5 mb-5 text-center"> TUS PRÉSTAMOS</h1>

            <div class="container table table-hover row mx-auto">
                <table class="mx-auto align-middle border table-responsive-sm table-responsive-lg">
                    <thead class="bg-light">
                        <tr>
                            <th class="p-2">ESTADO</th>
                            <th>CONCEPTO</th>
                            <th>CANTIDAD</th>
                            <th>PLAZO</th>
                            <th>FECHA DE CREACIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($mostrarPrestamos = mysqli_fetch_assoc($ejecutarConsulta)) { ?>
                            <tr>
                                <td class="p-2"><?php echo $mostrarPrestamos['estado']; ?></td>
                                <td><?php echo $mostrarPrestamos['concepto']; ?></td>
                                <td><?php echo $mostrarPrestamos['cantidad']; ?></td>
                                <td><?php echo $mostrarPrestamos['plazo']; ?></td>
                                <td><?php echo $mostrarPrestamos['fecha_creacion']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

          




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