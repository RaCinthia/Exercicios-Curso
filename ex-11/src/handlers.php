<?php

// Verifica se a ação é válida
function verifyAction(int $action, int $interval): bool {
  
  $isValid = false;
  
  // Se a ação estiver dentro do intervalo, retornará válida
  if($action >= 0 && $action <= $interval) {
    $isValid = true;
  }
  
  return $isValid;
  
}

// Atualiza os dados de uma conta
function updateAccount(Array &$accounts, Array $currentAccount, ?string $password = null, ?float $balance = null): Array {

  try {

    // Os dados que não forem nulos serão modificados
    if($password != null || $balance != null) {
  
      if($password != null) {
  
      }
      if($balance != null) {
        foreach ($accounts as &$account) {
          if($account['owner'] == $currentAccount['owner']) {
            $account['balance'] = $balance;
          }
        }
      }
      
      return $accounts;
  
    } else { throw new Exception('Nenhum dado para atualizar'); } // Se nenhum dado for informado

  } catch(Exception $error) { echo "Excessão: " . $error->getMessage(); }

}

function getPathAccountsFile(): string { return __DIR__ . "/accountsFile.json"; } // Caminho do arquivo de contas em json

// Salva em arquivo JSON - informe o caminho e conteúdo
function saveJsonToFile($pathFile, $content) {
  file_put_contents($pathFile, json_encode($content));
}

// Retorna o conteúdo JSON decodificado para array associativo - informe o caminho do arquivo
function getArrayFromJsonFile($pathFile) {
  
  if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Erro ao decodificar JSON: " . json_last_error_msg();
    return []; // Retorna um array vazio se o JSON estiver com erro
  } else {
    return json_decode(file_get_contents($pathFile), true);
  }

}


