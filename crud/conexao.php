<?php
    $host = "localhost";
    $user = "root"; //não é rute é root
    $password = "usbw";
    $dbname = "crud";
    // Criamos a conexão com o banco
    $conn = new mysqli($host, $user, $password,$dbname);
    //Verificar se a conexão gerou algum erro
    if($conn->connect_error){
        die("Não foi possivel acessar a base de dados.");
    }