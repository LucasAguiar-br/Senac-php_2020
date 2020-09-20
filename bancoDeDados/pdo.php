<?php

require_once 'config.php';

$objbanco = new PDO( DSN, DB_USER, DB_PASS);

//var_dump($objbanco->errorInfo()); //importante para debug 


$consulta = $objbanco->query('SELECT id, nome, whatsapp FROM  contatos', PDO::FETCH_ASSOC);
foreach ($consulta as $ind => $registro){
    echo "ID: {$registro['id']} NOME: {$registro['nome']} WZAP: {$registro['whatsapp']} <br>";
}

if ($objbanco->query ('DELETE FROM contatos WHERE id = 4')){
    echo "Apagado!<br>";
};


if ($objbanco->query("INSERT INTO contatos (nome, whatsapp) VALUES ('JURUMBA', '8987817231')")){
    echo "Valor inserido<br>";
};


if ($objbanco->query("UPDATE contatos set nome = 'Lucas' WHERE id = 5")){
    echo "Valor atualizado";
}