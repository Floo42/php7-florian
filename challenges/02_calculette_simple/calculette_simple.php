<?php
/*
Les opérateurs utilisés ici sont :
 + pour l'addition
 - pour la soustraction
 * pour la multiplication
 / pour la division
*/

$value1 = 0;
$value2 = 1;

if (isset($argv[1])) {
    if (is_numeric($argv[1])) {
        $value1 = (float)$argv[1];
    }
    else {
        die('Premier nombre invalide');
    }
}

if (isset($argv[3])) {
    if (is_numeric($argv[3])) {
        $value2 = (float)$argv[3];
    }
    else {
        die ("Second nombre invalide");
    }
}
else {
    print 'Entrez un second nombre';
}

if (isset($argv[2])) {
    switch ($argv[2]) {
    case '+':
        print 'Le résultat est : ' . ($value1 + $value2);
        break;

    case '-':
        print 'Le résultat est : ' . ($value1 - $value2);
        break;

    case '/':
    if ($value2!=0) {
        print 'Le résultat est : ' . ($value1 / $value2);
        break;
    }
    else {
        die('Impossible de diviser par zéro !');
    }

    case '*':
        print 'Le résultat est : ' . ($value1 * $value2);
        break;

    default :
        print 'Opérateur invalide';
        return 0;
    }
}
else {
    print 'Entrez un opérateur';
}

?>
