<?php

$account = [
  "name" => $_POST["name"],
  "balance" => $_POST["balance"]
];

file_put_contents("account.json", json_encode($account));

/*
* Redireciona para a página de sucesso usando o cabeçalho HTTP
* "Location" e envia o nome por parâmetro.
*/
header('Location: /success.php?name=' . $account['name']);