<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<!-- http://localhost/web_2/practico_1/ejercicio_3/index.php?nombre=DSAD&apellido=DASDAS&edad=43 -->
<body>
    <a href="http://localhost/web_2/practico_1/ejercicio_2/index.php?eleccion=10">mostrar 10</a>
    <a href="http://localhost/web_2/practico_1/ejercicio_2/index.php?eleccion=20">mostrar 20</a>
    <a href="http://localhost/web_2/practico_1/ejercicio_2/index.php?eleccion=30">mostrar 30</a>
    <a href="http://localhost/web_2/practico_1/ejercicio_2/index.php?eleccion=5">mostrar 5</a>
    <?php
    $empleados=[];
    for($i=0;$i<99;$i++){
        array_push($empleados,$i);
    }
    
    echo '<h1>Lista de empleados</h1>';
        
        echo '<ul>';

        if(isset($_GET['eleccion'])){
            $eleccion = $_GET['eleccion'];
            for($i=0;$i<$eleccion;$i++){
                echo '<li>'.$empleados[$i].'</li>';
            }

        }else{
            for($i=0;$i<5;$i++){
                echo '<li>'.$empleados[$i].'</li>';
            }
        }

        echo'</ul>';
    ?>
</body>
</html>