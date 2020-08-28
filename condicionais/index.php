<?php
ini_set('display_erros',  1);
ini_set('display_starup_erros',1);
error_reporting(E_ALL);

//Condicional if
$clima = 'tropical';

if ($clima == 'gelado'){
    echo "<br><br>Meu pé congela";
}

//Condicional "operador ternário"
$bool = '1';
$var = $bool ==true? '$bool é igual a true' : '$bool é diferente de true';

echo $var.'<br>';

$bool = '1';
$var = $bool ===true? '$bool é igual a true' : '$bool é diferente de true';
echo $var.'<br>';

$bool = '1';
$var = $bool !=true? '$bool é diferente de 1' : '$bool é igual de 1';
echo $var.'<br>';

$bool = '1';
$var = $bool !==true? '$bool é diferente de 1' : '$bool é igual de 1';
echo $var.'<br>';

//if com comparador de valor e tipo de variável
$frase = 'Meu pai tinha um cachorro amarelo e rosa';

if (strpos($frase, 'cachorro')){
    echo "Encontrei o cachorro".'<br>';
}

elseif(strpos($frase, 'Meu')){
    echo "Encontrei o Meu!";
}
else{
    echo "Nao há cachorro";
}

$frase = 'Meu pai tinha um cachorro amarelo e rosa';

if (strpos($frase, 'Meu') !==false){
    echo "Encontrei o cachorro".'<br>';
}

else{
    echo "Nao há cachorro";
}


//Switch

switch ($clima){
    case 'quente':
    case 'tropical':
    echo "Adoro clima quente";
        if (true){
            echo'<br> -- IF dentro de um Switch';
        }
        else{
            echo'<br> --- IF alinhado dentro de um switch';
        }
    break;

    case 'morno':
    echo "Morno é melhor que frio";
    break;

    case 'frio':
    echo "frio eu adoro quando está longe";
    break;

    case 'gelado':
    echo "Canadá";
    break;

    default:
    echo 'clima desconhecido';
    break;
}
$isso = 'véi';
//Condicional nova no PHP
$isso = $isso ?? 'coisa';
echo "<br><br>olha só $isso";

