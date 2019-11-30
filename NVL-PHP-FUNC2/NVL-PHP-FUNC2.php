<?php

$palabra = 'upgrade Hub';
$letraBuscar = 'u';

function cuentaLetras($palabra, $letraBuscar) {
    foreach (count_chars($palabra, 1) as $letra => $num) {
        if (chr($letra) == $letraBuscar) {
            echo "Hay $num de la letra \" " , chr($letra) , "\".\n";  
        }
    }
} 

echo cuentaLetras($palabra, $letraBuscar);

?>