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
        include 'funcionesphp.php';

        $recoge1 = $_POST["texto1"];
        $recoge2 = $_POST["texto2"];
        $recoge3 = $_POST["texto3"];
        $operador = $_POST["despliega"];

        
       



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