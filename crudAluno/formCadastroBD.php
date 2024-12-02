<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
</head>
<body>
	<h3> Formulário para cadastro do BD </h3>
	<form method="POST" action="cadastroEnviadoAoBD.php">
		Digite seu RGM : 
		<input type="numeric" name="rgm" required> <br>
		Digite seu Nome :
		<input type="text" name="nome"> <br>
		Digite seu telefone :
		<input type="numeric" name="telefone"> <br>
		Digite seu sexo : 
		<input type="text" name="sexo"> <br><br>
		<input type="submit" value="Salvar"> &nbsp
		<input type="reset" name="Limpar">
	</form>
	<a href="index.php"> clique aqui para voltar ao menu </a>
</body>
</html>


