<?php

	include("menu.php");

    include("conexao.php");

   
    $consulta = "SELECT 
    				cod_veiculo,
    				marca,
    				modelo,
    				ano,
    				nome,
    				data_inicio,
    				data_fim,
    				movimento.valor_diaria
    				from movimento
    				INNER JOIN  cliente ON
    					id_cliente = cod_cliente
    				INNER JOIN  veiculo ON
    					id_veiculo = cod_veiculo";
	
	// mysqli_error($conexao)
    $resultado = mysqli_query($conexao,$consulta) 
		or die(mysqli_error($conexao));

	echo "<table border='1'>";

	echo "<tr>
			<th>Nome</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Ano</th>
			<th>Placa</th>
			<th>Data inicio</th>
			<th>Data Fim</th>
			<th>Valor Diária</th>
		  </tr>";

    while($linha=mysqli_fetch_assoc($resultado)){     
        echo "
		<tr>
			<td>" .$linha["nome"]. "</td>
			<td>" .$linha["marca"]. "</td>
			<td>" .$linha["modelo"]. "</td>
			<td>" .$linha["ano"]. "</td>
			<td>" .$linha["cod_veiculo"]. "</td>
			<td>" .$linha["data_inicio"]. "</td>
			<td>" .$linha["data_fim"]. "</td>
			<td>" .$linha["valor_diaria"]. "</td>
		</tr>
		";
    }
	
	echo "</table>";

?>