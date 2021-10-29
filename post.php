<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

if($nome == 'unicesumar' && $senha == 1234 && $email == 'unicesumar@email.com'){
    echo('Usuário logado');
}else{
    echo('Usúario não encontrado');
}
// echo("Nome: $nome, Senha: $senha, Email: $email ");
?>