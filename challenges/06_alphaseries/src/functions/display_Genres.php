<?php

function displayGenres($slug){
require_once ('import_json.php');
require_once ('getSerieArray.php');

$genres = getSerieInfos($slug)['genres'];

foreach($genres as $value){
    echo "<span class=\"badge badge-secondary\">$value</span>\n";
}

}
 ?>
