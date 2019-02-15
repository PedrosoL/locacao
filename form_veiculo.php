<?php
	include("menu.php");
?>

<fieldset>
<legend>Inserir novo veículo</legend>
<form method="post" action="insere_veiculo.php">

	<input type="text" name="placa" placeholder="Insira a placa do veículo..." /><br /><br />
	<input type="text" name="marca" placeholder="Insira a marca do veículo..." /><br /><br />
	<input type="text" name="modelo" placeholder="Insira o modelo do veículo..." /><br /><br />
	<input type="number" name="ano" placeholder="Insira o ano do veículo..." /><br /><br />
	<input type="number" name="km" placeholder="Insira a kilometragem do veículo..." /><br /><br />
	<input type="number" name="valor_diaria" placeholder="Insira o valor da diária do veículo..." /><br /><br />

	<button>Enviar</button>

</form>
</fieldset>
