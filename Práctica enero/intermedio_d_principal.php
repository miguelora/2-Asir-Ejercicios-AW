<?php
include 'arraydb.php';
$info_vuelo=$_POST["info_vuelo"];

"<H1>INFORMACIÓN DEL VUELO";

foreach ($fabricante as $vuelo => $compañia) {
    if ($vuelo==$info_vuelo) {
        echo "El fabricante de su vuelo es: ".$compañia."<br>";
    }
}


//$total=array_sum($pasajeros);
//echo "El número total de pasajeros es: ".$total."<br>";

$totalpasaje=0;
foreach ($pasajeros as $avion => $personas) {
    $totalpasaje+=$personas;
    echo $totalpasaje;
}

$totalmin=array_sum($duracion);
echo "El numero total de minutos es: ".$totalmin;







?>