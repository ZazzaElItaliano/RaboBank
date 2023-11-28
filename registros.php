<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fotos\LOGODEF.svg" type="image/x-icon">
    <title>BancoRabo-login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<video src="backgroundvideo.mp4" id="video-background" autoplay muted loop> </video>
<div class="envoltorio">
    <form action="">
        <h1>Regístro</h1>
        <div class="formulario-caja">
            <div class="formulario-campos">
                <input type="text" placeholder="Nombre" required>
                <i class='bx bxs-user bx-tada' style='color:#00e3cc'></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Apellidos" required>
                <i class='bx bxs-user bx-tada' style='color:#00e3cc'></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="DNI" required>
                <i class='bx bx-id-card bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="email" placeholder="Email" required>
                <i class='bx bxs-envelope bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="date" placeholder="Fecha nacimiento">
                <i class='bx bxs-cake bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Dirección">
                <i class='bx bx-map-pin bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Codigo postal">
                <i class='bx bx-user-pin bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Teléfono">
                <i class='bx bxs-phone bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Ciudad">
                <i class='bx bxs-city bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="Provincia" >
                <i class='bx bxs-city bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="text" placeholder="País" required>
                <i class='bx bxs-flag bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="formulario-campos">
                <input type="password" placeholder="Contraseña" required>
                <i class='bx bxs-ghost bx-tada' style='color:#00e3cc' ></i>
            </div>
            <label for=""><input type="checkbox"><a href="https://www.bancsabadell.com/cmi/CMI_es.pdf">He aceptado los términos y condiciones</a></label>

            <button type="submit" class="boton-registro"> Registrarme</button>          
              <a href="login.php" id="cuenta">¿Ya tienes una cuenta?. Accede aquí</a>
        </div>
            
    </form>
</div>
</body>
</html>

