<?php
        include_once('conect.php');
        require "verifica.php";
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $email = $_SESSION['email'];
		$mensagem = $_POST['mensagem'];
	
        $result_usuario = "INSERT INTO faleconosco(id, nome,tipo, email, mensagem) VALUES (null, '$nome','$tipo', '$email', '$mensagem')";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario>=1){
            echo "
            <meta charset='UTF-8'>
           <script type=\"text/javascript\">
               alert(\"Mensagem enviada com sucesso!!!\");
           </script>
            ";
            header("Refresh: 0; url=principal.php");
			}
		else{
           	  echo "
           	  	<meta charset='UTF-8'>
					<script type=\"text/javascript\">
						alert(\"ERRO AO ENVIAR A MENSAGEM, CHEQUE OS REQUISITOS E TENTE NOVAMENTE!!!\");
					</script>
           	  ";
               //echo"<meta http-equiv='refresh' content='3;URL=adm.php'>";
                }          
?>