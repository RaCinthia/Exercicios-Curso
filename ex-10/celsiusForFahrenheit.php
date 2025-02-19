<?php
// Conversão de temperatura -> Celsius para Fahrenheit
echo "Conversão de temperatura\n";

$celsius = $argv[1] ?? 27;
$fahrenheit = $celsius * 1.8 + 32;

echo "Celsius: $celsius\n";
echo "Fahrenheit: $fahrenheit";