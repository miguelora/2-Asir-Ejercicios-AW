<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles2</title>
</head>
<body>


    <?php


        ##Bucles anidados dependientes##

        print "<b>Bucle dependiente</b>"."<br>";
        
        for ($varexterior=0; $varexterior < 5 ; $varexterior++) { 
            
            print "<b>Muestro variable exterior: ".$varexterior."</b>"."<br>";

            for ($varinterior=0; $varinterior < $varexterior ; $varinterior++) { 
                print "Muestro variable interior ".$varinterior."<br>";
            }


        }




    















    ?>
























    
</body>
</html>