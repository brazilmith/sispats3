<?php
	include_once('index.php');
	include('Classe_racas.php');

	$cor = $_GET["id"];

	$cor = new cor();
	$cor->setcor($cor);
	$dados = $cor->selectCor();
	$cor = $dados["cor"];
	$descricaoCor = $dados["DescricaoCor"];

	echo '<html>';
	echo '	<head>';
	echo '		<title>Cadastro de Cores de Animais</title>';
	echo '  </head>';
	echo '	<body>';
	echo '		<form name="formulario" action = "Salvar_Alterar_Cor.php" method="post">';
	echo '			<fieldset style="width:30%; margin:0 auto; margin-top:10%; position:center;">';
	echo '				<legend><strong> Cadastro de Cores de Animais [ Alteração ] </strong></legend>';
	echo '				<br>';
	echo '				<label>Código</label><br>';
	echo '				<input type="text" name="cor" size="10" readonly="true" value="'.$cor.'"/><br>';
	echo '				<label>Cor</label><br>';
	echo '				<input type="text" name="descricaoCor" size="45" maxlength="45" autofocus value ="'.$descricaoCor.'"/><br><br>';
	echo '				<input type="submit" value="Salvar"/>';
	echo '				<a href="lista_cores.php">Voltar</a>';
	echo '			</fieldset>';
	echo '		</form>';
	echo '	</body>';
	echo '</html>';
?>