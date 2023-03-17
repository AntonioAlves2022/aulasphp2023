<?php


$confirmacao = $_POST["confirma"];

if (isset($confirmacao)) {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
} else {
    echo "Você deve concordar com o contrato.";
}
?>

<p> Seu nome é <?= $nome ?> e você tem
    <?= $idade ?> anos.
</p>