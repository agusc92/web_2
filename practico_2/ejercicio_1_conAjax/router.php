<?php
require_once('util/ayudaMostrar.php');
require_once('util/escribirTabla.php');
    // define('NUMERO',10);
    
    
    
    
    
    
    if(empty($_REQUEST['action'])){
        
        encabesado();
        escribirFormulario();
        piePagina();
        
        
    }else{
        
        $valores = explode('/',$_REQUEST['action']);
        mostrarTabla($valores[0],$valores[1]); 
    }
   


    
    