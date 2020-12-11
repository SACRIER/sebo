<?php
session_start();
	include_once("conect.php");
	if(($_POST['email']) && ($_POST['senha'])){
		$email = mysqli_real_escape_string($conn, $_POST['email']);//
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
                
        $result_usuario = "SELECT * FROM cadastro WHERE email = '$email' && senha = '$senha'" ;
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$rs = mysqli_fetch_assoc($resultado_usuario);//obtem uma matriz associativa
		if($rs){
	
            $_SESSION['id'] = $rs['id'];
			$_SESSION['email'] = $rs['email'];
			$_SESSION['senha'] = $rs['senha'];
			
				header("Location:principal.php");
			}
		}else{
           	  echo "
				 <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=login.php'>
				 <meta charset='UTF-8'>
					 <script type=\"text/javascript\">
						 alert(\"Erro ao efetuar o login!\");
					 </script>
				 ";
               //echo"<meta http-equiv='refresh' content='3;URL=adm.php'>";
                }          
?>