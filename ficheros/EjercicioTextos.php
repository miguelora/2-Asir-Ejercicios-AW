<?php

    $recoge1 =$_POST["formulario"];
    $recogeradio =$_POST["seleccion"];


    if ($recogeradio=0) {
        $fichero1 = fopen("opiniones.txt","w") or die("Fallo al abrir fichero");
         fwrite($fichero1,$recoge1);
         fclose($recoge1);
         $fichero1 = fopen("opiniones.txt","r") or die("Fallo al abrir fichero");
         $pesoarchivo=filesize($recoge1);
         echo fread($recoge1,$pesoarchivo);
         fclose($recoge1);

        
    }else {
        $fichero1 = fopen("opiniones.txt","w") or die("Fallo al abrir fichero");
        fwrite($fichero1,$recoge1);
        fclose($recoge1);
    }



















?>