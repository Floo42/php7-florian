<?php

require_once ('popular_sort.php');
require_once ('getSerieArray.php');
require_once ('display_Stars.php');

function displayClassementPopular($page){

$shows = popularsort();
for($i=0;$i<10;$i++){
    $concat = ($page-1).$i;

    if ($page==1){
        $concat=$i;
    }

    print "
    <tr>
        <th scope=\"row\">". ($concat+1) . "</th>
        <td><a href=\"serie.php?slug=". $shows[$concat]['slug'] ."\">". $shows[$concat]['name'] ."</a></td>
        <td>
            <span class=\"stars text-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=" . number_format($shows[$concat]['statistics']['rating'],2,"."," "). ">
        " . "" . displayStars($shows[$concat]['slug']) . "\n"."
            </span>
        </td>
        <td>". number_format($shows[$concat]['statistics']['popularity'],0,"."," ") ."</td>
    </tr> ";

}
}
