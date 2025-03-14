<?php
function show_file_txt($file): void
{
    $file = fopen($file, "r");
    if ($file === false) {
        echo "<h1>UNABLE TO OPEN FILE!</h1>";
        return;
    }

    while (!feof($file)) {
        $file_contents = fgets($file);
        echo $file_contents . "<br>";
    }

    fclose($file);
}

$file = 'res/wea.txt';

if (file_exists($file)) {
    echo "El archivo existe. Intentando eliminar...";
    if (unlink($file)) {
        echo "El archivo ha sido eliminado.";
    } else {
        echo "No se pudo eliminar el archivo.";
    }
} else {
    echo "El archivo NO existe según PHP.";
}


unlink('res/wea.txt') or die("<h1>UNABLE TO OPEN FILE!</h1>");