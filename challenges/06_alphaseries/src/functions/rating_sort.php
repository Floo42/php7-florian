<?php

function ratingSort(){

    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);

usort($shows, function ($showA, $showB) {
    return $showB['statistics']['rating'] <=> $showA['statistics']['rating'];
});

return $shows;
}
 ?>
