<?php
    define('BAJO',18.5);
    define('SOBREPESO',25);
    define('OBESIDAD',30);

    $calculaObesidad = fn ($peso,$altura) => $peso / $altura;
    function determinaObesidad($peso){
        if($peso<BAJO){
            return 'Bajo peso';
        } else if($peso<SOBREPESO){
            return 'Normal';
        }else if($peso<OBESIDAD){
            return 'Sobrepeso';
        }else{
            return 'Obesidad';
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="titulo">
            Calculador de masa corporal
        </div>
    </header>
    <main >
        <form action="index.php" class="formulario" method="POST">
            <div class="formulario_titulo">
                Ingrese sus datos de medicion
            </div>
            <div class="campo">
                <label for="peso">Ingrese su peso (kg)</label>
                <input type="number" step="0.01" name="peso" id="peso" require>
            </div>
            <div class="campo">
                <label for="altura">Ingrese su altura (mts)</label>
                <input type="number" step="0.01" name="altura" id="altura" require>
            </div>


            <button type="submit">enviar</button>
        </form>
        
            <?php 
            $result=0;
            
            if(isset($_POST['altura'])){
                $result = $calculaObesidad($_POST['peso'],$_POST['altura']);

                echo "<div class='resultado'>";
                echo "<div class='peso'>Tu peso es: $result</div>";
                echo '<div>'.determinaObesidad($result).'</div>';
                echo "</div>";
            }
            
            
            ?>

        
    </main>
    <footer>

    </footer>
</body>
</html>