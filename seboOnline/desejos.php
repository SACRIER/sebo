<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Lista de desejos - Sebo Online</title>
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

							<!-- Logo -->
								<a href="principal.php" class="logo">
									<span class="symbol"><img src="images/logomini.png" alt="" /></span><span class="title">DESEJOS</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
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
				<div  class="container " style="background-color: white;">
			<div class="table" >
						<?php
						include_once('conect.php');
				
						

						
						//procurando itens no carrinho!
						$select = ("SELECT * FROM desejo");
						$result = $conn->query($select);
						

						if ($result->num_rows > 0) 
						{   
							//resultado
							
							while($row = $result->fetch_assoc()) 
							{
								$id="".$row["id"]."";
								$titulo = "".$row["titulo"]."";
								$autor = "".$row["autor"]."";
								$idioma = "".$row["idioma"]."";
								$preco = "".$row["preco"]."";
								
								//echo $codigo;
								//echo $item;
								//echo $quantidade;
							//comecando a lista
							
								$select2 = ("SELECT * FROM livro WHERE id = '$id'");
								$result2 = $conn->query($select2);
								//echo $result2->num_rows; 
								if ($result2->num_rows > 0) 
								{   
									while($row = $result2->fetch_assoc()) 
									{
										$id = "".$row['id']."";
										$titulo = "".$row['titulo']."";
										$autor = "".$row['autor']."";
										$idioma = "".$row['idioma']."";
										$preco = "".$row['preco']."";
										$preco = round($preco,2);
										$preco = number_format($preco, 2,',','.');
										
											echo "								

												<div class='table-wrapper' vertical-align=middle>
													<table class='alt'>
													<table>
														<thead>
															<tr>
																<th>Titulo</th>
																<th>Autor</th>
																<th>Idioma</th>
																<th>Preço</th>
															
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><a  href='livro.php?id=$id' ><i class='fa fa-book' aria-hidden='true'></i> $titulo </b></a></td>
																<td>$autor</td>
																<td>$idioma</td>
																<td>$preco</td>
																
																<td ><a  href='deletedesejo.php?id=$id' ><i class='fas fa-shopping-cart'></i> Excluir </b></a></td';
															</tr>
														</tbody>
														</table>
												</div>  
											
											";
										}

									}
							// fim da lista


								}
							}
							else{
								echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=principal.php'>
								<meta charset='UTF-8'>
									<script type=\"text/javascript\">
										alert(\"A LISTA ESTA VAZIA\");
									</script>
									";
								echo "<script type='text/javascript'>history.go(-1)</script>";
							}

							


							mysqli_close($conn);
							?>






						</tbody>
					</table>


				</div>

		
				
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2><center>Siga-nos nas redes sociais</center></h2>
								<ul class="icons">
									<center>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									</center>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Sebo Online. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>