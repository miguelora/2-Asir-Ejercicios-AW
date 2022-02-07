<?php


//Comprobar si existe el fichero//

if (file_exists("comprobacion.php")) {
    echo "El fichero existe";
}else{
    echo "El fichero no existe";
}


//Creacion del fichero//
$fichero1=fopen("prueba.txt","a");

if ($fichero1==false) {
    echo "No se ha creado el archivo"."<br>";
}else{
    echo "Se ha creado correctamente";
}

//Cerrar fichero abierto//
fclose($fichero1);


$miguel=fopen("prueba.txt","w+");

if ($fichero1==false) {
    echo "No se ha creado el archivo"."<br>";
}else{
  //Escribir en el archivo//
  fwrite($miguel,"Miguel Romero\r\n");
  fwrite($miguel,"Manuel Marnitez");
  fflush($miguel);//vacia la cache por si da errores de escritura//
}
fclose($miguel);

//Leer fichero//
echo "<br>";
echo readfile("prueba.txt");
echo "<br>";
$peso_archivo=filesize("prueba.txt");

$miguel=fopen("prueba.txt","a+");
echo fread($miguel,$peso_archivo);
fclose($miguel);













?>