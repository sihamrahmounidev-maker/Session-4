<?php

$montant = 1500;
$remise = 0;

if ($montant < 500) {
    $remise = 0/100;
    echo " le remise est : " . ($remise * 100) . "% <br>";
} elseif ($montant>=500 && $montant<=999){
    $remise = 5/100;
    echo " le remise est : " . ($remise * 100) . "% <br>";
} elseif ($montant>=1000 && $montant<=1999){
    $remise = 10/100;
    echo " le remise est : " . ($remise * 100) . "% <br>";
} else {
    $remise = 15/100;
    echo " le remise est : " . ($remise * 100) . "% <br>";
}

$montantRemise = $montant * $remise;
$total = $montant - $montantRemise;

echo "Le montant de remise est : " . $montantRemise . " DH<br>";
echo "Le montant total est : " . $total . " DH";