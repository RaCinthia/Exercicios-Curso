<?php
  $getContent = file_get_contents("account.json");
  $accountData = json_decode($getContent, true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados Enviados</title>
  <!-- Styles -->
  <style>

    body {
      width: 99%;
      height: 98vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .emphasis {
      font-weight: bold;
      color: green;
      text-decoration: underline;
    }

    dl {
      font-size: 20px;
    }
    dt {
      font-weight: bold;
    }

  </style>

</head>
<body>
  
  <!-- Obtendo o nome pelo cabeçalho HTTP -->
  <h1><span class="emphasis">Sucesso!</span> Conta de <?php echo $_GET["name"]; ?> adicionada.</h1>

  <!-- Obtendo os dados por leitura de arquivo -->
  <dl>
    <dt>Proprietário:</dt>
    <dd><?= $accountData['name']; ?></dd>
    <dt>Saldo bancário:</dt>
    <dd>R$ <?= $accountData['balance']; ?></dd>
  </dl>

</body>
</html>