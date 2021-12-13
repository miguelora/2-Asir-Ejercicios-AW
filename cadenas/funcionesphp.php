<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FuncionesPhp</title>
</head>
<body>
    <?php
        
        

         function cuenta($recoge1){

            $res = strlen($recoge1);
            print "La longitud es ".$res;

        }

        function palabras($recoge2){

            $res = str_word_count($recoge2);
            print "La palabra es ".$res;

        }

        function invierte($recoge1){

            $res = strrev($recoge1);
            print  "La inversión es ".$res;


        }

        function busqueda($recoge1,$recoge2){

            $res = strpos($recoge1,$recoge2);
            print  "La busqueda es ".$res;
        
        
        
        
        }


        function replace($recoge3,$recoge2,$recoge1){

            $res = str_replace($recoge3,$recoge2,$recoge1);
            print "El reemplazo es ".$res;




        }


        


















    ?>












</body>
</html>