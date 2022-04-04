<!--
<h1>Cyklus for</h1>

<?php

    for ($cislo = 1; $cislo <= 10; ++$cislo) {
        echo 'Cisl je ' . $cislo . '<br />';


    }

    echo "cyklus skoncil, cislo je teraz: " . $cislo;
?>
-->
<h1>Cyklus while</h1>
<?php
    while ($cislo <= 20) {

        echo 'While: Cislo je ' . $cislo . '<br />';
        $cislo++;
    }
?>

<h1>Cyklus do while</h1>
<?php
    do {

        echo 'Do While: Cislo je ' . $cislo . '<br />';
        $cislo++;
    }
    while ($cislo <= 10);
?>


