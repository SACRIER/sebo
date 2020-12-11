

<?php 



	
	include_once('conect.php');

	$carrinho_id = $_GET["id"];
	//$titulo = $_GET["titulo"];
	//$preco = $_GET["preco"];


	$select = ("SELECT * FROM carrinho WHERE id='$carrinho_id'");
	$result = $conn->query($select);

	if ($result->num_rows == 0) 
	{   
		

		$sql = "INSERT INTO carrinho (id, titulo, preco) VALUES ('$carrinho_id', '$titulo', '$preco')";
//relatorio
		if ($conn->query($sql) === TRUE) {    
			echo "<script type='text/javascript'> alert('O produto foi enviado para o carrinho de orçamento :)');history.go(-1);</script>";
		} 
		else {
			echo "<script type='text/javascript'> alert('Ops, ocorreu algum erro e o produto não foi enviado para o seu orçamento :(');history.go(-1);</script>" . $sql . "<br>" . $conn->error;
		}
	}else {


			$select = ("SELECT * FROM carrinho WHERE id='$carrinho_id'");
			$result = $conn->query($select);

			if ($result->num_rows > 0) 
			{   
				while($row = $result->fetch_assoc()) 
				{
					echo  "<script type='text/javascript'> alert('O item ja foi adicionado:)');history.go(-1);</script>";
					$carrinho_id = "".$row["id"]."";
					
				}
			} 

	

	}


	






?>