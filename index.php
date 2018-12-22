<!DOCTYPE html>
<html>
<head>
		
     <meta charset="utf8"/>
     <title>iFinance</title>     
     <link rel="stylesheet" href="style.css"/>
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
			<li><a href="salario.php">Adicionar Valor</a></li>
			<li><a href="rotina.php">Criar Rotina</a></li>
		</ul>	
	</nav>

	<header>
		<h1 id="ifinance">iFinance</h1>
		<h2 id="ifinance">Suas Finanças de Forma Simples e Iteligente.</h2>
	</header>	
		
		<form id="coleta" action="index2.php" method="post">
			<h1>Controle de Gastos</h1>

			    <label for="item">Item:</label><br/>
			    <input class="input" name="item" type="text" placeholder="Ex:Agua,Compras,Lanche" required> <br/><br/>

			    <label for="categoria">Categoria:</label><br/>
			    <input class="input" name="categoria" type="text" placeholder="Ex: Pessoal, Escola, Supermercado" required> <br/><br/>

			    <label for="valor">Valor:</label><br/>
			    <input class="input" name="valor" type="number" placeholder="18.55" required step="0.01"> <br/><br/>

			    <input class="btn" type="submit" value ="Enviar"> 
		 			
		     
	 	</form> 

</body>
</html>