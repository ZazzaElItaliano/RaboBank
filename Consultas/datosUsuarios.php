<?php 
include("conexion.php");


$consulta = "SELECT * FROM usuario";
$resultado2 = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");

echo "<table border='2'>";
echo "<tr>";
echo "<th>Nombre</th><th>Apellido</th><th>Email</th><th>DNI</th><th>Fecha Nacimiento</th><th>Dirección</th><th>Provincia</th><th>País</th><th>Ciudad</th><th>Código Postal</th><th>Foto</th><th>Contraseña</th><th>Teléfono</th>";
echo "</tr>";

while ($columna = mysqli_fetch_array($resultado2)) {
    echo "<tr>";
    echo "<td>" . $columna['nombre'] . "</td>";
    echo "<td>" . $columna['apellido'] . "</td>";
    echo "<td>" . $columna['email'] . "</td>";
    echo "<td>" . $columna['dni'] . "</td>";
    echo "<td>" . $columna['fecha_nac'] . "</td>";
    echo "<td>" . $columna['direccion'] . "</td>";
    echo "<td>" . $columna['provincia'] . "</td>";
    echo "<td>" . $columna['pais'] . "</td>";
    echo "<td>" . $columna['ciudad'] . "</td>";
    echo "<td>" . $columna['codigo_postal'] . "</td>";
    echo "<td>" . $columna['foto'] . "</td>";
    echo "<td>" . $columna['contrasena'] . "</td>";
    echo "<td>" . $columna['telefono'] . "</td>";
    echo "</tr>";
}

echo "</table>";


?>