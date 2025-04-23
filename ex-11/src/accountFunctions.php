<?php

require_once __DIR__ . "/bankOperations.php";

// Cria uma conta
function createAccount(string $owner, AccountType $type, string $password): Account {
  
  $account = new Account(
    owner: $owner,
    type: $type,
    password: $password
  ); // Instância do tipo Account (conta)
  
  if(file_exists(getPathAccountsFile())) { // Se o arquivo existir
    $accounts = getArrayFromJsonFile(getPathAccountsFile()); // Atribui a nova conta ao array de contas
  } else { // Se não existe
    $accounts = []; // Cria o array vazio
  }
  
  // Adiciona a conta criada ao array de contas
  $accounts[] = [
    'owner' => $account->owner,
    'balance' => $account->getBalance(),
    'type' => $account->type->name,
    'password' => $account->password
  ];

  $response = saveJsonToFile(getPathAccountsFile(), $accounts); // Atualiza o arquivo com a nova conta criada
  var_dump($response);
  return $account;
  
}