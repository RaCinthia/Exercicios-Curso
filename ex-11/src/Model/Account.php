<?php

// Classe conta 
class Account { // Caso a classe possua apenas propriedades readonly, ela poderá ser readonly, substituindo todos os demais readonly

  // Atributos
  private float $balance = 0;

  // Construtor - com o construtor o objeto deixa de ser "instável"
  public function  __construct(
    public readonly string $owner, // readonly -> indica que apenas pode ser lido e não permite a modificação
    public readonly AccountType $type,
    public readonly string $password
  ) {
    $this->balance = 0;
  }

  // Métodos
  public function getBalance(): float { return $this->balance; }
  
}

