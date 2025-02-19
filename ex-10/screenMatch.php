<?php
echo "*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*\n";
echo "Bem-vindo(a) ao Screen Match \n\n";

$filmName = "Madagascar";
$year = 2005;
$rating = 4.4;
$gender = "animação";
$release = false;
$included = false;

echo "Filme: $filmName \nLançamento: $year \nAvaliação: $rating \n";

echo $included ? "Incluso no plano\n" : "Não incluso no plano\n";

if($year > 2025) {
    $release = true;
}

