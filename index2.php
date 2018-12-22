<?php
require_once('connection.php');
require_once('functions.php');

     		$valorgasto = isset($_POST['valor'])?$_POST['valor']:0; //Pega valor do gasto
     		$item = isset($_POST['item'])?$_POST['item']:"-----"; //Pega o que foi comprado
     		$categoria = isset($_POST['categoria'])?$_POST['categoria']:"-----"; //Pega a categoria do item
     		$data = date('d-m-Y'); //Pega a data de agora    

               if ($valorgasto == 0 || $item == "-----" || $categoria == "-----"){
                    echo "<h2>Ocorreu um <b>ERRO!</b> Volte para <a href='index.html'>Pagina Inicial</a></h2>.";
               } else {

                   $go = Registro($connect,$item,$categoria,$valorgasto,$data,0);
               }    

               session_start();
               if($_SESSION['registro'] == null){
                    $_SESSION['registro'] = "Registro cadastrado com sucesso !";
               }
               
               header("location: index.php");
     ?>