
<div class="continer">
    <h1>Fotogaleria</h1>

    <form method="post" enctype="multipart/form-data" action="nahraj.php">
        <div class="mb-3 row">
            <label for="nazov" class="col-sm-2 col-form-label">Nazov:</label>
            <div class="col-sm-10">
                <input type="text" name="nazov" class="form-control" id="nazov">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="subor" class="col-sm-2 col-form-label">Subor:</label>
            <div class="col-sm-10">
                <input type="file" name="subor" class="form-control" id="nazov">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
            
            
                <button type="submit" class="btn btn-success btn-lg">Nahrat</button>
            </div>
        </div>
    </form>

</div>

<h3>Nazov</h3>
<?php 

$subor = fopen(__DIR__ . '/../subory/galeria.txt', 'r');
while ($riadok = fgets($subor)) {
    $o = explode(':', $riadok);
    echo '<h3>' . $o[0] . '</h3><img src="galeria/' . $o[1] . '">';
}

fclose($subor);

//echo '<img src="/../galeria/02.jpg">';




