<?php 
$valor = 12345.678;
echo number_format($valor, 1,null,null) . PHP_EOL;
echo number_format($valor,2,',','.') . PHP_EOL;

//printf - Mostra uma string formatada (com um numero variavel de argumentos)
//sprintf - Retorna uma string formatada
//vprintf = Mostra uma string formatada(array de argumentos)
//sscanf - Interpreta a entrada de uma string de acordo com um formato
//fscanf - Interpreta a leitura de um arquivo de acordo com um formato

printf("O meu nome é %s e o apelido é %s", 'fabio', 'fabio mesmo') ;
echo PHP_EOL;

//%b mostra o binario do valor
$valor2 = 65;
printf("%b", $valor2) . PHP_EOL; 

//%c mostra o codigo ASCII
printf("%c", $valor2) . PHP_EOL;
//%d o valor é mostrado como inteiro
printf("%d", $valor2);

?>