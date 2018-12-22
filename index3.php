<?php
		require_once "connection.php";
		require_once "functions.php";

		$valoradd = isset($_POST['salario'])?$_POST['salario']:0;
		$data = date("d-m-Y");

		if ($valoradd == 0 || !is_numeric($valoradd)){
			echo "<h2>Ocorreu um <b>ERRO</b> ! Volte para a <a href='salario.html'>Pagina Principal</a>.</h2>";
		} else {
			$go = AdicionarSalario($connect,$valoradd,$data);

			session_start();
               if($_SESSION['registro'] == null){
                    $_SESSION['registro'] = "Salario cadastrado com sucesso !";
               }
               
               header("location: salario.php");
		}


		

?>