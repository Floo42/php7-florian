<?php

session_start();
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
}

$email = 'pas de mail défini';

if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
$_SESSION['history'][] = sprintf(
    'Votre email : %s',
    $email
);


 ?>
