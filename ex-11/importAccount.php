<?php

$pathAccountFile = __DIR__ . "/account.json";

$accountFileContent = file_get_contents($pathAccountFile);
$decodedAccountFileContent = json_decode($accountFileContent, true);

// var_dump($decodedAccountFileContent);
