<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Fechas</title>
</head>
<body>
    <h2>Ejercicio de tratamiento de fechas</h2>
    <p>Vamos a aprender a tratar fechas en php y funcionalidades</p>
    <br>

    <?php
        echo "Vamos a trabajar con fechas"."<br>";
        echo "Hoy es: ".date("l")."<br>";
        echo "Dime la fecha actual: ".date("d/F/Y")."<br>";

        $hora = date("H:i:s");
        $segundos = date("s");
        
        echo "<br>"."Ejercicio IF"."<br>";
        if($hora<"15"){
            echo "Lo siento, sigo en clases". "<br>";
            echo "Hora: ".$hora."<br>";

        }else{
            echo "Estoy en mi casa"."<br>";
        }


        echo "<br>"."Ejercicio ejemplo IF-ELSE"."<br>";

        if($segundos<"10"){
            echo "Primeros 10 segundos". "<br>";
            echo "Segundos: ".$segundos;
        }elseif($segundos>"50"){
            echo "Ultimos 10 segundos"."<br>";
            echo "Segundos: ".$segundos;
            
        }else{
            echo "Segundos intermedios"."<br>";
            echo "Segundos: ".$segundos;


        }


        echo "Ejercicio ejemplo Switch"."<br>";

        $colores = "azul";
        switch ($colores) {
            case 'Rojo':
                echo "La sangre es de color: ".$colores."<br>";
                break;
            
                case 'verde':
                    echo "La hierba es de color: ".$colores."<br>";
                    break;

                    case 'azul':
                        echo "El cielo es de color: ".$colores."<br>";
                        break;
                    default:
                        echo "El color: ".$colores."No está registrado";
                    }


        ?>

        <p href="pagina-ASIR.html">Volver atras</p>

</body>
</html>