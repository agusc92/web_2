<?php 
define('NUM1',(float)$_REQUEST['num1']);
define('NUM2',(float)$_REQUEST['num2']);
define('OPERADOR',$_REQUEST['operador']);

    function operar($num1,$num2,$operador){
       
    switch($operador){
        case 'm':
            echo $num1+$num2;
            break;
        case '-':
            echo $num1-$num2;
            break;
        case '/':
            echo $num1/$num2;
            break;
        case 'x':
            echo $num1*$num2;
            break;
        default : 
            echo 'error';
            break;
    }

    }
    operar(NUM1,NUM2,OPERADOR);


?>