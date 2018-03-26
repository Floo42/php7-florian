<?php

function displayStars($slug){

require_once ('import_json.php');
require_once ('getSerieArray.php');

$halfStars = 0;
$fullStars = 0;
$string = "";

$rating = getSerieInfos($slug)['statistics']['rating'];

for($i=0; $i<=$rating;$i++){
    if($rating-$i>=1){
        $fullStars++;
    }
    elseif($rating-$i>=0.5){
        $halfStars++;
    }
    else{
        break;
    }
}
for($j=0;$j<$fullStars;$j++){
    $string = $string .  "<i class=\"fa fa-star\"></i>";
}

for($j=0;$j<$halfStars;$j++){
    $string = $string . "<i class=\"fa fa-star-half\"></i>";
}
return $string;
}
 ?>
