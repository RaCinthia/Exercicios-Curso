<?php

// Efetua o login
function login(): void {

  echo "Informe o nome do proprietário: ";
  $owner = trim((string) fgets(STDIN));
  echo "Informe a senha de acesso: ";
  $password = trim((string) fgets(STDIN));
  $isValid = checkCredentials($owner, $password);

  // Se as credenciais forem válidas, entra na conta e mostra as ações
  if($isValid) {
    
    do {

      $currentOwner = $owner;
      showActionsMenu();
      $action = (int) fgets(STDIN);
      $isValid = verifyAction($action, 3);
      $credentials = getCredentials($currentOwner, $password);
      $currentAccount = $credentials['account'];
      $balance = $credentials['account']['balance'];

      if($isValid) {

        switch($action) {
    
          // Consultar saldo
          case 1:
            echo "Saldo atual: R\$ $balance\n";
          break;
          // Sacar valor
          case 2:
            cashWithdrawal($currentAccount, $balance);
          break;
          //Depósito
          case 3:
            deposit($currentAccount, $balance);
          break;
    
        }

      }
    } while($action != 0);

  }

}