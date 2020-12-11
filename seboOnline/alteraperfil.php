<?php
		include_once('conect.php');
		require "verifica.php";
        $id = $_POST["id"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$cpf = $_POST["cpf"];
		$nomecompleto = $_POST["nomecompleto"];
		$endereco = $_POST["endereco"];
		$bairro = $_POST["bairro"];
		$cidade = $_POST["cidade"];
		$estado = $_POST["estado"];
		$cep = $_POST["cep"];

		$sqlp = "UPDATE livro SET email='$email' WHERE id = '$id'";
		
        $sql = "UPDATE cadastro SET email='$email', senha='$senha', cpf='$cpf', nomecompleto='$nomecompleto', endereco='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep' WHERE id = '$id'";
		
        if(mysqli_query($conn, $sql))
        {
            echo 
            "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=principal.php'>
			    <meta charset='UTF-8'>
				<script type=\'text/javascript\'>
					alert(\'ALTERAÇÃO FEITA COM SUCESSO XD, RELOGUE CASO QUEIRA VERIFICAR !\');
				</script>
            ";
        }
            else{
           	  echo "
           	  	<meta charset='UTF-8'>
					<script type=\"text/javascript\">
						alert(\"ERRO ao alterar!\");
					</script>
                 ";
                 exit();
               //echo"<meta http-equiv='refresh' content='3;URL=adm.php'>";
                }          
?>