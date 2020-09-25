<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1><?php echo $msg; ?></h1>
    <br><br>

    <a href='index.html'>Voltar para o index</a>


    <br><br>
    <table>
        <tr>
            <Td>ID</Td>
            <td>Nome</td>
            <td>Whatsapp</td>
        </tr>
        <?php
        if (is_array($tabela)) {
            echo " <tr> 
    <td>$id</td>
    <td>($reg[nome]}</td>
    <td>($reg[whatsapp]}</td>
    <td><a href='apaga_contato.php?id'>Apagar</a></td>
    </tr>";
        } else {
            echo "<tr> 
    <td colspan='3'>'nao há dados</td>
    </tr>";
        }
        ?>
    </table>

</body>

</html>