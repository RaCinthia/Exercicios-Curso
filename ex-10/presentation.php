<?php
// Apresentação de nome e idade

$name = $argv[1] ?? "[seu nome aqui]";
$age = $argv[2] ?? "[sua idade aqui]";
$dayTime = date("a");
$greeting = match($dayTime) {
    "am" => "bom dia",
    "pm" => "boa noite"
};

if($age > 120 || $age < 1) {
    echo "Digite uma idade válida :(";
} else {
    echo "Olá, $greeting! Meu nome é $name, tenho $age anos :)";
}
