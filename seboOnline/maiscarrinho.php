

<?php 
$item = $_GET["codigo"];
$quantidade = $_GET["quantidade"];

	

	include_once('conect.php');

	$select = ("select * from carrinho where item='$item'");
	$result = $conn->query($select);

	if ($result->num_rows == 0) 
	{   
		$sql = "INSERT INTO carrinho (item, quantidade) VALUES ('$item','$quantidade')";
//relatorio
		if ($conn->query($sql) === TRUE) {    
			echo "<script type='text/javascript'> alert('Item Adicionado ao Carrinho!');history.go(-1);</script>";
		} 
		else {
			echo "<script type='text/javascript'> alert('Algo errado não está certo!');history.go(-1);</script>" . $sql . "<br>" . $conn->error;
		}
	}else {


		$select = ("select * from carrinho where item='$item'");
		$result = $conn->query($select);

		if ($result->num_rows > 0) 
		{   
			while($row = $result->fetch_assoc()) 
			{
				$quantidade = " ".$row['quantidade']."";
				$id = " ".$row['id']."";
			}
		} 

		if ($quantidade>=20) {
			echo "<script type='text/javascript'> alert('Limite Excencido!');history.go(-1);</script>";
		}else{

		$quantidade = $quantidade + 1;
		$sql = "UPDATE carrinho SET quantidade = '$quantidade' where id = $id ";

		if ($conn->query($sql) === TRUE) {    
			//echo "<script type='text/javascript'> alert('Item Atualizado!');history.go(-1);</script>";
			echo "<script type='text/javascript'>history.go(-1);</script>";
		} else {
			echo "<script type='text/javascript'> alert('Algo errado não está certo!');history.go(-1);</script>" . $sql . "<br>" . $conn->error;
		}

		}

	}


	






?>