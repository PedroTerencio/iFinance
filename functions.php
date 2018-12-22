<?php 
		    function AdicionarSalario($conn,$sal,$data){       
               $STsalario = mysqli_query($conn,"SELECT vl_conta FROM tb_conta;");
               $RDsalario = mysqli_fetch_assoc($STsalario);
               $totalconta = $RDsalario['vl_conta'] + $sal;
               mysqli_query($conn,"UPDATE tb_conta SET vl_conta ='$totalconta';" ) or die(mysqli_error($conn));
               Registro($conn,"DEPOSITO","SALARIO","0",$data,$sal);
               }

        function Registro($conn,$item,$categoria,$valorgasto,$data,$ganho){
        if (mysqli_query($conn,"INSERT INTO tb_item(nm_item, nm_categoria) VALUES ('$item','$categoria');") or die (mysqli_error($conn)))
     		{
     			$fk = mysqli_insert_id($conn); 
     			$STsalario = mysqli_query($conn, "SELECT vl_conta FROM tb_conta;");
     			$RDsalario = mysqli_fetch_assoc($STsalario);
     			$totalconta = $RDsalario['vl_conta'] - $valorgasto;  			    			
                    
                    if (is_numeric($totalconta) && $totalconta != null && $fk != null) {
                    	mysqli_query($conn,"INSERT INTO tb_valores(vl_gasto, fk_item, dt_gasto, vl_ganho) VALUES ('$valorgasto','$fk','$data','$ganho');") or die (mysqli_error($conn));

                    	mysqli_query($conn,"UPDATE tb_conta SET vl_conta = '$totalconta';") or die (mysqli_error($conn));
                    } else {

                         echo "Ocorreu um erro no Registro!";
                    }
            }            
     		}

        function Rotina($conn,$item,$categoria,$valorgasto,$vencimento){

          mysqli_query($conn,"INSERT INTO tb_rotina(nm_item, nm_categoria, vl_gasto, dt_vencimento) VALUES ('$item','$categoria','$valorgasto','$vencimento');");
        }
        /* // Proxima versão !!!
        function UpdateRotina($conn,$codigo,$item,$categoria,$valorgasto,$vencimento){

          mysqli_query($conn,"UPDATE tb_rotina SET nm_item = '$item', nm_categoria = '$categoria', vl_gasto = '$valorgasto', dt_vencimento = '$vencimento' WHERE cd_rotina = '$codigo';");
        }*/

        function NewData($dia){
            $hoje = date('d-m-Y');
            $data = explode("-",date('d-m-Y'));
            $VFmes = date("t", strtotime('m-Y'));
            $VRdia = $dia < $VFmes ? $dia:$VFmes; //verifiquei de é 28..29..30...31
            $data[0] = $VRdia;
            $NVdata = implode("-",$data); // 12/12/18
            if (strtotime($NVdata) < strtotime($hoje)){
            $New = date('d-m-Y', strtotime('+ 1 month',strtotime($NVdata)));
            return $New; //12/01/19
            } else {
              return $NVdata;
            }                        
        }
?>