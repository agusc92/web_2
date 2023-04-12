<?php
    echo '<h1>datos</h1>';
      
        // if(isset($_GET['nombre'])){
        //     $nombre = $_GET['nombre'];
        //     $apellido = $_GET['apellido'];
        //     $edad = $_GET['edad'];

        //     echo '<div><p>Nombre: '. $nombre .'</p></div>';
        //     echo '<div><p>Apellido: '. $apellido .'</p></div>';
        //     echo '<div><p>Edad: '. $edad .'</p></div>';

        // } 
        if(!empty($_GET['nombre'])){
            foreach($_GET as $clave=>$valor){
                echo "<div>$clave ----> $valor</div>";
                
            }
        }


    ?> 
