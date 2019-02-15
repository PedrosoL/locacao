<?php
	//alterado
	include("menu.php");

    include("conexao.php");

    $consulta = "SELECT * FROM veiculo";
	
	// mysqli_error($conexao)
    $resultado = mysqli_query($conexao,$consulta) 
		or die("Erro. Não foi possível consultar a lista de carros no sistema.");

	echo "<table border='1'>";

	echo "<tr>
			<th>Placa</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Ano</th>
			<th>Valor Diária</th>
			<th>Kilometragem</th>
		  </tr>";

    while($linha=mysqli_fetch_assoc($resultado)){     
        echo "
		<tr>
			<td>" .$linha["id_veiculo"]. "</td>
			<td>" .$linha["marca"]. "</td>
			<td>" .$linha["modelo"]. "</td>
			<td>" .$linha["ano"]. "</td>
			<td>R$ " .$linha["valor_diaria"]. "</td>
			<td>" .$linha["km"]. " Km</td>
		</tr>
		";
    }
	
	echo "</table>";

?>