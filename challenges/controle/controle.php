<?php

$films = [
    [
        'name' => 'Star Wars IV',
        'heros' => ['Luke Skywalker', "Han Solo"],
    ],
];

$films[0]['heros'][] = 'Obi-Wan';

print $films[0]['heros'][2];
 ?>
