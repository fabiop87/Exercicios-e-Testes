<?php
//Pode trazer benefícios quanto à facilidade para lidar com projetos complexos e à velocidade de realizar tarefas que demandam pesquisa ou atividades repetitivas(exemplo: machine learning). Em contrapartida alguns empregos mais simples talvez possam ser substituídos por software especializado em determinadas tarefas

//1-

$i = 13;
$soma = 0;
$k = 0;
while ($k <= $i) {
    $k += 1;
    $soma += $k;
}
print $soma;

die();


//2-

function fibonacci($num)
{
    if ($num == 0) {
        return 0;
    } elseif ($num == 1) {
        return 1;
    } else {
        return fibonacci($num - 1) + fibonacci($num - 2);
    }
}

$numero = 35;
$achou = false;

for ($i = 0; $i <= $numero; $i++) {
    if (fibonacci($i) == $numero) {
        $achou = true;
        break;
    }
}
if ($achou) {
    echo "$numero pertence à sequência de Fibonacci.";
} else {
    echo "$numero não pertence à sequência de Fibonacci.";
}

die();


/*
3-
a) 9
b) 128
c) 49
d) 100
e) 13
f) 21 (?) 

*/

//4-
// carro:
// tempo = 50 km / 110 km/h = 0,4545 h
// caminhao: tempo = 50 km / 80 km/h + 10 min / 60 min = 0,7083 h

// o carro chegará mais rapido

$normal = 'bananinha';

$inverso = '';

for ($i = strlen($normal) - 1; $i >= 0; $i--) {
    $inverso .= $normal[$i];
}

echo $inverso;

die();
