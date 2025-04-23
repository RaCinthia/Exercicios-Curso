<?php

// Funções antigas /////////////////////////////////////////////
// Mostra o menu de escolhas
function showMenu() {

  print "*********************************\n\n";
  print "1. Consultar saldo atual\n";
  print "2. Sacar valor\n";
  print "3. Depositar valor\n";
  print "4. Sair\n\n";
  print "---------------------------------\n";

}


// Saque
function cashWithdrawal($balance):float {

  print "Informe o valor a ser sacado: R\$ ";
  $value = (float) fgets(STDIN);
  print "Confirmar o saque no valor de R\$ $value? (s/n)\n";
  $confirm = trim(fgets(STDIN));
  if($confirm == "n" || $confirm == "N") {
    print "Saque cancelado\n.";
  } else if($confirm == "s" || $confirm == "S") {
    if($value <= $balance) {
      $balance -= $value;
      print "Saque realizado com sucesso.\n";
      print "Saldo atual: R\$ $balance\n";
    } else {
      print "Saldo insuficiente.\n";
    }
  }
  return $balance;

}

// Depósito
function deposit($balance): float {

  print "Informe o valor a ser depositado: R\$ ";
  $value = (float) fgets(STDIN);
  if($value >= 1) {
    $balance += $value;
    print "Saque de R\$ $value realizado com sucesso.\n";
  } else {
    print "Valor inválido, por favor confira e tente novamente.\n";
  }
  return $balance;

}