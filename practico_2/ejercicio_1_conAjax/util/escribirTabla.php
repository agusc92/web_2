<?php
function contenidoHead($limite){
    for($i=1;$i<$limite;$i++){
        echo "<td>$i</td>";
    }
}
function contenidoTbody($numero,$limite){

    for($i=1;$i<= $numero;$i++){
        echo '<tr>';
            echo "<td class='columna-uno'>$i</td>";
            for($j=1;$j<$limite;$j++){
                echo '<td>'.$i*$j.'</td>';
            }
        echo '</tr>';
    }
}
function mostrarTabla($numero,$limite){
    echo'    
    
        
            
        <table>
            <thead class="thead">
                <tr>
                <td></td>
                    ';
                contenidoHead($limite);
        echo'
                </tr>
            </thead>';
            echo'
            <tbody>'.
                contenidoTbody($numero,$limite)

            .'</tbody>
            </table>'
        
    ;
}