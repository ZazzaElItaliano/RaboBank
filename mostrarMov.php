<?php 
include("Consultas/obtenerMovimientos.php");

?>
<!doctype html>
<html lang="en">
<head>
<link rel="icon" href="fotos\LOGODEF.svg" type="image/x-icon">
    <title>BancoRabo-login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type text css href="css/bootstrap.css">
    <link rel="stylesheet" type text css href="css/style.css">
</head>

<body>


    <header>
        <p class="display-1 text-center"><strong>TUS MOVIMIENTOS</strong></p>
    </header>
    <div class="container table table-hover row mx-auto">
        <table class="mx-auto align-middle border table-responsive-sm table-responsive-lg">
            <thead class="bg-light">
                <tr>
                    <th class="p-2">CONCEPTO</th>
                    <th>CANTIDAD</th>
                    <th>FECHA</th>
                    <th>HORA</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($movimiento = mysqli_fetch_assoc($resultadoMovimientos)) { ?>
                    <tr>
                        <td class="p-2"><?php echo $movimiento['concepto']; ?></td>
                        <td><?php echo floatval($movimiento['cantidad'])."$" ; ?></td>
                        <td><?php echo $movimiento['fecha']; ?></td>
                        <td><?php echo $movimiento['hora']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
