<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>


    <?php 
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];
        $operador = $_POST["operador"];
    
        
        function sum($numero1,$numero2){

            $res = $numero1 + $numero2;
            print "EL RESULTADO ES".$res;

            

        }

        function resta($numero1,$numero2){

            $res = $numero1 - $numero2;
            print "EL RESULTADO ES"."<br>".$res;
            

        }

        function multi($numero1,$numero2){

            $res = $numero1 * $numero2;
            print "EL RESULTADO ES"."<br>".$res;
            

        }

        function div($numero1,$numero2){

            $res = $numero1 / $numero2;
            print "EL RESULTADO ES"."<br>".$res;
            

        }

        function mol($numero1,$numero2){

            $res = $numero1 % $numero2;
            print "EL RESULTADO ES"."<br>".$res;
            

        }
        
        function cua($numero3){

            $res = sqrt(float($numero3));
            print "EL RESULTADO ES "."<br>".$res;
            

        }

        function cub($numero3){

            $res = pow($numero3, 3);
            print "EL RESULTADO ES "."<br>".$res;
            

        }

        function exponente($numero1,$numero3){

            $res = pow($numero1, $numero3);
            print "EL RESULTADO ES "."<br>".$res;
            

        }

       
       


        #SERIE FINONACCI#

        $n = 10;

        function fibonacci($n){

            $numero1 = 0;
            $numero2 = 1;

            $cont = 0;

            while ($cont<$n) {
                echo " ".$numero1;
                $numero3 = $numero2 + $numero1;
                $numero1 = $numero2;
                $numero2 = $numero3;
                $cont = $cont + 1;
            }



        }

        
        fibonacci($n);

        switch ($operador) {
            case 'sum':
                sum($numero1,$numero2);
                break;
            
            case'resta':
                resta($numero1,$numero2);
                break;
            case 'mul':
                mul($numero1,$numero2);
                break;
            case 'div':
                div($numero1,$numero2);
                break;
            case 'mol':
                mol($numero1,$numero2);
                break;
            case 'cua':
                cua($numero3);
                break;
            case 'cub':
               cub($numero3);
                break;
            case 'exp':
                exp($numero1,$numero3);
                break;
        }








    ?>


</body>
</html>