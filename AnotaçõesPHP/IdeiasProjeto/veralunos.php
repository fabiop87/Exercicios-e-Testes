<?php 
//criar instancia pdo


require_once('BD/config.php');
require_once('BD/EasyPDO.php');

$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

//buscar os alunos na tabela

$alunos = $bd->select("SELECT * FROM alunos");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver alunos</title>
</head>
<body>
    <h3>Lista de alunos</h3>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>RA</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($alunos as $aluno): ?>
                <tr>
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['RA'] ?></td>
                    <td><a href="update.php?idAluno=<?= aes_encrypt($aluno['idAluno'])?>">Editar</a></td>
                    <td><a href="delete.php?idAluno=<?= aes_encrypt($aluno['idAluno'])?>">Excluir</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <div>
        <a href="index.php">Voltar</a>
    </div>
    
</body>
</html>