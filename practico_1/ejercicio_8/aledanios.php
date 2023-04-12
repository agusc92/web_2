<?php
if(!empty($_GET) ){
    if($_GET['render']=='pi'){
        echo '<div class="info">
<h3>numero pi</h3>
<p>
    El numero PI, tambien representado por el caracter: π
    tiene un valor de: 3.14159265359 aproximadamente
</p>
</div>';
    }else {
        echo'<div class="info">
        <h3>acera de nosotros</h3>
        <p>
            Creador de la calculadora: Agustin La Battaglia
        </p>
      </div>';
    }
}


