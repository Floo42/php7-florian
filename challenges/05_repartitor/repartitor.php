
<?php
/*
$data = file_get_contents('texte.txt');
//print $data;

foreach (count_chars($data, 1) as $i => $nb) {
    if(chr($i) != ' ' && chr($i) !="\n" && chr($i) != "\r"){
   echo '['.chr($i).']' . ' : ' . $nb . "\n";
}
}
*/

$characters = file_get_contents($argv[1]);

$occurences = [];

for ($i = 0; $i < strlen($characters); $i++) {
    $c = $characters[$i];

    if($c == ' ' || $c == "\n"){
        continue;
    }

    if (isset($occurences[$c])){
        $occurences[$c]++;
    }
    else{
        $occurences[$c] = 1;
    }
}

arsort($occurences);

print_r($occurences);

print array_sum($occurences);
print '('.count($occurences).')';
?>
