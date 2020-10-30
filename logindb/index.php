<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'db.php';


//exemplo de senha
// $pass = password_hash('12345', PASSWORD_DEFAULT);

// $db->query("
// 			INSERT INTO LOGIN
// 			(NOME, EMAIL, SENHA)
// 			VALUES
// 			('LUCAS AGUIAR', 'LUCAS@LUCAS.COM', '$pass')");

if ( isset($_SESSION['login']) ) { //Caso o usuário já esteja logado no sistema

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';

} elseif ( isset( $_POST['entrar'] ) ) { //Caso o usuário tenha acabado de preencher o form de login

	$login = filter_var( $_POST['login'], FILTER_SANITIZE_EMAIL);
	$senha = $_POST['senha'];
	
	// Verificar se existe o usuário e pegar o hash da senha
	$r = $db->query("SELECT SENHA FROM LOGIN WHERE EMAIL = '$login'");
	$reg = $r->fetch(PDO::FETCH_ASSOC);
	$hash = $reg['senha'];
	//comparar a senha passada pelo usuário com o hash no bd
	if (password_verify($senha, $hash)){
	
		$_SESSION['login'] = $login;

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';

	} else {

		$msg = 'Credenciais inválidas, tente novamente';

		include 'index_tpl.php';		
	}

} else { //Caso o usuário tenha acabado de chegar no sistema

	include 'index_tpl.php';
}