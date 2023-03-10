<?php 
//excluir 
if(!isset($_GET['idAluno'])){
    die('acesso invalido');
}

$idAluno = $_GET['idAluno'];

//excluir da base de dados
require_once('BD/config.php');
require_once('BD/EasyPDO.php');
$bd =  new EasyPDO\EasyPDO(MYSQL_OPTIONS);

//desencriptar id antes de fazer a query
$idAluno = aes_decrypt($idAluno);

$params = [
    'idAluno' => $idAluno,
];


$bd->delete("DELETE FROM alunos WHERE idAluno = :idAluno", $params);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir aluno</title>
</head>
<body>
    <h4>Aluno excluido com sucesso</h4>
    <div>
        <a href="veralunos.php">Lista de alunos</a>
    </div>
</body>
</html>