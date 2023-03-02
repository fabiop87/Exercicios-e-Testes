// dentro do html

<?php 

foreach($query->fetchAll(PDO::FETCH_ASSOC) as $row){
  ?>
  <tr>
    <td><?= $row['nome'] ?> </td>
    <td><?= $row['algumacoisa'] ?> </td>
  </tr>
<?php
}
?>


?>



// 


<?php 

vardump($_POST);

$pdo = new PDO('mysql:host=localhost;dbname=$banco_de_dados', '$user', '$senha');

//$q = "INSERT INTO tabela VALUES (null, ' " . $_POST['nome'] . "', " . $_POST['algumacoisa'] .")";

$q = "INSERT INTO tabela VALUES (null, :nome, :algumacoisa)";
$query = $pdo->prepare($q);
$query->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
$query->bindParam(':algumacoisa', $_POST['algumacoisa'], PDO::PARAM_INT);
$query->execute();


header('Location:/teste.php');


?>
