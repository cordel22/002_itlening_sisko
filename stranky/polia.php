<h2>Práca s poliami</h2>

Dnes je : <?= $dni[date('w')]; ?><br />
Pocet prvkov v poli: <?= count($dni); ?><br />

Existuje index 4? <?php var_dump(array_key_exists(4, $dni)); ?>
Existuje index 4?<?php var_dump(array_key_exists(4, $dni)); ?>

<?php
    echo 'Sucet klucov je : ' . array_sum(array_keys($dni));

    foreach ($dni as $kluc => $den) {
        echo 'Den v tyzdni: ' . $den . ' ( '. $kluc . ' )<br />';
    
    }


?>
