<?php
require "verifica.php";
?>

<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Meus livros - Sebo Online</title>
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
								<a href="livrosusuario.php" class="logo">
									<span class="symbol"><img src="images/logomini.png" alt="" /></span><span class="title">Meus livros no sebo</span>
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
							<li><a href="principal.html">Sair</a></li>
						</ul>
					</nav>

				<!-- Main -->
				<div id="main">
						<div class="inner">                            
                            <h3>Meu catálogo</h3>
									<div class="table-wrapper">
									<?php
							include_once("conect.php");
							$email = $_SESSION["email"];
							$sql = "SELECT * FROM livro WHERE email = '$email'";
							$res = mysqli_query($conn, $sql);
							while ($dados=mysqli_fetch_array($res)) {
								$email = $dados["email"];
							$titulo = $dados["titulo"];
							$autor = $dados["autor"];
							$genero = $dados["genero"];
							$idioma = $dados["idioma"];
							$preco = $dados["preco"];
							$preco = round($preco,2);
							$preco = number_format($preco, 2,',','.');
							

								echo "
									<div class='table-wrapper'>
									<table class='alt'>
											<thead>
												<tr>
													<th>Titulo</th>
													<th>Autor</th>
													<th>Gênero</th>
                                                    <th>Idioma</th>
                                                    <th>Preço</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>$titulo</td>
													<td>$autor</td>
													<td>$genero</td>
                                                    <td>$idioma</td>
                                                    <td>$preco</td>
                                                    
												</tr>
											</tbody>
										</table>
                                                          

									</div>                           
								</section>
								";
							}
                                ?>
							</div>
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