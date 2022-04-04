       <?php

            function vek(string $datumNarodenia): int {
                $datumNar = DateTime::createFromFormat('j.n.Y', $datumNarodenia);   //  public static method
                //    $datumNar je teda co za datatype? object? teda ze preto ho asi neodpocitame, ale ->diff() ..?
                if ($datumNar === false) {
                    return 0;
                }

                $rozdiel = $datumNar->diff(new DateTime());              
                return (int) $rozdiel->format('%y');

            }


            $carousel = [
                [
                    'obrazok' => 'obrazky/01.jpg',
                    'nadpis' => 'nadpis',
                    'podnadpis' => 'podnadpis',
                    'text_tlacitka' => 'klikni sem',
                    'link' => 'https://www.itlearing.sk',
                ],
                [
                    'obrazok' => 'obrazky/02.jpg',
                    'nadpis' => 'nadpis',
                    'podnadpis' => 'podnadpis',
                    'text_tlacitka' => 'klikni sem',
                    'link' => 'https://www.itlearing.sk',
                ],
                [
                    'obrazok' => 'obrazky/03.jpg',
                    'nadpis' => 'nadpis',
                    'podnadpis' => 'podnadpis',
                    'text_tlacitka' => 'klikni sem',
                    'link' => 'https://www.itlearing.sk',
                ],
            ]


?>
       
       
       
       <!-- fotografie na vrchu stranky zaciatok -->
       <div class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel" id="galeria1">
            <div class="carousel-indicators">
                <button type="button" class="active" data-bs-slide-to="0" data-bs-target="#galeria1"></button>
                <button type="button" data-bs-slide-to="1" data-bs-target="#galeria1"></button>
                <button type="button" data-bs-slide-to="2" data-bs-target="#galeria1"></button>
            </div>
            <div class="carousel-inner">
                <?php 
                $active = true;
                foreach ($carousel as $c) { ?>
                <div class="carousel-item <?php if ($active) { echo 'active'; $active = false; } ?>">
                    <a href="<?= $c['link']; ?>" target="_blank">
                        <img src="<?= $c['obrazok']; ?>" alt="" class="d-block w-100">
                    </a>
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(255, 255, 255, 0.7);">
                        <h5><?= $c['nadpis']; ?></h5>
                        <p><?= $c['podnadpis']; ?></p>
                        <div class="text-center">
                            <a href="<?= $c['link']; ?>" class="btn btn-primary"><?= $c['text-tlacitka']; ?></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!--
                <div class="carousel-item">
                    <img src="obrazky/02.jpg" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(255, 255, 255, 0.7);">
                        <h5>Nazov druheho obrazku</h5>
                        <p>Nejaky text, ktory vystizne popisuje obrazok</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="obrazky/03.jpg" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(255, 255, 255, 0.7);">
                        <h5>Nazov tretieho obrazku</h5>
                        <p>Nejaky text, ktory vystizne popisuje obrazok</p>
                    </div>
                </div>
                -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-slide="prev" data-bs-target="#galeria1">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-slide="next" data-bs-target="#galeria1">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!-- fotografie na vrchu stranky koniec -->

        <!-- hlavna cast stranky zaciatok -->
        <div class="container">
            <h1 class="display-6">Vitajte na tejto stránke</h1>
            <div class="row align-items-end mb-4">

                <div class="col-md-3">
                    <div class="card">
                        <img src="https://image.shutterstock.com/image-photo/tender-son-kisses-happy-mother-600w-1922681069.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Produkt 1</h5>
                            <p class="card-text">
                                Toto je kratky popis produktu 1, ktory je nas najoblubenejsi. Toto je kratky popis produktu 1, ktory je nas najoblubenejsi.
                            </p>
                            <a href="#" class="btn btn-primary"><i class="bi bi-zoom-in"></i> Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="https://image.shutterstock.com/image-photo/new-year-2021-start-straight-600w-1843332130.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Produkt 2</h5>
                            <p class="card-text">
                                Toto je kratky popis produktu 2, ktory je nas najoblubenejsi. Toto je kratky popis produktu 2, ktory je nas najoblubenejsi.
                            </p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="https://image.shutterstock.com/image-photo/over-shoulder-view-female-worker-600w-1938542422.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Produkt 3</h5>
                            <p class="card-text">
                                Toto je kratky popis produktu 3, ktory je nas najoblubenejsi. Toto je kratky popis produktu 3, ktory je nas najoblubenejsi.
                            </p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="https://image.shutterstock.com/image-photo/portrait-young-smiling-woman-looking-600w-1865153395.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Produkt 4</h5>
                            <p class="card-text">
                                Toto je kratky popis produktu 4, ktory je nas najoblubenejsi. Toto je kratky popis produktu 4, ktory je nas najoblubenejsi.
                            </p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- tabulka s kontaktami zaciatok -->
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>Meno</th>
                            <th>Priezvisko</th>
                            <th>Pohlavie</th>
                            <th>Datum narodenia</th>
                            <th>Vek</th>
                            <th>Kraj</th>
                        </tr>
                    </thead>
                    <?php  
                        $ludia = fopen(__DIR__ . '/../subory/ludia.txt', 'r');
                    ?>
                    <tbody>
                        <?php
                            $celkom = 0;
                            while ($riadok = fgets($ludia)) {
                                $celkom++;
                                $clovek = explode(';', $riadok);
                            
                        ?>
                        <tr>
                            <td><?= $clovek[0]; ?></td>
                            <td><?= $clovek[1]; ?></td>
                            <td><i class="bi bi-gender-<?= strtoupper($clovek[2]) === 'M' ? 'male' : (strtoupper($clovek[2]) === 'Z' ? 'female' : 'ambiguous'); ?>"></i></td>
                            <td><?= vek($clovek[3]); ?></td>
                            <td><?= $clovek[3]; ?></td>
                            <td><?= $clovek[4]; ?></td>
                        </tr>
                        <?php
                            }
                            fclose($ludia);
                        ?>
                        <!--
                        <tr>
                            <td>Zuzana</td>
                            <td>Veselá</td>
                            <td>0904 123 456</td>
                            <td>zuzana.vesela@gmail.com</td>
                        </tr>
                        <tr class="table-danger">
                            <td>Daniel</td>
                            <td>Vysoký</td>
                            <td>0905 123 456</td>
                            <td>daniel.vysoky@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Marta</td>
                            <td>Modrá</td>
                            <td>0906 123 456</td>
                            <td>marta.modra@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Milan</td>
                            <td>Silný</td>
                            <td>0907 123 456</td>
                            <td>milan.silny@gmail.com</td>
                        </tr>
                        -->
                    </tbody>
                    <tfoot class="table-info">
                        <tr>
                            <th colspan="3">Celkom:</th>
                            <th><?= $celkom; ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- tabulka s kontaktami koniec -->

            <!-- hra kocky zaciatok -->
            <div class="text-center">
                <a href="#" class="btn btn-primary btn-lg">Hodiť kockami</a><br>
                <i class="bi bi-dice-1 display-5"></i>
                <i class="bi bi-dice-2 display-5"></i>
                <i class="bi bi-dice-3 display-5"></i>
                <i class="bi bi-dice-4 display-5"></i>
                <i class="bi bi-dice-5 display-5"></i>
                <i class="bi bi-dice-6 display-5"></i>
            </div>
            <!-- hra kocky koniec -->
        </div>
        