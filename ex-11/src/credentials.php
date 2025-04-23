<?php

// Coleta as credenciais do usuário para a criação da conta
function setCredentials(): Array {

  echo "Informe o nome do proprietário: ";
  $owner = trim((string) fgets(STDIN));
  echo "Informe o tipo da conta (CC / CP): ";
  $type = trim((string) fgets(STDIN));
  echo "Crie uma senha de acesso: ";
  $password = trim((string) fgets(STDIN));

  if(!empty($owner && $type && $password)) {

    $type = match($type) {
      "CC" => AccountType::CC,
      "CP" => AccountTYpe::CP,
      default => "Valor inválido para tipo de conta."
    };

    return [ 
      'owner' => $owner,
      'type' => $type,
      'password' => $password
    ];
    
  }

}

// Retorna as credenciais do proprietário da conta
function getCredentials(?string $owner = null, ?string $password = null) {
  
  $accounts = getArrayFromJsonFile(getPathAccountsFile()); // Json convertido em array associativo
  $exists = false;
  $currentAccount = null;
  
  foreach ($accounts as $account) {
    
    // Se a conta possuir o proprietário informado
    if($account['owner'] == $owner && $account['password'] == $password) {
      $currentAccount = $account; // A conta atual é igual à conta que está sendo "lida"
      $exists = true; // A conta existe
    }
    
  }
  
  return [ 'account'=> $currentAccount, 'exists' => $exists ];

}

// Verifica se as credenciais|dados existem
function checkCredentials(string $owner, string $password):bool {

  $response = getCredentials($owner, $password);
  $isValid = false;

  try {
    
    if($response['exists'] == true) { 
      
      echo "\nBem vindo(a), $owner!\n";
      $isValid = true;
  
    } else {

      throw new Exception("Usuário não encontrado, por favor tente novamente.\n");

    }

  } catch(Exception $error) { echo "Excessão: " . $error->getMessage(); }
  
  return $isValid;
  
}
