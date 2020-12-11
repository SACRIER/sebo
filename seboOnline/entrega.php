<?php
		include_once('conect.php');
		$cep = $_POST['cep'];
		$estado = $_POST['estado'];
		$bairro = $_POST['bairro'];
		$pontoref = $_POST['pontoref'];
		$cidade = $_POST['cidade'];
		$endereco = $_POST['endereco'];
		$numcasa = $_POST['numcasa'];
		
        $result_usuario = "INSERT INTO entrega VALUES (null, '$cep', '$estado', '$bairro', '$pontoref', '$cidade', '$endereco', '$numcasa')";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario>=1){
				header('Location:fecharcompra.php');
				echo "
           	  	<meta charset='UTF-8'>
					<script type=\"text/javascript\">
						alert(\"Endereço registrado com sucesso\");
					</script>
				 ";

			}
		else{
           	  echo "
           	  	<meta charset='UTF-8'>
					<script type=\"text/javascript\">
						alert(\"ERRO ao tenta adicionar o endereco, tente novamente!\");
					</script>
           	  ";
               //echo"<meta http-equiv='refresh' content='3;URL=adm.php'>";
                }          
?>