<?php
function arrayRand($data) {
    $randomIndex = mt_rand(0, count($data) - 1);

    return $data[$randomIndex];
}
