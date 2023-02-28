<?php 
//verifica se é um post
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso negado.');
}

// verificar se existe usuario e senha
if(!isset($_POST['usuario']) || !isset($_POST['senha'])){
    header('Location: index.html');
}

if ($_POST['usuario'] != 'fabio' || $_POST['senha'] != 'sapato') {
    echo 'login invalido';
}


$usuario = $_POST['user'];
$senha = $_POST['senha'];

echo $usuario;

//verificar se a checkbox esta ativa
if(!isset($_POST['checkbox'])){
	echo 'Por favor aceite os termos';
	exit();
}


// radio buttons -> name igual e ids diferentes
// formatação de data/hora -> flatpickr.js.org
echo '<pre>';
print_r($_POST);



//tratamento de arquivos
$tipos_imagem = ['image/png','image/jpeg'];
$pasta_final = 'D:\\Downloads\\'; //pasta de destino dos arquivos

foreach($_FILES as $file){


	//verificar se a imagem é do tipo esperado
	if(!in_array($file['type'],$tipos_imagem)) continue;
	
	//verificar se o arquivo tem tamanho inferior ou igual ao limite
	if($file(['size'] > 500000) continue;

	//verificar as dimensoes do arquivo
	$dimensoes = getimagesize($file['tmp_name']);
	if($dimensoes[0] > 1000 || $dimensoes[1] > 800) continue;

	//mover o arquivo para o destino final
	move_uploaded_file($file['tmp_name'], $pasta_final . file['name']);

}




?>