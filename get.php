<?php

$nome = $_GET['nome'];
$senha = $_GET['senha'];
$email = $_GET['email'];

if($nome = 'unicesumar' && $senha = 1234 && $email = 'unicesumar@email.com'){
    echo('Usuário logado');
}

// echo("Nome: $nome, Senha: $senha, Email: $email ");
?>