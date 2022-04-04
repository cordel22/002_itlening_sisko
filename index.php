<?php

/*
    $stranka = "home";
*/
    $stranka = $_GET['stranka'] ?? 'home';

    //  result = (a !== null && a !== undefined) ? a : b;

    //$stranka = ($_GET['stranka'] !== null && $_GET['stranka'] !== undefined) ? $_GET['stranka'] : 'home';
/*
    if ($_GET['stranka'] !== null && $_GET['stranka'] !== undefined) {
        $stranka = $_GET['stranka'];
    } else {
        $stranka = 'home';
    }

    */

    $dni = ['nedela', 'pondelok', 'utorok', 'streda', 'stvrtok', 'piatok', 'sobota'];

    $menu = [
        [
            'link' => 'home',
            'text' => 'Domov',
        ],
        [
            'link' => 'fotogaleria',
            'text' => 'Fotogaleria',
        ],
        [
            'link' => 'polia',
            'text' => 'Polia',
        ],
        [
            'link' => 'cykly',
            'text' => 'Cykly',
        ],

        [
            'link' => 'anketa',
            'text' => 'Anketa',
        ],
    ];

    $title = 'Stranka';
    foreach ($menu as $m) {
        if ($m['link'] === $stranka) {
            $title = $m['text'];
        }
    }
    $pocitadloSubor = __DIR__ . '/subory/pocitadlo.txt';
    
    if (file_exists($pocitadloSubor)) {
        $pocitadlo = file_get_contents($pocitadloSubor);
    } else {
        $pocitadlo = 1;
    }
/*
    $pocitadlo = file_exists($pocitadloSubor) ? file_get_contents($pocitadloSubor) : 0;
*/
    file_put_contents($pocitadloSubor, ++$pocitadlo);

?>


<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- CSS styly pre framework bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ikonky -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body style="padding-top: 56px;">

    <!-- horne menu zaciatok -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">
                <i class="bi bi-cloud-sun"></i> Menu (<?= $pocitadlo ?>)
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#hlavne-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="hlavne-menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($menu as $m) { ?>
                    <li class="nav-item">
                    <!--`ten otaznik v hrefe v dalsom riadku je co, daka podmienka..ne to je daky GET request, to staci tak...? ?link..? -->
                        <a href=  "?stranka=<?= $m['link']; ?>" class="nav-link<?php if($stranka === $m['link']) echo ' active'; ?>">
                            <?= $m['text']; ?>
                        </a>
                    </li>
                    <?php } ?>
                    <!--
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Fotogaléria
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="nav-produkty" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produkty
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item">Športové potreby</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Cukrárske potreby</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Počítačové kurzy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Kontakt
                        </a>
                    </li>
                    -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- horne menu koniec -->

    <!-- zaciatok obsahu stranky -->
    <div id="obsah">
 <!-- hlavna cast stranky koniec -->
        <?php
            include __DIR__ . '/stranky/' . $stranka . '.php';
        ?>
    </div>
    <!-- koniec obsahu stranky -->

    <!-- JavaScript pre fungovanie frameworku Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>