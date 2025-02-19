<?php
// Array Associativo:
/*
* Mapa de valores: mapeamento de uma string para qualquer
* valor que possa ter em um array
*/

$fruit = [
    "name" => "Maçã",
    "cor" => "Vermelho",
];

echo $fruit["name"];

// array_unique
/*
* Remove as duplicatas de um array
*/

$numbers = [0, 1, 1, 5, 2.4, 7, 5, 5, 2.4, 3];
$numbersUnique = array_unique($numbers);

echo "\narray_unique: $numbersUnique";