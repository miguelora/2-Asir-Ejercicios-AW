<?php


echo date("Y");
echo "<br>";
echo date("d/m/Y");
echo "<br>";
echo date("d/m/y h:i:s");

//Zonas UTC (horarias)//
 
echo "Estoy en la zona de :" .date_default_timezone_get()."<br>";
echo "Fecha: ".strftime("%A, %d de %B del %Y - %H:%M;%S");
echo "<br>";

date_default_timezone_set("Asia/Tokyo");
echo "Estoy en la zona de :" .date_default_timezone_get()."<br>";
echo "Fecha: ".strftime("%A, %d de %B del %Y - %H:%M;%S");

//07/02/2022 09:00:00
$fechita=mktime("09","00","00","02","07","2022");
echo "<br>";
echo date("h:i:s m/d/y",$fechita);


/*

1 minuto = 60 segundos
1 hora = 60 minutos = 3600 segundos
1 dia =24*3600=86400 segundos



*/


//suma 1 dia y 2 hora//

$fechita= $fechita + 86400+7200;
echo "<br>";
echo date("h:i:s m/d/y",$fechita);
echo "<br>";

//Diferencias entre 2 fechas//

$fecha1=mktime("09","00","00","02","07","2022");
$fecha2=mktime("12","00","00","02","09","2022");

$diff=$fecha2-$fecha1;
$minutos=$diff/60;
$horas=$diff/3600;
$dias=$diff/86400;
echo date("h:i:s m/d/y",$fecha1),"<br>";
echo date("h:i:s m/d/y",$fecha2),"<br>";


echo date("h:i:s",$minutos);
echo "<br>";
echo $horas;
echo "<br>";
echo $dias;



?>