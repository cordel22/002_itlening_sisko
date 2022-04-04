<?php

$anketa = file_get_contents(__DIR__ . '/subory/anketa.txt');
$anketaData = explode(';', $anketa);

$vysledok = 'chyba';

if (isset($_POST['odpoved'])) {

    $odpoved = (int) $_POST['odpoved'];
    switch ($odpoved) {
        case 1:
        
        case 2:
        case 3:
            $anketaData[$odpoved - 1]++;
            $zapis = implode(';', $anketaData);
            file_put_contents(__DIR__ . '/subory/anketa.txt', $zapis);
            $vysledok = 'ok';
            break;


        default:
        
        break;
}

}

header('Location: index.php?stranka=anketa&vysledok=' . $vysledok);

