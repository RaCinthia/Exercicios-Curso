<?php

// Exibe o menu de apresentação
function showMainMenu(): void {

  echo "----------------------------\n";
  echo "| BBANK - SEU BANCO DIGITAL\n|\n";
  echo "| 1. Acessar Conta\n";
  echo "| 2. Criar Conta\n";
  echo "| 0. Sair\n";
  echo "----------------------------\n";

}

// Exibe o menu de ações (após login)
function showActionsMenu(): void {
  
  echo "---------------------------------\n\n";
  echo "1. Consultar saldo atual\n";
  echo "2. Sacar valor\n";
  echo "3. Depositar valor\n";
  echo "0. Sair\n\n";
  echo "---------------------------------\n";

}
