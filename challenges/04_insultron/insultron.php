<?php

$verbs = [
    'vend','achete','trouve','mange','fabrique','cherche','braque', 'est aussi beau/belle que'
];

$names = [
    'un abricot','des animaux','la reponse à la vie', 'une table', 'un menu maxi best-of', 'une vespa', 'une girafe', 'coca cola light',
];

$subjects = [
    'Gabriel','Nicolas','Marc','Romain','Thomas','Florian','Cédric','Louise','Adeline','corantin','Adam','Yanisse','Hugo','Gianni','Arthur','Alexandre','Jade','Maxence','Matthieu','Erwan','Anthony','Hugo','Antinea','Julien','Julien',
    'Thomas','Léo'
];

$subject = $subjects[mt_rand(0,(count($subjects)-1))];
$verb = $verbs[mt_rand(0,(count($verbs)-1))];
$name = $names[mt_rand(0,(count($names)-1))];

print sprintf(
    "%s %s %s",
    $subject,
    $verb,
    $name
);
?>
