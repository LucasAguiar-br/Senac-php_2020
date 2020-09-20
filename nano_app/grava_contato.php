<?php

require_once 'db.php';

//Como evitar SQL Injection

$objStmt =  $objBanco->prepare("INSERT INTO contatos 
                                (nome, whatsapp) 
                                VALUES (:nm, :wzap)");

$objStmt -> bindParam(:nome, $post['nm']);
$objStmt -> bindParam(:wzap, $post['Whatsapp']);


//execução do bind 

if ($objStmt-> execute( array( $post['nm'], $post['Whatsapp'])) ){
    $msg = "Obrigado pelo cadastro";
} else{
    $msg = ":-( erro, tente novamente!";
}


include 'grava_contato_tpl.php'