<?php
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$curso = $_POST["curso"];
$perfil = $_POST["perfil"];
$senha = $_POST["senha"];

if ($perfil === "aluno") {
	$horario = $_POST["horario"];
	$sala = $_POST["sala"];
	echo "Perfil: Aluno<br>";
	echo "Curso: $curso<br>";
	echo "Horário: $horario<br>";
	echo "Sala: $sala<br>";
} else if ($perfil === "professor") {
	$disciplinas = $_POST["disciplinas"];
	$dias_horarios = $_POST["dias_horarios"];
	echo "Perfil: Professor<br>";
	echo "Disciplinas: $disciplinas<br>";
	echo "Dias e Horários: $dias_horarios<br>";
} else if ($perfil === "coordenador") {
	echo "Perfil: Coordenador<br>";
	echo "Curso: $curso<br>";
} else {
	echo "Perfil: Não informado<br>";
}

echo "Nome: $nome<br>";
echo "CPF: $cpf<br>";
echo "E-mail: $email<br>";
echo "Senha: $senha<br>";
?>
