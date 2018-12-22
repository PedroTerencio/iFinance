<!DOCTYPE html>
<html>
	<head>
		<title>iFinance</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style.css">
	 <script>alert('<?php session_start();
     if($_SESSION['registro']!=null)
     	{echo $_SESSION['registro'];
 		unset($_SESSION['registro']);
 		session_destroy();}
     ?>');</script>
	</head>
		
		<body>

			<nav id="menu">
				<ul>
					<li><a href="rotina.php">Criar Rotina</a></li>
					<li><a href="index.php">Pagina Inicial</a></li>
				</ul>	
			</nav>

			<header>
				<h1 id="ifinance">iFinance</h1>
				<h2 id="ifinance">Suas Finanças de Forma Simples e Iteligente.</h2>
			</header>	
		
				<form id="coleta3" action="index3.php" method="post" >
					<h1>Inserir Valor a Conta</h1>

					<label for="salario">Valor a Adicionar:</label><br/>
					<input class="input" type="number" name="salario" placeholder="Ex: 300 256.55 1000.96" required step="0.01" /><br><br><br><br>

					<input class="btn" type="submit" value="Adicionar"/>
				</form>
		
				
		</body>
</html>