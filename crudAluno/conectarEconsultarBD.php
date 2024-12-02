<html>
<head>
	<meta charset="utf-8">
	<title> Conectando ao BD</title>
</head>
<?php 
	require('dao.php');
?>
<body>
	<h4> Conexão ao BD MySql</h4>
	<?php
		$ret = conectar('localhost','root','','backend');
		echo "conectado ao banco:".'backend <br>';

		$consulta = "select * from alunos";

		$obj_consulta = mysqli_query($ret,$consulta) or die(mysqli_error);

		echo "<br>Seguem os dados da tabela alunos: <br> <br>";
		while ($reg_consulta = mysqli_fetch_array($obj_consulta)){
			echo $reg_consulta['rgm'].' ';
			echo $reg_consulta['nome'].' ';
			echo $reg_consulta['telefone'].' ';
			echo $reg_consulta['sexo'].'<br>';
		}
	?>
</body>
</html>