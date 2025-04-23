<?php


/* Require ou Include?
* Também podemos usar o include, mas a diferença entre ambos é que o require
* geralmente é usado para arquivos opcionais, que não são necessários,
* diferentemente do require
*/
require __DIR__ . "/src/functions.php"; // Importa o arquivo "functions.php"
//Obs.: o "__DIR__ equivale ao caminho absoluto do diretório atual do arquivo
require __DIR__ . "/src/Model/Account.php";

// $balance = 7000;
// $bankAccount = [
// 	'name' => 'André',
// 	'balance' => $balance
// ];

$account = createAccount(
  owner: "Roberto",
  balance: 0,
  type: "CC"
);

print "\nOlá, " . $account->owner ."!\nO que deseja fazer?\n\n";


do {

  // Mostra o menu
  showMenu();
  
  // Recebe o valor informado no terminal
  $choice = (int) fgets(STDIN);
  
  switch ($choice) {
    
    // Saldo
    case 1: 
      print "Saldo atual: R\$ $account->balance\n\n";
      break;
    // Saque
    case 2:
      $account->balance = cashWithdrawal($account->balance);
      break;
    // Depósito
    case 3:
      $account->balance = deposit($account->balance);
      break;
    case 4: 
      print "Até mais!\n";
    break;
  
  } // fim switch

} while($choice != 4); // fim while

$accountDataJson = json_encode($account); // Converte para Json
// Cria um arquivo com o caminho passado no primeiro parâmetro, armazenando o conteúdo do segundo
file_put_contents(__DIR__ ."/account.json" , $accountDataJson);