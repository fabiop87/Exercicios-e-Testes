<?php

//PHP = Personal Home Page


//Concatenar // concatenar em php utiliza .
//Comparar valores
if($nome == 'Guilherme'){
    echo 'Verdadeiro';
}else{
    echo 'falso';
}
$idade = '26';
if($nome === 26){
    echo 'Verdadeiro';
}else{
    echo 'falso';
}
// 3 iguais também compara o tipo (quando tem '' é string)

// >= <= == !=
//=== !=
// Looping for
for($i = 0; $i < 10; $i++){
    echo $i;
    echo '<hr>'; // quebra de linha
}
// Looping while
$i = 0;
while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
}

//Funções
printNumero(30);
echo '<br>';
function printNumero($n){
    echo $n;
}


//classes
// ex1:
class Pessoa{
    public $nome;
    public $idade;
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function printNomeEIdade(){
        echo $this->nome;
        echo '<br>';
        echo $this->idade;
    }    
}
$pessoa = new Pessoa('Joao','20');

$pessoa->printNomeEIdade();
echo '<br>';
$pessoa2 = new Pessoa('Thiago','40');

$pessoa2->printNomeEIdade();

// ex2:
class Pessoa {
    public $nome;
    public $idade;
    public function Falar() {
    echo $this->nome. " de ". $this->idade." Falou <br>";
    }
}
    $rodrigo = new Pessoa();
    $rodrigo->nome = "Rodrigo Rato meu querido Rato";
    $rodrigo->idade = 21;
    $rodrigo->Falar();
echo $rodrigo->nome;

// Array
$arr = ['0','1','2']
echo $arr[1];

// concatenar em php utiliza .

//Variáveis

$nome = 'Guilherme';
echo 'o meu nome é '.$nome;

//Variável de variável
$Guilherme = 'Joaozinho';
echo 'o meu nome é '. $$nome;











?>