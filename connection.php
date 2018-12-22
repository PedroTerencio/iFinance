<?php 
$connect = mysqli_connect("localhost", "root", "", "db_ifinance"); //Variavel para conectar

if (!$connect){ // se não retornar nada ou der erro
	echo "<h1>Não foi possivel conectar com o Banco</h1> </br>"; // MSG de erro
	echo "<b>MySQLI ERROR : </b>" . mysqli_connect_error(); // Mostra erro de conexao
	exit(); // Encerra o PHP
} else {
	mysqli_set_charset($connect, "utf8mb4") or die (mysqli_error($connect));
}

?>