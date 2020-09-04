<?php


function operacao( float $numero1, float $numero2, string $operacao = '+'):float{
    switch($operacao){
        case '+':
            return $numero1 + $numero2;
        
        case '-':
            return $numero1 - $numero2;
        
        case '/':
            return $numero1 / $numero2;

        case '*':
            return $numero1 * $numero2;
        
        default:
        return 0.0;
    }
};

echo "<br> O resultado: " . operacao(2.5, 2.5) . "<br>";


echo "<br> O resultado: " . operacao(2.5, 2.5, '-') . "<br>";

//Fora do escopo da função
$dia = 2;
//Exercício

function dia_semana(int $dia): string {
    $semana = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
    return $semana[$dia] ?? "Use de 0 a 6";
}

$nome = 'Bono';
echo "<br> o dia é " . dia_semana(6);

function muda_nome(string &$var):string//Passagem de parâmetro por referência(muda o valor da variável fora do escopo da função)
{
    $var = 'Outro Nome';
    return $var;
};

echo "<br><br> retornará " . muda_nome($nome) . "<br>"; 

echo "A variave \$nome ainda vale: $nome <t>";