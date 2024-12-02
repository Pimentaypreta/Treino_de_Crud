<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Recebe o RGM </title>
</head>
<body>
	<h3> Atualização de Dados </h3>
	<form action="formAtualizaBD.php" method="POST">
		Informe o RGM do aluno : 
		<input type="numeric" name="rgm">
		<input type="submit" name="consultar">
	</form>
	<br> <a href="index.php"> Clique aqui para o menu principal </a>
</body>
</html>