<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>


    <fieldset>
        <legend>Calculadora Asir</legend>
        

    


    <p>Número 1: <input type=int name="Número 1" value="0" required></p>

    <p>Número 2:
        <input type="int" name="Número 2" value="0" required></p>
    
    <p>Número exp: <input type=int name="Número exp" value="0" required></p>
    
    <button name="Sum" type="submit">+</button>
    <button name="Res" type="submit" >-</button>
    <button name="Mul" type="submit">*</button>
    <button name="Div" type="submit">/</button>
    <button name="Mol" type="submit">%</button>
    <button name="cua" type="submit">√</button>
    <button name="cub" type="submit">∛</button>
    <button name="exp" type="submit">exp</button>
    <button name="C" type="reset">C</button>
    
    
    <br><br>
    <button name="OP">Operar</button>

    </fieldset>
    
    <h2 style="color: rgb(14, 224, 25);">RESULTADO: </h2>

    <?php  

        function sum($num1,$num2){

            $res = $num1 + $num2;

            

        }

        function resta($num1,$num2){

            $res = $num1 - $num2;

            

        }

        function multi($num1,$num2){

            $res = $num1 * $num2;

            

        }

        function div($num1,$num2){

            $res = $num1 / $num2;

            

        }

        function mol($num1,$num2){

            $res = $num1 % $num2;

            

        }
        
        function cua($num3){

            $res = pow($num3, 2);

            

        }

        function cub($num1,$num2){

            $res = pow($num3, 3);

            

        }

        function exponente($num1,$num3){

            $res = pow($num1, $num3);

            

        }


        #SERIE FINONACCI#

        function fibonacci($n)
        {
            $fibonacci  = [0,1];
 
            for($i=2;$i<=$n;$i++)
        {
                $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
         }
            echo $fibonacci[$n];
        }


    fibonacci(10);





    ?>


</body>
</html>