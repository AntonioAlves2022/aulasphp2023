<?php

$idade = $_GET["idade"];
$ano_atual = 2023;
$nascimento = $ano_atual - intval($idade);

$resposta = $_GET["pergunta"];

if($resposta == "NAO"){
    $nascimento = $ano_atual - intval($idade) -1;
}

?>
<h1>Você nasceu no ano
    <?= $nascimento ?>
</h1>