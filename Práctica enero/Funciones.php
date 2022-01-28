<?php
Include 'arraydb.php';

//FUNCIONES DE MUESTRA_VUELO//
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


function muestrafabric($fabricante,$selector){

   

    foreach ($fabricante as $avion) {
        $vuelos=$avion['Vuelo'];
        $fabric=$avion['fabric'];

        if ($vuelos==$selector) {
            echo "El fabricante del avion".$selector."es: ".$fabric;
        }
    }
}



function last($destino,$selector){


    foreach ($destino as $avion) {
        $vuelos=$avion['Vuelo'];
        $Desti=$avion['Desti'];
    
        if ($vuelos==$selector) {

            echo "El último destino del vuelo ".$selector."es : ".$Desti;
        }
    
    }


   


}

//FUNCIONES DE ESTADISTICAS DE CIUDADES//

function maxvisit($destino){
    foreach ($destino as $avion) {
        $vuelos=$avion['Vuelo'];
        $Desti=$avion['Desti'];
        print "Las ciudades mas visitadas son: ".array($Desti);
    }
}

function lessvisit($destino){
   $contador=0
    foreach ($destino as $avion) {
       $pasajeros as $avion['Vuelo'];
       $pasajeros as $avion['Desti'];
       array_count_values($destino, 'Desti');
       $total=array_count_values($destino,['Desti']-$contador;);
   } 
    echo "Las ciudades menos visitadas son :".$total;
   

}


//FUNCIONES DE AVION//

function muestrafabric2($fabricante,$info_avion){

   

    foreach ($fabricante as $avion) {
        $vuelos=$avion['Vuelo'];
        $fabric=$avion['fabric'];

        if ($vuelos==$info_avion) {
            echo "El fabricante del avion".$info_avion."es: ".$fabric;
        }
    }
}

function mediavuelo2($pasajeros,$info_avion){
    $contador=0;
    $numero=0;  

    foreach ($pasajeros as $avion) {
    $vuelos=$avion['Vuelo'];
    $personas=$avion['Personas'];
    if ($vuelos==$info_avion) {
        $numero=$numero+$personas;
        $contador++;
        }
    } 
    echo "La media de pasajeros del vuelo ".$info_avion."es :".$numero/$contador; 
} 




function totalmin2($duracion,$info_avion){
    
    $numero1=0;

    foreach ($duracion as $avion) {
        $vuelos=$avion['Vuelo'];
        $minutos=$avion['Minutos'];
        if ($vuelos==$info_avion) {
            $numero1=$numero1+$minutos;
            
        }
    }
    echo "Los minutos totales del vuelo.".$info_avion."es :".$numero1;

    
}

function totalpasajeros($pasajeros,$info_avion){
    $contador=0;
    $numero=0;  

    foreach ($pasajeros as $avion) {
    $vuelos=$avion['Vuelo'];
    $personas=$avion['Personas'];
    if ($vuelos==$info_avion) {
        $numero=$numero+$personas;
        $contador++;
        }
    } 
    echo "Las personas totales en el avion ".$info_avion."es :".$numero; 
} 

function mediapasajerosavion($pasajeros,$info_avion){
    $contador=0;
    $numero=0;  

    foreach ($pasajeros as $avion) {
    $vuelos=$avion['Vuelo'];
    $personas=$avion['Personas'];
    if ($vuelos==$info_avion) {
        $numero=$numero+$personas;
        $contador++;
        }
    } 
    echo "La media de pasajeros del avion ".$info_avion."es :".$numero/$contador; 
} 

//Funciones de aeropuerto//

function totalpasajeros2($pasajeros){
    $totalespasajeros2=array_count_values($pasajeros,['personas']);
    echo "Los pasajeros totales de todos los vuelos son: ".$totalespasajeros2;



function avionfabric($fabricante){
    $avifabric=array_count_values($fabricante,['fabric']);
    echo "Los aviones por fabricante totales son: ".$avifabric;
}

function maxdesti($destino){
    $avidesti=array_count_values($fabricante,['Desti']);
    echo "Los destinos con más conexiones son ".$avidesti;

}


function mindesti($detino){
    $contador=8
    $minconex=array_count_values($fabricante,['Desti'])-$contador;
    echo "Los destinos con menos conexiones son: ".$minconex;

}









?>