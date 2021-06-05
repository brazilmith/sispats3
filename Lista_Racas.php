<?php
include('index.php');
include('Classe_racas.php'); //Verificar
?>
<html>

<head>
	<title>Lista de raças de Animais</title>
</head>

<body>
	<form name="formulario" action="Incluir_raças.php" method="post">
		<fieldset style="width:50%; margin:0 auto; margin-top:5%; position:center;">
			<legend><strong>Lista de Raças de Animais</strong></legend>
			<br>
			<button type="submit" class="btn  btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Adicionar Nova Cor">Cadastrar <span class="badge badge-light">+</span></button>
			<a href="index.php" class=" btn-outline-dark btn-secondary btn-sm ">Voltar</a><br>
			<br>


			<nav>
				<table class="table table-hover  table-bordered ">
					<!--  -->
					<thead>
						<tr class="table-active">
							<!---->
							<td style="text-align:center; width:3%; ">Código</td>
							<td style="text-align:center; width:12%;">Raça</td>
							<td style="text-align:center; width:8%;">Ações</td>
						<tr>
					</thead>
					<tbody>
						<?php
						$racas = new cor();//Verificar
						$result = 0;
						$lista = $cor->selectAllCor();
						while ($registro = $lista->fetch_array()) {
							echo '<tr> ';
							echo '    <td class="table-active" style="text-align:center;">' . $registro["CodigoCor"] . '</td>';
							echo '    <td style="text-align:center;">'  . $registro["DescricaoCor"] . '</td>';
							echo '    <td style="text-align:center;">';
							echo '         <a class="btn-outline-info btn-sm" href="alterar_cor.php?id=' . $registro["CodigoCor"] . '">Editar</a>';
							echo '         <a class="btn-outline-info btn-sm"href="javascript:confirmacao(' . $registro["CodigoCor"] . ') ">Excluir</a>';
							echo '    </td>';
							echo '</tr>';
							$result++;
						}
						echo $result;
						?></tbody>
				</table>
			</nav>

		</fieldset>
	</form>
</body>

</html>


<script language="Javascript">
	function confirmacao(id) {
		var resposta = confirm("Você confirma a exclusão da cor " + id + " ?");
		if (resposta == true) {
			window.location.href = "delete_Cor.php?id=" + id;
		}
	}
</script>