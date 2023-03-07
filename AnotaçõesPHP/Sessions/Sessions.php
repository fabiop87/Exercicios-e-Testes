<?php
//esse seria o index
session_start();

$_SESSION['valor_index'] = "index";

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

    <h3>Pagina Inicial</h3>

    <?php if (isset($_SESSION['valor_exemplo'])) : ?>
        <p><?= $_SESSION['valor_exemplo'] ?></p>
    <?php endif; ?>


    <a href="Exemplo.php">Exemplo</a>
</body>

</html>