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


        print "<br><h2>ARRAY ESTANDAR</h2><br>";


        ##Forma 1##
            $numerosP = array(2,4,6,8,10);
            print_r ($numerosP);
            echo "<br>";
            print "Muestro lo que hay en la posición 3: ". $numerosP[3]."<br>";

            $cuentaNumerosP = count($numerosP);
            print "Valor de cuenta array: ".$cuentaNumerosP."<br>";

            for ($i=0; $i < $cuentaNumerosP; $i++) { 
               print "Muestro lo que hay en la posición ".$i. ": ".$numerosP[$i]."<br>";
            }

        ##Forma 2##
            $numerosI = [1,3,5,7,9];
            print_r($numerosI);
            echo "<br>";


        ##ARRAYS ASOCIATIVOS##
            
            print "<br><h2>Arrays Asociativos</h2>";
            
            $potencias2 = [1=>2, 2=>4, 3=>8];
            $capitales = array("Andalucia"=>"Sevilla", "Madrid"=>"Madrid", "Aragón"=>"Zaragoza", "Baleares"=>"Palma de Mallorca");
            print_r($capitales);
            echo "<br>";

            //Añadir elementos a un array

            $capitales["Andalucia"]="Almeria";
            print_r($capitales);
            echo "<br>";

            $cuentaLetras = strlen($capitales["Andalucia"])."<br>";
            echo $cuentaLetras;

          ##  $notasAsignaturas=["LMI"=>0, "FOL"=>10, "PAR"=>9, "ISO"=>0, "FH"=>0, "BD"=>7];
            ##$cuentaNota=count($NotaMiguel);

               ##print_r($NotaMiguel)."<br>";##


            $coches1 = array("Seat", "Renault", "Dacia");
            $coches2 = ["BMW", "Audi"];

            print_r($coches1);
            echo "<br>";
            print_r($coches2);
            echo "<br>";
            $unionArrays = $coches2+$coches1;
            print_r($unionArrays);
            echo "<br>";

            //Borrar

            $coches3 = array("Seat", "Renault", "Dacia", "BMW", "Audi");
            print_r($coches3);
            echo "<br>";
            unset($coches3[1]);
            print_r($coches3);
            echo "<br>";

            //Copiar arrays

            $copiaCapitales = $capitales;
            print_r($copiaCapitales);
            echo "<br>";

     



            //Arrays Normales

        $numeros = array(8, 3, 7, 1);
    

        $aprobado = array("Miguel", "Kerry");

        $coches = array("Ferrari", "Seat", "BMW", "OPEL", "Mitsubishi");

        echo $aprobado[0]."<br>";

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