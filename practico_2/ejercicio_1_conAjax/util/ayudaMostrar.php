<?php

function encabesado(){
    echo'<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="styles/style.css">
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
            <main class="contenedor">';
    }

function escribirFormulario(){
    echo '<form class="formulario"id="formulario">
    <div>
        <label for="">Introduzca un numero</label>
        <input type="text" name="numero">
    </div>
    <div>
    <label for"">elija un maximo </label>
        <div>
            <div>
            <label for="">5</label>
            <input type="radio" name="maximo" value="6">
            </div>

            <div>
            <label for="">10</label>
            <input type="radio" name="maximo" value="11">
            </div>

            <div>
            <label for="">20</label>
            <input type="radio" name="maximo" value="21">
            </div>
            
        </div>
    </div>
    <button type="submit">calcular</button>
</form>
<div id="muestraLaTabla">
';

}
function piePagina(){
    echo'
    </div>
            </main>
            <footer>

            </footer>
            <script src="js/main.js"></script>
        </body>
        </html>';
}
    