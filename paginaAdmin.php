<?php include("Consultas/datosUsuarios.php")    ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
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
                            <a class="nav-link active text-white" aria-current="page" href="paginaAdmin.php">Datos usuarios
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link text-white" href="gallery.html">Préstamos</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link text-white " aria-current="page" href="chatAdmin.php" aria-expanded="false">
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
      
 <header>
 <p class=" mt-5 display-2 text-center"><strong>DATOS PERSONALES</strong></p>
</header>
    <div class="container table table-hover row mx-auto ">
        <table class="mt-5 align-middle border table-responsive-sm table-responsive-lg">
            <thead class="bg-light">
                <tr>
                    <th class="p-2">NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>EMAIL</th>
                    <th>DNI</th>
                    <th>FECHA NACIMIENTO</th>
                    <th>DIRECCIÓN</th>
                    <th>PROVINCIA</th>
                    <th>PAÍS</th>
                    <th>CIUDAD</th>
                    <th>CÓDIGO POSTAL</th>
                    <th>CONTRASEÑA</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($datos = mysqli_fetch_assoc($resultado2 )) { ?>
                    <tr>
                        <td class="p-2"><?php echo $datos['nombre']; ?></td>
                        <td><?php echo $datos['apellido'] ?></td>
                        <td><?php echo $datos['email']; ?></td>
                        <td><?php echo $datos['dni']; ?></td>
                        <td><?php echo $datos['fecha_nac']; ?></td>
                        <td><?php echo $datos['direccion']; ?></td>
                        <td><?php echo $datos['direccion']; ?></td>
                        <td><?php echo $datos['provincia']; ?></td>
                        <td><?php echo $datos['pais']; ?></td>
                        <td><?php echo $datos['ciudad']; ?></td>
                        <td><?php echo $datos['codigo_postal']; ?></td>
                        <td><?php echo $datos['telefono']; ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <header>
 <p class=" mt-5 display-2 text-center"><strong>CUENTAS</strong></p>
</header>
    <div class="container table table-hover row mx-auto ">
        <table class="mt-5 align-middle border table-responsive-sm table-responsive-lg">
            <thead class="bg-light">
                <tr>
                    <th class="p-2">ID CUENTA</th>
                    <th>SALDO</th>
                    <th>IBAN</th>
                    
                   
                </tr>
            </thead>
            <tbody>
                <?php while ($datos2 = mysqli_fetch_assoc($resultado3 )) { ?>
                    <tr>
                        <td class="p-2"><?php echo $datos2['id_cuenta']; ?></td>
                        <td><?php echo $datos2['saldo'] ?></td>
                        <td><?php echo $datos2['iban']; ?></td>
                        <td><?php echo $datos2['dni']; ?></td>
                       

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <header>
 <p class=" mt-5 display-2 text-center"><strong>MOVIMIENTOS</strong></p>
</header>
    <div class="container table table-hover row mx-auto ">
        <table class="mt-5 align-middle border table-responsive-sm table-responsive-lg">
            <thead class="bg-light">
                <tr>
                    <th class="p-2">ID MOVIMIENTOS</th>
                    <th>CONCEPTO</th>
                    <th>CANTIDAD</th>
                    <th>FECHA</th>
                    <th>HORA</th>
                    <th>ID CUENTA</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php while ($datos3 = mysqli_fetch_assoc($resultado4 )) { ?>
                    <tr>
                        <td class="p-2"><?php echo $datos3['id_movimiento']; ?></td>
                        <td><?php echo $datos3['concepto'] ?></td>
                        <td><?php echo $datos3['cantidad']; ?></td>
                        <td><?php echo $datos3['fecha']; ?></td>
                        <td><?php echo $datos3['hora']; ?></td>
                        <td><?php echo $datos3['id_cuenta']; ?></td>
                       

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
