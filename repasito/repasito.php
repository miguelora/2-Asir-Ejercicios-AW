<?php


//Constantes//
$pi=pi();
echo "Numero pi:".$pi."<br>";

define("gravedad",9.8);
echo "CONSTANTE DE LA GRAVEDAD: ".gravedad;
echo "<br>";


//ARRAYS Y TRATAMIENTO//
$numeros= array(2,4,6,8,10,12,14,16,20,gravedad);
print_r($numeros);

$cantidad_numeros=count($numeros);
//echo $cantidad_numeros;//
//$desordena=shuffle($numeros);//
echo "<br>";
print_r($numeros);

//RECORRER ARRAY//
for ($i=0; $i <$cantidad_numeros ; $i++) { 
    echo "VALOR DE ".$i.$numeros[$i].": "."<br>";
}
echo "<br> FOR EACH <br>";


foreach ($numeros as $dentro) {
    echo $dentro."<br>";
}


$provincias=array(
"ANDALUCIA"=>"Sevilla",
"COM_MADRID"=>"Madrid",
"ARAGON"=>"Zaragoza",
"PAIS VASCO"=>"Bilbao"
);
print_r($provincias);

echo "<br>";


foreach ($provincias as $provincia => $i) {
    echo "La comunidad atonoma es ".$provincia.": ".$i."<br>";
}


//array_push($provincias,["CATALUÑA,Barcelona"]);//
//print_r($provincias);//


//MODIFICAR VALOR ARRAY//
$numeros[0]=3;
foreach ($numeros as $dentro) {
    echo $dentro."<br>";
}
print_r($numeros);

//ELIMINAR VALOR DE ARRAY//
unset($numeros[9]);
echo "<br>";
print_r($numeros);

//ARRAY MULTIDIMENSIONALES//
$asir=array(
    array("Nombre"=>"Nacho","Frase"=>"Gusano Morris"),
    array("Nombre"=>"Manule","Frase"=>"Ere tela gracioso capi"),
    array("Nombre"=>"Kerry","Frase"=>"au au au"),
    array("Nombre"=>"Miguel","Frase"=>"Ke ezoh, chi chi")

);
print_r($asir);
echo "<br>";

foreach ($asir as $alumno) {
    echo "Nombre: ".$alumno["Nombre"]."<br>";
    echo "Frase tipica: ".$alumno["Frase"]."<br>";
    
}
echo "<br>";
//FUNCIONES//

$numero1=10;
$numero2=4;

//function suma($numero1,$numero2){
    //$res=$numero1+$numero2;
    //echo "El resultado es: ".$res;
//}

//suma($numero1,$numero2);

//FUNCIONES CON RETORNO//
function suma($numero1,$numero2){
    $res=$numero1+$numero2;
    return $res;
}
$sumador=suma($numero1,$numero2);
echo $sumador;
echo "<br>";
$redondeo=round(gravedad);
echo $redondeo;


/*

//BUCLES//

while ($a <= 10) {
    # code...
}




for ($i=0; $i < ; $i++) { 
    # code...
}

$manule="cafelaso";
$miguel=0;
$pako=true;
$dato1=$_POST["dato1"];
$dato2=$_GET["dato2"];

//CONDICIONES//

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

if (condition) {
    # code...
}

else {
    # code...
}


//ARRAYS//




*/






?>