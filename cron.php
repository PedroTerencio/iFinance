<?php
		require_once("connection.php");
		require_once("functions.php");

		$query = mysqli_query($connect,"SELECT * FROM tb_rotina;");
		while($row = mysqli_fetch_array($query))
		{
			$rows[] = $row;
		}
			
			foreach($rows as $row)
			{
				
				if (strtotime($row['dt_vencimento']) == strtotime(date('d-m-Y'))){

					Registro($connect,$row['nm_item'],$row['nm_categoria'],$row['vl_gasto'],$row['dt_vencimento'],0);

					$data = date('d-m-Y', strtotime('+1 month'));
					$codigo = $row['cd_rotina'];
					mysqli_query($connect,"UPDATE tb_rotina SET dt_vencimento = '$data' WHERE cd_rotina = $codigo;");
					}
				
			}






?>