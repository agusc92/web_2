<?php 
    
    define('MONY',$_REQUEST['mony']);
    define('MONTH',$_REQUEST['month']);
    function interes($mony,$month){
        $adit = 0.21;
        echo "<tr> <td class='fmonth'>0</td> <td>$mony</td> <td>0</td><td>$mony</td></tr>";

        for($i=1;$i<= MONTH;$i++){
            echo '<tr>';
                echo "<td class='fmonth'>$i</td>";
                echo '<td>'.number_format($mony,2,',','.').'</td>';
                echo '<td>'.number_format($mony*$adit,2,',','.').'</td>';
                $mony = $mony + ($mony*$adit);
                echo '<td>'.number_format($mony,2,',','.').'</td>';
            echo '</tr>';
        }
        
    }
    echo '<table>';
        echo '<thead>';
            echo '<tr>';
            echo '<th>Mes</th> <th>Dinero</th> <th>Ganacia</th><th>total</th>';
            echo '</tr>';
        echo '</thead>';
        echo '</tbody>';
            interes(MONY,MONTH);
        echo '</tbody>';
    echo '</table>';

?>