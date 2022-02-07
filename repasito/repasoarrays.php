<?php


$pasajeros=array(
    array('Vuelo'=>'Vueling-AE12','Personas'=>'90'),
    array('Vuelo'=>'Volotea-EA21','Personas'=>'75'),
    array('Vuelo'=>'Iberia-WE44','Personas'=>'100'),
    array('Vuelo'=>'Ryanair-EW44','Personas'=>'60'),
    array('Vuelo'=>'Volotea-UA21','Personas'=>'93'),
    array('Vuelo'=>'Iberia-WH44','Personas'=>'86'),
    array('Vuelo'=>'Ryanair-EL00','Personas'=>'75'),
    array('Vuelo'=>'Vueling-AE12','Personas'=>'87'),
    array('Vuelo'=>'Volotea-EA21','Personas'=>'97'),
    array('Vuelo'=>'Iberia-WE44','Personas'=>'81'),
    array('Vuelo'=>'Ryanair-EW44','Personas'=>'75'),
    array('Vuelo'=>'Vueling-ZK87','Personas'=>'87'),
    array('Vuelo'=>'Volotea-UA21','Personas'=>'90'),
    array('Vuelo'=>'Iberia-WH44','Personas'=>'84'),
    array('Vuelo'=>'Ryanair-EL00','Personas'=>'67'),
    array('Vuelo'=>'Vueling-AE12','Personas'=>'86'),
    array('Vuelo'=>'Volotea-EA21','Personas'=>'66'),
    array('Vuelo'=>'Ryanair-EL00','Personas'=>'75'),
    array('Vuelo'=>'Iberia-WE44','Personas'=>'40'),
    array('Vuelo'=>'Ryanair-EW44','Personas'=>'77'),
    array('Vuelo'=>'Vueling-ZK87','Personas'=>'82'),
);


function mediavuelo($pasajeros,$selector){
    $contador=0;
    $numero=0;

    foreach($pasajeros as $avion){
        $vuelos=$avion['Vuelo'];
        $personas=$avion['Personas'];

        if ($vuelos==$selector){
            $numero=$numero+$personas;
            $contador++
        }
    }
}













?>