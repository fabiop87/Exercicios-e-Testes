<?php 

/*

SESSIONS
É um mecanismo que permite guardar dados entre varios requests

('''''')

*/


session_start();

echo '<pre>';

// adicionar variáveis a uma sessão
$_SESSION['nome'] = 'Josnel';
$_SESSION['valor'] = 1000;
$_SESSION['frutas'] = ['banana', 'laranja', 'gato'];

print_r($_SESSION);

echo '<hr>';

// remover variáveis de uma sessão
unset($_SESSION['valor']);
print_r($_SESSION);
echo '<hr>';

// alterar o valor de uma variável de sessão
$_SESSION['nome'] = 'balfinho';
print_r($_SESSION);
echo '<hr>';

//apresentar variaveis de sessao
echo 'Nome: '. $_SESSION['nome'] . '<br>';
echo 'Fruta: ' . $_SESSION['frutas'][2] . '<br>'; 
echo '<hr>';


//destruir todos os dados da sessao
session_destroy();
print_r($_SESSION);

//limpar os dados da sessao
session_unset();

/*

Deslogar

Dentro do html
<a href="?logout=1">Sair</a>

No php
session_start();
if(isset($_GET['logout']) && $_GET['logout'] == 1){
  session_unset();
  session_destroy();

}


*/




?>
