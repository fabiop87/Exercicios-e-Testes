<?php 

require_once '../Config.php';
// Conexao

$pdo =  new PDO(
  "mysql:host=" . MYSQL_HOST . ";" . 
  "dbname=" . MYSQL_DATABASE . ";charset=utf8",
  MYSQL_USER,
  MYSQL_PASS
);

//Sem parametrização

//Select
$clientes = $pdo->query("SELECT * FROM clientes")->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($clientes);

//Insert
$pdo->query("INSERT INTO clientes VALUES(0, 'awawa')");

//Update
$pdo-<query("UPDATE clientes SET nome = 'bananinha' WHERE id_cliente = 3");

//Delete
$pdo->query("DELETE FROM clientes WHEREE id_cliente = 3");

//Melhor
$nome_cliente = 'jhonson';

// $q = $pdo->query("INSERT INTO clientes VALUES(0, ?)");
// $q->execute([$nome_cliente]);
//

$q = $pdo->query("INSERT INTO clientes VALUES(0, :nome)");
$q->execute(
  [
    'nome' => $nome_cliente
  ]
);

?>
