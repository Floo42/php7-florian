<?php

function randomSerie(){
    require_once (__DIR__.'/src/functions/random_array.php');
    require_once (__DIR__.'/src/functions/import_json.php');

    $showsKeys = array_values($shows);

;

header('Location:' . dirname($_SERVER['PHP_SELF']) . '/serie.php?slug=' . arrayRand($showsKeys)['slug'] );

}

 ?>
