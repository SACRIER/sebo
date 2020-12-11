<?php
//require ("verifica.php"); 

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Livro - Sebo Online</title>
		<div class="logo">
			<a href="principal.php"><img src="images/logo.png" img src="images/logo.png" width="300" height="200" alt=""/></a>
		</div>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Nav -->
								<nav>
									<ul>
									<li>
										<?php 
											//echo "<b>Olá, </b>".$_SESSION['login']." |  "; 
										?>
									</li>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="principal.php">Itens à venda</a></li>
							<li><a href="livrosusuario.php">Meus livros</a></li>
							<li><a href="desejos.php">Lista de Desejos</a></li>
							<li><a href="historicopedidos.php">Histórico de pedidos</a></li>
							<li><a href="vendasusuario.php">Minhas vendas</a></li>
							<li><a href="destroy.php">Sair</a></li>
						</ul>
					</nav>

				<!-- Main -->
				<div id="main">
						<div class="inner">
						<h1>Adquira já o seu livro</h1>
						<?php
						
					include_once("conect.php");
					require "verifica.php";
					$id = $_GET["id"];
					$sql = "SELECT * FROM livro WHERE id = '$id'";
					$res = mysqli_query($conn, $sql);
					while ($dados=mysqli_fetch_array($res)) {
						
						$titulo = $dados["titulo"];
						$autor = $dados["autor"];
						$colecao = $dados["colecao"];
						$editora = $dados["editora"];
						$ano = $dados["ano"];
						$idioma = $dados["idioma"];
						$genero = $dados["genero"];
						$encadernacao = $dados["encadernacao"];
						$paginas = $dados["paginas"];
						$altura = $dados["altura"];
						$largura = $dados["largura"];
						$descricao = $dados["descricao"];
						$conservacao = $dados["conservacao"];
						$preco = $dados["preco"];
						$preco = round($preco,2);
						$preco = number_format($preco, 2,',','.');
						$foto1 = $dados["foto1"];
						$foto2 = $dados["foto2"];
						$foto3 = $dados["foto3"];
						$email = $dados["email"];
						
					}

					echo "
						<h1>$titulo</h1>
							<form method='POST' action='adddesejo.php'>
                                    <div class='table-wrapper' vertical-align=middle>
										<table class='alt'>
										<table cellspacing='10' cellpadding='10' border='3'>
											<tr>
													<th><center>Gênero: $genero</center></th>
											</tr>
											<tr>
 										   <td>
 										   <center>
 										   <img src='$foto2' width='200' height='300' title='$titulo' alt=''>
 										   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 										   <img src='$foto1' width='300' height='400' title='Capa do livro $titulo' alt=''>
 										   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 										   <img src='$foto3' width='200' height='300' title='$titulo' alt=''>
 										   <center>
 										   </td>
											</tr>
											<table>
											<thead>
												<tr>
													<th>Descrição</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>$descricao</td>
												</tr>
											</tbody>	
										</table>
										<table>
											<thead>
												<tr>
													<th>Autor</th>
													<th>Coleção</th>
													<th>Editora</th>
													<th>Encadernação</th>
													<th>Paginas</th>
													<th>Ano</th>
													<th>Largura</th>
													<th>Altura</th>
													<th>Idioma</th>
													<th>Gênero</th>
													<th>Preço</th>
													<th>Publicador</th>
												
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>$autor</td>
													<td>$colecao</td>
													<td>$editora</td>
													<td>$encadernacao</td>
													<td>$paginas</td>
													<td>$ano</td>
													<td>$largura</td>
													<td>$altura</td>
													<td>$idioma</td>
													<td>$genero</td>
													<td>$preco</td>
													<td>$email</td>
												
												</tr>
											</tbody>
											</table>
											<table>
											<thead>
												<tr>
													<th>Conservação</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>$conservacao</td>
												</tr>
											</tbody>	
										</table>
                                    </div>  
								</section> 
								</table>
								</center>
								</center>
								</td>
								</tr>
								</table>
								</table>
								<ul class='actions'>
							<li><a href='compraragora.php?id=$id' class='button primary fit'>Comprar agora</a></li>
                            <li><a href='adddesejo.php?id=$id' class='button fit small'>Adicionar à lista de desejos</a></li>
							<li><a href='addcarrinho.php?id=$id' class='button primary fit small'>Adicionar ao carrinho</a></li>
							<li><a href='denuncia.php?id=$id' class='button fit small'>Denúnciar</a></li>
							
							
								</ul>
								</form>
								
								
								
								
								";
						
							?>
						</div>
						</div>
					</div> 
				<!-- Footer -->
				<?php
							include_once("conect.php");

							$id = $_REQUEST["id"];
							$sql = "SELECT * FROM comentarios WHERE id2 = '$id'";
							$res = mysqli_query($conn, $sql);
							while ($dados=mysqli_fetch_array($res)) {
								$comentario_id = $dados["id"];
								$email = $dados["email"];
								$quando = $dados["quando"];
								$comentario = $dados["comentario"];

								echo "
											<input type='hidden' name='id' value='$id'>
						                    <label><b>E-mail:</b></label>
						                    <input type='email' value='$email' id='email' name='email' disabled='disabled' />
						                    <label><b>Data:</b></label>
                                            <input type='text' value='$quando' id='data' name='data' disabled='disabled' />
                                            <label><b>Comentário: </b></label>
						                    <input type='text' value='$comentario' id='comentario' name='comentario' maxlength='255' disabled='disabled' />
								
											";
							}
							echo "<ul class='actions'>
						
							<a href='comentario.php?id2=$id' class='button fit small'>Comentar</a>
							</ul>";
								?>
							<!--	<form method='POST' action='addcomentario.php'>
								<div id='col2'>
								
								        
								<br><br><b>Descrição:</b>
								
								<textarea placeholder='Faça um comentário' value= 'comentario' name='comentario' id='comentario' maxlength='255'></textarea>
								
								<ul class='actions'>
	                            <input type='hidden' name='operacao' value='alterar'>
	                            <br><li><a href='addcomentario.php?id=$id' class='button fit small'>Denúnciar</a></li>
	                             </ul>
								</div>
								</form>-->
							

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>