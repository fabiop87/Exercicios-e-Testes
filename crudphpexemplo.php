<?php
    $pdo = new PDO('mysql:host=localhost;dbname=nomeDoBancoDeDados','root','senha')
  //  $pdo->setAttibute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// fazer mais validações(tirar html, somente string, etc) mais segurança 

    if(isset($_GET['delete'])){
        $id = (int)$_GET['delete'];
        $pdo->exec("DELETE FROM clientes WHERE id=$id");
        echo 'deleted id: '.$id;
    }

    // INSERT.
    if(isset($_POST['nome']){
        $sql = $pdo->prepare("INSERT clientes VALUES (null,?,?)")
        $sql->execute(array($_POST['nome'],$_POST['banana']));
    })
    //UPDATE.
    $nome= 'jhonson';
    $sql = $pdo->prepare("UPDATE clientes SET nome=$nome WHERE id=###");
    $sql = $pdo->execute(array($_POST['nome']));

    <form method="post">
        <input type="text" name="nome">
        <input type="text" name="banana">
        <input type="submit" value="OK">
    </form>
?>

<?php
//READ.
    $sql = $pdo->prepare("SELECT * FROM clientes");
    $sql->execute();

    $fetchClientes = $sql->fetchAll();
    foreach ($fetchClientes as $key => $value) {
        echo $value['nome']. '|' .$value['banana'];
        echo '<hr>'; 
    }
?>

<?php
//DELETE.
    $sql = $pdo->prepare("SELECT * FROM clientes");
    $sql->execute();

    $fetchClientes = $sql->fetchAll();
    foreach ($fetchClientes as $key => $value) {
        echo '<a href="?delete='.$value['id'].'">(X)</a>'.$value['nome']. '|' .$value['banana'];
        echo '<hr>'; 
    }
?>
