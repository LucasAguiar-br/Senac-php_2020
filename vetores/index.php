<?php
date_default_timezone_set('America/Sao_Paulo');
error_reporting(E_ALL);

//vetor

echo '<br>';

$domingo = 0;
$segunda = 1;
$terca = 2;
$quarta = 3;
$quinta = 4;
$sexta = 5;
$sabado = 6;


switch ( date('w')){
    case $domingo:
        echo'Domingo';
        break;
    case $segunda;
        echo'Segunda';
    break;
    case $terca;
        echo'terca';
    break;
    case $quarta;
        echo'quarta';
    break;
    case $quinta;
        echo'quinta do switch<br>';
    break;
    case $sexta;
        echo'sexta';
    break;
    case $sabado;
        echo'sabádo';
    break;
}
/*
$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terca';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sabádo';

$hoje = date('w');

echo "hoje é " . $semana[$hoje];


echo'<br>';

echo date('d/m/y');

echo "<br>";


var_dump($semana);

unset($semana);
/*
$semana['Domingo'] = 0;
$semana['Segunda'] = 1;
$semana['Terca'] = 2;
$semana['Quarta'] = 3;
$semana['Quinta'] = 4;
$semana['Sexta'] = 5;
$semana['Sabado'] = 6;


$hoje = date('l');

echo "<br> hoje é " . $semana[$hoje] . " com índice alfanúmerico";

echo "<br>";
*/
//Execício
$usuario = [	'nome' 	=> 	'Luiz Bono',
				'idade'	=>	25,
				'peso'	=>	67.8,
                'signo'	=>	'aquariano'];
                


//Mostrar o vetor dentro de string especial                
echo "<br> O professor " .$usuario['nome'] . " tem " . $usuario['idade'] . " pesa " . number_format( $usuario['peso'], 2, ',' , '.') . " e é " . $usuario['signo'];


//Constante
define('MUNDO', 'Radimundo Nonato');
define('RES_P_PAG', 10);


for ( $i = 0 ; $i < RES_P_PAG ; $i++){
    echo "Resultado $i<br>";
}

echo 'Ola' . MUNDO . "<br>";



$professores2 = array(

    0 => array(
        'nome'   =>   'Luiz Bono',
        'idade'  =>  25,
        'peso'  =>  67.8,
        'signo'  =>  'aquariano'
    ),


    1 => array(
        'nome'   =>   'Thiago Claro',
        'idade'  =>  27,
        'peso'  =>  70.7,
        'signo'  =>  'geminiano'
    ),
    2 => array(
        'nome'   =>   'Thiago Quintas',
        'idade'  =>  21,
        'peso'  =>  62.4,
        'signo'  =>  'leonino'
    )
);

var_dump($professores2);

echo "<br>"
?>
<table border="1">
<tr> <td>ID</td> <td>nome</td> <td>idade</td> <td>Peso</td>
<td>Signo</td>
</tr>
<?php

    foreach ($professores2 as $linha => $professor) {
            echo "<tr>  <td>$linha</td>
                        <td>{$professor['nome']}</td>
                        <td>{$professor['idade']}</td>
                        <td>{$professor['peso']}</td>
                        <td>{$professor['signo']}</td>
            </tr>";
    }

?>
</table>
