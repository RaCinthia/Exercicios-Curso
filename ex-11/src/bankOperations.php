<?php

// Saque
function cashWithdrawal(Array $account, float $balance): void {

  $accounts = getArrayFromJsonFile(getPathAccountsFile());

  print "Informe o valor a ser sacado: R\$ ";
  $value = (float) fgets(STDIN);
  print "Confirmar o saque no valor de R\$ $value? (s/n)\n";
  $confirm = trim(fgets(STDIN));
  if($confirm == "n" || $confirm == "N") {
    print "Saque cancelado\n.";
  } else if($confirm == "s" || $confirm == "S") {
    if($value <= $balance) {
      $balance -= $value;
      $updatedAccounts = updateAccount($accounts, $account, balance: $balance);
      saveJsonToFile(getPathAccountsFile(), $updatedAccounts);
      print "Saque realizado com sucesso.\n";
    } else {
      print "Saldo insuficiente.\n";
    }
  }

}

// Depósito
function deposit(Array $account, float $balance): void {

  $accounts = getArrayFromJsonFile(getPathAccountsFile());

  print "Informe o valor a ser depositado: R\$ ";
  $value = (float) fgets(STDIN);
  if($value >= 1) {
    $balance += $value;
    $updatedAccounts = updateAccount($accounts, $account, balance: $balance);
    saveJsonToFile(getPathAccountsFile(), $updatedAccounts);
    print "Saque de R\$ $value realizado com sucesso.\n";
  } else {
    print "Valor inválido, por favor confira e tente novamente.\n";
  }

}