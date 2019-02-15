<?php
	//alterado
	include("menu.php");

    include("conexao.php");

	$id_veiculo = $_POST["placa"];
	$marca = $_POST["marca"];
	$modelo = $_POST["modelo"];
	$ano = $_POST["ano"];
	$valor_diaria = $_POST["valor_diaria"];
	$km = $_POST["km"];

    $insercao = 
		"INSERT INTO veiculo (id_veiculo, marca, modelo, ano, valor_diaria,km) 
				VALUES ('$id_veiculo','$marca','$modelo','$ano','$valor_diaria','$km')";
	
	// mysqli_error($conexao)
    mysqli_query($conexao,$insercao) 
		or die("Erro. Não foi possível inserir o carro no sistema.");

	echo "Veículo cadastrado com sucesso.";

?>