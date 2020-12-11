<?php
	
    include_once("conect.php");
	require "verifica.php"; 

	$email = $_SESSION["email"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $colecao = $_POST["colecao"];
    $editora = $_POST["editora"];
    $ano = $_POST["ano"];
	$idioma = $_POST["idioma"];
	$genero = $_POST["genero"];
    $encadernacao = $_POST["encadernacao"];
    $paginas = $_POST["paginas"];
    $altura = $_POST["altura"];
    $largura = $_POST["largura"];
    $descricao = $_POST["descricao"];
    $conservacao = $_POST["conservacao"];
    $preco = $_POST["preco"];
    

    //----------------------------------------------
    	
		$foto1 = $_FILES["foto1"];
	    $foto2 = $_FILES["foto2"];
	    $foto3 = $_FILES["foto3"];
	 
	    // Tamanho máximo do arquivo (em Bytes)
	    $tamanhoPermitido = 1024 * 1024 * 1024;
	 
	    //Define o diretorio para onde enviaremos o arquivo
	    $dir = "livros/";
	 
	    // verifica se arquivo foi enviado e sem erros
	    if( $foto1['error'] == UPLOAD_ERR_OK || $foto2['error'] == UPLOAD_ERR_OK || $foto3['error'] == UPLOAD_ERR_OK ){
	 
	        // pego a extensão do arquivo
	        //$extensao = extensao($arquivo['name']);
	        $ext1 = ltrim( substr($foto1['name'], strrpos($foto1['name'], '.' ) ), '.' );
	        $ext2 = ltrim( substr($foto2['name'], strrpos($foto2['name'], '.' ) ), '.' );
	        $ext3 = ltrim( substr($foto3['name'], strrpos($foto3['name'], '.' ) ), '.' );
	 
	        // valida a extensão - Qualquer extensão é válida!
	        if( in_array( $ext1, array("jpg","jpeg","png") ) && in_array( $ext2, array("jpg","jpeg","png") ) && in_array( $ext3, array("jpg","jpeg","png") ) ){
	 
	            // verifica tamanho do arquivo
	            if ( $foto1['size'] > $tamanhoPermitido && $foto2['size'] > $tamanhoPermitido && $foto3['size'] > $tamanhoPermitido ){
	 
	                echo "Aviso! O arquivo enviado é muito grande, envie arquivos de até 134MB";
	                $class = "alert-warning";
	 
	            }else{
	 
	                // atribui novo nome ao arquivo
	                $novo_nome1  = time().".".$ext1;
	                $novo_nome2  = time().".".$ext2;
	                $novo_nome3  = time().".".$ext3;
	 
	                // faz o upload
	                $env1 = move_uploaded_file($foto1["tmp_name"], "$dir/". $foto1["name"]);
	                $env2 = move_uploaded_file($foto2["tmp_name"], "$dir/". $foto2["name"]);
	                $env3 = move_uploaded_file($foto3["tmp_name"], "$dir/". $foto3["name"]);
	                $path1 = "$dir/".$foto1["name"]."";
	                $path2 = "$dir/".$foto2["name"]."";
	                $path3 = "$dir/".$foto3["name"]."";
	            }
	 
	        }
	 
	    }
    //-----------------------------------------------------------------------------------
    $res_us = "INSERT INTO livro(id, titulo, autor, colecao, editora, ano, idioma, genero, encadernacao, paginas, altura, largura, descricao, conservacao, preco, foto1, foto2, foto3, email) VALUES (null, '$titulo', '$autor', '$colecao', '$editora', '$ano', '$idioma', '$genero', '$encadernacao', '$paginas', '$altura', '$largura', '$descricao', '$conservacao', '$preco', '$path1', '$path2', '$path3', '$email')";
	//$res_us = "INSERT INTO exibir(id, extitulo, exautor, exfoto1) VALUES (null,'$titulo','$autor','$path1')";

	$resultado = mysqli_query($conn, $res_us);

	if(mysqli_affected_rows($conn) != 0){
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=venderlivro.php'>
				<meta charset='UTF-8'>
					<script type=\"text/javascript\">
						alert(\"Adicionado com sucesso!\");
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