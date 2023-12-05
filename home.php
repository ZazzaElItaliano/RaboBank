<?php
include("Consultas/noEvadirLogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/estilosHOME.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=Nova+Square&family=Press+Start+2P&display=swap" rel="stylesheet">

</head>

<body>

    <main>
    <section class="seccion1">
        <div class="saludo">
            <h1>Hola [aqui meter usuario], nos agrada verte de nuevo</h1>
            <h2 id="fechaHora"></h2>
            <script src="JS/fecha.js"> </script>
        </div>
        <div class="logoBanco">
            <img src="fotos/LOGODEF.svg">
        </div>
    </section>



    <section class="seccion2">
        <h1>Aquí tienes tu tarjeta</h1>
        <div class="contenedor">
          <div class="tarjetaCredito">
            <div class="PartesTarjeta">
                <div class="TarjetaFrente">
                    <img src="fotos/map.png" class="mapa">
                    <div class="filaFotos">
                        <img src="fotos/chip.png" width="60px">
                        <img src="fotos/visa.png" width="90px">
                    </div>
                    <div class="filaFotos numero-tarjeta">
                        <p>2345</p>
                        <p>5354</p>
                        <p>0928</p>
                        <p>3287</p>
                    </div>
                    <div class="filaFotos nombre-validez">
                        <p>TITULAR</p>
                        <P>VALIDEZ</P>
                    </div>
                    <div class="filaFotos datos">
                        <p>[aqui nombre user logueado]</p>
                        <p>11/24</p>
                    </div>
                </div>
                <div class="TarjetaDetras ">
                <img src="fotos/map.png" class="mapa">
                <div class="barra"></div>
                <div class="filaFotos iban">
                    <div>
                        <img src="fotos/pattern.png">
                    </div>
                    <p>[meter iban]</p>
                </div>
                
                <div class="filaFotos firma">
                    <p> FIRMA TITULAR</p>
                    <img src="fotos/visa.png" width="80">
                </div>
                </div>
            </div>
          </div>


        </div>
    </section>



    <section class="seccion3">
      <div class="hola"><h1>holaaaa</h1></div>
        <ul class="menu">
            <div class="boton"><ion-icon name="add-outline"></ion-icon></div>
            <li style="--i:0;--clr:#ff2972;">
             <a><ion-icon name="person-outline"></ion-icon></a>
            </li>
            <li  style="--i:1;--clr:#fee800;">
            <a><ion-icon name="card-outline"></ion-icon></a>
            </li>
            <li  style="--i:2;--clr:#04fc43;">
            <a><ion-icon name="chatbubbles-outline"></ion-icon></a>
            </li>
            <li  style="--i:3;--clr:#fe00f1;">
            <a><ion-icon name="cash-outline"></ion-icon></a>
            </li>
        </ul>
        <script src="JS/menuRadial.js"> </script>
    </section>
    </main>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>