<?php
	
    include_once("conect.php");
		$id = $_POST['id'];
    	$cep = $_POST['cep'];
		$estado = $_POST['estado'];
		$bairro = $_POST['bairro'];
		$pontoref = $_POST['pontoref'];
		$cidade = $_POST['cidade'];
		$endereco = $_POST['endereco'];
		$numcasa = $_POST['numcasa'];
		$formapagamento = $_POST["formapagamento"];
		$rand = 0;
		$numeropedido = rand(500, 750);
		$numeroperido = $_POST["numeropedido"];

	$res = "INSERT INTO finaliza(id, formapagamento, numeropedido) VALUES (null, '$formapagamento', '$numeropedido')";
    $res = mysqli_query($conn, $res);
	$result_usuario = "INSERT INTO entrega(id, cep, estado, bairro, pontoref, cidade, endereco, numcasa) VALUES (null, '$cep', '$estado', '$bairro', '$pontoref', '$cidade', '$endereco', '$numcasa')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	if($resultado_usuario>=1){
		
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=concluir-compra.php'>
		<meta charset='UTF-8'>
			<script type=\"text/javascript\">
				alert(\"DALEE\");
			</script>
		";
		}else{
			 echo "
				 <meta charset='UTF-8'>
				<script type=\"text/javascript\">
					alert(\"ALGO DEU RUIM\");
				</script>
			 ";
		} 
?>