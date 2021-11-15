<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuelos</title>
</head>
<body>
    <?php
        
        
        if (isset($_POST["infovuelo1"]) && isset($_POST["infovuelo2"])){
            
            $herramientas=$_POST["herramientas"];


            $infov1=$_POST["infovuelo1"];
                $codigov1 = $infov1["codigo1"];
                $origenv1 = $infov1["origen1"];
                $destinov1 = $infov1["destino1"];
                $preciov1 = $infov1["precio1"];
                $fechav1 = $infov1["fecha1"];

            
            $infov2=$_POST["infovuelo2"];
                $codigov2 = $infov2["codigo2"];
                $origenv2 = $infov2["origen2"];
                $destinov2 = $infov2["destino2"];
                $preciov2 = $infov2["precio2"];
                $fechav2 = $infov2["fecha2"];  
        
        
        
            function une($infov1,$infov2){
                $res = array_merge($infov1,$infov2);
                echo "La union de vuelos es"."<br>";
                print_r($res);
                }

                function dif($infov1,$infov2){
                $res = array_diff($infov1,$infov2);
                echo "La diferencia entre vuelos es"."<br>";
                print_r($res);


                 }
                function ordena($infov1){
                    $res = sort($infov1);
                    echo "Datos de vuelo ordenados"."<br>";
                    print_r($res);
                }
                 function comun($infov1,$infov2){
                   $res = array_intersect($infov1,$infov2);
                    echo "La informacion comun es: "."<br>";
                    print_r($res);
                }



                switch ($herramientas) {
                    case 'une':
                    une($infov1,$infov2);
                    break;
            
                    case 'dif':
                    dif($infov1,$infov2);
                    break;
            
                    case 'Ord':
                    ordena($infov1);
                    break;
            
                    case 'inf':
                    comun($infov1,$infov2);
                    break;
                }
        
                
           
        }
        else {
            echo "No funciona";
        }
        















































              


    ?>







</body>
</html>