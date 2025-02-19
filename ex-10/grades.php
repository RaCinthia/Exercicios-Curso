<?php
//Média de notas
echo "Média de Notas\n";

$grade1 = $argv[1] ?? 4;
$grade2 = $argv[2] ?? 9;
$grade3 = $argv[3] ?? 10;
$average = ($grade1 + $grade2 + $grade3) / 3;

echo "Nota 1: $grade1\n";
echo "Nota 2: $grade2\n";
echo "Nota 3: $grade3\n";
echo "A média de notas é: $average";