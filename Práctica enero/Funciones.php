<?php
Include 'arraydb.php';


function mediavuelo($pasajeros,$selector){
    $contador=0;
    $numero=0;  

    foreach ($pasajeros as $avion) {
    $vuelos=$avion['Vuelo'];
    $personas=$avion['Personas'];
    if ($vuelos==$selector) {
        $numero=$numero+$personas;
        $contador++;
        }
    } 
    echo "La media de pasajeros del vuelo ".$selector."es :".$numero/$contador; 
} 

function totalmin($duracion,$selector){
    
    $numero1=0;

    foreach ($duracion as $avion) {
        $vuelos=$avion['Vuelo'];
        $minutos=$avion['Minutos'];
        if ($vuelos==$selector) {
            $numero1=$numero1+$minutos;
            
        }
    }
    echo "Los minutos totales del vuelo.".$selector."es :".$numero1;
}





?>