<?php

$db = mysqli_connect('localhost', 'root', '', 'php');//conectar no sgdb

$query =     mysqli_query(   $db, 
                        'CREATE TABLE IF NOT EXISTS CONTATOS 
                        (   ID BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                            NOME VARCHAR(255) NOT NULL,
                             WHATSAPP BIGINT)' );
if($query ){
        echo "Tabel contato criada<br>";
                                          }
else{            
        echo "Não foi criada a tabela";
}


$contato = ['nome' => 'Lucas Aguiar',
             'whatsapp' => 5511983819212
            ];

if (mysqli_query ($db, 
            "INSERT INTO CONTATOS 
            (NOME, WHATSAPP) 
            VALUES
              ('{$contato['nome']}', '{$contato['whatsapp']}')")){
                echo "Inserido com sucesso";
              }

else{
    echo "Erro ao inserir";
}


$query = mysqli_query ($db, 'SELECT
                                ID, NOME, WHATSAPP
                            FROM 
                                CONTATOS');
echo '<table>';
echo "</tr>
        <td>ID</td>
        <td>NOME</td>
        <td>WHATSAPP</td>
        </tr>";
while( $registro = $query->fetch_assoc() ){
    echo "<tr>
            <td>{$registro['ID']}</td>
            <td>{$registro['NOME']}</td>
            <td>{$registro['WHATSAPP']}</td>
    </tr>";
}
echo "</table>>";


if (mysqli_query( $db, 'DELETE FROM CONTATOS WHERE ID = 1')){
    echo "Apagado";
}

else{
    echo "não apagou";
}

echo "<br><br> Nome enviado {$_POST['NOME']}, whatsapp: {$_POST['WHATSAPP']}";