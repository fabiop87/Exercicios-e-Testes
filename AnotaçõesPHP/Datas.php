<?php 
/* 
echo date('d/m/Y');
echo PHP_EOL;
echo date('H:i:s');

*/
$agora = new DateTime();
echo $agora->format('d/m/Y H:i:s');
echo PHP_EOL;


// Ciar datas a partir de uma lista

$datas = [
    '29-10-2001',
    '01-01-2000',
];
foreach($datas as $data) {
    $d = DateTime::createFromFormat('d-m-Y', $data);
    $d->add(new DateInterval('P180D'));
    echo $d->format('Y-m-d') . PHP_EOL;
} 


// Intervalo entre duas datas

$data_antiga = new DateTime('10-03-1990');
$agora = new DateTime();

$intervalo = $data_antiga->diff($agora);
print_r($intervalo);


// Timezone

$brasil = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
echo $brasil->format('d-m-Y H:i:s') . PHP_EOL;

// Calcular idade

$data_nascimento = new DateTime('29-10-2001');
echo calcularIdade($data_nascimento);

function calcularIdade($data_nascimento){
    $agora = new DateTime();
// primeiro cálculo dos anos
if ($agora->format('Y') == $data_nascimento->format('Y')){
// verifica se estamos no mesmo ano
    $anos = 1;
    } else {
        $anos = $agora->format('Y') - $data_nascimento->format('Y');
    }
// validar os anos de forma precisa
// se ainda não chegámos ao "nosso" mês, temos menos 1 ano do
// que é calculado.
    if ($agora->format('m') < $data_nascimento->format('m')){
        $anos--;
    } elseif ($agora->format('m') == $data_nascimento->format('m')){
// estamos no mês do nosso aniversário
// vamos ver se o dia já chegou
    if ($agora->format('d') < $data_nascimento->format('d')){
        $anos--;
    }
}
return $anos != 1 ? "$anos anos" : "1 ano";
}
?>