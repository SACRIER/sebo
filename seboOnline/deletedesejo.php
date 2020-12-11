



<?php 
$id = $_GET["id"];



	include_once('conect.php');


		//$sql = "UPDATE carrinho SET quantidade = '$quantidade' where id = $id ";
		$sql = "DELETE FROM desejo WHERE id = '$id'";

		if ($conn->query($sql) === TRUE) {    
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=desejos.php'>
			<meta charset='UTF-8'>
				<script type=\"text/javascript\">
					alert(\"ITEM EXCLUIDASSO MEU PARCEIRO\");
				</script>
				";
			//echo "<script type='text/javascript'>history.go(-1);</script>";
		} else {
			echo "<script type='text/javascript'> alert('Ops, alguma coisa está errada.');history.go(-1);</script>" . $sql . "<br>" . $conn->error;
		}

	


	






?>