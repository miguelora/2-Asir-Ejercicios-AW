<?php
include 'arraydb.php';
include 'Funciones.php';


$info_avion=$_POST['info_avion'];


echo "<h1>INFORMACIÓN DEL VUELO</h1>";



switch ($info_avion) {
    case 'AE12':
        muestrafabric2($fabricante,$info_avion);
        echo "<br>";
        echo "<br>";
        mediavuelo2($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        totalmin2($duracion,$info_avion);
        echo "<br>";
        echo "<br>";
        totalpasajeros($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        mediapasajerosavion($pasajeros,$info_avion);
        break;
    case 'EA21':
        muestrafabric2($fabricante,$info_avion);
        echo "<br>";
        echo "<br>";
        mediavuelo2($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        totalmin2($duracion,$info_avion);
        echo "<br>";
        echo "<br>";
        totalpasajeros($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        mediapasajerosavion($pasajeros,$info_avion);
        break;
    case 'WE44':
        muestrafabric2($fabricante,$info_avion);
        echo "<br>";
        echo "<br>";
        mediavuelo2($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        totalmin2($duracion,$info_avion);
        echo "<br>";
        echo "<br>";
        totalpasajeros($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        mediapasajerosavion($pasajeros,$info_avion);
        break;
    case 'EW44':
        muestrafabric2($fabricante,$info_avion);
        echo "<br>";
        echo "<br>";
        mediavuelo2($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        totalmin2($duracion,$info_avion);
        echo "<br>";
        echo "<br>";
        totalpasajeros($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        mediapasajerosavion($pasajeros,$info_avion);
        break;
    case 'ZK87':
        muestrafabric2($fabricante,$info_avion);
        echo "<br>";
        echo "<br>";
        mediavuelo2($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        totalmin2($duracion,$info_avion);
        echo "<br>";
        echo "<br>";
        totalpasajeros($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        mediapasajerosavion($pasajeros,$info_avion);
        break;
    case 'UA21':       
        muestrafabric2($fabricante,$info_avion);
        echo "<br>";
        echo "<br>";
        mediavuelo2($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        totalmin2($duracion,$info_avion);
        echo "<br>";
        echo "<br>";
        totalpasajeros($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        mediapasajerosavion($pasajeros,$info_avion);
        break;
    case 'WH44':
        muestrafabric2($fabricante,$info_avion);
        echo "<br>";
        echo "<br>";
        mediavuelo2($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        totalmin2($duracion,$info_avion);
        echo "<br>";
        echo "<br>";
        totalpasajeros($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        mediapasajerosavion($pasajeros,$info_avion);
        break;
    case 'EL00':
        muestrafabric2($fabricante,$info_avion);
        echo "<br>";
        echo "<br>";
        mediavuelo2($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        totalmin2($duracion,$info_avion);
        echo "<br>";
        echo "<br>";
        totalpasajeros($pasajeros,$info_avion);
        echo "<br>";
        echo "<br>";
        mediapasajerosavion($pasajeros,$info_avion);
        break;
            

        
}









?>