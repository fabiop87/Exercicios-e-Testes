<?php 
/*
ISSET
verifica se uma variavel existe
retorna true se existe, false se nao existe
se ela for definida, mas seu valor for null, é considerada inexistente
*/


//exemplo 1
$a = 1;
if(isset($a)){
    echo "a variavel existe<br>";
}else{
    echo "a variavel nao existe<br>";
}
//exemplo 2
$b = null;
echo isset($b) ? "sim" : "nao";


/*
EMPTY
verifica se a variavel tem um valor vazio(null, 0, false, string vazia)
retorna verdadeiro ou falso

*/

$b = "Joao";
empty($b);//false
$c = false;
empty($c);//true
$d = [];
empty($d);//true
$e = null;
empty($e);//true

/*
IS_NULL
verifica se é null 

*/

/*
UNSET
permite 'destruir' uma variavel, tem 2 formas de fazer

*/
$k = "Fabio";
unset($k);// a variavel é apagada da memória(mais utilizado e mais performatico)
$k = null;// a variavel ainda 'existe', mas sem valor


/*
NULL COALESSING OPERATOR
basicamente é um atalho para alguns casos de operador ternario

*/
$x = null;
$nome = $x ?? "sem nome";
//esse exemplo é semelhante a:
$nome1 = isset($x) ? $x : "sem nome";
// se x for null, então é atribuido o valor definido depois dos ??

$apelido = null;
$apelido ??= "apelido desconhecido";


echo $nome . "<br>";
echo $apelido;

/*
VERIFICAR TIPO DA VARIAVEL
is_ ()
*/
$nome = "falbo";
$idade = 21;
$acordado = true;

if(is_array($nome)){
    echo "é um array";//nao vai aparecer
}

/*
APRESENTACAO DE INFORMACOES DE VARIAVEIS
print_r
var_dump
var_export - analise
*/
echo "<pre>";
$valores = [1,2,3];
print_r($valores);
var_dump($valores);
//var_export($valores);

$numeros = [];
for ($i=0; $i <10; $i++) { 
    $numeros = rand(0,100);
}
var_export($numeros);
?>