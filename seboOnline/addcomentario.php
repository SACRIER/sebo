<?php
	
    include_once('conect.php');
	require "verifica.php"; 

	$id = $_REQUEST["id2"];
   // $comentario_id = $_GET["id"];
	$email = $_SESSION["email"];
	$data = date("Y/m/d");
    $comentario = $_POST["comentario"];
    
    
    

    
    //-----------------------------------------------------------------------------------
    $res_us = "INSERT INTO comentarios (id, id2, email, quando, comentario) VALUES (null, '$id', '$email', '$data', '$comentario')";
	//$res_us = "INSERT INTO exibir(id, extitulo, exautor, exfoto1) VALUES (null,'$titulo','$autor','$path1')";

	$resultado = mysqli_query($conn, $res_us);

	if(mysqli_affected_rows($conn) != 0){
				
					echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=principal.php'>
			<meta charset='UTF-8'>
				<script type=\"text/javascript\">
					alert(\"COMENTARIO dALE\");
				</script>
				";
				
				//echo"ERRO".mysqli_error();
			}

			else{
				/*echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=confirmacadastro.html''>
				<meta charset='UTF-8'>
					<script type=\"t	ext/javascript\">
						alert(\"Ocorreu um problema! Tente novamente.\");
					</script>

				";*/
				echo"ERRO".mysqli_error();
			}
?>