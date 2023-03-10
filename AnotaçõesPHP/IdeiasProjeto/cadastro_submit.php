<?php 


//verificar post

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('acesso invalido');
}


//adicionar à base de dados
require_once('BD/config.php');
require_once('BD/EasyPDO.php');
$bd =  new EasyPDO\EasyPDO(MYSQL_OPTIONS);

$params = [
    ':nome' => $_POST['nome'],
    ':RA' => $_POST['RA'],
] ;

$bd->insert("INSERT INTO alunos VALUES (0, :nome, :RA)", $params);
echo 'aluno inserido no banco';


?>
<div>
    <a href="index.php">Voltar</a>
    <span> | </span>
    <a href="cadastro.php">Add novo aluno</a>
</div>