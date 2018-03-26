<?php

$firstname = "Flo";
$firstname = strtoupper($firstname);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
        h1 {
            color : red;
        }
        </style>
    </head>
    <body>
        <h1>
            Hello <?= $firstname; ?>
        </h1>
    </body>
</html>
