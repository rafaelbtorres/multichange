
<?php
	$host= "127.0.0.1";
	$usuario = "root";
	$senha = "";
	$banco = "multichange";

	$conectar = mysqli_connect($host, $usuario, $senha, $banco);

	if (mysqli_connect_errno($conectar))
	echo "Erro na Conexão com o Banco de dados";
	?>