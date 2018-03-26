<?php
require_once ('getSerieArray.php');
require_once ('display_Stars.php');
require_once ('rechercheSerie.php');

function displayResults($page){

$results = array_values(rechercheSerie());
//var_dump($results);
$totalResults = count($results);

$i=0;

foreach($results as $slug){

    $concat = ($page-1).$i;

if ($page==1){
    $concat=$i;
}
if($concat==$totalResults){
    break;
}
$slug=$slug['slug'];

print "
<div class=\"row\">
    <div class=\"col-md-2 d-none d-md-block\">
        <img src=" . $results[$concat]['images']['poster'] . " alt=". "Poster de " . $results[$concat]['name'] ." class=\"img-thumbnail\">
    </div>
    <div class=\"col-md-10\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">
                    <a href=\"serie.php?slug=". $results[$concat]['slug'] ."\">". $results[$concat]['name'] ."</a>

                    <span class=\"stars text-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=". number_format($results[$concat]['statistics']['rating'],2,"."," ") .">" .
                     displayStars($results[$concat]['slug']) ."
                    </span>

                    <small>". number_format($results[$concat]['statistics']['popularity'],0,"."," ") . " personnes suivent la série" . "</small>
                </h4>
                <p class=\"card-text\">
                    ".$results[$concat]['synopsis'] . "
                </p>
            </div>
        </div>
    </div>
</div>
<hr>";
if (++$i == 10) break;
}
}
 ?>
