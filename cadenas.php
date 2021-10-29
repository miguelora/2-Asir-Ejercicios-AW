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

        function palabras($recoge2);{

            $res = str_word_count($recoge2)

        }





















    ?>



    
</body>
</html>