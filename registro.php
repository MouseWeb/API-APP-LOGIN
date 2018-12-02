<?php

require"conexao.php";

$nome = $_POST["user"];
$usuario = $_POST["user_name"];
$senha = $_POST["user_pass"];

$sql_query = "insert into tb_usuarios values ('$nome','$usuario','$senha');

";

if(mysqli_query($con, $sql_query)){
	//echo "dados inseridos com sucesso!";
}else{
	//echo "erro".mysql_connect_error();
}

?>