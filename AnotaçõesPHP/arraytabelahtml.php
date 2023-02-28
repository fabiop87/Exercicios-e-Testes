<?php


$dados = [
    ['joao', 'M', 'Portugal'],
    ['ana', 'F', 'Wawwa'],
    ['queijo', 'F', 'Miau'],
    ['cachorro', 'M', 'josney'],
];


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
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Genero</th>
                <th>Pais</th>
            </tr>
        </thead>
    </table>
</body>

</html>

<?php foreach ($dados as $item) : ?>

    <tr>
        <td><?= $item[0] ?></td>
        <td><?= $item[1] ?></td>
        <td><?= $item[2] ?></td>
    </tr>

<?php endforeach; ?>