<?php

$importe1=$_POST["importe"];
$selector=$_POST["selector"];
define ('coca_cola',1.50);
define ('Fanta',1.50);
define ('Nestea',1.25);
define ('Agua',1);
define ('Redbull',1.75);
define ('Chocobons',2.50);
define ('Doritos',2);
define ('Buscalios',1.85);






function resta($importe1,$precio){
    $res=$importe1-$precio;
    if ($precio>$importe1) {
        echo "El precio es: ".$precio."Te faltan: ".$res;
    }else {
        echo "Comprando una ".$selector."(importe suficiente: )".$importe1;
    }
}











switch ($selector) {
    case 'Coca_cola':
        $precio='coca_cola';
        resta($importe1,'coca_cola');
        break;
    
    case'Fanta':
        $precio='Fanta';
        resta($importe1,'Fanta');
        break;
    case'Nestea':
        $precio='Nestea';
        resta($importe1,'Nestea');
        break;
    case'Agua':
        $precio='Agua';
        resta($importe1,'Agua');
        break;
    case'Redbull':
        $precio='Redbull';
        resta($importe1,'Redbull');
        break;
    case'Chocobons':
        $precio='Chocobons';
        resta($importe1,'Chocobons');
        break;
    case'Doritos':
        $precio='Doritos';
        resta($importe1,'Doritos');
        break;
    case'Buscalios':
        $precio='Buscalios';
        resta($importe1,'Buscalios');
        break;

}



















?>