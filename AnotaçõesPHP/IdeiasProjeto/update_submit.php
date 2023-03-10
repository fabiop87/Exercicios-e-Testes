<?php 


//verificar post

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('acesso invalido');
}

//buscar dados a editar


$nome = $_POST['nome'];
$RA = $_POST['RA'];

//adicionar à base de dados
require_once('BD/config.php');
require_once('BD/EasyPDO.php');
$bd =  new EasyPDO\EasyPDO(MYSQL_OPTIONS);

//buscar o id a editar
$idAluno = aes_decrypt($_POST['idAluno']);

if ($idAluno == -1 || $idAluno == false) {
    die('ai deu ruim');
}


$params = [
    'idAluno' => $idAluno,
    'nome' => $nome,
    'RA' => $RA,
];

$bd->update("UPDATE alunos SET nome = :nome, RA = :RA WHERE idAluno = :idAluno", $params);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Aluno atualizado</h3>
    <a href="veralunos.php">Lista de alunos</a>    
</body>
</html>