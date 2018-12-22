<?php
	require_once("connection.php");
	require_once("functions.php");


	$item = isset($_POST['item'])?$_POST['item']:"-----";  
	$categoria = isset($_POST['categoria'])?$_POST['categoria']:"-----";
	$valor = isset($_POST['valor'])?$_POST['valor']:0;
	$dia = isset($_POST['dia'])?$_POST['dia']:0;

	if ($item == "-----" || $categoria == "-----" || $valor <= 0 || $dia <= 0 && $dia > 31 ){
		echo "<H2>Ocorreu um <B>ERRO</B>. Volte para a <a href='rotina.html'>Pagina Principal</a></H2>";
	} else {
		$NVdata = Newdata($dia);	
		$op = Rotina($connect,$item,$categoria,$valor,$NVdata);
		session_start();
               if($_SESSION['registro'] == null){
                    $_SESSION['registro'] = "Rotina cadastrada com sucesso !";
               }
               
               header("location: rotina.php");
	}


	


?>