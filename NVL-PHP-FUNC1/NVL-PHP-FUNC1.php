<?php

$palabra = 'upgrade Hub';

function cuentaLetraA($palabra) {
    foreach (count_chars($palabra, 1) as $letra => $num) {
        if (chr($letra) == 'a') {
            echo "Hay $num de la letra \" " , chr($letra) , "\".\n";  
        }
    }
} 

echo cuentaLetraA($palabra);

?>