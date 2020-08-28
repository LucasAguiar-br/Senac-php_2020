<?php

date_default_timezone_set('America/Sao_Paulo');

//for
for ($i = 0, $j=4; $i <5 ; $i++, $j--){
    echo "linha: $i $j<br>";
}

echo'<br><br>';

//while
$teste = 0;
$teste2 = 4;
while($teste  <5 ){

    echo"Linha:$teste $teste2<br>";
    $teste++;
    $teste2--;
}

echo '<br><br>';

//exemplo de do while - Quando quer executar pelo menos uma vez
$i = 0;
do {

    echo "Linha: $i <br>";
    $i++;
} while( $i < 5);


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