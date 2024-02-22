<?php
//metodos
function darVuelta($text){
    return strrev($text);
}

function mayusc($text){
    return strtoupper($text);
}
function minusc($text){
    return strtolower($text);
}

function contLetras($text){
    return strlen($text);
}

// para conseguir la accion que quieres
$accion = isset($_GET['accion']) ? $_GET['accion'] : '';

// Ejecutar la acción correspondiente
switch ($accion) {
    case 'darVuelta':
        echo darVuelta($_GET['nombre']);
        break;
    case 'aMayusculas':
        echo mayusc($_GET['nombre']);
        break;
    case 'aMinusculas':
        echo minusc($_GET['nombre']);
        break;
    case 'contarLetras':
        echo contLetras($_GET['nombre']);
        break;
    default:
        echo "Acción no válida.";
}