<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fotos\LOGODEF.svg" type="image/x-icon">
    <title>BancoRabo-login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/css/styles2.css">
</head>
<body>
<video src="fotos/backgroundvideo.mp4" id="video-background" autoplay muted loop> </video>
<div class="envoltorio">
    <form action="Consultas/registro.php" method="POST">
        <h1>Registro</h1>
        <div class="formulario-caja">
            <div class="formulario-campos">
                <input type="text" placeholder="Nombre" name="nombre"required>
                <i class='bx bxs-user bx-tada' style='color:#00e3cc'></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Apellidos" name="apellido" required>
                <i class='bx bxs-user bx-tada' style='color:#00e3cc'></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="DNI" name="dni" required>
                <i class='bx bx-id-card bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="email" placeholder="Email" name="email" required>
                <i class='bx bxs-envelope bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="date" placeholder="Fecha nacimiento" name="fechaNac">
               
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Dirección" name="direccion">
                <i class='bx bx-map-pin bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Codigo postal" name="cp">
                <i class='bx bx-user-pin bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Teléfono" name="telefono">
                <i class='bx bxs-phone bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Ciudad" name="ciudad">
                <i class='bx bxs-city bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Provincia" name="provincia">
                <i class='bx bxs-city bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="País" name="pais" required>
                <i class='bx bxs-flag bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="password" placeholder="Contraseña" name="contrasena" required>
                <i class='bx bxs-ghost bx-tada' style='color:#00e3cc' ></i>
            </div>
            <label for=""><input type="checkbox"><a href="https://www.bancsabadell.com/cmi/CMI_es.pdf">He aceptado los términos y condiciones</a></label>

            <button type="submit" class="boton-registro"> Registrarme</button>          
              <p class="acceso">¿Ya tienes una cuenta?</p> <a href="login.php" id="cuenta">Accede aquí</a>
        </div>
            
    </form>
</div>
<script src="JS/validacionRegistro.js"></script>
</body>
</html>

