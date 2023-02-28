<?php 

$nomes = ['a','b','c'];

list($nome1,$nome2,$nome3) = $nomes;

$funcionarios = [
    'adm' => 'a',
    'sec' => 'b',
    'cont' => 'c'
];

extract($funcionarios);

echo $adm;

//Total de valores do array
echo count($nomes);

for ($i=0; $i <count($nomes) ; $i++) { 
    echo $nomes[$i] . PHP_EOL;
}


/*
 Tem os métodos de array quase igual do javascript
 

 array_push = add no final

 array_unshift = add no inicio

 array_shift = rm do inicio

 array_pop = rm do final

 array_unique = remove valores duplicados //pode ser passado o argumento SORT_NUMERIC/SORT_STRING para ordenar numeros ou nomes


 shuffle($variavel) = ordena de forma aleatoria

 array_key_first/last = retorna o primeiro/ultimo item do array
 */

 if(key_exists('adm',$funcionarios)){
    echo 'existe';
 }else{echo 'nao existe';}

 if(in_array('a',$funcionarios)){
    echo 'o valor existe';
 }else{echo 'o valor nao existe';}


 // ARRAY FILTER

 $valores = [1,2,3,4,5,6,7,8];
 $final = array_filter($valores, "");
 print_r($final);

 function impares($valor)
 {
    return $valor % 2 != 0;
 }
 function pares($valor)
 {
    return $valor % 2 == 0;
 }


// ARRAY MAP 

$itens = [1,2,3,4,5,6,7,8];
$fitens = array_map("quadrado", $itens);
print_r($fitens);
function quadrado($itens)
{
   return $itens * $itens;
}



?>