<?php
// 

// argc = quantidade de argumentos passados no terminal
$numberOfValues = $argc - 1;
$positiveValues = [];
$negativeValues = [];

// Para cada valor passado, execute o bloco
for ($i = 1; $i <= $numberOfValues; $i++) {
    
    $value = $argv[$i];

    if($value < 0) {
        $negativeValues[] = $value;
    } else if($value > 0){
        $positiveValues[] = $value;
    }

}

echo "Número de valores positivos: " . count($positiveValues) . var_dump($positiveValues) . "\n";
echo "Número de valores negativos: " . count($negativeValues) . var_dump($negativeValues);