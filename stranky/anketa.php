
<form action="hlasuj.php" method="post">
    <!--<input type="hidden" name="stranka" value="anketa">-->
    Vyberte odpoved:<br />
    <label><input type="radio" name="odpoved" value="1" checked> ano</label><br />
    <label><input type="radio" name="odpoved" value="2"> nie</label><br />
    <label><input type="radio" name="odpoved" value="3"> neviem</label><br />
    <button type="submit" class="btn btn-primary">Odoslat</button>
    <?php
        if (isset($_GET['vysledok'])) {
            switch ($_GET['vysledok']) {
                case 'ok':
                    $text = 'Dakujeme za Vas hlas.';
                    $style = 'success';
                    break;

                case 'chyba':
                    $text = 'Neplatny hlas';
                    $style = 'danger';
                    break;
            }
            if (isset($text)) {
                echo '<div class="lert alert-' . $style . '">' . $text . '</div>';
            }

        }
    ?>
</form>


<?php

$anketa = file_get_contents(__DIR__ . '/../subory/anketa.txt');
$anketaData = explode(';', $anketa);



$odpovede = ['ano', 'nie', 'neviem'];

for ($i = 0; $i < count($anketaData); $i++) {
    echo $odpovede[$i] . ': ' . $anketaData[$i] . '<br />';

}





