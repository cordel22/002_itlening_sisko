

<?php
    $nazov = $_POST['nazov'] ?? null;
    //  $nazov = isset($_POST['nazov']) ? $_POST['nazov'] : null;
    $subor = $_FILES['subor'] ?? null;

    if (empty($nazov)) {
        $chyba[] = 'Nebol vyplneny nazov';
    }

    if (empty($subor['tmp_name'])) {
        $chyba[] = 'Nebol poslany ziadny subor.';
    }

    if (isset($chyba)) {
        header('Location: index.php?stranka=fotogaleria');
        exit;
    }

    $nazovSuboru = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $subor['name']);

    $nazovSuboru = preg_replace('/[^a-zA-Z0-9_.-]/', '-', $nazovSuboru);

    $nazovSuboru = strtolower($nazovSuboru);

    $pripona = substr($nazovSuboru, -4);
    if ($pripona === 'jpeg') {
        $pripona = '.jpeg';
    }

    if (!in_array($pripona, ['.jpg', '.png', '.jpeg'])) {

        header('Location: index.php?stranka=fotogaleria');
        exit;
    }

    $nazovSuboruBezPripony = substr($nazovSuboru, 0, strlen($nazovSuboru) - strlen($pripona));
    $pridavok = '';
    do {
        $newFile = __DIR__ . '/galeria/' . $nazovSuboruBezPripony . $pridavok . $pripona;
        $existuje = file_exists($newFile);
        if ($existuje) {
            $pridavok = (int) $pridavok + 1;
        }
    } while ($existuje);

    if (!move_uploaded_file($subor['tmp_name'], $newFile)) {
        header('Location: index.php?stranka=fotogaleria');
        exit;
    }

    //  zapis do datbazy novu fotku

    file_put_contents(__DIR__ . '/subory/galeria.txt', $nazov . ':' . basename($newFile) . "\n" , FILE_APPEND);


    //  presmerovat spat na fotogaleriu

    header('Location: index.php?stranka=fotogaleria');



?>