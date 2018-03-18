<?php
/*
Le but du jeu est de miser une valeur comprise entre 1 et 100€
L'ordinateur génère une valeur entre 1 et 100.
Si la valeur misée supérieure, le joueur repart avec sa mise et la différence entre sa valeur et 100
Exemple : le joueur mise 50€, l'ordinateur génère 20, le joueur repart avec 50 + 50 soit 100€
Il n'y a donc aucune somme de plus de 100€ en jeu

Si la valeur misée est inférieure, le joueur perd sa mise
Si la valeur misée est égale, le joueur ne perd rien et repart avec sa mise


*/

if (isset($argv[1]) && is_numeric($argv[1]) && $argv[1]<=100 && $argv[1]>0) {
    $choix = (float)$argv[1];
} else{
        die("Valeur invalide");
}

$valeur = rand(1,100);

if ($argv[1]>$valeur) {
    print "Gagné ! \n";
    print "Vous remportez : " .($choix+(100-$argv[1])) . " euros au total";
}
elseif ($argv[1]==$valeur) {
    print "Egalité ! \n";
    print "Vous repartez avec votre mise de " . $choix . " euros";
}
else {
    print "Perdu ! \n";
    print "Vous perdez : " .($argv[1]) . " euros";
}

?>
