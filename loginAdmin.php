<?php  include("Consultas/mantenerSesionAdmin.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fotos\LOGODEF.svg" type="image/x-icon">
    <title>BancoRabo-login</title>
    <link rel="stylesheet" href="CSS/estilosACCESO.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<video src="fotos/backgroundvideo.mp4" id="video-background" autoplay muted loop>
    
  </video>
    <div class="login">
        <form action="Consultas/accesoAdmin.php" method="post">
            <h1>Acceso administrador</h1>
            <div class="caja-texto">
                <input type="text" placeholder="DNI" name="dni">
                <i class='bx bx-id-card bx-tada' style='color:#00e3cc' ></i>
            </div>
            <div class="caja-texto">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <i class='bx bxs-lock bx-flip-vertical bx-tada' style='color:#00e3cc'></i>
            </div>
            <div class="Recuerda-password">
               <label for="">
                <input type="checkbox" name="" id="">
                Recuerdame la contraseña
               </label>
               <a href="login.php">Acceso usuario</a>
            </div>
        
            <button type="submit" class="boton">Acceder</button>
        
            
        
        
        
        
        
        
        </form>



    </div>
</body>
</html>