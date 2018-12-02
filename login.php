<?php

require"conexao.php";

$usuario = $_POST["login_name"];
$senha = $_POST["login_pass"];

$sql_query = "select nome from tb_usuarios where usuario like '$usuario' and senha like '$senha';";

$result = mysqli_query($con, $sql_query);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);

	$nome = $row["nome"];

	echo "Olá, Bem vindo ".$nome;
}else{
	echo"Erro no login usuário ou senha inválida";
}

?>