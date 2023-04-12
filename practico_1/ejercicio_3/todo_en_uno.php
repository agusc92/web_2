<form action="todo_en_uno.php" method="GET">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido">
            <label for="edad">Edad:</label>
            <input type="number" name="edad">
            <button type="submit">enviar</button>
        </form>

        <?php
        if(!empty($_GET)){
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $edad = $_GET['edad'];

            echo '<div><p>Nombre: '. $nombre .'</p></div>';
            echo '<div><p>Apellido: '. $apellido .'</p></div>';
            echo '<div><p>Edad: '. $edad .'</p></div>';

        }


    ?>