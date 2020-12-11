<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Minhas Vendas - Sebo Online</title>
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
								<a href="vendasusuario.php" class="logo">
									<span class="symbol"><img src="images/logomini.png" alt="" /></span><span class="title">Veja suas vendas abaixo</span>
								</a>
								<br>
								<form method="POST" action="pesquisar-pedido.php">
									<input type="text" name="pesquisar" placeholder="Pesquise por sua venda">
									<input type="submit" value="Pesquisar">
								</form>

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
					
						<!-- Table -->
						<section>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Nº do pedido</th>
											<th>Produto(s)</th>
											<th>Total recebido</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Suas vendas aparecerão aqui ^^</td>
											<td>E aqui tbm</td>
											<td>E AQUI :)</td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</section>
						</div>
					</div>

                <!-- Footer -->
				<footer id=footer>
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