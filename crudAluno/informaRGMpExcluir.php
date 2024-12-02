<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Recebe o RGM do aluno </title>
</head>
<body>
	<h3> Exclusão de dados </h3>
	<form action="excluirDadosBD.php" method="GET">
		Informe o RGM do aluno :
		<input type="numeric" name="rgm">
		<input type="submit" name="consultar">
	</form>
	<br><a href="index.php"> Clique aqui para voltar ao menu </a>
</body>
</html>