<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$precoAlcool = $_POST["precoAlcool"];
	$precoGasolina = $_POST["precoGasolina"];

	// Faz o cálculo para determinar qual combustível é mais vantajoso
	$razao = $precoAlcool / $precoGasolina;
	if ($razao < 0.7) {
		echo "Abasteça com álcool!";
	} else {
		echo "Abasteça com gasolina!";
	}
}
?>
