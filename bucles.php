<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles php</title>
</head>
<body>
    
    <?php
    
        echo "Ejemplo de bucle while"."<br>";

        $numero1 = 0;
        $aleatorio = rand(0,50);

        while ($numero1 <= $aleatorio) {
            echo "Mi numero es: ".$numero1."<br>";
            echo "Mi numero aleatorio es: ".$aleatorio."<br>";
            $numero1++;
        }

        echo "Mi cuenta ha terminado"."<br>";


        echo "Ejemplo de bucle while"."<br>";

        $numero = 0;

        while ($numero <= 10) {
            echo "Mi numero es: ".$numero."<br>";
            $numero++;
        }

        echo "Mi cuenta ha terminado"."<br>";

        
    
        echo "Ejemplo de bucle for"."<br>";
        for ($cuenta=0; $cuenta < 10 ; $cuenta++) { 
            print "Imprime la cuenta: ".$cuenta."<br>";
        }
    
        

        function persona($nombre,$edad){
            
            echo "Su nombre e: ".$nombre;

            if ($edad%2==0) {
               echo "su edad es impar";
            }else {
                echo "su edad es impar";
            }


        }



        persona("Miguel",25);


        $alumnos = array("Nacho","Gonzalo","Javi","Adan","Manuel","Ivan");
        echo count($alumnos)."<br>";

        $selectAleatorio = rand(0,5);
        echo "El alumno es: ".$alumnos[$selectAleatorio];



        function esNumero($numero){

            if (is_int($numero)) {
                echo "es numero";
            }else {
                echo "No es numero";
            }

        }
    
    esNumero("Hola")



    #Fusion presenta
    function presenta($nombre,$apellido,$localidad){
        echo "Mi nombre es: ".$nombre," ",$apellido." y soy de ".$localidad."<br>";


    }

    presenta("Miguel","Romero","Lora de estepa");

    function suma($num1,$num2){

        $res = $num1 + $num2;
        print "El resultado es ".$res."<br>";

    }


    suma
    
    ?>









</body>
</html>