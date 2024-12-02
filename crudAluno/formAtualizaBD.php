<?php 
	require("dao.php");
	$rgm = $_POST['rgm'];
	try{

	$ret = conectar('localhost', 'root', '', 'backend');
	mysqli_set_charset($ret,"utf8");
	$sql = "select * from alunos where rgm=$rgm";
	$consulta = mysqli_query($ret,$sql) or die(mysqli_error($con));
	$registros = mysqli_num_rows($consulta);

	if ($registros > 0){
		echo "<h1> Atualização de Dados";
		echo "<br><h3> Seguem os dados do RGM: $rgm </h3>";
		while($reg_consulta = mysqli_fetch_array($consulta)){
			$nome = $reg_consulta['nome'];
			$telefone = $reg_consulta['telefone'];
			$sexo = $reg_consulta['sexo'];
		}
?>
	<html>
	<head>
		<meta charset="utf-8">
		<title> Alteração de Dados </title>
	</head>
	<body text="blue" bgcolor="ccbbaa">
		...Altere os campos desejados <br><br>
		<form action="atualizacaoBD.php" method="POST">
			<input type="hidden" name="rgm" value="<?php echo $rgm; ?>"><br><br>
			Nome : <input type="text" name="nome" value="<?php echo $nome; ?>"><br>
			telefone : <input type="numeric" name="telefone" value="<?php echo $telefone; ?>"><br>
			sexo : <input type="text" name="sexo" value="<?php echo $sexo; ?>"><br><br>
			<input type="submit" name="salvar">
		</form>
		<a href="informaRGMpAtualizar.php"> Voltar a tela anterior </a> <br><br>
		<a href="index.php"> Clique aqui para voltar ao Menu </a>
	</body>
	</html>
<?php 
	} 
	else{
		echo "<script> alert('RGM não encontrado!');'location.href='informaRGMpAtualizar.php';</script>";
		}
	} catch (Exception $e) { 
		echo 'Falha no acesso ao BD : '.$e->getMessage();
	}
?>