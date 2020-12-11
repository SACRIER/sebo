<?php
        include_once("conect.php");
        require "verifica.php";
        $titulo = $_POST["titulo"];
        $email = $_SESSION["email"];
		$mensagem = $_POST["mensagem"];
	
        $result_usuario = "INSERT INTO denuncia(id, titulo, email, mensagem) VALUES (null, '$titulo', '$email', '$mensagem')";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario>=1){
            echo "
            <meta charset='UTF-8'>
           <script type=\"text/javascript\">
               alert(\"Denuncia enviada com sucesso enviada com sucesso!!!\");
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