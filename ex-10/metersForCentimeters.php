<?php
// Conversão de metros para centímetros
echo "Conversão - metros para centímetros\n";

$meters = $argv[1] ?? 5;
$centimeters = $meters * 100;

echo "Metros: $meters\n";
echo "Centímetros: $centimeters";