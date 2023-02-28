<?php 

$nomes = ['fabio', 'queijo'];
foreach($nomes as $nome) {
    echo $nome . '<br>';
}
echo '<hr>';

//tambem da pra buscar a chave e valor do array

$capitais = [
    'portugal' => 'lisboa',
    'brazil' => 'brasilia'
];
foreach($capitais as $key => $value) {
    echo "para o pais $key a capital é $value<br>";
}


?>

