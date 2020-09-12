<?php

//mysqli_connect ( 'host', 'user', ' senha', 'nome do db');
$db = mysqli_connect( 'localhost', 'root', '', 'aulaphp');

$query = mysqli_query( $db, 'CREATE TABLE IF NOT EXISTS contatos 
( id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
nome VARCHAR(255) NOT NULL, 
watsapp BIGINT)');

if ( $query ) {
    echo 'Tabela contatos criada com sucesso! <br>'; 
}
else {
    echo 'Não foi possível criar a tabela contatos: ';
    echo mysqli_connect_error();
}

$contato = ['nome' => 'Lucas A', 'whatsapp' => '5511983819212'];

if ( mysqli_query ( $db, 
" INSERT INTO contatos 
(nome, whatsapp) 
VALUES
 ( '{$contato ['nome']}',
 '{$contato['whatsapp']}')")){
    
    echo "contato inserido com sucesso!";
}

$query = mysqli_query ($db, ' SELECT 
id, nome, whatsapp
 FROM contatos');

echo '<table>';
echo "<tr><td>ID</td><td>NOME</td><td>WHATSAPP</td></tr>";

while ( $registro = $query->fetch_assoc() ) {
    echo "<tr>
    <td> {$registro ['id']} </td>
    <td>{$registro ['nome']} </td>
    <td>{$registro ['whatsapp']} </td></tr>";
}

echo '</table>';


if ( mysqli_query ($db, 'DELETE FROM contatos WHERE id = 10' ) ) {
    echo "Registro apagado com sucesso!";
} 
else {
    echo "Não foi possível apagar";
}

echo "<br> Nome enviado {$_POST['nm']}, whatsapp: {$_POST ['whats']}";