<?php
	require ("dao.php");
	$rgm = $_POST["rgm"];
	$nome = $_POST["nome"];
	$telefone = $_POST["telefone"];
	$sexo = $_POST["sexo"];

	$con = conectar('localhost', 'root','', 'backend');
	mysqli_set_charset($con,"utf8");
	$sql = "UPDATE alunos set nome='$nome', telefone='$telefone', sexo='$sexo' WHERE rgm=$rgm";

	mysqli_query($con,$sql) or die(mysqli_error($con));

	echo "<script> alert('Dados Atualizados com sucesso');location.href='informaRGMpAtualizar.php';</script>";
?>