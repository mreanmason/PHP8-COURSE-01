<?php
function show_file_txt($file): void
{
    $file = fopen($file, "r");
    if ($file === false) {
        echo "Unable to open file!";
        exit;
    }

    while (!feof($file)) {
        $file_contents = fgets($file);
        echo $file_contents . "<br>";
    }

    fclose($file);
}

$file = "res/text.txt";
show_file_txt($file);