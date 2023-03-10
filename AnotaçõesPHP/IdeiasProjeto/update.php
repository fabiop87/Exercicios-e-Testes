<?php
//verificar se o id existe
if (!isset($_GET['idAluno'])) {
    die('acesso invalido');
}

$idAluno = $_GET['idAluno'];

//adicionar à base de dados
require_once('BD/config.php');
require_once('BD/EasyPDO.php');
$bd =  new EasyPDO\EasyPDO(MYSQL_OPTIONS);

//desencriptar id antes de fazer a query
$idAluno = aes_decrypt($idAluno);

if ($idAluno == -1 || $idAluno == false) {
    die('nao vai alterar o hash aqui nao');
}

$params = [
    ':idAluno' => $idAluno,
];
$aluno = $bd->select("SELECT * FROM alunos WHERE idAluno = :idAluno", $params)[0];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar aluno</title>
</head>

<body>


    <form action="update_submit.php" method="post" autocomplete="off">
        <input type="hidden" name="idAluno" value="<?= aes_encrypt($aluno['idAluno']) ?>">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" maxlength="60" placeholder="digite seu nome" value="<?= $aluno['nome'] ?>">
        </div>
        <div>
            <label for="ra">RA:</label>
            <input type="text" name="RA" id="RA" maxlength="7" placeholder="0000000" value="<?= $aluno['RA'] ?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
        <div>
            <a href="veralunos.php">Cancelar</a>
        </div>


    </form>


</body>

</html>