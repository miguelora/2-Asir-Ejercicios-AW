<?php
    echo readfile("pruebafichero.txt");
    echo "<br>";
    echo filesize("pruebafichero.txt");
    
    //APERTURA Y LECTURA DE UN FICHERO//
    $fichero1 = fopen("pruebafichero.txt","r") or die("Fallo al abrir fichero");
    echo "<br>";
    //TAMAÑO FICHERO GUARDO EN VARIABLE//
    $pesofichero=filesize("pruebafichero.txt");
    //REPRESENTO POR PANTALLA EL CONTENIDO//
    echo fread($fichero1,$pesofichero);
    fclose($fichero1);




    //ESCRIBIR EN EL FICHERO//
    $fichero1 = fopen("pruebafichero.txt","w") or die("Fallo al abrir fichero");
    $nuevotexto = "Que te gustan las variables";
    fwrite($fichero1,"prefiero redbull");
    fclose($fichero1);














?>