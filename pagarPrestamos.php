<?php include("Consultas/prestamosAceptados.php")?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unpkg.com/simplebar@5.3.0/dist/simplebar.min.css" integrity="sha384" crossorigin="anonymous">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilosCajero.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
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
                    <li class="list-group-item"><a href="pedirPrestamo.php">Pedir Préstamo</a></li>
                    <li class="list-group-item"><a href="pagarPrestamos.php">Pagar Préstamos</a></li>
                </ul>
            </div>
        </div>
    </div>

    <h1 class="mt-5 mb-5 text-center"> TUS PRESTAMOS A DEVOLVER</h1>
    <p class="text-center"> los préstamos tienen un 10% de interés aplicado</p>
    <div class="container table table-hover row mx-auto table-container">
                <table class="mx-auto align-middle border table-responsive-sm table-responsive-lg">
                    <thead class="bg-light">
                        <tr>
                            <th class="p-2">IDENTIFACADOR PRÉSTAMO</th>
                            <th>CONCEPTO</th>
                            <th>CANTIDAD</th>
                            <th> A PAGAR</th>
                            <th>MENSUALIDAD</th>
                            <th>PLAZO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($prestamoAceptado = mysqli_fetch_assoc($prestamoConsulta)) { ?>
                            <tr>
                                <td class="p-2"><?php echo $prestamoAceptado['id_prestamo']; ?></td>
                                <td><?php echo $prestamoAceptado['concepto']; ?></td>
                                <td><?php echo $prestamoAceptado['cantidad']; ?></td>
                                <td><?php echo $prestamoAceptado['cantidad_pagar']; ?></td>
                                <td><?php echo $prestamoAceptado['mensualidad']; ?></td>
                                <td><?php echo $prestamoAceptado['plazo']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="container table table-hover row mx-auto table-container">
    <!-- Contenido de la tabla -->
    <table class="mx-auto align-middle border table-responsive-sm table-responsive-lg">
        <!-- Estructura de tu tabla -->
    </table>
</div>
<div class="container card mt-4 text-center" style="max-width: 400px;">
    <div class="card-body">
        <h5 class="card-title">Pagar Préstamo</h5>
        <form action="Consultas/pagarPrestamos.php" method="post">
            <div class="form-row justify-content-center">
                <div class="form-group col-sm-8 mb-2">
                    <label  class="sr-only">Identificador Préstamo:</label>
                    <input type="number" class="form-control form-control-sm"  name="identificadorPrestamo" placeholder="ID" required>
                </div>
                <div class="form-group col-sm-8 mb-2">
                    <label  class="sr-only">Cantidad a Devolver:</label>
                    <input type="number" class="form-control form-control-sm" step="0.01" name="cantidadDevolver" placeholder="Cantidad" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Pagar Préstamo</button>
        </form>
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
     <script src="https://unpkg.com/simplebar@5.3.0/dist/simplebar.min.js" integrity="sha384-..tu código de integridad.." crossorigin="anonymous"></script>
     <script src="JS/subirBajarTabla.js"> </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>