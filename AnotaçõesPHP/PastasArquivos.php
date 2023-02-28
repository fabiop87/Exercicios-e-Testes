<?php 

/*
//FILESYSTEM
// CRIAR PASTAS NO PHP
mkdir ( string $pathname , int $mode = 0777 , bool $recursive = false , resource $context = ? ) : bool

//Para criar uma pasta
mkdir('pasta1');

//Criar uma pasta dentro de outra
mkdir('pasta1/pasta2');

//Criar duas pastas uma dentro da outra ao mesmo tempo
mkdir('teste/outra',0777,true);

//Remover uma pasta
rmdir('pasta1');


//A melhor prática é usar caminhos absolutos para criar as pastas

mkdir(dirname(__FILE__) . '/pasta1'); <-- coloca a pasta onde está o script
chdir(dirname(__FILE__) . '/pasta1');  || chdir('pasta1');
//Criar arquivo
touch('arquivo');




// GRAVAR DADOS EM ARQUIVOS

$arquivo = fopen('dados1.txt', 'w');   
$arquivo2 = fopen('dados2.txt', 'a');
//'w' = write se o arquivo nao existe, o cria, e se existe, apaga tudo
//'a' = append se nao existe, o cria, e se existe adiciona o texto ao que ja existe


fwrite($arquivo, 'Primeira frase.');
fwrite($arquivo, 'Segunda frase.');
fclose($arquivo);

fwrite($arquivo2, 'mais uma frase.');
fclose($arquivo2);



//Escrever um valor em cada linha

$arquivo3 = fopen('dados3.txt','a');
for($i = 1, $i <= 10, $i++){
    fwrite($arquivo3, "Esta linha contem o valor " . rand(0,100) . PHP_EOL);    
}
fclose($arquivo);



// LER DADOS DE UM ARQUIVO
// feof -> funcao end of file, para ler até o final do arquivo
$arquivo4 = fopen('dados.txt', 'r');
while(!feof($arquivo4)){
    echo fgets($arquivo4);
}
fclose($arquivo4);


// LER OS DADOS DE UM ARQUIVO E GUARDAR NO OUTRO

$origem = fopen('dados.txt','r');
$destino = fopen('dados_finais.txt','w');

while(!feof($origem)){
    fwrite($destino, fgets($origem));
}
fclose($origem);
fclose($destino);




// GRAVAR E LER UM TEXTO

$texto = "Lorem ipsum fodase....";

file_put_contents('texto_completo.txt', $texto);

//essa função é equivalente a chamar fopen, fwrite e fclose


$lertexto = file_get_contents('texto_completo.txt');
echo $lertexto; 



// Carregar dados de um arquivo de texto para um array 
// no exemplo o arquivo 'paises.txt' continha um nome por linha
$paises = file('paises.txt'); // file(dirname(__FILE__) . '/paises.txt', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
print_r($paises);




// LER CSV

$file = fopen('dados.csv', 'r');

$max_lines = 1;
while(!feof($file)){
    $l = fgetcsv($file);
    print_r($l);
    if($max_lines-- == 0){
        die('terminou');
    }
}
fclose($file);


// Criar arquivo CSV
$dados = [
    ['fabio','queijo'],
    ['outrofabio','outroqueijo']
];
$f = fopen('dados.csv','w');
foreach($dados as $linha){
    fputcsv($f, $linha)
}
fclose($f);




*/






?>