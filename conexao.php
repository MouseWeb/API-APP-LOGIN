<?php

$db_name= "mysqlap";
$mysql_user = "root";
$mysql_pass = "";
$server_name = "localhost";

$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);

if(!$con){
	//echo "Erro na conexão ".mysqli_connect_erro();
} else{
	//echo "<h4>Conexão criada com sucesso</h4>";
}

?>