<?php 

require_once '../Config.php';
// Conexao

$pdo =  new PDO(
  "mysql:host=" . MYSQL_HOST . ";" . 
  "dbname=" . MYSQL_DATABASE . ";charset=utf8",
  MYSQL_USER,
  MYSQL_PASS
);

$dados = $pdo->query("SELECT * FROM clientes");
$clientes = $dados->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($clientes);


/*
INSERT INTO clientes VALUES(0, 'josney');

##dentro do html

<h3>CLIENTES</h3>
<hr>
<table>
<thead>
<tr>
<th>ID cliente</th>
<th>Nome</th>
</tr>
</thead>
<tbody>
<?php foreach($clientes as $cliente): ?>
<tr>
<td><?= $cliente["id_cliente"] ?></td>
<td><?= $cliente["nome"] ?></td>
</tr>
<?php endforeach; ?>
I

<p>Total de clientes: <?= count($clientes) ?> </p>

*/




?>
