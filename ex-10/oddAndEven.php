<?php
// Números pares e ímpares de 0 a 100
echo "Pares e ímpares de 0 a 100\n";

$number = 0;
$pair = [];
$even = [];

// Enquanto o número for menor ou igual a 100, execute
for($number; $number <= 100; $number++) {

    if($number % 2 == 0) {
        $pair[] = $number;
    } else {
        $even[] = $number;
    }

}

echo "Pares: " . implode(" - ", $pair) . "\n";
echo "Ímpares: " . implode(" - ", $even);