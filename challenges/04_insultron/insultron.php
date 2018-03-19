<?php

$verb = [
'vend','achete','trouve','mange','fabrique','cherche','braque', 'est aussi beau/belle que'
];

$name = [
'un abricot','des animaux','la reponse à la vie', 'une table', 'un menu maxi best-of', 'une vespa', 'une girafe', 'coca cola light',
];

$subject = [
'Gabriel','Nicolas','Marc','Romain','Thomas','Florian','Cédric','Louise','Adeline','corantin','Adam','Yanisse','Hugo','Gianni','Arthur','Alexandre','Jade','Maxence','Matthieu','Erwan','Anthony','Hugo','Antinea','Julien','Julien',
'Thomas','Léo'
];

print $subject[mt_rand(0,(count($subject)-1))]. ' ' . $verb[mt_rand(0,(count($verb)-1))] . ' '  . $name[mt_rand(0,(count($name)-1))];

?>
