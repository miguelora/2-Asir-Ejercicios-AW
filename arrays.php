<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php



     

        $numeros = array(8, 3, 7, 1);
    

        $aprobado = array("Miguel", "Kerry");

        $coches = array("Ferrari", "Seat", "BMW", "OPEL", "Mitsubishi");

        echo $aprobado[0];

        $cuentaCoches = count($coches);

        echo "Numero de coches".$cuentaCoches."<br>";

        $aleatorio = rand(0, 4);

        echo "Coche aleatorio: ".$coches[$aleatorio];

        $parada = 0;
        
        while ($parada <= 5) {
            
            $aleatorio = rand(0, 4);
            echo $coches[$aleatorio]."<br>";
            $parada++;
            $aleatorio = rand(0, 4);

        }

        
        ##ARRAYS ASOCIATIVOS##
        
        $alumno = array("Nombre" => "Miguel",
                        "Apellidos" => "Kerry",
                        "Edad" =>23,
                        "estaAprobado"=>false);


                    echo $alumno["Nombre"];
        
        
        
        
        
    ?>









</body>
</html>