<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

    <form action="cadastro_submit.php" method="post" autocomplete="off">

        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" maxlength="60" placeholder="digite seu nome">
        </div>
        <div>
            <label for="RA">RA:</label>
            <input type="text" name="RA" id="RA" maxlength="7" placeholder="0000000">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
        <div>
            <a href="index.php">Voltar</a>
        </div>


    </form>

</body>

</html>