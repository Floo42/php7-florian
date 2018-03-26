<?php

function rechercheSerie(){

require_once ('popular_sort.php');

$showsSearch = popularSort();

$search = strtoupper($_GET['search']);

$showsSearch = array_filter($showsSearch, function ($show) use ($search) {
    if (strpos(strtoupper($show['name']), $search) !== false) {
        return true;
    }

    return false;
});

return $showsSearch;

}

 ?>
