<?php
	include("menu.php");
?>

<fieldset>
<legend>Inserir novo cliente</legend>
<form method="post" action="insere_cliente.php">

	<input type="text" name="cpf" placeholder="Insira o cpf do Cliente..." /><br /><br />
	<input type="text" name="nome" placeholder="Insira o nome do Cliente..." /><br /><br />
	<input type="text" name="endereco" placeholder="Insira o endereço do Cliente..." /><br /><br />
	<input type="text" name="bairro" placeholder="Insira o bairro do Cliente..." /><br /><br />
	<input type="text" name="cidade" placeholder="Insira a cidade do Cliente..." /><br /><br />
	<input type="text" name="estado" placeholder="Insira o estado do Cliente..." /><br /><br />
	<input type="text" name="cep" placeholder="Insira o cep do Cliente..." /><br /><br />
	<input type="text" name="telefone" placeholder="Insira o telefone do Cliente..." /><br /><br />
	<input type="email" name="email" placeholder="Insira o email do Cliente..." /><br /><br />
	<input type="date" name="data_nascimento" placeholder="Insira a data de nascimento do Cliente..." /><br /><br />

	<button>Enviar</button>

</form>
</fieldset>
