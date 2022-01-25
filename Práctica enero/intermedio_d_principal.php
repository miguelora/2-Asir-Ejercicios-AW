<?php
include 'arraydb.php';
$info_vuelo=$_POST["info_vuelo"];

"<H1>INFORMACIÓN DEL VUELO</H1>";

foreach ($fabricante as $vuelo => $compañia) {
    if ($vuelo==$info_vuelo) {
        echo "El fabricante de su vuelo es: ".$compañia;
    }
}


foreach ($pasajeros as $avion => $personas) {
    $total=count($personas);
}





?>