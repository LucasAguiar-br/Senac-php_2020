<?php

require_once 'config.php';



try{
    $objBanco = new PDO( DSN, DB_USER, DB_PASS);
}
catch( PDOExecption $objErro){
    echo 'SGDB indisponível: ' . $objErro->getMessage();
    exit(); 
}   