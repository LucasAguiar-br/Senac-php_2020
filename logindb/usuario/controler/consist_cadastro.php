<?php


$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$conf_senha = $_POST['conf_senha'] ?? null;

$senha = trim($senha);
$email = strtolower ($email);

$erros = [];

if (strlen($nome) <2){
    $erros = 'O nome tem que ter ao menos dois caracteres';
}

if (!filter_var( $email, FILTER_VALIDATE_EMAIL )) {
    $erros[] = 'Email inválido';
} elseif (ja_existe_email($email)){
    $erros[] = 'Email já cadastrado.';
}

if (strlen($senha) <8){
    $erros[] = 'A senha tem que ter ao menos oito caractéres';
}

elseif ($senha != $conf_senha){
    $erros[] = 'A confirmação da senha náo é válida';
}