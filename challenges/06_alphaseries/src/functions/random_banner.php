<?php
function randomBanner(){
require_once ('random_array.php');
require_once ('import_json.php');

$showsKeys = array_values($shows);
return arrayRand($showsKeys)['images']['banner'];
}
