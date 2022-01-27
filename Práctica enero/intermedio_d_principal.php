<?php
include 'arraydb.php';
include 'Funciones.php';
$info_vuelo=$_POST["info_vuelo"];

echo "<h1>INFORMACIÓN DEL VUELO</h1>";

$selector=$_POST['info_vuelo'];
mediavuelo($pasajeros,$selector);
echo "<br>";
echo "<br>";
totalmin($duracion,$selector);
echo "<br>";
echo "<br>";
muestrafabric($fabricante,$selector);
echo "<br>";
echo "<br>";
last($destino,$selector);









?>