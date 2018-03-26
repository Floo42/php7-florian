<?php
require_once(__DIR__.'/array_rand.php');

function insultron(){
    $subject = arrayRand(require(__DIR__.'/../data/subjects.php'));
    $verb = arrayRand(require(__DIR__.'/../data/verbs.php'));
    $name = arrayRand(require(__DIR__.'/../data/names.php'));

return sprintf(
    "%s %s %s",
    $subject,
    $verb,
    $name
);
}
?>
