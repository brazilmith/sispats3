<?php 
	include('index.php');
	include('Classe_Cor.php');
?>
<html>
	<head>
		<title>Lista de Cores de Animais</title>
	</head>
	<body>
		<form name="formulario" action ="Incluir_cor.php" method="post">
			<fieldset style="width:50%; margin:0 auto; margin-top:5%; position:center;">
				<legend><strong>Lista de Cores de Animais</strong></legend>
				<br>
				<button type="submit" >Novo</button>
				<a href="index.php">Voltar</a><br> 
				<br>
				<table>
					<tr bgcolor = "#A9A9A9">
						<td style = "text-align:center; width:3%; " >Código</td> 
						<td style = "text-align:center; width:12%;" >Cor</td> 
						<td style = "text-align:center; width:8%;" >Ações</td> 
					<tr>
					<?php 
						$cor = new cor();  
						$lista = $cor->selectAllCor();
						while ( $registro = $lista->fetch_array() ){
							echo '<tr>'; 
							echo '    <td style="text-align:center;">'. $registro["CodigoCor"].'</td>';
							echo '    <td style="text-align:left;">'  . $registro["DescricaoCor"].'</td>';
							echo '    <td style="text-align:center;">';
							echo '         <a href="alterar_cor.php?id='.$registro["CodigoCor"].'">Editar</a>';
							echo '         <a href="javascript:confirmacao(' .$registro["CodigoCor"].')">Excluir</a>';
							echo '    </td>';
							echo '</tr>'; 
						}
					?>			 
				</table>
			</fieldset>
		</form>
	</body>
</html>


<script language="Javascript">
			function confirmacao(id) {
     		var resposta = confirm("Você confirma a exclusão da cor " + id + " ?");
 		     if (resposta == true) {
          		window.location.href = "delete_Cor.php?id="+id;
     			}	
			}
</script>
