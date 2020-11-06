<?php


include '../header_tpl.php';
include '../index_menu_tpl.php';

echo '<table>
        <tr>
            <td>ID</td><td>Nome</td><td>Email</td>
        <tr>';

foreach ($lista as $usuario) {
    echo "<tr>
            <td>{$usuario}['id']</td><td>{$usuario['Nome']}</td>
            <td>{$usuario['email']}</td>
        </tr>";
}

echo '</table>';

include '../footer_tpl.php';