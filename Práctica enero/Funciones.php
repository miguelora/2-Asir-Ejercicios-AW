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

//FUNCIONES DE EST_CIU//

//function totalciu($destino){

//        $cuentaciu='0';

  //      foreach ($vuelos as $avion) {
    //        $vuelos=$avion['Vuelo'];
      //      $Desti=$avion;
        //}

        //echo count($destino);




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







?>