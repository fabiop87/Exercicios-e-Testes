<?php 
// Explode - transformar string em um array de strings
$str_nomes= 'a,b,c,d';
$nomes = explode(',', $str_nomes);

// Implode - faz o contrario

$nomes1 =['a','v','c','r']; 
$str_nomes1 = implode('|', $nomes1);

// Replace
$a = 'tetetete';
echo str_replace('te', 'TE', $a);
$b = str_replace(' ', '-->', $a);
?>