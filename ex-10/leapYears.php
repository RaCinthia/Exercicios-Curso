<?php
// Verifica se um ano é bissexto ou não
echo "Anos Bissextos - Verifique um ano\n";

// Anos divisíveis por 4 - ou seja, sua dezena é divisível por 4 - são bissextos.
// Se o ano termina em 00, precisa ser divisível por 400.
$year = $argv[1] ?? 3000;

echo "Ano: $year\n";

if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0) {
    echo "É bissexto";
} else {
    echo "Não é bissexto";
}