<?php
// Cálculo do Índice de Massa Corporal (IMC)
echo "Cálculo de IMC\n";

$weight = $argv[1];
$height = $argv[2];
$imc = $weight / ($height ** 2);

echo "Peso: $weight\n";
echo "Altura: $height\n";
echo "IMC: " . number_format($imc, 2, ",", ".") . "\n";

if ($imc > 40) {
    echo "Obesidade grau III";
} else if ($imc > 34.9 && $imc <= 40) {
    echo "Obesidade grau II";
} else if ($imc > 29.9 && $imc <= 34.9) {
    echo "Obesidade grau I";
} else if ($imc > 24.9 && $imc <= 29.9) {
    echo "Sobrepeso";
} else if ($imc > 18.5 && $imc <= 24.9) {
    echo "Normal";
} else if ($imc <= 18.5) {
    echo "Abaixo do normal";
}

