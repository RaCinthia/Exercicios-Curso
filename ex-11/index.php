<?php

require_once __DIR__ . "/src/Model/AccountType.php";
require_once __DIR__ . "/src/Model/Account.php";
require_once __DIR__ . "/src/login.php";
require_once __DIR__ . "/src/menus.php";
require_once __DIR__ . "/src/credentials.php";
require_once __DIR__ . "/src/handlers.php";
require_once __DIR__ . "/src/accountFunctions.php";


$accounts = [];

// Conta bancária
do { // Faça...
  
  // Mostra menu principal
  showMainMenu();
  
  $action = (int) fgets(STDIN); // Recebe a ação que o usuário digitar (terminal)
  $isValid = verifyAction($action, 2); // Verifica se a ação é válida
  
  if($isValid) {

    switch($action) {

      case 1: // Acessa uma conta
        login();
      break;
      case 2: // Cria uma conta
        $userCredentials = setCredentials(); // Armazena nome e tipo de conta em um array associativo
        createAccount($userCredentials['owner'], $userCredentials['type'], $userCredentials['password']); // Passa os parâmetros para a criação de conta
        echo "\nConta criada com sucesso!\n";
      break;
  
    }
    
  }

} while($action != 0); // ...Enquanto a ação for diferente de 0
