<?php
    // define('NUMERO',10);
    define('LIMITE',21);
    function tHead() {
        echo '<td></td>';
        for($i=1;$i<21;$i++){
            echo "<td>$i</td>";
        }
    }
    

    function tBody($numero){
        for($i=1;$i<= $numero;$i++){
            echo '<tr>';
                echo "<td class='columna-uno'>$i</td>";
                for($j=1;$j<LIMITE;$j++){
                    echo '<td>'.$i*$j.'</td>';
                }
            echo '</tr>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="titulo">
            Tabla de multiplicar
        </div>
    </header>
    <main class="contenedor">

        <form action="index.php" method="GET" class="formulario">
            <div>
                <label for="">Introduzca un numero</label>
                <input type="number" name="numero">
            </div>
            <button type="submit">calcular</button>
        </form>
        <div>
            <?php 
                if(isset($_GET['numero'])){
                    $numero = $_GET['numero'];
                echo '<table>';
                echo     '<thead class="thead">';
                echo        '<tr>';
                    tHead();
                echo        '</tr>';
                echo    '</thead>';
                echo '<tbody>';
                    tbody($numero);

                echo '</tbody>';
                echo '</table>';
            }
            ?>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>