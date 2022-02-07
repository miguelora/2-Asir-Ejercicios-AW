<?php

if ( empty($_POST)) {
    if (isset($_POST["nombre"])&&isset($_POST["apellidos"])) {
        echo "Por favor introduzca correctamente los nombres y los apellidos";
    }else{
        echo "Nombre: ".$_POST["nombre"]."<br>";
        echo "Apellidos: ".$_POST["nombre"]."<br>";
    }
}else{
    echo "por favor, introduzca informacion". "Formulario vacio";
}























?>