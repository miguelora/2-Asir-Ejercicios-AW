<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>horario</title>
</head>
<body>

    <H1>Calendario semanal de asignaturas</h1>
    <?php 

        $semana = date("l");
        echo "hoy es: ".$semana."<br>";

        switch ($semana) {
            case 'Monday':
                echo "Aplicaciones web"."<br>"."Horario: 8:15-11:15";
                echo "Recreo"."<br>"."Horario: 11:15-11:45";
                echo "Servicios red"."<br>"."Horario: 11:45-14:45";
                break;
            
            case 'Tuesday':
                echo "Administracion SSOO"."<br>"."Horario: 8:15-11:15";
                echo "Recreo"."<br>"."Horario: 11:15-11:45";
                echo "Seguridad"."<br>"."Horario: 11:45-12:45";
                echo "Empresa"."<br>"."Horario: 12:45-14:45";
                break;

            case 'Wednesday':
                echo "Administracion SSOO"."<br>"."Horario: 8:15-11:15";
                echo "Recreo"."<br>"."Horario: 11:15-11:45";
                echo "Servicios red"."<br>"."Horario: 11:45-14:45";
                break;

            case 'Thursday':
                echo "Base de datos"."<br>"."Horario: 8:15-11:15";
                echo "Recreo"."<br>"."Horario: 11:15-11:45";
                echo "Seguridad"."<br>"."Horario: 11:45-12:45";
                echo "Ingles"."<br>"."Horario: 12:45-14:45";
                break;

            case 'Friday':
                echo "Ingles"."<br>"."Horario: 8:15-9:15";
                echo "Seguridad"."<br>"."Horario: 9:15-11:15";
                echo "Recreo"."<br>"."Horario: 11:15-11:45";
                echo "Aplicaciones web"."<br>"."Horario: 11:45-12:45";
                echo "Empresa"."<br>"."Horario: 12:45-14:45";
                break;
                    
            case 'Saturday':
                echo "Hoy es Sabado, no hay clase :)";
                    break;
                    
                    case 'Sunday':
                        echo "Hoy es domingo, no hay clase :)";
                        break;
                    
                    
                    
                    
                    
                        
                    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>






</body>
</html>