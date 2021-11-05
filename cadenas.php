<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadenas</title>
</head>
<body>
    <?php

        $recoge1 = $_POST["texto1"];
        $recoge2 = $_POST["texto2"];
        $recoge3 = $_POST["texto3"];
        $operador = $_POST["despliega"];

        
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
            print = "La inversión es ".$res;


        }

        function busqueda($recoge1,$recoge2){

            $res = strpos($recoge1,$recoge2);
            print = "La busqueda es ".$res;
        
        
        
        
        }


        function replace($recoge3,$recoge2,$recoge1){

            $res = str_replace($recoge3,$recoge2,$recoge1);
            print "El reemplazo es ".$res;




        }



        switch ($operador) {
            case 'carac':
                cuenta($recoge1);
                break;
            
            case'palab':
                palabras($recoge2);
                break;
            case 'invert':
                invierte($recoge1);
                break;
            case 'bus':
                busqueda($recoge1,$recoge2);
                break;
            case 'reem':
                replace($recoge3,$recoge2,$recoge1);
                break;

        }












    ?>



    
</body>
</html>