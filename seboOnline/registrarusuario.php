<?php
		include_once('conect.php');
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$cpf = $_POST['cpf'];
		$nomecompleto = $_POST['nomecompleto'];
		$endereco = $_POST['endereco'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$cep = $_POST['cep'];
		
		

    

		$select = ("SELECT * FROM cadastro WHERE email='$email'");
		$result = $conn->query($select);

	if ($result->num_rows == 0) 
	{   
        $sql = "INSERT INTO cadastro VALUES (null, '$email', '$senha', '$cpf', '$nomecompleto', '$endereco', '$bairro', '$cidade', '$estado', '$cep')";
		$sql = mysqli_query($conn, $sql);
		if ($conn->query($sql) >= 0) {    
			
			echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=autorizacao.php'>
			<meta charset='UTF-8'>
				<script type=\"text/javascript\">
					alert(\"CADASTRO FEITO COM SUCESSO XD!\");
				</script>
			";
			}else{
           	  echo "
           	  	<meta charset='UTF-8'>
					<script type=\"text/javascript\">
						alert(\"Cadastro feito com sucesso\");
					</script>
           	  ";
			}
			}else{


					$select = ("SELECT * FROM cadastro WHERE email='$email'");
					$result = $conn->query($select);
		
					if ($result->num_rows > 0) 
					{   
						while($row = $result->fetch_assoc()) 
						{
							echo  "<script type='text/javascript'> alert('Estes dados ja foram cadastrados:)');history.go(-1);</script>";
							$email = "".$row["email"]."";
							
						}
					} 
		
			
		
			}       
		 
?>